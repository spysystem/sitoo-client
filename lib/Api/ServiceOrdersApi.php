<?php
/**
 * ServiceOrdersApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API Documentation for Sitoo
 *
 * Client for integrating to Sitoo
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Spy\SitooClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
#region SPY Code
use GuzzleHttp\Cookie\CookieJar;
#endregion
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Spy\SitooClient\ApiException;
use Spy\SitooClient\Configuration;
use Spy\SitooClient\HeaderSelector;
use Spy\SitooClient\ObjectSerializer;

/**
 * ServiceOrdersApi Class Doc Comment
 *
 * @category Class
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceOrdersApi
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

	#region SPY Code
	protected $bXDebugOnInstance	= false;
	protected $bXDebugOnNextRequest;

	/**
	 * @param bool $bXDebugOnInstance
	 * @return $this
	 */
	public function setXDebugOnInstance(bool $bXDebugOnInstance)
	{
		$this->bXDebugOnInstance	= $bXDebugOnInstance;

		return $this;
	}

	/**
	 * @return $this
	 */
	public function setXDebugOnNextRequest()
	{
		$this->bXDebugOnNextRequest	= true;

		return $this;
	}

	/**
	 * Gets the OpenAPI Spec Version
	 *
	 * @return string
	 */
	public static function getSpecVersion()
	{
		return '1.0.0';
	}
	#endregion

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
     * Operation addServiceOrder
     *
     * @param  \Spy\SitooClient\Model\ServiceOrderWrite $serviceOrderWrite serviceOrderWrite (required)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function addServiceOrder($serviceOrderWrite)
    {
        $this->addServiceOrderWithHttpInfo($serviceOrderWrite);
    }

    /**
     * Operation addServiceOrderWithHttpInfo
     *
     * @param  \Spy\SitooClient\Model\ServiceOrderWrite $serviceOrderWrite (required)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function addServiceOrderWithHttpInfo($serviceOrderWrite)
    {
        $request = $this->addServiceOrderRequest($serviceOrderWrite);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation addServiceOrderAsync
     *
     * @param  \Spy\SitooClient\Model\ServiceOrderWrite $serviceOrderWrite (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addServiceOrderAsync($serviceOrderWrite)
    {
        return $this->addServiceOrderAsyncWithHttpInfo($serviceOrderWrite)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addServiceOrderAsyncWithHttpInfo
     *
     * @param  \Spy\SitooClient\Model\ServiceOrderWrite $serviceOrderWrite (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addServiceOrderAsyncWithHttpInfo($serviceOrderWrite)
    {
        $returnType = '';
        $request = $this->addServiceOrderRequest($serviceOrderWrite);

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
     * Create request for operation 'addServiceOrder'
     *
     * @param  \Spy\SitooClient\Model\ServiceOrderWrite $serviceOrderWrite (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function addServiceOrderRequest($serviceOrderWrite)
    {
        // verify the required parameter 'serviceOrderWrite' is set
        if ($serviceOrderWrite === null || (is_array($serviceOrderWrite) && count($serviceOrderWrite) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $serviceOrderWrite when calling addServiceOrder'
            );
        }

        $resourcePath = '/serviceorders.json';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





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
        if (isset($serviceOrderWrite)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($serviceOrderWrite));
            } else {
                $httpBody = $serviceOrderWrite;
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

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getServiceOrder
     *
     * @param  string $serviceOrderId serviceOrderId (required)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function getServiceOrder($serviceOrderId)
    {
        $this->getServiceOrderWithHttpInfo($serviceOrderId);
    }

    /**
     * Operation getServiceOrderWithHttpInfo
     *
     * @param  string $serviceOrderId (required)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getServiceOrderWithHttpInfo($serviceOrderId)
    {
        $request = $this->getServiceOrderRequest($serviceOrderId);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation getServiceOrderAsync
     *
     * @param  string $serviceOrderId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getServiceOrderAsync($serviceOrderId)
    {
        return $this->getServiceOrderAsyncWithHttpInfo($serviceOrderId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getServiceOrderAsyncWithHttpInfo
     *
     * @param  string $serviceOrderId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getServiceOrderAsyncWithHttpInfo($serviceOrderId)
    {
        $returnType = '';
        $request = $this->getServiceOrderRequest($serviceOrderId);

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
     * Create request for operation 'getServiceOrder'
     *
     * @param  string $serviceOrderId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getServiceOrderRequest($serviceOrderId)
    {
        // verify the required parameter 'serviceOrderId' is set
        if ($serviceOrderId === null || (is_array($serviceOrderId) && count($serviceOrderId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $serviceOrderId when calling getServiceOrder'
            );
        }

        $resourcePath = '/serviceorders/{service_order_id}.json';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($serviceOrderId !== null) {
            $resourcePath = str_replace(
                '{' . 'service_order_id' . '}',
                ObjectSerializer::toPathValue($serviceOrderId),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getServiceOrders
     *
     * @param  string $store store (optional)
     * @param  string[] $state state (optional)
     * @param  string $startAfterId startAfterId (optional)
     * @param  int $num num (optional)
     * @param  string $sort sort (optional)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function getServiceOrders($store = null, $state = null, $startAfterId = null, $num = null, $sort = null)
    {
        $this->getServiceOrdersWithHttpInfo($store, $state, $startAfterId, $num, $sort);
    }

    /**
     * Operation getServiceOrdersWithHttpInfo
     *
     * @param  string $store (optional)
     * @param  string[] $state (optional)
     * @param  string $startAfterId (optional)
     * @param  int $num (optional)
     * @param  string $sort (optional)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getServiceOrdersWithHttpInfo($store = null, $state = null, $startAfterId = null, $num = null, $sort = null)
    {
        $request = $this->getServiceOrdersRequest($store, $state, $startAfterId, $num, $sort);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation getServiceOrdersAsync
     *
     * @param  string $store (optional)
     * @param  string[] $state (optional)
     * @param  string $startAfterId (optional)
     * @param  int $num (optional)
     * @param  string $sort (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getServiceOrdersAsync($store = null, $state = null, $startAfterId = null, $num = null, $sort = null)
    {
        return $this->getServiceOrdersAsyncWithHttpInfo($store, $state, $startAfterId, $num, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getServiceOrdersAsyncWithHttpInfo
     *
     * @param  string $store (optional)
     * @param  string[] $state (optional)
     * @param  string $startAfterId (optional)
     * @param  int $num (optional)
     * @param  string $sort (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getServiceOrdersAsyncWithHttpInfo($store = null, $state = null, $startAfterId = null, $num = null, $sort = null)
    {
        $returnType = '';
        $request = $this->getServiceOrdersRequest($store, $state, $startAfterId, $num, $sort);

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
     * Create request for operation 'getServiceOrders'
     *
     * @param  string $store (optional)
     * @param  string[] $state (optional)
     * @param  string $startAfterId (optional)
     * @param  int $num (optional)
     * @param  string $sort (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getServiceOrdersRequest($store = null, $state = null, $startAfterId = null, $num = null, $sort = null)
    {

        $resourcePath = '/serviceorders.json';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($store)) {
            $store = ObjectSerializer::serializeCollection($store, '', true);
        }
        if ($store !== null) {
            $queryParams['store'] = $store;
        }
        // query params
        if (is_array($state)) {
            $state = ObjectSerializer::serializeCollection($state, 'form', true);
        }
        if ($state !== null) {
            $queryParams['state'] = $state;
        }
        // query params
        if (is_array($startAfterId)) {
            $startAfterId = ObjectSerializer::serializeCollection($startAfterId, '', true);
        }
        if ($startAfterId !== null) {
            $queryParams['start_after_id'] = $startAfterId;
        }
        // query params
        if (is_array($num)) {
            $num = ObjectSerializer::serializeCollection($num, '', true);
        }
        if ($num !== null) {
            $queryParams['num'] = $num;
        }
        // query params
        if (is_array($sort)) {
            $sort = ObjectSerializer::serializeCollection($sort, '', true);
        }
        if ($sort !== null) {
            $queryParams['sort'] = $sort;
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateServiceOrder
     *
     * @param  string $serviceOrderId serviceOrderId (required)
     * @param  \Spy\SitooClient\Model\ServiceOrderWrite $serviceOrderWrite serviceOrderWrite (required)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function updateServiceOrder($serviceOrderId, $serviceOrderWrite)
    {
        $this->updateServiceOrderWithHttpInfo($serviceOrderId, $serviceOrderWrite);
    }

    /**
     * Operation updateServiceOrderWithHttpInfo
     *
     * @param  string $serviceOrderId (required)
     * @param  \Spy\SitooClient\Model\ServiceOrderWrite $serviceOrderWrite (required)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateServiceOrderWithHttpInfo($serviceOrderId, $serviceOrderWrite)
    {
        $request = $this->updateServiceOrderRequest($serviceOrderId, $serviceOrderWrite);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation updateServiceOrderAsync
     *
     * @param  string $serviceOrderId (required)
     * @param  \Spy\SitooClient\Model\ServiceOrderWrite $serviceOrderWrite (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateServiceOrderAsync($serviceOrderId, $serviceOrderWrite)
    {
        return $this->updateServiceOrderAsyncWithHttpInfo($serviceOrderId, $serviceOrderWrite)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateServiceOrderAsyncWithHttpInfo
     *
     * @param  string $serviceOrderId (required)
     * @param  \Spy\SitooClient\Model\ServiceOrderWrite $serviceOrderWrite (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateServiceOrderAsyncWithHttpInfo($serviceOrderId, $serviceOrderWrite)
    {
        $returnType = '';
        $request = $this->updateServiceOrderRequest($serviceOrderId, $serviceOrderWrite);

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
     * Create request for operation 'updateServiceOrder'
     *
     * @param  string $serviceOrderId (required)
     * @param  \Spy\SitooClient\Model\ServiceOrderWrite $serviceOrderWrite (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateServiceOrderRequest($serviceOrderId, $serviceOrderWrite)
    {
        // verify the required parameter 'serviceOrderId' is set
        if ($serviceOrderId === null || (is_array($serviceOrderId) && count($serviceOrderId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $serviceOrderId when calling updateServiceOrder'
            );
        }
        // verify the required parameter 'serviceOrderWrite' is set
        if ($serviceOrderWrite === null || (is_array($serviceOrderWrite) && count($serviceOrderWrite) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $serviceOrderWrite when calling updateServiceOrder'
            );
        }

        $resourcePath = '/serviceorders/{service_order_id}.json';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($serviceOrderId !== null) {
            $resourcePath = str_replace(
                '{' . 'service_order_id' . '}',
                ObjectSerializer::toPathValue($serviceOrderId),
                $resourcePath
            );
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
        if (isset($serviceOrderWrite)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($serviceOrderWrite));
            } else {
                $httpBody = $serviceOrderWrite;
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

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'PUT',
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

		#region SPY Code
		$options[RequestOptions::HEADERS]	= [
			'X-OpenAPISpecVersion'	=> '1.0.0',
		];
		$bEnableXDebug	= $this->bXDebugOnNextRequest;

		if($bEnableXDebug === null)
		{
			$bEnableXDebug	= $this->bXDebugOnInstance;
		}

		$this->bXDebugOnNextRequest	= null;

		if($bEnableXDebug)
		{
			if(preg_match('/^(?:https?:\/\/)?([^\/:]+\.[^\/:]+)/i', $this->getConfig()->getHost(), $arrMatches) === 1)
			{
				$options['cookies'] = CookieJar::fromArray(
					[
						'XDEBUG_SESSION'	=> 'PHPSTORM',
					],
					$arrMatches[1]
				);
			}
		}
		#endregion

        return $options;
    }
}
