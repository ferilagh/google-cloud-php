<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/realms.proto

namespace Google\Cloud\Gaming\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A realm resource.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1.Realm</code>
 */
class Realm extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the realm. Uses the form:
     * `projects/{project}/locations/{location}/realms/{realm}`. For
     * example, `projects/my-project/locations/{location}/realms/my-realm`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * The labels associated with this realm. Each label is a key-value pair.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;
    /**
     * Required. Time zone where all policies targeting this realm are evaluated. The value
     * of this field must be from the IANA time zone database:
     * https://www.iana.org/time-zones.
     *
     * Generated from protobuf field <code>string time_zone = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $time_zone = '';
    /**
     * ETag of the resource.
     *
     * Generated from protobuf field <code>string etag = 7;</code>
     */
    private $etag = '';
    /**
     * Human readable description of the realm.
     *
     * Generated from protobuf field <code>string description = 8;</code>
     */
    private $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the realm. Uses the form:
     *           `projects/{project}/locations/{location}/realms/{realm}`. For
     *           example, `projects/my-project/locations/{location}/realms/my-realm`.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The creation time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last-modified time.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The labels associated with this realm. Each label is a key-value pair.
     *     @type string $time_zone
     *           Required. Time zone where all policies targeting this realm are evaluated. The value
     *           of this field must be from the IANA time zone database:
     *           https://www.iana.org/time-zones.
     *     @type string $etag
     *           ETag of the resource.
     *     @type string $description
     *           Human readable description of the realm.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\Realms::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the realm. Uses the form:
     * `projects/{project}/locations/{location}/realms/{realm}`. For
     * example, `projects/my-project/locations/{location}/realms/my-realm`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the realm. Uses the form:
     * `projects/{project}/locations/{location}/realms/{realm}`. For
     * example, `projects/my-project/locations/{location}/realms/my-realm`.
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
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * The labels associated with this realm. Each label is a key-value pair.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The labels associated with this realm. Each label is a key-value pair.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Required. Time zone where all policies targeting this realm are evaluated. The value
     * of this field must be from the IANA time zone database:
     * https://www.iana.org/time-zones.
     *
     * Generated from protobuf field <code>string time_zone = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * Required. Time zone where all policies targeting this realm are evaluated. The value
     * of this field must be from the IANA time zone database:
     * https://www.iana.org/time-zones.
     *
     * Generated from protobuf field <code>string time_zone = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * ETag of the resource.
     *
     * Generated from protobuf field <code>string etag = 7;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * ETag of the resource.
     *
     * Generated from protobuf field <code>string etag = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Human readable description of the realm.
     *
     * Generated from protobuf field <code>string description = 8;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Human readable description of the realm.
     *
     * Generated from protobuf field <code>string description = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

