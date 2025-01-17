<?php
/*
 * Copyright 2023 Google LLC
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

// [START cloudkms_v1_generated_EkmService_GetEkmConfig_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Kms\V1\EkmConfig;
use Google\Cloud\Kms\V1\EkmServiceClient;

/**
 * Returns the [EkmConfig][google.cloud.kms.v1.EkmConfig] singleton resource
 * for a given project and location.
 *
 * @param string $formattedName The [name][google.cloud.kms.v1.EkmConfig.name] of the
 *                              [EkmConfig][google.cloud.kms.v1.EkmConfig] to get. Please see
 *                              {@see EkmServiceClient::ekmConfigName()} for help formatting this field.
 */
function get_ekm_config_sample(string $formattedName): void
{
    // Create a client.
    $ekmServiceClient = new EkmServiceClient();

    // Call the API and handle any network failures.
    try {
        /** @var EkmConfig $response */
        $response = $ekmServiceClient->getEkmConfig($formattedName);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
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
    $formattedName = EkmServiceClient::ekmConfigName('[PROJECT]', '[LOCATION]');

    get_ekm_config_sample($formattedName);
}
// [END cloudkms_v1_generated_EkmService_GetEkmConfig_sync]
