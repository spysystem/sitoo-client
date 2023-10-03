# Spy\SitooClient\InfluencerCodesApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchAddInfluencerCodes()**](InfluencerCodesApi.md#batchAddInfluencerCodes) | **POST** /sites/{siteid}/influencercodes.json |  |
[**batchDeleteInfluencerCodes()**](InfluencerCodesApi.md#batchDeleteInfluencerCodes) | **DELETE** /sites/{siteid}/influencercodes.json |  |
[**batchUpdateInfluencerCodes()**](InfluencerCodesApi.md#batchUpdateInfluencerCodes) | **PUT** /sites/{siteid}/influencercodes.json |  |
[**getInfluencerCode()**](InfluencerCodesApi.md#getInfluencerCode) | **GET** /sites/{siteid}/influencercodes/{code}.json |  |
[**getInfluencerCodes()**](InfluencerCodesApi.md#getInfluencerCodes) | **GET** /sites/{siteid}/influencercodes.json |  |


## `batchAddInfluencerCodes()`

```php
batchAddInfluencerCodes($siteid, $influencercodeWrite)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\InfluencerCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$influencercodeWrite = [{code=SCRAPBOOK101, name=Emily Hadfield, active=false, voucherpassword=RLFm3bef, vouchername=All scrapbooks 10% off, maxuses=1400}]; // \Spy\SitooClient\Model\InfluencercodeWrite[]

try {
    $apiInstance->batchAddInfluencerCodes($siteid, $influencercodeWrite);
} catch (Exception $e) {
    echo 'Exception when calling InfluencerCodesApi->batchAddInfluencerCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **influencercodeWrite** | [**\Spy\SitooClient\Model\InfluencercodeWrite[]**](../Model/InfluencercodeWrite.md)|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchDeleteInfluencerCodes()`

```php
batchDeleteInfluencerCodes($siteid, $requestBody)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\InfluencerCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$requestBody = [{code=SCRAPBOOK101}]; // object[]

try {
    $apiInstance->batchDeleteInfluencerCodes($siteid, $requestBody);
} catch (Exception $e) {
    echo 'Exception when calling InfluencerCodesApi->batchDeleteInfluencerCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **requestBody** | [**object[]**](../Model/object.md)|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchUpdateInfluencerCodes()`

```php
batchUpdateInfluencerCodes($siteid, $influencercodeWrite)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\InfluencerCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$influencercodeWrite = [{code=SCRAPBOOK101, maxuses=2000}]; // \Spy\SitooClient\Model\InfluencercodeWrite[]

try {
    $apiInstance->batchUpdateInfluencerCodes($siteid, $influencercodeWrite);
} catch (Exception $e) {
    echo 'Exception when calling InfluencerCodesApi->batchUpdateInfluencerCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **influencercodeWrite** | [**\Spy\SitooClient\Model\InfluencercodeWrite[]**](../Model/InfluencercodeWrite.md)|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInfluencerCode()`

```php
getInfluencerCode($siteid, $code, $fields): \Spy\SitooClient\Model\InfluencercodeRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\InfluencerCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$code = 56; // int
$fields = array('fields_example'); // string[] | list of fields, comma-separated

try {
    $result = $apiInstance->getInfluencerCode($siteid, $code, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfluencerCodesApi->getInfluencerCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **code** | **int**|  |
 **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional]

### Return type

[**\Spy\SitooClient\Model\InfluencercodeRead**](../Model/InfluencercodeRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInfluencerCodes()`

```php
getInfluencerCodes($siteid, $start, $num, $fields): \Spy\SitooClient\Model\GetInfluencerCodesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\InfluencerCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$start = 56; // int
$num = 56; // int
$fields = array('fields_example'); // string[] | list of fields, comma-separated

try {
    $result = $apiInstance->getInfluencerCodes($siteid, $start, $num, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfluencerCodesApi->getInfluencerCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **start** | **int**|  | [optional]
 **num** | **int**|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional]

### Return type

[**\Spy\SitooClient\Model\GetInfluencerCodesResponse**](../Model/GetInfluencerCodesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
