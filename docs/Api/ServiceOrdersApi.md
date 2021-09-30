# Spy\SitooClient\ServiceOrdersApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addServiceOrder()**](ServiceOrdersApi.md#addServiceOrder) | **POST** /serviceorders.json | 
[**getServiceOrder()**](ServiceOrdersApi.md#getServiceOrder) | **GET** /serviceorders/{service_order_id}.json | 
[**getServiceOrders()**](ServiceOrdersApi.md#getServiceOrders) | **GET** /serviceorders.json | 
[**updateServiceOrder()**](ServiceOrdersApi.md#updateServiceOrder) | **PUT** /serviceorders/{service_order_id}.json | 


## `addServiceOrder()`

```php
addServiceOrder($serviceOrderWrite)
```



Endpoint for adding service order in Sitoo Platform

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ServiceOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serviceOrderWrite = {state=new, store={id=STORE111, name=Barlay Shoe Inc}, owner={email=staff@example.com, name=Pete}, customer={first_name=Erica, last_name=Swansson, email=erica@example.com, mobile=+46701112233}, currency=SEK, product=[{sku=SHOE999, name=Barlay Shoe, services=[{sku=SERVICE_HEEL, name=Replace heel, quantity=1, unit_price=50.00, cost_share=0, note=Left foot}]}], author={email=anna@example.com, name=null, employee_id=null}}; // \Spy\SitooClient\Model\ServiceOrderWrite

try {
    $apiInstance->addServiceOrder($serviceOrderWrite);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOrdersApi->addServiceOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceOrderWrite** | [**\Spy\SitooClient\Model\ServiceOrderWrite**](../Model/ServiceOrderWrite.md)|  |

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

## `getServiceOrder()`

```php
getServiceOrder($serviceOrderId)
```



Endpoint for getting service order in Sitoo Platform

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ServiceOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serviceOrderId = 'serviceOrderId_example'; // string

try {
    $apiInstance->getServiceOrder($serviceOrderId);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOrdersApi->getServiceOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceOrderId** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceOrders()`

```php
getServiceOrders($store, $state, $startAfterId, $num, $sort)
```



Endpoint for getting service orders in Sitoo Platform

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ServiceOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store = 'store_example'; // string
$state = /serviceorders?state=new,in_progress; // string[]
$startAfterId = 'startAfterId_example'; // string
$num = 56; // int
$sort = 'sort_example'; // string

try {
    $apiInstance->getServiceOrders($store, $state, $startAfterId, $num, $sort);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOrdersApi->getServiceOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store** | **string**|  | [optional]
 **state** | [**string[]**](../Model/string.md)|  | [optional]
 **startAfterId** | **string**|  | [optional]
 **num** | **int**|  | [optional]
 **sort** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateServiceOrder()`

```php
updateServiceOrder($serviceOrderId, $serviceOrderWrite)
```



Endpoint for updating service order in Sitoo Platform. A HTTP response code of 412 means that the service order has been modified with a newer version and you need to read the latest data before updating again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ServiceOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serviceOrderId = 'serviceOrderId_example'; // string
$serviceOrderWrite = {state=in_progress, revision=1, author={email=anna@example.com, name=null, employee_id=null}}; // \Spy\SitooClient\Model\ServiceOrderWrite

try {
    $apiInstance->updateServiceOrder($serviceOrderId, $serviceOrderWrite);
} catch (Exception $e) {
    echo 'Exception when calling ServiceOrdersApi->updateServiceOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceOrderId** | **string**|  |
 **serviceOrderWrite** | [**\Spy\SitooClient\Model\ServiceOrderWrite**](../Model/ServiceOrderWrite.md)|  |

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
