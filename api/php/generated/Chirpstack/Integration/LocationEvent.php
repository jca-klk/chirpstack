<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: integration/integration.proto

namespace Chirpstack\Integration;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LocationEvent is the message sent when a geolocation resolve was returned.
 *
 * Generated from protobuf message <code>integration.LocationEvent</code>
 */
class LocationEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Deduplication ID (UUID).
     *
     * Generated from protobuf field <code>string deduplication_id = 1;</code>
     */
    protected $deduplication_id = '';
    /**
     * Timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 2;</code>
     */
    protected $time = null;
    /**
     * Device info.
     *
     * Generated from protobuf field <code>.integration.DeviceInfo device_info = 3;</code>
     */
    protected $device_info = null;
    /**
     * Location.
     *
     * Generated from protobuf field <code>.common.Location location = 4;</code>
     */
    protected $location = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $deduplication_id
     *           Deduplication ID (UUID).
     *     @type \Google\Protobuf\Timestamp $time
     *           Timestamp.
     *     @type \Chirpstack\Integration\DeviceInfo $device_info
     *           Device info.
     *     @type \Chirpstack\Common\Location $location
     *           Location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Integration\Integration::initOnce();
        parent::__construct($data);
    }

    /**
     * Deduplication ID (UUID).
     *
     * Generated from protobuf field <code>string deduplication_id = 1;</code>
     * @return string
     */
    public function getDeduplicationId()
    {
        return $this->deduplication_id;
    }

    /**
     * Deduplication ID (UUID).
     *
     * Generated from protobuf field <code>string deduplication_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDeduplicationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->deduplication_id = $var;

        return $this;
    }

    /**
     * Timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTime()
    {
        return $this->time;
    }

    public function hasTime()
    {
        return isset($this->time);
    }

    public function clearTime()
    {
        unset($this->time);
    }

    /**
     * Timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time = $var;

        return $this;
    }

    /**
     * Device info.
     *
     * Generated from protobuf field <code>.integration.DeviceInfo device_info = 3;</code>
     * @return \Chirpstack\Integration\DeviceInfo|null
     */
    public function getDeviceInfo()
    {
        return $this->device_info;
    }

    public function hasDeviceInfo()
    {
        return isset($this->device_info);
    }

    public function clearDeviceInfo()
    {
        unset($this->device_info);
    }

    /**
     * Device info.
     *
     * Generated from protobuf field <code>.integration.DeviceInfo device_info = 3;</code>
     * @param \Chirpstack\Integration\DeviceInfo $var
     * @return $this
     */
    public function setDeviceInfo($var)
    {
        GPBUtil::checkMessage($var, \Chirpstack\Integration\DeviceInfo::class);
        $this->device_info = $var;

        return $this;
    }

    /**
     * Location.
     *
     * Generated from protobuf field <code>.common.Location location = 4;</code>
     * @return \Chirpstack\Common\Location|null
     */
    public function getLocation()
    {
        return $this->location;
    }

    public function hasLocation()
    {
        return isset($this->location);
    }

    public function clearLocation()
    {
        unset($this->location);
    }

    /**
     * Location.
     *
     * Generated from protobuf field <code>.common.Location location = 4;</code>
     * @param \Chirpstack\Common\Location $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkMessage($var, \Chirpstack\Common\Location::class);
        $this->location = $var;

        return $this;
    }

}

