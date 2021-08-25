<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request passed to GetTransferJob.
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.GetTransferJobRequest</code>
 */
class GetTransferJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required.
     * The job to get.
     *
     * Generated from protobuf field <code>string job_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $job_name = '';
    /**
     * Required. The ID of the Google Cloud Platform Console project that owns the
     * job.
     *
     * Generated from protobuf field <code>string project_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $job_name
     *           Required.
     *           The job to get.
     *     @type string $project_id
     *           Required. The ID of the Google Cloud Platform Console project that owns the
     *           job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\Transfer::initOnce();
        parent::__construct($data);
    }

    /**
     * Required.
     * The job to get.
     *
     * Generated from protobuf field <code>string job_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getJobName()
    {
        return $this->job_name;
    }

    /**
     * Required.
     * The job to get.
     *
     * Generated from protobuf field <code>string job_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setJobName($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_name = $var;

        return $this;
    }

    /**
     * Required. The ID of the Google Cloud Platform Console project that owns the
     * job.
     *
     * Generated from protobuf field <code>string project_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. The ID of the Google Cloud Platform Console project that owns the
     * job.
     *
     * Generated from protobuf field <code>string project_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

}

