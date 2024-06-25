<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/common.proto

namespace Chirpstack\Common;

use UnexpectedValueException;

/**
 * Protobuf type <code>common.MetricKind</code>
 */
class MetricKind
{
    /**
     * Incrementing counters that never decrease (these are not reset on each
     * reading).
     *
     * Generated from protobuf enum <code>COUNTER = 0;</code>
     */
    const COUNTER = 0;
    /**
     * Counters that do get reset upon reading.
     *
     * Generated from protobuf enum <code>ABSOLUTE = 1;</code>
     */
    const ABSOLUTE = 1;
    /**
     * E.g. a temperature value.
     *
     * Generated from protobuf enum <code>GAUGE = 2;</code>
     */
    const GAUGE = 2;

    private static $valueToName = [
        self::COUNTER => 'COUNTER',
        self::ABSOLUTE => 'ABSOLUTE',
        self::GAUGE => 'GAUGE',
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

