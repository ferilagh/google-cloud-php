<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/storageinsights/v1/storageinsights.proto

namespace Google\Cloud\StorageInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for getting a ReportDetail
 *
 * Generated from protobuf message <code>google.cloud.storageinsights.v1.GetReportDetailRequest</code>
 */
class GetReportDetailRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the resource
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the resource
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Storageinsights\V1\Storageinsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the resource
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the resource
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

