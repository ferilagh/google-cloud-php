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

// [START containeranalysis_v1_generated_Grafeas_GetOccurrenceNote_sync]
use Google\ApiCore\ApiException;
use Grafeas\V1\GrafeasClient;
use Grafeas\V1\Note;

/**
 * Gets the note attached to the specified occurrence. Consumer projects can
 * use this method to get a note that belongs to a provider project.
 *
 * @param string $formattedName The name of the occurrence in the form of
 *                              `projects/[PROJECT_ID]/occurrences/[OCCURRENCE_ID]`. Please see
 *                              {@see GrafeasClient::occurrenceName()} for help formatting this field.
 */
function get_occurrence_note_sample(string $formattedName): void
{
    // Create a client.
    $grafeasClient = new GrafeasClient();

    // Call the API and handle any network failures.
    try {
        /** @var Note $response */
        $response = $grafeasClient->getOccurrenceNote($formattedName);
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
    $formattedName = GrafeasClient::occurrenceName('[PROJECT]', '[OCCURRENCE]');

    get_occurrence_note_sample($formattedName);
}
// [END containeranalysis_v1_generated_Grafeas_GetOccurrenceNote_sync]
