<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/common.proto

namespace Google\Cloud\Gaming\V1\TargetDetails;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of the target Agones fleet.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1.TargetDetails.TargetFleetDetails</code>
 */
class TargetFleetDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Reference to target Agones fleet.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.TargetDetails.TargetFleetDetails.TargetFleet fleet = 1;</code>
     */
    private $fleet = null;
    /**
     * Reference to target Agones fleet autoscaling policy.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.TargetDetails.TargetFleetDetails.TargetFleetAutoscaler autoscaler = 2;</code>
     */
    private $autoscaler = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Gaming\V1\TargetDetails\TargetFleetDetails\TargetFleet $fleet
     *           Reference to target Agones fleet.
     *     @type \Google\Cloud\Gaming\V1\TargetDetails\TargetFleetDetails\TargetFleetAutoscaler $autoscaler
     *           Reference to target Agones fleet autoscaling policy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Reference to target Agones fleet.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.TargetDetails.TargetFleetDetails.TargetFleet fleet = 1;</code>
     * @return \Google\Cloud\Gaming\V1\TargetDetails\TargetFleetDetails\TargetFleet|null
     */
    public function getFleet()
    {
        return isset($this->fleet) ? $this->fleet : null;
    }

    public function hasFleet()
    {
        return isset($this->fleet);
    }

    public function clearFleet()
    {
        unset($this->fleet);
    }

    /**
     * Reference to target Agones fleet.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.TargetDetails.TargetFleetDetails.TargetFleet fleet = 1;</code>
     * @param \Google\Cloud\Gaming\V1\TargetDetails\TargetFleetDetails\TargetFleet $var
     * @return $this
     */
    public function setFleet($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Gaming\V1\TargetDetails\TargetFleetDetails\TargetFleet::class);
        $this->fleet = $var;

        return $this;
    }

    /**
     * Reference to target Agones fleet autoscaling policy.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.TargetDetails.TargetFleetDetails.TargetFleetAutoscaler autoscaler = 2;</code>
     * @return \Google\Cloud\Gaming\V1\TargetDetails\TargetFleetDetails\TargetFleetAutoscaler|null
     */
    public function getAutoscaler()
    {
        return isset($this->autoscaler) ? $this->autoscaler : null;
    }

    public function hasAutoscaler()
    {
        return isset($this->autoscaler);
    }

    public function clearAutoscaler()
    {
        unset($this->autoscaler);
    }

    /**
     * Reference to target Agones fleet autoscaling policy.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.TargetDetails.TargetFleetDetails.TargetFleetAutoscaler autoscaler = 2;</code>
     * @param \Google\Cloud\Gaming\V1\TargetDetails\TargetFleetDetails\TargetFleetAutoscaler $var
     * @return $this
     */
    public function setAutoscaler($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Gaming\V1\TargetDetails\TargetFleetDetails\TargetFleetAutoscaler::class);
        $this->autoscaler = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TargetFleetDetails::class, \Google\Cloud\Gaming\V1\TargetDetails_TargetFleetDetails::class);
