<?php

declare(strict_types=1);

namespace Scheb\TwoFactorBundle\Security\Authentication\RememberMe;

use Scheb\TwoFactorBundle\Security\Authentication\Token\TwoFactorTokenInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Logout\LogoutHandlerInterface;
use Symfony\Component\Security\Http\RememberMe\RememberMeServicesInterface;

class RememberMeServicesDecorator implements RememberMeServicesInterface, LogoutHandlerInterface
{
    /**
     * @var RememberMeServicesInterface&LogoutHandlerInterface
     */
    private $decoratedRememberMeServices;

    /**
     * @param RememberMeServicesInterface&LogoutHandlerInterface $decoratedRememberMeServices
     */
    public function __construct($decoratedRememberMeServices)
    {
        $this->decoratedRememberMeServices = $decoratedRememberMeServices;
    }

    /**
     * @return void
     */
    public function loginSuccess(Request $request, Response $response, TokenInterface $token)
    {
        if ($token instanceof TwoFactorTokenInterface) {
            // Create a fake response to capture the remember-me cookie but not let it leak to the real response.
            $cookieCaptureResponse = new Response();
            $this->decoratedRememberMeServices->loginSuccess($request, $cookieCaptureResponse, $token);
            $rememberMeCookies = $cookieCaptureResponse->headers->getCookies();
            $token->setAttribute(TwoFactorTokenInterface::ATTRIBUTE_NAME_REMEMBER_ME_COOKIE, $rememberMeCookies);
        } else {
            // Not a TwoFactorToken => default behaviour
            $this->decoratedRememberMeServices->loginSuccess($request, $response, $token);
        }
    }

    /**
     * @return TokenInterface|null
     */
    public function autoLogin(Request $request)
    {
        return $this->decoratedRememberMeServices->autoLogin($request);
    }

    /**
     * @return void
     */
    public function loginFail(Request $request, \Exception $exception = null)
    {
        $this->decoratedRememberMeServices->loginFail($request, $exception);
    }

    /**
     * @return void
     */
    public function logout(Request $request, Response $response, TokenInterface $token)
    {
        $this->decoratedRememberMeServices->logout($request, $response, $token);
    }

    /**
     * @return mixed
     */
    public function __call(string $method, array $arguments)
    {
        return ($this->decoratedRememberMeServices)->{$method}(...$arguments);
    }
}
