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
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/storageinsights/v1/storageinsights.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\StorageInsights\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\Call;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\ListLocationsResponse;
use Google\Cloud\Location\Location;
use Google\Cloud\StorageInsights\V1\CreateReportConfigRequest;
use Google\Cloud\StorageInsights\V1\DeleteReportConfigRequest;
use Google\Cloud\StorageInsights\V1\GetReportConfigRequest;
use Google\Cloud\StorageInsights\V1\GetReportDetailRequest;
use Google\Cloud\StorageInsights\V1\ListReportConfigsRequest;
use Google\Cloud\StorageInsights\V1\ListReportConfigsResponse;
use Google\Cloud\StorageInsights\V1\ListReportDetailsRequest;
use Google\Cloud\StorageInsights\V1\ListReportDetailsResponse;
use Google\Cloud\StorageInsights\V1\ReportConfig;
use Google\Cloud\StorageInsights\V1\ReportDetail;
use Google\Cloud\StorageInsights\V1\UpdateReportConfigRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service describing handlers for resources
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $storageInsightsClient = new StorageInsightsClient();
 * try {
 *     $formattedParent = $storageInsightsClient->locationName('[PROJECT]', '[LOCATION]');
 *     $reportConfig = new ReportConfig();
 *     $response = $storageInsightsClient->createReportConfig($formattedParent, $reportConfig);
 * } finally {
 *     $storageInsightsClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class StorageInsightsGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.storageinsights.v1.StorageInsights';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'storageinsights.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $locationNameTemplate;

    private static $reportConfigNameTemplate;

    private static $reportDetailNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' =>
                self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' =>
                __DIR__ . '/../resources/storage_insights_client_config.json',
            'descriptorsConfigPath' =>
                __DIR__ .
                '/../resources/storage_insights_descriptor_config.php',
            'gcpApiConfigPath' =>
                __DIR__ . '/../resources/storage_insights_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ .
                        '/../resources/storage_insights_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getLocationNameTemplate()
    {
        if (self::$locationNameTemplate == null) {
            self::$locationNameTemplate = new PathTemplate(
                'projects/{project}/locations/{location}'
            );
        }

        return self::$locationNameTemplate;
    }

    private static function getReportConfigNameTemplate()
    {
        if (self::$reportConfigNameTemplate == null) {
            self::$reportConfigNameTemplate = new PathTemplate(
                'projects/{project}/locations/{location}/reportConfigs/{report_config}'
            );
        }

        return self::$reportConfigNameTemplate;
    }

    private static function getReportDetailNameTemplate()
    {
        if (self::$reportDetailNameTemplate == null) {
            self::$reportDetailNameTemplate = new PathTemplate(
                'projects/{project}/locations/{location}/reportConfigs/{report_config}/reportDetails/{report_detail}'
            );
        }

        return self::$reportDetailNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'location' => self::getLocationNameTemplate(),
                'reportConfig' => self::getReportConfigNameTemplate(),
                'reportDetail' => self::getReportDetailNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName($project, $location)
    {
        return self::getLocationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * report_config resource.
     *
     * @param string $project
     * @param string $location
     * @param string $reportConfig
     *
     * @return string The formatted report_config resource.
     */
    public static function reportConfigName($project, $location, $reportConfig)
    {
        return self::getReportConfigNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'report_config' => $reportConfig,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * report_detail resource.
     *
     * @param string $project
     * @param string $location
     * @param string $reportConfig
     * @param string $reportDetail
     *
     * @return string The formatted report_detail resource.
     */
    public static function reportDetailName(
        $project,
        $location,
        $reportConfig,
        $reportDetail
    ) {
        return self::getReportDetailNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'report_config' => $reportConfig,
            'report_detail' => $reportDetail,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - location: projects/{project}/locations/{location}
     * - reportConfig: projects/{project}/locations/{location}/reportConfigs/{report_config}
     * - reportDetail: projects/{project}/locations/{location}/reportConfigs/{report_config}/reportDetails/{report_detail}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException(
                    "Template name $template does not exist"
                );
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException(
            "Input did not match any known format. Input: $formattedName"
        );
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'storageinsights.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Creates a new ReportConfig in a given project and location.
     *
     * Sample code:
     * ```
     * $storageInsightsClient = new StorageInsightsClient();
     * try {
     *     $formattedParent = $storageInsightsClient->locationName('[PROJECT]', '[LOCATION]');
     *     $reportConfig = new ReportConfig();
     *     $response = $storageInsightsClient->createReportConfig($formattedParent, $reportConfig);
     * } finally {
     *     $storageInsightsClient->close();
     * }
     * ```
     *
     * @param string       $parent       Required. Value for parent.
     * @param ReportConfig $reportConfig Required. The resource being created
     * @param array        $optionalArgs {
     *     Optional.
     *
     *     @type string $requestId
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\StorageInsights\V1\ReportConfig
     *
     * @throws ApiException if the remote call fails
     */
    public function createReportConfig(
        $parent,
        $reportConfig,
        array $optionalArgs = []
    ) {
        $request = new CreateReportConfigRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setReportConfig($reportConfig);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'CreateReportConfig',
            ReportConfig::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes a single ReportConfig.
     *
     * Sample code:
     * ```
     * $storageInsightsClient = new StorageInsightsClient();
     * try {
     *     $formattedName = $storageInsightsClient->reportConfigName('[PROJECT]', '[LOCATION]', '[REPORT_CONFIG]');
     *     $storageInsightsClient->deleteReportConfig($formattedName);
     * } finally {
     *     $storageInsightsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the resource
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type bool $force
     *           Optional. If set, all ReportDetails for this ReportConfig will be deleted.
     *     @type string $requestId
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes after the first request.
     *
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     */
    public function deleteReportConfig($name, array $optionalArgs = [])
    {
        $request = new DeleteReportConfigRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['force'])) {
            $request->setForce($optionalArgs['force']);
        }

        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'DeleteReportConfig',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets details of a single ReportConfig.
     *
     * Sample code:
     * ```
     * $storageInsightsClient = new StorageInsightsClient();
     * try {
     *     $formattedName = $storageInsightsClient->reportConfigName('[PROJECT]', '[LOCATION]', '[REPORT_CONFIG]');
     *     $response = $storageInsightsClient->getReportConfig($formattedName);
     * } finally {
     *     $storageInsightsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the resource
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\StorageInsights\V1\ReportConfig
     *
     * @throws ApiException if the remote call fails
     */
    public function getReportConfig($name, array $optionalArgs = [])
    {
        $request = new GetReportConfigRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetReportConfig',
            ReportConfig::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets details of a single ReportDetail.
     *
     * Sample code:
     * ```
     * $storageInsightsClient = new StorageInsightsClient();
     * try {
     *     $formattedName = $storageInsightsClient->reportDetailName('[PROJECT]', '[LOCATION]', '[REPORT_CONFIG]', '[REPORT_DETAIL]');
     *     $response = $storageInsightsClient->getReportDetail($formattedName);
     * } finally {
     *     $storageInsightsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the resource
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\StorageInsights\V1\ReportDetail
     *
     * @throws ApiException if the remote call fails
     */
    public function getReportDetail($name, array $optionalArgs = [])
    {
        $request = new GetReportDetailRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetReportDetail',
            ReportDetail::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists ReportConfigs in a given project and location.
     *
     * Sample code:
     * ```
     * $storageInsightsClient = new StorageInsightsClient();
     * try {
     *     $formattedParent = $storageInsightsClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $storageInsightsClient->listReportConfigs($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $storageInsightsClient->listReportConfigs($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $storageInsightsClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Parent value for ListReportConfigsRequest
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type string $filter
     *           Filtering results
     *     @type string $orderBy
     *           Hint for how to order the results
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listReportConfigs($parent, array $optionalArgs = [])
    {
        $request = new ListReportConfigsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['orderBy'])) {
            $request->setOrderBy($optionalArgs['orderBy']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->getPagedListResponse(
            'ListReportConfigs',
            $optionalArgs,
            ListReportConfigsResponse::class,
            $request
        );
    }

    /**
     * Lists ReportDetails in a given project and location.
     *
     * Sample code:
     * ```
     * $storageInsightsClient = new StorageInsightsClient();
     * try {
     *     $formattedParent = $storageInsightsClient->reportConfigName('[PROJECT]', '[LOCATION]', '[REPORT_CONFIG]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $storageInsightsClient->listReportDetails($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $storageInsightsClient->listReportDetails($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $storageInsightsClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Parent value for ListReportDetailsRequest
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type string $filter
     *           Filtering results
     *     @type string $orderBy
     *           Hint for how to order the results
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listReportDetails($parent, array $optionalArgs = [])
    {
        $request = new ListReportDetailsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['orderBy'])) {
            $request->setOrderBy($optionalArgs['orderBy']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->getPagedListResponse(
            'ListReportDetails',
            $optionalArgs,
            ListReportDetailsResponse::class,
            $request
        );
    }

    /**
     * Updates the parameters of a single ReportConfig.
     *
     * Sample code:
     * ```
     * $storageInsightsClient = new StorageInsightsClient();
     * try {
     *     $updateMask = new FieldMask();
     *     $reportConfig = new ReportConfig();
     *     $response = $storageInsightsClient->updateReportConfig($updateMask, $reportConfig);
     * } finally {
     *     $storageInsightsClient->close();
     * }
     * ```
     *
     * @param FieldMask    $updateMask   Required. Field mask is used to specify the fields to be overwritten in the
     *                                   ReportConfig resource by the update.
     *                                   The fields specified in the update_mask are relative to the resource, not
     *                                   the full request. A field will be overwritten if it is in the mask. If the
     *                                   user does not provide a mask then all fields will be overwritten.
     * @param ReportConfig $reportConfig Required. The resource being updated
     * @param array        $optionalArgs {
     *     Optional.
     *
     *     @type string $requestId
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\StorageInsights\V1\ReportConfig
     *
     * @throws ApiException if the remote call fails
     */
    public function updateReportConfig(
        $updateMask,
        $reportConfig,
        array $optionalArgs = []
    ) {
        $request = new UpdateReportConfigRequest();
        $requestParamHeaders = [];
        $request->setUpdateMask($updateMask);
        $request->setReportConfig($reportConfig);
        $requestParamHeaders['report_config.name'] = $reportConfig->getName();
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'UpdateReportConfig',
            ReportConfig::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets information about a location.
     *
     * Sample code:
     * ```
     * $storageInsightsClient = new StorageInsightsClient();
     * try {
     *     $response = $storageInsightsClient->getLocation();
     * } finally {
     *     $storageInsightsClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Resource name for the location.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Location\Location
     *
     * @throws ApiException if the remote call fails
     */
    public function getLocation(array $optionalArgs = [])
    {
        $request = new GetLocationRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetLocation',
            Location::class,
            $optionalArgs,
            $request,
            Call::UNARY_CALL,
            'google.cloud.location.Locations'
        )->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * Sample code:
     * ```
     * $storageInsightsClient = new StorageInsightsClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $storageInsightsClient->listLocations();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $storageInsightsClient->listLocations();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $storageInsightsClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           The resource that owns the locations collection, if applicable.
     *     @type string $filter
     *           The standard list filter.
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listLocations(array $optionalArgs = [])
    {
        $request = new ListLocationsRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->getPagedListResponse(
            'ListLocations',
            $optionalArgs,
            ListLocationsResponse::class,
            $request,
            'google.cloud.location.Locations'
        );
    }
}
