<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/application.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.ListApplicationsRequest</code>
 */
class ListApplicationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Max number of applications to return in the result-set.
     *
     * Generated from protobuf field <code>uint32 limit = 1;</code>
     */
    protected $limit = 0;
    /**
     * Offset in the result-set (for pagination).
     *
     * Generated from protobuf field <code>uint32 offset = 2;</code>
     */
    protected $offset = 0;
    /**
     * If set, the given string will be used to search on name (optional).
     *
     * Generated from protobuf field <code>string search = 3;</code>
     */
    protected $search = '';
    /**
     * Tenant ID to list the applications for.
     *
     * Generated from protobuf field <code>string tenant_id = 4;</code>
     */
    protected $tenant_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $limit
     *           Max number of applications to return in the result-set.
     *     @type int $offset
     *           Offset in the result-set (for pagination).
     *     @type string $search
     *           If set, the given string will be used to search on name (optional).
     *     @type string $tenant_id
     *           Tenant ID to list the applications for.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * Max number of applications to return in the result-set.
     *
     * Generated from protobuf field <code>uint32 limit = 1;</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Max number of applications to return in the result-set.
     *
     * Generated from protobuf field <code>uint32 limit = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * Offset in the result-set (for pagination).
     *
     * Generated from protobuf field <code>uint32 offset = 2;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Offset in the result-set (for pagination).
     *
     * Generated from protobuf field <code>uint32 offset = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkUint32($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * If set, the given string will be used to search on name (optional).
     *
     * Generated from protobuf field <code>string search = 3;</code>
     * @return string
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * If set, the given string will be used to search on name (optional).
     *
     * Generated from protobuf field <code>string search = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSearch($var)
    {
        GPBUtil::checkString($var, True);
        $this->search = $var;

        return $this;
    }

    /**
     * Tenant ID to list the applications for.
     *
     * Generated from protobuf field <code>string tenant_id = 4;</code>
     * @return string
     */
    public function getTenantId()
    {
        return $this->tenant_id;
    }

    /**
     * Tenant ID to list the applications for.
     *
     * Generated from protobuf field <code>string tenant_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTenantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tenant_id = $var;

        return $this;
    }

}

