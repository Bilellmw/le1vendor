<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for BatchGetUserLinks RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.BatchGetUserLinksResponse</code>
 */
class BatchGetUserLinksResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The requested user links.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.UserLink user_links = 1;</code>
     */
    private $user_links;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\UserLink[]|\Google\Protobuf\Internal\RepeatedField $user_links
     *           The requested user links.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The requested user links.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.UserLink user_links = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserLinks()
    {
        return $this->user_links;
    }

    /**
     * The requested user links.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.UserLink user_links = 1;</code>
     * @param \Google\Analytics\Admin\V1alpha\UserLink[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\UserLink::class);
        $this->user_links = $arr;

        return $this;
    }

}

