<?php
/**
 * ProductVariantsApi
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
 * ProductVariantsApi Class Doc Comment
 *
 * @category Class
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductVariantsApi
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
    public function setHostIndex($hostIndex)
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
     * Operation getProductVariants
     *
     * @param  int $siteid siteid (required)
     * @param  int $productid productid (required)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Spy\SitooClient\Model\ProductvariantsRead
     */
    public function getProductVariants($siteid, $productid)
    {
        list($response) = $this->getProductVariantsWithHttpInfo($siteid, $productid);
        return $response;
    }

    /**
     * Operation getProductVariantsWithHttpInfo
     *
     * @param  int $siteid (required)
     * @param  int $productid (required)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Spy\SitooClient\Model\ProductvariantsRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductVariantsWithHttpInfo($siteid, $productid)
    {
        $request = $this->getProductVariantsRequest($siteid, $productid);

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

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Spy\SitooClient\Model\ProductvariantsRead' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                        if ('\Spy\SitooClient\Model\ProductvariantsRead' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Spy\SitooClient\Model\ProductvariantsRead', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Spy\SitooClient\Model\ProductvariantsRead';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
                if ('\Spy\SitooClient\Model\ProductvariantsRead' !== 'string') {
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
                        '\Spy\SitooClient\Model\ProductvariantsRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProductVariantsAsync
     *
     * 
     *
     * @param  int $siteid (required)
     * @param  int $productid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductVariantsAsync($siteid, $productid)
    {
        return $this->getProductVariantsAsyncWithHttpInfo($siteid, $productid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductVariantsAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $siteid (required)
     * @param  int $productid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductVariantsAsyncWithHttpInfo($siteid, $productid)
    {
        $returnType = '\Spy\SitooClient\Model\ProductvariantsRead';
        $request = $this->getProductVariantsRequest($siteid, $productid);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProductVariants'
     *
     * @param  int $siteid (required)
     * @param  int $productid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getProductVariantsRequest($siteid, $productid)
    {
        // verify the required parameter 'siteid' is set
        if ($siteid === null || (is_array($siteid) && count($siteid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $siteid when calling getProductVariants'
            );
        }
        // verify the required parameter 'productid' is set
        if ($productid === null || (is_array($productid) && count($productid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $productid when calling getProductVariants'
            );
        }

        $resourcePath = '/sites/{siteid}/products/{productid}/productvariants';
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
        if ($productid !== null) {
            $resourcePath = str_replace(
                '{' . 'productid' . '}',
                ObjectSerializer::toPathValue($productid),
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


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation setProductVariants
     *
     * @param  int $siteid siteid (required)
     * @param  int $productid productid (required)
     * @param  \Spy\SitooClient\Model\ProductvariantsWrite $productvariantsWrite productvariantsWrite (required)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return bool
     */
    public function setProductVariants($siteid, $productid, $productvariantsWrite)
    {
        list($response) = $this->setProductVariantsWithHttpInfo($siteid, $productid, $productvariantsWrite);
        return $response;
    }

    /**
     * Operation setProductVariantsWithHttpInfo
     *
     * @param  int $siteid (required)
     * @param  int $productid (required)
     * @param  \Spy\SitooClient\Model\ProductvariantsWrite $productvariantsWrite (required)
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function setProductVariantsWithHttpInfo($siteid, $productid, $productvariantsWrite)
    {
        $request = $this->setProductVariantsRequest($siteid, $productid, $productvariantsWrite);

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

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('bool' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
                if ('bool' !== 'string') {
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
     * Operation setProductVariantsAsync
     *
     * 
     *
     * @param  int $siteid (required)
     * @param  int $productid (required)
     * @param  \Spy\SitooClient\Model\ProductvariantsWrite $productvariantsWrite (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setProductVariantsAsync($siteid, $productid, $productvariantsWrite)
    {
        return $this->setProductVariantsAsyncWithHttpInfo($siteid, $productid, $productvariantsWrite)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation setProductVariantsAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $siteid (required)
     * @param  int $productid (required)
     * @param  \Spy\SitooClient\Model\ProductvariantsWrite $productvariantsWrite (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setProductVariantsAsyncWithHttpInfo($siteid, $productid, $productvariantsWrite)
    {
        $returnType = 'bool';
        $request = $this->setProductVariantsRequest($siteid, $productid, $productvariantsWrite);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'setProductVariants'
     *
     * @param  int $siteid (required)
     * @param  int $productid (required)
     * @param  \Spy\SitooClient\Model\ProductvariantsWrite $productvariantsWrite (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function setProductVariantsRequest($siteid, $productid, $productvariantsWrite)
    {
        // verify the required parameter 'siteid' is set
        if ($siteid === null || (is_array($siteid) && count($siteid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $siteid when calling setProductVariants'
            );
        }
        // verify the required parameter 'productid' is set
        if ($productid === null || (is_array($productid) && count($productid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $productid when calling setProductVariants'
            );
        }
        // verify the required parameter 'productvariantsWrite' is set
        if ($productvariantsWrite === null || (is_array($productvariantsWrite) && count($productvariantsWrite) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $productvariantsWrite when calling setProductVariants'
            );
        }

        $resourcePath = '/sites/{siteid}/products/{productid}/productvariants';
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
        if ($productid !== null) {
            $resourcePath = str_replace(
                '{' . 'productid' . '}',
                ObjectSerializer::toPathValue($productid),
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
        if (isset($productvariantsWrite)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($productvariantsWrite));
            } else {
                $httpBody = $productvariantsWrite;
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


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
