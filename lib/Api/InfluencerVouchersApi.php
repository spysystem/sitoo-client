<?php
/**
 * InfluencerVouchersApi
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
 * InfluencerVouchersApi Class Doc Comment
 *
 * @category Class
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InfluencerVouchersApi
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
     * Operation addInfluencerVoucherTransaction
     *
     * @param  int $siteid siteid (required)
     * @param  int $influencercode influencercode (required)
     * @param  \Spy\SitooClient\Model\InfluencervouchertransactionWrite $influencervouchertransactionWrite influencervouchertransactionWrite (required)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Spy\SitooClient\Model\InfluencervouchertransactionresponseRead
     */
    public function addInfluencerVoucherTransaction($siteid, $influencercode, $influencervouchertransactionWrite)
    {
        list($response) = $this->addInfluencerVoucherTransactionWithHttpInfo($siteid, $influencercode, $influencervouchertransactionWrite);
        return $response;
    }

    /**
     * Operation addInfluencerVoucherTransactionWithHttpInfo
     *
     * @param  int $siteid (required)
     * @param  int $influencercode (required)
     * @param  \Spy\SitooClient\Model\InfluencervouchertransactionWrite $influencervouchertransactionWrite (required)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Spy\SitooClient\Model\InfluencervouchertransactionresponseRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function addInfluencerVoucherTransactionWithHttpInfo($siteid, $influencercode, $influencervouchertransactionWrite)
    {
        $request = $this->addInfluencerVoucherTransactionRequest($siteid, $influencercode, $influencervouchertransactionWrite);

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

            switch($statusCode) {
                case 200:
                    if ('\Spy\SitooClient\Model\InfluencervouchertransactionresponseRead' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Spy\SitooClient\Model\InfluencervouchertransactionresponseRead' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Spy\SitooClient\Model\InfluencervouchertransactionresponseRead', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Spy\SitooClient\Model\InfluencervouchertransactionresponseRead';
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
                        '\Spy\SitooClient\Model\InfluencervouchertransactionresponseRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation addInfluencerVoucherTransactionAsync
     *
     * @param  int $siteid (required)
     * @param  int $influencercode (required)
     * @param  \Spy\SitooClient\Model\InfluencervouchertransactionWrite $influencervouchertransactionWrite (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addInfluencerVoucherTransactionAsync($siteid, $influencercode, $influencervouchertransactionWrite)
    {
        return $this->addInfluencerVoucherTransactionAsyncWithHttpInfo($siteid, $influencercode, $influencervouchertransactionWrite)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addInfluencerVoucherTransactionAsyncWithHttpInfo
     *
     * @param  int $siteid (required)
     * @param  int $influencercode (required)
     * @param  \Spy\SitooClient\Model\InfluencervouchertransactionWrite $influencervouchertransactionWrite (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addInfluencerVoucherTransactionAsyncWithHttpInfo($siteid, $influencercode, $influencervouchertransactionWrite)
    {
        $returnType = '\Spy\SitooClient\Model\InfluencervouchertransactionresponseRead';
        $request = $this->addInfluencerVoucherTransactionRequest($siteid, $influencercode, $influencervouchertransactionWrite);

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
     * Create request for operation 'addInfluencerVoucherTransaction'
     *
     * @param  int $siteid (required)
     * @param  int $influencercode (required)
     * @param  \Spy\SitooClient\Model\InfluencervouchertransactionWrite $influencervouchertransactionWrite (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function addInfluencerVoucherTransactionRequest($siteid, $influencercode, $influencervouchertransactionWrite)
    {
        // verify the required parameter 'siteid' is set
        if ($siteid === null || (is_array($siteid) && count($siteid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $siteid when calling addInfluencerVoucherTransaction'
            );
        }
        // verify the required parameter 'influencercode' is set
        if ($influencercode === null || (is_array($influencercode) && count($influencercode) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $influencercode when calling addInfluencerVoucherTransaction'
            );
        }
        // verify the required parameter 'influencervouchertransactionWrite' is set
        if ($influencervouchertransactionWrite === null || (is_array($influencervouchertransactionWrite) && count($influencervouchertransactionWrite) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $influencervouchertransactionWrite when calling addInfluencerVoucherTransaction'
            );
        }

        $resourcePath = '/sites/{siteid}/influencervouchers/{influencercode}/transactions.json';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($siteid !== null) {
            $resourcePath = str_replace(
                '{' . 'siteid' . '}',
                ObjectSerializer::toPathValue($siteid),
                $resourcePath
            );
        }
        // path params
        if ($influencercode !== null) {
            $resourcePath = str_replace(
                '{' . 'influencercode' . '}',
                ObjectSerializer::toPathValue($influencercode),
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
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($influencervouchertransactionWrite)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($influencervouchertransactionWrite));
            } else {
                $httpBody = $influencervouchertransactionWrite;
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
     * Operation deleteInfluencerVoucherTransaction
     *
     * @param  int $siteid siteid (required)
     * @param  int $influencercode influencercode (required)
     * @param  int $transactionid transactionid (required)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return bool
     */
    public function deleteInfluencerVoucherTransaction($siteid, $influencercode, $transactionid)
    {
        list($response) = $this->deleteInfluencerVoucherTransactionWithHttpInfo($siteid, $influencercode, $transactionid);
        return $response;
    }

    /**
     * Operation deleteInfluencerVoucherTransactionWithHttpInfo
     *
     * @param  int $siteid (required)
     * @param  int $influencercode (required)
     * @param  int $transactionid (required)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteInfluencerVoucherTransactionWithHttpInfo($siteid, $influencercode, $transactionid)
    {
        $request = $this->deleteInfluencerVoucherTransactionRequest($siteid, $influencercode, $transactionid);

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

            switch($statusCode) {
                case 200:
                    if ('bool' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('bool' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'bool', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'bool';
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
                        'bool',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteInfluencerVoucherTransactionAsync
     *
     * @param  int $siteid (required)
     * @param  int $influencercode (required)
     * @param  int $transactionid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteInfluencerVoucherTransactionAsync($siteid, $influencercode, $transactionid)
    {
        return $this->deleteInfluencerVoucherTransactionAsyncWithHttpInfo($siteid, $influencercode, $transactionid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteInfluencerVoucherTransactionAsyncWithHttpInfo
     *
     * @param  int $siteid (required)
     * @param  int $influencercode (required)
     * @param  int $transactionid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteInfluencerVoucherTransactionAsyncWithHttpInfo($siteid, $influencercode, $transactionid)
    {
        $returnType = 'bool';
        $request = $this->deleteInfluencerVoucherTransactionRequest($siteid, $influencercode, $transactionid);

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
     * Create request for operation 'deleteInfluencerVoucherTransaction'
     *
     * @param  int $siteid (required)
     * @param  int $influencercode (required)
     * @param  int $transactionid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteInfluencerVoucherTransactionRequest($siteid, $influencercode, $transactionid)
    {
        // verify the required parameter 'siteid' is set
        if ($siteid === null || (is_array($siteid) && count($siteid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $siteid when calling deleteInfluencerVoucherTransaction'
            );
        }
        // verify the required parameter 'influencercode' is set
        if ($influencercode === null || (is_array($influencercode) && count($influencercode) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $influencercode when calling deleteInfluencerVoucherTransaction'
            );
        }
        // verify the required parameter 'transactionid' is set
        if ($transactionid === null || (is_array($transactionid) && count($transactionid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transactionid when calling deleteInfluencerVoucherTransaction'
            );
        }

        $resourcePath = '/sites/{siteid}/influencervouchers/{influencercode}/transactions/{transactionid}.json';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($siteid !== null) {
            $resourcePath = str_replace(
                '{' . 'siteid' . '}',
                ObjectSerializer::toPathValue($siteid),
                $resourcePath
            );
        }
        // path params
        if ($influencercode !== null) {
            $resourcePath = str_replace(
                '{' . 'influencercode' . '}',
                ObjectSerializer::toPathValue($influencercode),
                $resourcePath
            );
        }
        // path params
        if ($transactionid !== null) {
            $resourcePath = str_replace(
                '{' . 'transactionid' . '}',
                ObjectSerializer::toPathValue($transactionid),
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
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getInfluencerVoucher
     *
     * @param  int $siteid siteid (required)
     * @param  int $influencercode influencercode (required)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Spy\SitooClient\Model\InfluencervoucherRead
     */
    public function getInfluencerVoucher($siteid, $influencercode)
    {
        list($response) = $this->getInfluencerVoucherWithHttpInfo($siteid, $influencercode);
        return $response;
    }

    /**
     * Operation getInfluencerVoucherWithHttpInfo
     *
     * @param  int $siteid (required)
     * @param  int $influencercode (required)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Spy\SitooClient\Model\InfluencervoucherRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInfluencerVoucherWithHttpInfo($siteid, $influencercode)
    {
        $request = $this->getInfluencerVoucherRequest($siteid, $influencercode);

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

            switch($statusCode) {
                case 200:
                    if ('\Spy\SitooClient\Model\InfluencervoucherRead' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Spy\SitooClient\Model\InfluencervoucherRead' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Spy\SitooClient\Model\InfluencervoucherRead', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Spy\SitooClient\Model\InfluencervoucherRead';
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
                        '\Spy\SitooClient\Model\InfluencervoucherRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getInfluencerVoucherAsync
     *
     * @param  int $siteid (required)
     * @param  int $influencercode (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInfluencerVoucherAsync($siteid, $influencercode)
    {
        return $this->getInfluencerVoucherAsyncWithHttpInfo($siteid, $influencercode)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInfluencerVoucherAsyncWithHttpInfo
     *
     * @param  int $siteid (required)
     * @param  int $influencercode (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInfluencerVoucherAsyncWithHttpInfo($siteid, $influencercode)
    {
        $returnType = '\Spy\SitooClient\Model\InfluencervoucherRead';
        $request = $this->getInfluencerVoucherRequest($siteid, $influencercode);

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
     * Create request for operation 'getInfluencerVoucher'
     *
     * @param  int $siteid (required)
     * @param  int $influencercode (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getInfluencerVoucherRequest($siteid, $influencercode)
    {
        // verify the required parameter 'siteid' is set
        if ($siteid === null || (is_array($siteid) && count($siteid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $siteid when calling getInfluencerVoucher'
            );
        }
        // verify the required parameter 'influencercode' is set
        if ($influencercode === null || (is_array($influencercode) && count($influencercode) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $influencercode when calling getInfluencerVoucher'
            );
        }

        $resourcePath = '/sites/{siteid}/influencervouchers/{influencercode}.json';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($siteid !== null) {
            $resourcePath = str_replace(
                '{' . 'siteid' . '}',
                ObjectSerializer::toPathValue($siteid),
                $resourcePath
            );
        }
        // path params
        if ($influencercode !== null) {
            $resourcePath = str_replace(
                '{' . 'influencercode' . '}',
                ObjectSerializer::toPathValue($influencercode),
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
