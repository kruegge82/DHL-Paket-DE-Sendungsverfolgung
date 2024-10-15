<?php
/**
 * DefaultApi
 * PHP version 8.1
 *
 * @package  kruegge82\DHLTrack
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DHL Parcel DE Shipment Tracking
 *
 * Note: The API type is a RESTful Webservice and the Tracking API works exclusively with the GET method. Please have a look to the WADL in Download Section.
 *
 * The version of the OpenAPI document: 1.0.0
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\DHLTrack\Api;

use InvalidArgumentException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Promise\PromiseInterface;
use kruegge82\DHLTrack\ApiException;
use kruegge82\DHLTrack\Configuration;
use kruegge82\DHLTrack\HeaderSelector;
use kruegge82\DHLTrack\ObjectSerializer;

/**
 * DefaultApi Class Doc Comment
 *
 * @package  kruegge82\DHLTrack
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DefaultApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    /**
     * @var int Host index
     */
    protected int $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'placeholderSeeWADLAndTestsuiteGet' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface|null $client
     * @param Configuration|null   $config
     * @param HeaderSelector|null  $selector
     * @param int                  $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex(): int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation placeholderSeeWADLAndTestsuiteGet
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['placeholderSeeWADLAndTestsuiteGet'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return void
     */
    public function placeholderSeeWADLAndTestsuiteGet(
        string $contentType = self::contentTypes['placeholderSeeWADLAndTestsuiteGet'][0]
    ): void
    {
        $this->placeholderSeeWADLAndTestsuiteGetWithHttpInfo($contentType);
    }

    /**
     * Operation placeholderSeeWADLAndTestsuiteGetWithHttpInfo
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['placeholderSeeWADLAndTestsuiteGet'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function placeholderSeeWADLAndTestsuiteGetWithHttpInfo(
        string $contentType = self::contentTypes['placeholderSeeWADLAndTestsuiteGet'][0]
    ): array
    {
        $request = $this->placeholderSeeWADLAndTestsuiteGetRequest($contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation placeholderSeeWADLAndTestsuiteGetAsync
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['placeholderSeeWADLAndTestsuiteGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function placeholderSeeWADLAndTestsuiteGetAsync(
        string $contentType = self::contentTypes['placeholderSeeWADLAndTestsuiteGet'][0]
    ): PromiseInterface
    {
        return $this->placeholderSeeWADLAndTestsuiteGetAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation placeholderSeeWADLAndTestsuiteGetAsyncWithHttpInfo
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['placeholderSeeWADLAndTestsuiteGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function placeholderSeeWADLAndTestsuiteGetAsyncWithHttpInfo(
        string $contentType = self::contentTypes['placeholderSeeWADLAndTestsuiteGet'][0]
    ): PromiseInterface
    {
        $returnType = '';
        $request = $this->placeholderSeeWADLAndTestsuiteGetRequest($contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'placeholderSeeWADLAndTestsuiteGet'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['placeholderSeeWADLAndTestsuiteGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function placeholderSeeWADLAndTestsuiteGetRequest(
        string $contentType = self::contentTypes['placeholderSeeWADLAndTestsuiteGet'][0]
    ): Request
    {


        $resourcePath = '/Placeholder, see WADL and Testsuite';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}