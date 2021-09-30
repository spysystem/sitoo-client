# Spy\SitooClient\CashRegistersApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCashRegister()**](CashRegistersApi.md#getCashRegister) | **GET** /sites/{siteid}/cashregisters/{registerid}.json | 
[**getCashRegisters()**](CashRegistersApi.md#getCashRegisters) | **GET** /sites/{siteid}/cashregisters.json | 
[**getZReport()**](CashRegistersApi.md#getZReport) | **GET** /sites/{siteid}/cashregisters/{registerid}/zreports/{zreportid}.json | 
[**getZReports()**](CashRegistersApi.md#getZReports) | **GET** /sites/{siteid}/cashregisters/{registerid}/zreports.json | 


## `getCashRegister()`

```php
getCashRegister($siteid, $registerid): \Spy\SitooClient\Model\PosregisterRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\CashRegistersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$registerid = 'registerid_example'; // string

try {
    $result = $apiInstance->getCashRegister($siteid, $registerid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashRegistersApi->getCashRegister: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **registerid** | **string**|  |

### Return type

[**\Spy\SitooClient\Model\PosregisterRead**](../Model/PosregisterRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCashRegisters()`

```php
getCashRegisters($siteid, $start, $num): \Spy\SitooClient\Model\GetCashRegistersResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\CashRegistersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$start = 56; // int
$num = 56; // int

try {
    $result = $apiInstance->getCashRegisters($siteid, $start, $num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashRegistersApi->getCashRegisters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **start** | **int**|  | [optional]
 **num** | **int**|  | [optional]

### Return type

[**\Spy\SitooClient\Model\GetCashRegistersResponse**](../Model/GetCashRegistersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZReport()`

```php
getZReport($siteid, $registerid, $zreportid): \Spy\SitooClient\Model\PoszreportRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\CashRegistersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$registerid = 'registerid_example'; // string
$zreportid = 56; // int

try {
    $result = $apiInstance->getZReport($siteid, $registerid, $zreportid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashRegistersApi->getZReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **registerid** | **string**|  |
 **zreportid** | **int**|  |

### Return type

[**\Spy\SitooClient\Model\PoszreportRead**](../Model/PoszreportRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZReports()`

```php
getZReports($siteid, $registerid, $datecreatedfrom, $datecreatedto, $start, $num): \Spy\SitooClient\Model\GetZReportsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\CashRegistersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$registerid = 'registerid_example'; // string
$datecreatedfrom = 56; // int
$datecreatedto = 56; // int
$start = 56; // int
$num = 56; // int

try {
    $result = $apiInstance->getZReports($siteid, $registerid, $datecreatedfrom, $datecreatedto, $start, $num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashRegistersApi->getZReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **registerid** | **string**|  |
 **datecreatedfrom** | **int**|  | [optional]
 **datecreatedto** | **int**|  | [optional]
 **start** | **int**|  | [optional]
 **num** | **int**|  | [optional]

### Return type

[**\Spy\SitooClient\Model\GetZReportsResponse**](../Model/GetZReportsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
