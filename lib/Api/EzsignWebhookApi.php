<?php
/**
 * EzsignWebhookApi
 * PHP version 7.2
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eZmax API Definition
 *
 * This API expose all the functionnalities for the eZmax and eZsign application.  We provide SDKs for customers. They are generated using OpenAPI codegen, we encourage customers to use them as we also provide samples for them.  You can choose to build your own implementation manually or can use any compatible OpenAPI 3.0 generator like Swagger Codegen, OpenAPI codegen or any commercial generators.  If you need helping understanding how to use this API, don't waste too much time looking for it. Contact support-api@ezmax.ca, we're here to help. We are developpers so we know programmers don't like bad documentation. If you don't find what you need in the documentation, let us know, we'll improve it and put you rapidly up on track.
 *
 * The version of the OpenAPI document: 1.0.5
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use eZmaxAPI\ApiException;
use eZmaxAPI\Configuration;
use eZmaxAPI\HeaderSelector;
use eZmaxAPI\ObjectSerializer;

/**
 * EzsignWebhookApi Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EzsignWebhookApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation webhookEzsignDocumentCompleted
     *
     * DocumentCompleted
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://{yourdomain}
     *
     * @param  string $webhookPathEzsignDocumentCompleted The path on your server where your webhook listener resides (required)
     * @param  \eZmaxAPI\Model\WebhookEzsignDocumentCompleted $webhookEzsignDocumentCompleted webhookEzsignDocumentCompleted (required)
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookEzsignDocumentCompleted($webhookPathEzsignDocumentCompleted, $webhookEzsignDocumentCompleted)
    {
        $this->webhookEzsignDocumentCompletedWithHttpInfo($webhookPathEzsignDocumentCompleted, $webhookEzsignDocumentCompleted);
    }

    /**
     * Operation webhookEzsignDocumentCompletedWithHttpInfo
     *
     * DocumentCompleted
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://{yourdomain}
     *
     * @param  string $webhookPathEzsignDocumentCompleted The path on your server where your webhook listener resides (required)
     * @param  \eZmaxAPI\Model\WebhookEzsignDocumentCompleted $webhookEzsignDocumentCompleted (required)
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookEzsignDocumentCompletedWithHttpInfo($webhookPathEzsignDocumentCompleted, $webhookEzsignDocumentCompleted)
    {
        $request = $this->webhookEzsignDocumentCompletedRequest($webhookPathEzsignDocumentCompleted, $webhookEzsignDocumentCompleted);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookEzsignDocumentCompletedAsync
     *
     * DocumentCompleted
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://{yourdomain}
     *
     * @param  string $webhookPathEzsignDocumentCompleted The path on your server where your webhook listener resides (required)
     * @param  \eZmaxAPI\Model\WebhookEzsignDocumentCompleted $webhookEzsignDocumentCompleted (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookEzsignDocumentCompletedAsync($webhookPathEzsignDocumentCompleted, $webhookEzsignDocumentCompleted)
    {
        return $this->webhookEzsignDocumentCompletedAsyncWithHttpInfo($webhookPathEzsignDocumentCompleted, $webhookEzsignDocumentCompleted)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookEzsignDocumentCompletedAsyncWithHttpInfo
     *
     * DocumentCompleted
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://{yourdomain}
     *
     * @param  string $webhookPathEzsignDocumentCompleted The path on your server where your webhook listener resides (required)
     * @param  \eZmaxAPI\Model\WebhookEzsignDocumentCompleted $webhookEzsignDocumentCompleted (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookEzsignDocumentCompletedAsyncWithHttpInfo($webhookPathEzsignDocumentCompleted, $webhookEzsignDocumentCompleted)
    {
        $returnType = '';
        $request = $this->webhookEzsignDocumentCompletedRequest($webhookPathEzsignDocumentCompleted, $webhookEzsignDocumentCompleted);

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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookEzsignDocumentCompleted'
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://{yourdomain}
     *
     * @param  string $webhookPathEzsignDocumentCompleted The path on your server where your webhook listener resides (required)
     * @param  \eZmaxAPI\Model\WebhookEzsignDocumentCompleted $webhookEzsignDocumentCompleted (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function webhookEzsignDocumentCompletedRequest($webhookPathEzsignDocumentCompleted, $webhookEzsignDocumentCompleted)
    {
        // verify the required parameter 'webhookPathEzsignDocumentCompleted' is set
        if ($webhookPathEzsignDocumentCompleted === null || (is_array($webhookPathEzsignDocumentCompleted) && count($webhookPathEzsignDocumentCompleted) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhookPathEzsignDocumentCompleted when calling webhookEzsignDocumentCompleted'
            );
        }
        // verify the required parameter 'webhookEzsignDocumentCompleted' is set
        if ($webhookEzsignDocumentCompleted === null || (is_array($webhookEzsignDocumentCompleted) && count($webhookEzsignDocumentCompleted) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhookEzsignDocumentCompleted when calling webhookEzsignDocumentCompleted'
            );
        }

        $resourcePath = '/{WebhookPathEzsignDocumentCompleted}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($webhookPathEzsignDocumentCompleted !== null) {
            $resourcePath = str_replace(
                '{' . 'WebhookPathEzsignDocumentCompleted' . '}',
                ObjectSerializer::toPathValue($webhookPathEzsignDocumentCompleted),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($webhookEzsignDocumentCompleted)) {
            $_tempBody = $webhookEzsignDocumentCompleted;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $operationHosts = ["https://{yourdomain}"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookEzsignFolderCompleted
     *
     * FolderCompleted
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://{yourdomain}
     *
     * @param  string $webhookPathEzsignFolderCompleted The path on your server where your webhook listener resides (required)
     * @param  \eZmaxAPI\Model\WebhookEzsignFolderCompleted $webhookEzsignFolderCompleted webhookEzsignFolderCompleted (required)
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function webhookEzsignFolderCompleted($webhookPathEzsignFolderCompleted, $webhookEzsignFolderCompleted)
    {
        $this->webhookEzsignFolderCompletedWithHttpInfo($webhookPathEzsignFolderCompleted, $webhookEzsignFolderCompleted);
    }

    /**
     * Operation webhookEzsignFolderCompletedWithHttpInfo
     *
     * FolderCompleted
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://{yourdomain}
     *
     * @param  string $webhookPathEzsignFolderCompleted The path on your server where your webhook listener resides (required)
     * @param  \eZmaxAPI\Model\WebhookEzsignFolderCompleted $webhookEzsignFolderCompleted (required)
     *
     * @throws \eZmaxAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookEzsignFolderCompletedWithHttpInfo($webhookPathEzsignFolderCompleted, $webhookEzsignFolderCompleted)
    {
        $request = $this->webhookEzsignFolderCompletedRequest($webhookPathEzsignFolderCompleted, $webhookEzsignFolderCompleted);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation webhookEzsignFolderCompletedAsync
     *
     * FolderCompleted
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://{yourdomain}
     *
     * @param  string $webhookPathEzsignFolderCompleted The path on your server where your webhook listener resides (required)
     * @param  \eZmaxAPI\Model\WebhookEzsignFolderCompleted $webhookEzsignFolderCompleted (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookEzsignFolderCompletedAsync($webhookPathEzsignFolderCompleted, $webhookEzsignFolderCompleted)
    {
        return $this->webhookEzsignFolderCompletedAsyncWithHttpInfo($webhookPathEzsignFolderCompleted, $webhookEzsignFolderCompleted)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookEzsignFolderCompletedAsyncWithHttpInfo
     *
     * FolderCompleted
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://{yourdomain}
     *
     * @param  string $webhookPathEzsignFolderCompleted The path on your server where your webhook listener resides (required)
     * @param  \eZmaxAPI\Model\WebhookEzsignFolderCompleted $webhookEzsignFolderCompleted (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookEzsignFolderCompletedAsyncWithHttpInfo($webhookPathEzsignFolderCompleted, $webhookEzsignFolderCompleted)
    {
        $returnType = '';
        $request = $this->webhookEzsignFolderCompletedRequest($webhookPathEzsignFolderCompleted, $webhookEzsignFolderCompleted);

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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'webhookEzsignFolderCompleted'
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://{yourdomain}
     *
     * @param  string $webhookPathEzsignFolderCompleted The path on your server where your webhook listener resides (required)
     * @param  \eZmaxAPI\Model\WebhookEzsignFolderCompleted $webhookEzsignFolderCompleted (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function webhookEzsignFolderCompletedRequest($webhookPathEzsignFolderCompleted, $webhookEzsignFolderCompleted)
    {
        // verify the required parameter 'webhookPathEzsignFolderCompleted' is set
        if ($webhookPathEzsignFolderCompleted === null || (is_array($webhookPathEzsignFolderCompleted) && count($webhookPathEzsignFolderCompleted) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhookPathEzsignFolderCompleted when calling webhookEzsignFolderCompleted'
            );
        }
        // verify the required parameter 'webhookEzsignFolderCompleted' is set
        if ($webhookEzsignFolderCompleted === null || (is_array($webhookEzsignFolderCompleted) && count($webhookEzsignFolderCompleted) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $webhookEzsignFolderCompleted when calling webhookEzsignFolderCompleted'
            );
        }

        $resourcePath = '/{WebhookPathEzsignFolderCompleted}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($webhookPathEzsignFolderCompleted !== null) {
            $resourcePath = str_replace(
                '{' . 'WebhookPathEzsignFolderCompleted' . '}',
                ObjectSerializer::toPathValue($webhookPathEzsignFolderCompleted),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($webhookEzsignFolderCompleted)) {
            $_tempBody = $webhookEzsignFolderCompleted;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $operationHosts = ["https://{yourdomain}"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
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
    protected function createHttpClientOption()
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
