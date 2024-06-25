<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/gateway.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.GenerateGatewayClientCertificateResponse</code>
 */
class GenerateGatewayClientCertificateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * TLS certificate.
     *
     * Generated from protobuf field <code>string tls_cert = 1;</code>
     */
    protected $tls_cert = '';
    /**
     * TLS key.
     *
     * Generated from protobuf field <code>string tls_key = 2;</code>
     */
    protected $tls_key = '';
    /**
     * CA certificate.
     *
     * Generated from protobuf field <code>string ca_cert = 3;</code>
     */
    protected $ca_cert = '';
    /**
     * Expires at defines the expiration date of the certificate.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expires_at = 4;</code>
     */
    protected $expires_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tls_cert
     *           TLS certificate.
     *     @type string $tls_key
     *           TLS key.
     *     @type string $ca_cert
     *           CA certificate.
     *     @type \Google\Protobuf\Timestamp $expires_at
     *           Expires at defines the expiration date of the certificate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * TLS certificate.
     *
     * Generated from protobuf field <code>string tls_cert = 1;</code>
     * @return string
     */
    public function getTlsCert()
    {
        return $this->tls_cert;
    }

    /**
     * TLS certificate.
     *
     * Generated from protobuf field <code>string tls_cert = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTlsCert($var)
    {
        GPBUtil::checkString($var, True);
        $this->tls_cert = $var;

        return $this;
    }

    /**
     * TLS key.
     *
     * Generated from protobuf field <code>string tls_key = 2;</code>
     * @return string
     */
    public function getTlsKey()
    {
        return $this->tls_key;
    }

    /**
     * TLS key.
     *
     * Generated from protobuf field <code>string tls_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTlsKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->tls_key = $var;

        return $this;
    }

    /**
     * CA certificate.
     *
     * Generated from protobuf field <code>string ca_cert = 3;</code>
     * @return string
     */
    public function getCaCert()
    {
        return $this->ca_cert;
    }

    /**
     * CA certificate.
     *
     * Generated from protobuf field <code>string ca_cert = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCaCert($var)
    {
        GPBUtil::checkString($var, True);
        $this->ca_cert = $var;

        return $this;
    }

    /**
     * Expires at defines the expiration date of the certificate.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expires_at = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }

    public function hasExpiresAt()
    {
        return isset($this->expires_at);
    }

    public function clearExpiresAt()
    {
        unset($this->expires_at);
    }

    /**
     * Expires at defines the expiration date of the certificate.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expires_at = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpiresAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expires_at = $var;

        return $this;
    }

}

