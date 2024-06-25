<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/common.proto

namespace Chirpstack\Common;

use UnexpectedValueException;

/**
 * Protobuf type <code>common.Regulation</code>
 */
class Regulation
{
    /**
     * Unknown.
     *
     * Generated from protobuf enum <code>REGULATION_UNKNOWN = 0;</code>
     */
    const REGULATION_UNKNOWN = 0;
    /**
     * ETSI EN 300 220.
     *
     * Generated from protobuf enum <code>ETSI_EN_300_220 = 1;</code>
     */
    const ETSI_EN_300_220 = 1;

    private static $valueToName = [
        self::REGULATION_UNKNOWN => 'REGULATION_UNKNOWN',
        self::ETSI_EN_300_220 => 'ETSI_EN_300_220',
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

