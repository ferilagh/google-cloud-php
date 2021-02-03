<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NodeTemplateNodeTypeFlexibility</code>
 */
class NodeTemplateNodeTypeFlexibility extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string cpus = 3060683;</code>
     */
    private $cpus = '';
    /**
     * Generated from protobuf field <code>string local_ssd = 137305904;</code>
     */
    private $local_ssd = '';
    /**
     * Generated from protobuf field <code>string memory = 264420609;</code>
     */
    private $memory = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cpus
     *     @type string $local_ssd
     *     @type string $memory
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string cpus = 3060683;</code>
     * @return string
     */
    public function getCpus()
    {
        return $this->cpus;
    }

    /**
     * Generated from protobuf field <code>string cpus = 3060683;</code>
     * @param string $var
     * @return $this
     */
    public function setCpus($var)
    {
        GPBUtil::checkString($var, True);
        $this->cpus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string local_ssd = 137305904;</code>
     * @return string
     */
    public function getLocalSsd()
    {
        return $this->local_ssd;
    }

    /**
     * Generated from protobuf field <code>string local_ssd = 137305904;</code>
     * @param string $var
     * @return $this
     */
    public function setLocalSsd($var)
    {
        GPBUtil::checkString($var, True);
        $this->local_ssd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string memory = 264420609;</code>
     * @return string
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * Generated from protobuf field <code>string memory = 264420609;</code>
     * @param string $var
     * @return $this
     */
    public function setMemory($var)
    {
        GPBUtil::checkString($var, True);
        $this->memory = $var;

        return $this;
    }

}
