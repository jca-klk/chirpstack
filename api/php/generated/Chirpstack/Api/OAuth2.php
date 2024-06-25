<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/internal.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.OAuth2</code>
 */
class OAuth2 extends \Google\Protobuf\Internal\Message
{
    /**
     * OAuth2 is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     */
    protected $enabled = false;
    /**
     * Login url.
     *
     * Generated from protobuf field <code>string login_url = 2;</code>
     */
    protected $login_url = '';
    /**
     * Login label.
     *
     * Generated from protobuf field <code>string login_label = 3;</code>
     */
    protected $login_label = '';
    /**
     * Logout url.
     *
     * Generated from protobuf field <code>string logout_url = 4;</code>
     */
    protected $logout_url = '';
    /**
     * Login redirect.
     *
     * Generated from protobuf field <code>bool login_redirect = 5;</code>
     */
    protected $login_redirect = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *           OAuth2 is enabled.
     *     @type string $login_url
     *           Login url.
     *     @type string $login_label
     *           Login label.
     *     @type string $logout_url
     *           Logout url.
     *     @type bool $login_redirect
     *           Login redirect.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Internal::initOnce();
        parent::__construct($data);
    }

    /**
     * OAuth2 is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * OAuth2 is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Login url.
     *
     * Generated from protobuf field <code>string login_url = 2;</code>
     * @return string
     */
    public function getLoginUrl()
    {
        return $this->login_url;
    }

    /**
     * Login url.
     *
     * Generated from protobuf field <code>string login_url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLoginUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->login_url = $var;

        return $this;
    }

    /**
     * Login label.
     *
     * Generated from protobuf field <code>string login_label = 3;</code>
     * @return string
     */
    public function getLoginLabel()
    {
        return $this->login_label;
    }

    /**
     * Login label.
     *
     * Generated from protobuf field <code>string login_label = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLoginLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->login_label = $var;

        return $this;
    }

    /**
     * Logout url.
     *
     * Generated from protobuf field <code>string logout_url = 4;</code>
     * @return string
     */
    public function getLogoutUrl()
    {
        return $this->logout_url;
    }

    /**
     * Logout url.
     *
     * Generated from protobuf field <code>string logout_url = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLogoutUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->logout_url = $var;

        return $this;
    }

    /**
     * Login redirect.
     *
     * Generated from protobuf field <code>bool login_redirect = 5;</code>
     * @return bool
     */
    public function getLoginRedirect()
    {
        return $this->login_redirect;
    }

    /**
     * Login redirect.
     *
     * Generated from protobuf field <code>bool login_redirect = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setLoginRedirect($var)
    {
        GPBUtil::checkBool($var);
        $this->login_redirect = $var;

        return $this;
    }

}

