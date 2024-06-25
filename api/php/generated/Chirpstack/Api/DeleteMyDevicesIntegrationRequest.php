<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/application.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.DeleteMyDevicesIntegrationRequest</code>
 */
class DeleteMyDevicesIntegrationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Application ID (UUID).
     *
     * Generated from protobuf field <code>string application_id = 1;</code>
     */
    protected $application_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $application_id
     *           Application ID (UUID).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * Application ID (UUID).
     *
     * Generated from protobuf field <code>string application_id = 1;</code>
     * @return string
     */
    public function getApplicationId()
    {
        return $this->application_id;
    }

    /**
     * Application ID (UUID).
     *
     * Generated from protobuf field <code>string application_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setApplicationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->application_id = $var;

        return $this;
    }

}

