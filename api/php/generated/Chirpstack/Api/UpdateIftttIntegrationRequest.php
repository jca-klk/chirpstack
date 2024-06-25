<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/application.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.UpdateIftttIntegrationRequest</code>
 */
class UpdateIftttIntegrationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Integration object to update.
     *
     * Generated from protobuf field <code>.api.IftttIntegration integration = 1;</code>
     */
    protected $integration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Chirpstack\Api\IftttIntegration $integration
     *           Integration object to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * Integration object to update.
     *
     * Generated from protobuf field <code>.api.IftttIntegration integration = 1;</code>
     * @return \Chirpstack\Api\IftttIntegration|null
     */
    public function getIntegration()
    {
        return $this->integration;
    }

    public function hasIntegration()
    {
        return isset($this->integration);
    }

    public function clearIntegration()
    {
        unset($this->integration);
    }

    /**
     * Integration object to update.
     *
     * Generated from protobuf field <code>.api.IftttIntegration integration = 1;</code>
     * @param \Chirpstack\Api\IftttIntegration $var
     * @return $this
     */
    public function setIntegration($var)
    {
        GPBUtil::checkMessage($var, \Chirpstack\Api\IftttIntegration::class);
        $this->integration = $var;

        return $this;
    }

}

