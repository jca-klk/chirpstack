<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/device.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.DeleteDeviceKeysRequest</code>
 */
class DeleteDeviceKeysRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * DevEUI (EUI64).
     *
     * Generated from protobuf field <code>string dev_eui = 1;</code>
     */
    protected $dev_eui = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dev_eui
     *           DevEUI (EUI64).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * DevEUI (EUI64).
     *
     * Generated from protobuf field <code>string dev_eui = 1;</code>
     * @return string
     */
    public function getDevEui()
    {
        return $this->dev_eui;
    }

    /**
     * DevEUI (EUI64).
     *
     * Generated from protobuf field <code>string dev_eui = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDevEui($var)
    {
        GPBUtil::checkString($var, True);
        $this->dev_eui = $var;

        return $this;
    }

}

