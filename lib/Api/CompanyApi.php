<?php
/**
 * CompanyApi
 * PHP version 7.4
 *
 * @category Class
 * @package  GreenToHome
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * GREEN TO HOME API
 *
 * GREEN TO HOME API
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: developers@nm-e.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GreenToHome\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GreenToHome\ApiException;
use GreenToHome\Configuration;
use GreenToHome\HeaderSelector;
use GreenToHome\ObjectSerializer;

/**
 * CompanyApi Class Doc Comment
 *
 * @category Class
 * @package  GreenToHome
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CompanyApi
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
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
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
     * Operation getParcelById
     *
     * returns Parcel details by id
     *
     * @param  string $parcel_id Parcel ID (required)
     *
     * @throws \GreenToHome\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GreenToHome\Model\ResolvedParcel
     */
    public function getParcelById($parcel_id)
    {
        list($response) = $this->getParcelByIdWithHttpInfo($parcel_id);
        return $response;
    }

    /**
     * Operation getParcelByIdWithHttpInfo
     *
     * returns Parcel details by id
     *
     * @param  string $parcel_id Parcel ID (required)
     *
     * @throws \GreenToHome\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GreenToHome\Model\ResolvedParcel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getParcelByIdWithHttpInfo($parcel_id)
    {
        $request = $this->getParcelByIdRequest($parcel_id);

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

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
            
                case 200:
                    if ('\GreenToHome\Model\ResolvedParcel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\GreenToHome\Model\ResolvedParcel' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\GreenToHome\Model\ResolvedParcel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            
            }

            $returnType = '\GreenToHome\Model\ResolvedParcel';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\GreenToHome\Model\ResolvedParcel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            
            }
            throw $e;
        }
    }

    /**
     * Operation getParcelByIdAsync
     *
     * returns Parcel details by id
     *
     * @param  string $parcel_id Parcel ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getParcelByIdAsync($parcel_id)
    {
        return $this->getParcelByIdAsyncWithHttpInfo($parcel_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getParcelByIdAsyncWithHttpInfo
     *
     * returns Parcel details by id
     *
     * @param  string $parcel_id Parcel ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getParcelByIdAsyncWithHttpInfo($parcel_id)
    {
        $returnType = '\GreenToHome\Model\ResolvedParcel';
        $request = $this->getParcelByIdRequest($parcel_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'getParcelById'
     *
     * @param  string $parcel_id Parcel ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getParcelByIdRequest($parcel_id)
    {

        // verify the required parameter 'parcel_id' is set
        if ($parcel_id === null || (is_array($parcel_id) && count($parcel_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $parcel_id when calling getParcelById'
            );
        }

        $resourcePath = '/company/parcels/parcel/{parcelId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($parcel_id !== null) {
            $resourcePath = str_replace(
                '{' . 'parcelId' . '}',
                ObjectSerializer::toPathValue($parcel_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
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
     * Operation submitParcel
     *
     * submit new Parcel
     *
     * @param  \GreenToHome\Model\Parcel $parcel Parcel to submit (optional)
     *
     * @throws \GreenToHome\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GreenToHome\Model\CreatedParcel
     */
    public function submitParcel($parcel = null)
    {
        list($response) = $this->submitParcelWithHttpInfo($parcel);
        return $response;
    }

    /**
     * Operation submitParcelWithHttpInfo
     *
     * submit new Parcel
     *
     * @param  \GreenToHome\Model\Parcel $parcel Parcel to submit (optional)
     *
     * @throws \GreenToHome\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GreenToHome\Model\CreatedParcel, HTTP status code, HTTP response headers (array of strings)
     */
    public function submitParcelWithHttpInfo($parcel = null)
    {
        $request = $this->submitParcelRequest($parcel);

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

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
            
                case 200:
                    if ('\GreenToHome\Model\CreatedParcel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\GreenToHome\Model\CreatedParcel' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\GreenToHome\Model\CreatedParcel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            
            }

            $returnType = '\GreenToHome\Model\CreatedParcel';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\GreenToHome\Model\CreatedParcel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            
            }
            throw $e;
        }
    }

    /**
     * Operation submitParcelAsync
     *
     * submit new Parcel
     *
     * @param  \GreenToHome\Model\Parcel $parcel Parcel to submit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitParcelAsync($parcel = null)
    {
        return $this->submitParcelAsyncWithHttpInfo($parcel)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation submitParcelAsyncWithHttpInfo
     *
     * submit new Parcel
     *
     * @param  \GreenToHome\Model\Parcel $parcel Parcel to submit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitParcelAsyncWithHttpInfo($parcel = null)
    {
        $returnType = '\GreenToHome\Model\CreatedParcel';
        $request = $this->submitParcelRequest($parcel);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'submitParcel'
     *
     * @param  \GreenToHome\Model\Parcel $parcel Parcel to submit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function submitParcelRequest($parcel = null)
    {


        $resourcePath = '/company/parcels/parcel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($parcel)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($parcel));
            } else {
                $httpBody = $parcel;
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
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
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
