<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/common.proto

namespace Chirpstack\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>common.Metric</code>
 */
class Metric extends \Google\Protobuf\Internal\Message
{
    /**
     * Name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Timestamps.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Timestamp timestamps = 2;</code>
     */
    private $timestamps;
    /**
     * Datasets.
     *
     * Generated from protobuf field <code>repeated .common.MetricDataset datasets = 3;</code>
     */
    private $datasets;
    /**
     * Kind.
     *
     * Generated from protobuf field <code>.common.MetricKind kind = 4;</code>
     */
    protected $kind = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name.
     *     @type array<\Google\Protobuf\Timestamp>|\Google\Protobuf\Internal\RepeatedField $timestamps
     *           Timestamps.
     *     @type array<\Chirpstack\Common\MetricDataset>|\Google\Protobuf\Internal\RepeatedField $datasets
     *           Datasets.
     *     @type int $kind
     *           Kind.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Common\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Timestamps.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Timestamp timestamps = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTimestamps()
    {
        return $this->timestamps;
    }

    /**
     * Timestamps.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Timestamp timestamps = 2;</code>
     * @param array<\Google\Protobuf\Timestamp>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTimestamps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Timestamp::class);
        $this->timestamps = $arr;

        return $this;
    }

    /**
     * Datasets.
     *
     * Generated from protobuf field <code>repeated .common.MetricDataset datasets = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDatasets()
    {
        return $this->datasets;
    }

    /**
     * Datasets.
     *
     * Generated from protobuf field <code>repeated .common.MetricDataset datasets = 3;</code>
     * @param array<\Chirpstack\Common\MetricDataset>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDatasets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Chirpstack\Common\MetricDataset::class);
        $this->datasets = $arr;

        return $this;
    }

    /**
     * Kind.
     *
     * Generated from protobuf field <code>.common.MetricKind kind = 4;</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Kind.
     *
     * Generated from protobuf field <code>.common.MetricKind kind = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Chirpstack\Common\MetricKind::class);
        $this->kind = $var;

        return $this;
    }

}

