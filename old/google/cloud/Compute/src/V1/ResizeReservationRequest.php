<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for Reservations.Resize. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ResizeReservationRequest</code>
 */
class ResizeReservationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     * For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 37109963;</code>
     */
    private $request_id = null;
    /**
     * Name of the reservation to update.
     *
     * Generated from protobuf field <code>string reservation = 47530956 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $reservation = '';
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ReservationsResizeRequest reservations_resize_request_resource = 389262801 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $reservations_resize_request_resource = null;
    /**
     * Name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $zone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *           Project ID for this request.
     *     @type string $request_id
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     *           For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *     @type string $reservation
     *           Name of the reservation to update.
     *     @type \Google\Cloud\Compute\V1\ReservationsResizeRequest $reservations_resize_request_resource
     *           The body resource for this request
     *     @type string $zone
     *           Name of the zone for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     * For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 37109963;</code>
     * @return string
     */
    public function getRequestId()
    {
        return isset($this->request_id) ? $this->request_id : '';
    }

    public function hasRequestId()
    {
        return isset($this->request_id);
    }

    public function clearRequestId()
    {
        unset($this->request_id);
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     * For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 37109963;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Name of the reservation to update.
     *
     * Generated from protobuf field <code>string reservation = 47530956 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Name of the reservation to update.
     *
     * Generated from protobuf field <code>string reservation = 47530956 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setReservation($var)
    {
        GPBUtil::checkString($var, True);
        $this->reservation = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ReservationsResizeRequest reservations_resize_request_resource = 389262801 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\ReservationsResizeRequest|null
     */
    public function getReservationsResizeRequestResource()
    {
        return isset($this->reservations_resize_request_resource) ? $this->reservations_resize_request_resource : null;
    }

    public function hasReservationsResizeRequestResource()
    {
        return isset($this->reservations_resize_request_resource);
    }

    public function clearReservationsResizeRequestResource()
    {
        unset($this->reservations_resize_request_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ReservationsResizeRequest reservations_resize_request_resource = 389262801 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\ReservationsResizeRequest $var
     * @return $this
     */
    public function setReservationsResizeRequestResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ReservationsResizeRequest::class);
        $this->reservations_resize_request_resource = $var;

        return $this;
    }

    /**
     * Name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

