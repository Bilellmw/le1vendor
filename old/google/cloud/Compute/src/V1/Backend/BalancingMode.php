<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Backend;

use UnexpectedValueException;

/**
 * Specifies how to determine whether the backend of a load balancer can handle additional traffic or is fully loaded. For usage guidelines, see  Connection balancing mode.
 *
 * Protobuf type <code>google.cloud.compute.v1.Backend.BalancingMode</code>
 */
class BalancingMode
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_BALANCING_MODE = 0;</code>
     */
    const UNDEFINED_BALANCING_MODE = 0;
    /**
     * Generated from protobuf enum <code>CONNECTION = 246311646;</code>
     */
    const CONNECTION = 246311646;
    /**
     * Generated from protobuf enum <code>RATE = 2508000;</code>
     */
    const RATE = 2508000;
    /**
     * Generated from protobuf enum <code>UTILIZATION = 157008386;</code>
     */
    const UTILIZATION = 157008386;

    private static $valueToName = [
        self::UNDEFINED_BALANCING_MODE => 'UNDEFINED_BALANCING_MODE',
        self::CONNECTION => 'CONNECTION',
        self::RATE => 'RATE',
        self::UTILIZATION => 'UTILIZATION',
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

