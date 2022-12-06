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

// [START connectgateway_v1beta1_generated_GatewayService_PutResource_sync]
use Google\ApiCore\ApiException;
use Google\Api\HttpBody;
use Google\Cloud\GkeConnect\Gateway\V1beta1\GatewayServiceClient;

/**
 * PutResource performs an HTTP PUT on the Kubernetes API Server.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function put_resource_sample(): void
{
    // Create a client.
    $gatewayServiceClient = new GatewayServiceClient();

    // Call the API and handle any network failures.
    try {
        /** @var HttpBody $response */
        $response = $gatewayServiceClient->putResource();
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}
// [END connectgateway_v1beta1_generated_GatewayService_PutResource_sync]
