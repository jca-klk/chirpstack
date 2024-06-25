<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/application.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.IntegrationListItem</code>
 */
class IntegrationListItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Integration kind.
     *
     * Generated from protobuf field <code>.api.IntegrationKind kind = 1;</code>
     */
    protected $kind = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kind
     *           Integration kind.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * Integration kind.
     *
     * Generated from protobuf field <code>.api.IntegrationKind kind = 1;</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Integration kind.
     *
     * Generated from protobuf field <code>.api.IntegrationKind kind = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Chirpstack\Api\IntegrationKind::class);
        $this->kind = $var;

        return $this;
    }

}

