<?php
/**
 * SitesApi
 * PHP version 7.4
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
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Spy\SitooClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
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
 * SitesApi Class Doc Comment
 *
 * @category Class
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SitesApi
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
    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getSite' => [
            'application/json',
        ],
        'getSites' => [
            'application/json',
        ],
    ];

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
     * Operation getSite
     *
     * @param  int $siteid siteid (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSite'] to see the possible values for this operation
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Spy\SitooClient\Model\SiteRead
     */
    public function getSite($siteid, string $contentType = self::contentTypes['getSite'][0])
    {
        list($response) = $this->getSiteWithHttpInfo($siteid, $contentType);
        return $response;
    }

    /**
     * Operation getSiteWithHttpInfo
     *
     * @param  int $siteid (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSite'] to see the possible values for this operation
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Spy\SitooClient\Model\SiteRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSiteWithHttpInfo($siteid, string $contentType = self::contentTypes['getSite'][0])
    {
        $request = $this->getSiteRequest($siteid, $contentType);

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
                    if ('\Spy\SitooClient\Model\SiteRead' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Spy\SitooClient\Model\SiteRead' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Spy\SitooClient\Model\SiteRead', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Spy\SitooClient\Model\SiteRead';
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
                        '\Spy\SitooClient\Model\SiteRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getSiteAsync
     *
     * @param  int $siteid (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSite'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSiteAsync($siteid, string $contentType = self::contentTypes['getSite'][0])
    {
        return $this->getSiteAsyncWithHttpInfo($siteid, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSiteAsyncWithHttpInfo
     *
     * @param  int $siteid (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSite'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSiteAsyncWithHttpInfo($siteid, string $contentType = self::contentTypes['getSite'][0])
    {
        $returnType = '\Spy\SitooClient\Model\SiteRead';
        $request = $this->getSiteRequest($siteid, $contentType);

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
     * Create request for operation 'getSite'
     *
     * @param  int $siteid (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSite'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getSiteRequest($siteid, string $contentType = self::contentTypes['getSite'][0])
    {

        // verify the required parameter 'siteid' is set
        if ($siteid === null || (is_array($siteid) && count($siteid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $siteid when calling getSite'
            );
        }


        $resourcePath = '/sites/{siteid}.json';
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


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
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
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
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
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getSites
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSites'] to see the possible values for this operation
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Spy\SitooClient\Model\GetSitesResponse
     */
    public function getSites(string $contentType = self::contentTypes['getSites'][0])
    {
        list($response) = $this->getSitesWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation getSitesWithHttpInfo
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSites'] to see the possible values for this operation
     *
     * @throws \Spy\SitooClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Spy\SitooClient\Model\GetSitesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSitesWithHttpInfo(string $contentType = self::contentTypes['getSites'][0])
    {
        $request = $this->getSitesRequest($contentType);

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
                    if ('\Spy\SitooClient\Model\GetSitesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Spy\SitooClient\Model\GetSitesResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Spy\SitooClient\Model\GetSitesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Spy\SitooClient\Model\GetSitesResponse';
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
                        '\Spy\SitooClient\Model\GetSitesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getSitesAsync
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSites'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSitesAsync(string $contentType = self::contentTypes['getSites'][0])
    {
        return $this->getSitesAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSitesAsyncWithHttpInfo
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSites'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSitesAsyncWithHttpInfo(string $contentType = self::contentTypes['getSites'][0])
    {
        $returnType = '\Spy\SitooClient\Model\GetSitesResponse';
        $request = $this->getSitesRequest($contentType);

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
     * Create request for operation 'getSites'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSites'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getSitesRequest(string $contentType = self::contentTypes['getSites'][0])
    {


        $resourcePath = '/sites.json';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
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
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
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
