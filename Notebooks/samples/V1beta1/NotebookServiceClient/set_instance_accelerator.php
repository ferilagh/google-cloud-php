<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START notebooks_v1beta1_generated_NotebookService_SetInstanceAccelerator_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Notebooks\V1beta1\Instance;
use Google\Cloud\Notebooks\V1beta1\Instance\AcceleratorType;
use Google\Cloud\Notebooks\V1beta1\NotebookServiceClient;
use Google\Rpc\Status;

/**
 * Updates the guest accelerators of a single Instance.
 *
 * @param string $name      Format:
 *                          `projects/{project_id}/locations/{location}/instances/{instance_id}`
 * @param int    $type      Type of this accelerator.
 * @param int    $coreCount Count of cores of this accelerator. Note that not all combinations
 *                          of `type` and `core_count` are valid. Check [GPUs on
 *                          Compute Engine](https://cloud.google.com/compute/docs/gpus/#gpus-list) to
 *                          find a valid combination. TPUs are not supported.
 */
function set_instance_accelerator_sample(string $name, int $type, int $coreCount): void
{
    // Create a client.
    $notebookServiceClient = new NotebookServiceClient();

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $notebookServiceClient->setInstanceAccelerator($name, $type, $coreCount);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Instance $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $name = '[NAME]';
    $type = AcceleratorType::ACCELERATOR_TYPE_UNSPECIFIED;
    $coreCount = 0;

    set_instance_accelerator_sample($name, $type, $coreCount);
}
// [END notebooks_v1beta1_generated_NotebookService_SetInstanceAccelerator_sync]
