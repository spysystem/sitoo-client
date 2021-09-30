# Spy\SitooClient\WarehousesApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addWarehouse()**](WarehousesApi.md#addWarehouse) | **POST** /sites/{siteid}/warehouses.json | 
[**batchSetWarehouseItems()**](WarehousesApi.md#batchSetWarehouseItems) | **PUT** /sites/{siteid}/warehouses/{warehouseid}/warehouseitems.json | 
[**deleteWarehouse()**](WarehousesApi.md#deleteWarehouse) | **DELETE** /sites/{siteid}/warehouses/{warehouseid}.json | 
[**getWarehouse()**](WarehousesApi.md#getWarehouse) | **GET** /sites/{siteid}/warehouses/{warehouseid}.json | 
[**getWarehouseItems()**](WarehousesApi.md#getWarehouseItems) | **GET** /sites/{siteid}/warehouses/{warehouseid}/warehouseitems.json | 
[**getWarehouses()**](WarehousesApi.md#getWarehouses) | **GET** /sites/{siteid}/warehouses.json | 
[**updateWarehouse()**](WarehousesApi.md#updateWarehouse) | **PUT** /sites/{siteid}/warehouses/{warehouseid}.json | 


## `addWarehouse()`

```php
addWarehouse($siteid, $warehouseWrite)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$warehouseWrite = {usetype=40, currencycode=USD, name=Reclaims}; // \Spy\SitooClient\Model\WarehouseWrite

try {
    $apiInstance->addWarehouse($siteid, $warehouseWrite);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->addWarehouse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **warehouseWrite** | [**\Spy\SitooClient\Model\WarehouseWrite**](../Model/WarehouseWrite.md)|  |

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

## `batchSetWarehouseItems()`

```php
batchSetWarehouseItems($siteid, $warehouseid, $warehouseitemWrite)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$warehouseid = 56; // int
$warehouseitemWrite = [{sku=10038-1, binlocation=I3:S4, decimalthreshold=10.000}, {sku=10038-2, binlocation=I3:S5, decimalthreshold=3.000}]; // \Spy\SitooClient\Model\WarehouseitemWrite[]

try {
    $apiInstance->batchSetWarehouseItems($siteid, $warehouseid, $warehouseitemWrite);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->batchSetWarehouseItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **warehouseid** | **int**|  |
 **warehouseitemWrite** | [**\Spy\SitooClient\Model\WarehouseitemWrite[]**](../Model/WarehouseitemWrite.md)|  |

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

## `deleteWarehouse()`

```php
deleteWarehouse($siteid, $warehouseid): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$warehouseid = 56; // int

try {
    $result = $apiInstance->deleteWarehouse($siteid, $warehouseid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->deleteWarehouse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **warehouseid** | **int**|  |

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

## `getWarehouse()`

```php
getWarehouse($siteid, $warehouseid): \Spy\SitooClient\Model\WarehouseRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$warehouseid = 56; // int

try {
    $result = $apiInstance->getWarehouse($siteid, $warehouseid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->getWarehouse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **warehouseid** | **int**|  |

### Return type

[**\Spy\SitooClient\Model\WarehouseRead**](../Model/WarehouseRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWarehouseItems()`

```php
getWarehouseItems($siteid, $warehouseid, $start, $num, $datelastmodifiedfrom, $datelastmodifiedto, $sku, $fields): \Spy\SitooClient\Model\GetWarehouseItemsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$warehouseid = 56; // int
$start = 56; // int
$num = 56; // int
$datelastmodifiedfrom = 56; // int
$datelastmodifiedto = 56; // int
$sku = /sites/{siteid}/warehouses/{warehouseid}/warehouseitems?sku=123456,23456; // string[]
$fields = array('fields_example'); // string[] | list of fields, comma-separated

try {
    $result = $apiInstance->getWarehouseItems($siteid, $warehouseid, $start, $num, $datelastmodifiedfrom, $datelastmodifiedto, $sku, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->getWarehouseItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **warehouseid** | **int**|  |
 **start** | **int**|  | [optional]
 **num** | **int**|  | [optional]
 **datelastmodifiedfrom** | **int**|  | [optional]
 **datelastmodifiedto** | **int**|  | [optional]
 **sku** | [**string[]**](../Model/string.md)|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional]

### Return type

[**\Spy\SitooClient\Model\GetWarehouseItemsResponse**](../Model/GetWarehouseItemsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWarehouses()`

```php
getWarehouses($siteid, $start, $num, $fields): \Spy\SitooClient\Model\GetWarehousesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehousesApi(
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
    $result = $apiInstance->getWarehouses($siteid, $start, $num, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->getWarehouses: ', $e->getMessage(), PHP_EOL;
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

[**\Spy\SitooClient\Model\GetWarehousesResponse**](../Model/GetWarehousesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWarehouse()`

```php
updateWarehouse($siteid, $warehouseid, $warehouseWrite): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$warehouseid = 56; // int
$warehouseWrite = {name=Demo, usetype=20}; // \Spy\SitooClient\Model\WarehouseWrite

try {
    $result = $apiInstance->updateWarehouse($siteid, $warehouseid, $warehouseWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehousesApi->updateWarehouse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **warehouseid** | **int**|  |
 **warehouseWrite** | [**\Spy\SitooClient\Model\WarehouseWrite**](../Model/WarehouseWrite.md)|  |

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
