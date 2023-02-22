<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace Google\Cloud\Dataproc\V1\GkeNodePoolConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters that describe cluster nodes.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.GkeNodePoolConfig.GkeNodeConfig</code>
 */
class GkeNodeConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The name of a Compute Engine [machine
     * type](https://cloud.google.com/compute/docs/machine-types).
     *
     * Generated from protobuf field <code>string machine_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $machine_type = '';
    /**
     * Optional. The number of local SSD disks to attach to the node, which is
     * limited by the maximum number of disks allowable per zone (see [Adding
     * Local SSDs](https://cloud.google.com/compute/docs/disks/local-ssd)).
     *
     * Generated from protobuf field <code>int32 local_ssd_count = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $local_ssd_count = 0;
    /**
     * Optional. Whether the nodes are created as legacy [preemptible VM
     * instances] (https://cloud.google.com/compute/docs/instances/preemptible).
     * Also see
     * [Spot][google.cloud.dataproc.v1.GkeNodePoolConfig.GkeNodeConfig.spot]
     * VMs, preemptible VM instances without a maximum lifetime. Legacy and Spot
     * preemptible nodes cannot be used in a node pool with the `CONTROLLER`
     * [role]
     * (/dataproc/docs/reference/rest/v1/projects.regions.clusters#role)
     * or in the DEFAULT node pool if the CONTROLLER role is not assigned (the
     * DEFAULT node pool will assume the CONTROLLER role).
     *
     * Generated from protobuf field <code>bool preemptible = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $preemptible = false;
    /**
     * Optional. A list of [hardware
     * accelerators](https://cloud.google.com/compute/docs/gpus) to attach to
     * each node.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.GkeNodePoolConfig.GkeNodePoolAcceleratorConfig accelerators = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $accelerators;
    /**
     * Optional. [Minimum CPU
     * platform](https://cloud.google.com/compute/docs/instances/specify-min-cpu-platform)
     * to be used by this instance. The instance may be scheduled on the
     * specified or a newer CPU platform. Specify the friendly names of CPU
     * platforms, such as "Intel Haswell"` or Intel Sandy Bridge".
     *
     * Generated from protobuf field <code>string min_cpu_platform = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $min_cpu_platform = '';
    /**
     * Optional. The [Customer Managed Encryption Key (CMEK)]
     * (https://cloud.google.com/kubernetes-engine/docs/how-to/using-cmek)
     * used to encrypt the boot disk attached to each node in the node pool.
     * Specify the key using the following format:
     * <code>projects/<var>KEY_PROJECT_ID</var>/locations/<var>LOCATION</var>/keyRings/<var>RING_NAME</var>/cryptoKeys/<var>KEY_NAME</var></code>.
     *
     * Generated from protobuf field <code>string boot_disk_kms_key = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $boot_disk_kms_key = '';
    /**
     * Optional. Whether the nodes are created as [Spot VM instances]
     * (https://cloud.google.com/compute/docs/instances/spot).
     * Spot VMs are the latest update to legacy
     * [preemptible
     * VMs][google.cloud.dataproc.v1.GkeNodePoolConfig.GkeNodeConfig.preemptible].
     * Spot VMs do not have a maximum lifetime. Legacy and Spot preemptible
     * nodes cannot be used in a node pool with the `CONTROLLER`
     * [role](https://cloud.google.com/dataproc/docs/reference/rest/v1/projects.regions.clusters#role)
     * or in the DEFAULT node pool if the CONTROLLER role is not assigned (the
     * DEFAULT node pool will assume the CONTROLLER role).
     *
     * Generated from protobuf field <code>bool spot = 32 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $spot = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $machine_type
     *           Optional. The name of a Compute Engine [machine
     *           type](https://cloud.google.com/compute/docs/machine-types).
     *     @type int $local_ssd_count
     *           Optional. The number of local SSD disks to attach to the node, which is
     *           limited by the maximum number of disks allowable per zone (see [Adding
     *           Local SSDs](https://cloud.google.com/compute/docs/disks/local-ssd)).
     *     @type bool $preemptible
     *           Optional. Whether the nodes are created as legacy [preemptible VM
     *           instances] (https://cloud.google.com/compute/docs/instances/preemptible).
     *           Also see
     *           [Spot][google.cloud.dataproc.v1.GkeNodePoolConfig.GkeNodeConfig.spot]
     *           VMs, preemptible VM instances without a maximum lifetime. Legacy and Spot
     *           preemptible nodes cannot be used in a node pool with the `CONTROLLER`
     *           [role]
     *           (/dataproc/docs/reference/rest/v1/projects.regions.clusters#role)
     *           or in the DEFAULT node pool if the CONTROLLER role is not assigned (the
     *           DEFAULT node pool will assume the CONTROLLER role).
     *     @type array<\Google\Cloud\Dataproc\V1\GkeNodePoolConfig\GkeNodePoolAcceleratorConfig>|\Google\Protobuf\Internal\RepeatedField $accelerators
     *           Optional. A list of [hardware
     *           accelerators](https://cloud.google.com/compute/docs/gpus) to attach to
     *           each node.
     *     @type string $min_cpu_platform
     *           Optional. [Minimum CPU
     *           platform](https://cloud.google.com/compute/docs/instances/specify-min-cpu-platform)
     *           to be used by this instance. The instance may be scheduled on the
     *           specified or a newer CPU platform. Specify the friendly names of CPU
     *           platforms, such as "Intel Haswell"` or Intel Sandy Bridge".
     *     @type string $boot_disk_kms_key
     *           Optional. The [Customer Managed Encryption Key (CMEK)]
     *           (https://cloud.google.com/kubernetes-engine/docs/how-to/using-cmek)
     *           used to encrypt the boot disk attached to each node in the node pool.
     *           Specify the key using the following format:
     *           <code>projects/<var>KEY_PROJECT_ID</var>/locations/<var>LOCATION</var>/keyRings/<var>RING_NAME</var>/cryptoKeys/<var>KEY_NAME</var></code>.
     *     @type bool $spot
     *           Optional. Whether the nodes are created as [Spot VM instances]
     *           (https://cloud.google.com/compute/docs/instances/spot).
     *           Spot VMs are the latest update to legacy
     *           [preemptible
     *           VMs][google.cloud.dataproc.v1.GkeNodePoolConfig.GkeNodeConfig.preemptible].
     *           Spot VMs do not have a maximum lifetime. Legacy and Spot preemptible
     *           nodes cannot be used in a node pool with the `CONTROLLER`
     *           [role](https://cloud.google.com/dataproc/docs/reference/rest/v1/projects.regions.clusters#role)
     *           or in the DEFAULT node pool if the CONTROLLER role is not assigned (the
     *           DEFAULT node pool will assume the CONTROLLER role).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Shared::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The name of a Compute Engine [machine
     * type](https://cloud.google.com/compute/docs/machine-types).
     *
     * Generated from protobuf field <code>string machine_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMachineType()
    {
        return $this->machine_type;
    }

    /**
     * Optional. The name of a Compute Engine [machine
     * type](https://cloud.google.com/compute/docs/machine-types).
     *
     * Generated from protobuf field <code>string machine_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type = $var;

        return $this;
    }

    /**
     * Optional. The number of local SSD disks to attach to the node, which is
     * limited by the maximum number of disks allowable per zone (see [Adding
     * Local SSDs](https://cloud.google.com/compute/docs/disks/local-ssd)).
     *
     * Generated from protobuf field <code>int32 local_ssd_count = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getLocalSsdCount()
    {
        return $this->local_ssd_count;
    }

    /**
     * Optional. The number of local SSD disks to attach to the node, which is
     * limited by the maximum number of disks allowable per zone (see [Adding
     * Local SSDs](https://cloud.google.com/compute/docs/disks/local-ssd)).
     *
     * Generated from protobuf field <code>int32 local_ssd_count = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setLocalSsdCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->local_ssd_count = $var;

        return $this;
    }

    /**
     * Optional. Whether the nodes are created as legacy [preemptible VM
     * instances] (https://cloud.google.com/compute/docs/instances/preemptible).
     * Also see
     * [Spot][google.cloud.dataproc.v1.GkeNodePoolConfig.GkeNodeConfig.spot]
     * VMs, preemptible VM instances without a maximum lifetime. Legacy and Spot
     * preemptible nodes cannot be used in a node pool with the `CONTROLLER`
     * [role]
     * (/dataproc/docs/reference/rest/v1/projects.regions.clusters#role)
     * or in the DEFAULT node pool if the CONTROLLER role is not assigned (the
     * DEFAULT node pool will assume the CONTROLLER role).
     *
     * Generated from protobuf field <code>bool preemptible = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getPreemptible()
    {
        return $this->preemptible;
    }

    /**
     * Optional. Whether the nodes are created as legacy [preemptible VM
     * instances] (https://cloud.google.com/compute/docs/instances/preemptible).
     * Also see
     * [Spot][google.cloud.dataproc.v1.GkeNodePoolConfig.GkeNodeConfig.spot]
     * VMs, preemptible VM instances without a maximum lifetime. Legacy and Spot
     * preemptible nodes cannot be used in a node pool with the `CONTROLLER`
     * [role]
     * (/dataproc/docs/reference/rest/v1/projects.regions.clusters#role)
     * or in the DEFAULT node pool if the CONTROLLER role is not assigned (the
     * DEFAULT node pool will assume the CONTROLLER role).
     *
     * Generated from protobuf field <code>bool preemptible = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setPreemptible($var)
    {
        GPBUtil::checkBool($var);
        $this->preemptible = $var;

        return $this;
    }

    /**
     * Optional. A list of [hardware
     * accelerators](https://cloud.google.com/compute/docs/gpus) to attach to
     * each node.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.GkeNodePoolConfig.GkeNodePoolAcceleratorConfig accelerators = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccelerators()
    {
        return $this->accelerators;
    }

    /**
     * Optional. A list of [hardware
     * accelerators](https://cloud.google.com/compute/docs/gpus) to attach to
     * each node.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.GkeNodePoolConfig.GkeNodePoolAcceleratorConfig accelerators = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Dataproc\V1\GkeNodePoolConfig\GkeNodePoolAcceleratorConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccelerators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1\GkeNodePoolConfig\GkeNodePoolAcceleratorConfig::class);
        $this->accelerators = $arr;

        return $this;
    }

    /**
     * Optional. [Minimum CPU
     * platform](https://cloud.google.com/compute/docs/instances/specify-min-cpu-platform)
     * to be used by this instance. The instance may be scheduled on the
     * specified or a newer CPU platform. Specify the friendly names of CPU
     * platforms, such as "Intel Haswell"` or Intel Sandy Bridge".
     *
     * Generated from protobuf field <code>string min_cpu_platform = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMinCpuPlatform()
    {
        return $this->min_cpu_platform;
    }

    /**
     * Optional. [Minimum CPU
     * platform](https://cloud.google.com/compute/docs/instances/specify-min-cpu-platform)
     * to be used by this instance. The instance may be scheduled on the
     * specified or a newer CPU platform. Specify the friendly names of CPU
     * platforms, such as "Intel Haswell"` or Intel Sandy Bridge".
     *
     * Generated from protobuf field <code>string min_cpu_platform = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMinCpuPlatform($var)
    {
        GPBUtil::checkString($var, True);
        $this->min_cpu_platform = $var;

        return $this;
    }

    /**
     * Optional. The [Customer Managed Encryption Key (CMEK)]
     * (https://cloud.google.com/kubernetes-engine/docs/how-to/using-cmek)
     * used to encrypt the boot disk attached to each node in the node pool.
     * Specify the key using the following format:
     * <code>projects/<var>KEY_PROJECT_ID</var>/locations/<var>LOCATION</var>/keyRings/<var>RING_NAME</var>/cryptoKeys/<var>KEY_NAME</var></code>.
     *
     * Generated from protobuf field <code>string boot_disk_kms_key = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getBootDiskKmsKey()
    {
        return $this->boot_disk_kms_key;
    }

    /**
     * Optional. The [Customer Managed Encryption Key (CMEK)]
     * (https://cloud.google.com/kubernetes-engine/docs/how-to/using-cmek)
     * used to encrypt the boot disk attached to each node in the node pool.
     * Specify the key using the following format:
     * <code>projects/<var>KEY_PROJECT_ID</var>/locations/<var>LOCATION</var>/keyRings/<var>RING_NAME</var>/cryptoKeys/<var>KEY_NAME</var></code>.
     *
     * Generated from protobuf field <code>string boot_disk_kms_key = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setBootDiskKmsKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->boot_disk_kms_key = $var;

        return $this;
    }

    /**
     * Optional. Whether the nodes are created as [Spot VM instances]
     * (https://cloud.google.com/compute/docs/instances/spot).
     * Spot VMs are the latest update to legacy
     * [preemptible
     * VMs][google.cloud.dataproc.v1.GkeNodePoolConfig.GkeNodeConfig.preemptible].
     * Spot VMs do not have a maximum lifetime. Legacy and Spot preemptible
     * nodes cannot be used in a node pool with the `CONTROLLER`
     * [role](https://cloud.google.com/dataproc/docs/reference/rest/v1/projects.regions.clusters#role)
     * or in the DEFAULT node pool if the CONTROLLER role is not assigned (the
     * DEFAULT node pool will assume the CONTROLLER role).
     *
     * Generated from protobuf field <code>bool spot = 32 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getSpot()
    {
        return $this->spot;
    }

    /**
     * Optional. Whether the nodes are created as [Spot VM instances]
     * (https://cloud.google.com/compute/docs/instances/spot).
     * Spot VMs are the latest update to legacy
     * [preemptible
     * VMs][google.cloud.dataproc.v1.GkeNodePoolConfig.GkeNodeConfig.preemptible].
     * Spot VMs do not have a maximum lifetime. Legacy and Spot preemptible
     * nodes cannot be used in a node pool with the `CONTROLLER`
     * [role](https://cloud.google.com/dataproc/docs/reference/rest/v1/projects.regions.clusters#role)
     * or in the DEFAULT node pool if the CONTROLLER role is not assigned (the
     * DEFAULT node pool will assume the CONTROLLER role).
     *
     * Generated from protobuf field <code>bool spot = 32 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setSpot($var)
    {
        GPBUtil::checkBool($var);
        $this->spot = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GkeNodeConfig::class, \Google\Cloud\Dataproc\V1\GkeNodePoolConfig_GkeNodeConfig::class);

