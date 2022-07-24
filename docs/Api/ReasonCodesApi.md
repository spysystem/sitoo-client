# Spy\SitooClient\ReasonCodesApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addReasonCode()**](ReasonCodesApi.md#addReasonCode) | **POST** /reasoncodes.json |  |
| [**deleteReasonCode()**](ReasonCodesApi.md#deleteReasonCode) | **DELETE** /reasoncodes/{reasoncodeid}.json |  |
| [**getReasonCode()**](ReasonCodesApi.md#getReasonCode) | **GET** /reasoncodes/{reasoncodeid}.json |  |
| [**getReasonCodes()**](ReasonCodesApi.md#getReasonCodes) | **GET** /reasoncodes.json |  |
| [**updateReasonCode()**](ReasonCodesApi.md#updateReasonCode) | **PUT** /reasoncodes/{reasoncodeid}.json |  |


## `addReasonCode()`

```php
addReasonCode($reasoncodeWrite)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ReasonCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reasoncodeWrite = {type=10, reasoncode=103, name=Reclaims}; // \Spy\SitooClient\Model\ReasoncodeWrite

try {
    $apiInstance->addReasonCode($reasoncodeWrite);
} catch (Exception $e) {
    echo 'Exception when calling ReasonCodesApi->addReasonCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reasoncodeWrite** | [**\Spy\SitooClient\Model\ReasoncodeWrite**](../Model/ReasoncodeWrite.md)|  | |

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

## `deleteReasonCode()`

```php
deleteReasonCode($reasoncodeid): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ReasonCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reasoncodeid = 56; // int

try {
    $result = $apiInstance->deleteReasonCode($reasoncodeid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReasonCodesApi->deleteReasonCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reasoncodeid** | **int**|  | |

### Return type

**bool**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReasonCode()`

```php
getReasonCode($reasoncodeid): \Spy\SitooClient\Model\ReasoncodeRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ReasonCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reasoncodeid = 56; // int

try {
    $result = $apiInstance->getReasonCode($reasoncodeid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReasonCodesApi->getReasonCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reasoncodeid** | **int**|  | |

### Return type

[**\Spy\SitooClient\Model\ReasoncodeRead**](../Model/ReasoncodeRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReasonCodes()`

```php
getReasonCodes($type, $start, $num, $fields): \Spy\SitooClient\Model\GetReasonCodesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ReasonCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = /reasoncodes?type=10,20; // int[]
$start = 56; // int
$num = 56; // int
$fields = array('fields_example'); // string[] | list of fields, comma-separated

try {
    $result = $apiInstance->getReasonCodes($type, $start, $num, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReasonCodesApi->getReasonCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**int[]**](../Model/int.md)|  | [optional] |
| **start** | **int**|  | [optional] |
| **num** | **int**|  | [optional] |
| **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional] |

### Return type

[**\Spy\SitooClient\Model\GetReasonCodesResponse**](../Model/GetReasonCodesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReasonCode()`

```php
updateReasonCode($reasoncodeid, $reasoncodeWrite): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ReasonCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reasoncodeid = 56; // int
$reasoncodeWrite = {name=Customer Reclaim}; // \Spy\SitooClient\Model\ReasoncodeWrite

try {
    $result = $apiInstance->updateReasonCode($reasoncodeid, $reasoncodeWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReasonCodesApi->updateReasonCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reasoncodeid** | **int**|  | |
| **reasoncodeWrite** | [**\Spy\SitooClient\Model\ReasoncodeWrite**](../Model/ReasoncodeWrite.md)|  | |

### Return type

**bool**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
