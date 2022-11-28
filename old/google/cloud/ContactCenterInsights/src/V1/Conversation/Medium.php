<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1\Conversation;

use UnexpectedValueException;

/**
 * Possible media for the conversation.
 *
 * Protobuf type <code>google.cloud.contactcenterinsights.v1.Conversation.Medium</code>
 */
class Medium
{
    /**
     * Default value, if unspecified will default to PHONE_CALL.
     *
     * Generated from protobuf enum <code>MEDIUM_UNSPECIFIED = 0;</code>
     */
    const MEDIUM_UNSPECIFIED = 0;
    /**
     * The format for conversations that took place over the phone.
     *
     * Generated from protobuf enum <code>PHONE_CALL = 1;</code>
     */
    const PHONE_CALL = 1;
    /**
     * The format for conversations that took place over chat.
     *
     * Generated from protobuf enum <code>CHAT = 2;</code>
     */
    const CHAT = 2;

    private static $valueToName = [
        self::MEDIUM_UNSPECIFIED => 'MEDIUM_UNSPECIFIED',
        self::PHONE_CALL => 'PHONE_CALL',
        self::CHAT => 'CHAT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Medium::class, \Google\Cloud\ContactCenterInsights\V1\Conversation_Medium::class);
