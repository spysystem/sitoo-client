# Spy\SitooClient\WarehouseBatchesApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addWarehouseBatch()**](WarehouseBatchesApi.md#addWarehouseBatch) | **POST** /sites/{siteid}/warehouses/{warehouseid}/warehousebatches.json |  |
[**batchDeleteWarehouseBatchItems()**](WarehouseBatchesApi.md#batchDeleteWarehouseBatchItems) | **DELETE** /sites/{siteid}/warehouses/{warehouseid}/warehousebatches/{warehousebatchid}/warehousebatchitems.json |  |
[**batchSetWarehouseBatchItems()**](WarehouseBatchesApi.md#batchSetWarehouseBatchItems) | **PUT** /sites/{siteid}/warehouses/{warehouseid}/warehousebatches/{warehousebatchid}/warehousebatchitems.json |  |
[**getWarehouseBatch()**](WarehouseBatchesApi.md#getWarehouseBatch) | **GET** /sites/{siteid}/warehouses/{warehouseid}/warehousebatches/{warehousebatchid}.json |  |
[**getWarehouseBatchItems()**](WarehouseBatchesApi.md#getWarehouseBatchItems) | **GET** /sites/{siteid}/warehouses/{warehouseid}/warehousebatches/{warehousebatchid}/warehousebatchitems.json |  |
[**getWarehouseBatches()**](WarehouseBatchesApi.md#getWarehouseBatches) | **GET** /sites/{siteid}/warehouses/{warehouseid}/warehousebatches.json |  |
[**updateWarehouseBatch()**](WarehouseBatchesApi.md#updateWarehouseBatch) | **PUT** /sites/{siteid}/warehouses/{warehouseid}/warehousebatches/{warehousebatchid}.json |  |


## `addWarehouseBatch()`

```php
addWarehouseBatch($siteid, $warehouseid, $warehousebatchWrite)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehouseBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$warehouseid = 56; // int
$warehousebatchWrite = {transactiontype=50, emailowner=info@example.com, comment=New Stocktaking}; // \Spy\SitooClient\Model\WarehousebatchWrite

try {
    $apiInstance->addWarehouseBatch($siteid, $warehouseid, $warehousebatchWrite);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseBatchesApi->addWarehouseBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **warehouseid** | **int**|  |
 **warehousebatchWrite** | [**\Spy\SitooClient\Model\WarehousebatchWrite**](../Model/WarehousebatchWrite.md)|  |

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

## `batchDeleteWarehouseBatchItems()`

```php
batchDeleteWarehouseBatchItems($siteid, $warehouseid, $warehousebatchid, $requestBody)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehouseBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$warehouseid = 56; // int
$warehousebatchid = 56; // int
$requestBody = [{sku=10038-2}, {sku=10038-3}]; // object[]

try {
    $apiInstance->batchDeleteWarehouseBatchItems($siteid, $warehouseid, $warehousebatchid, $requestBody);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseBatchesApi->batchDeleteWarehouseBatchItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **warehouseid** | **int**|  |
 **warehousebatchid** | **int**|  |
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

## `batchSetWarehouseBatchItems()`

```php
batchSetWarehouseBatchItems($siteid, $warehouseid, $warehousebatchid, $warehousebatchitemWrite)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehouseBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$warehouseid = 56; // int
$warehousebatchid = 56; // int
$warehousebatchitemWrite = [{sku=10038-1, decimalquantity=9.000, emailowner=info@example.com, comment=1 missing}, {sku=10038-2, decimalquantity=2.000, emailowner=info@example.com, comment=}, {sku=10038-3, decimalquantity=1.000}]; // \Spy\SitooClient\Model\WarehousebatchitemWrite[]

try {
    $apiInstance->batchSetWarehouseBatchItems($siteid, $warehouseid, $warehousebatchid, $warehousebatchitemWrite);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseBatchesApi->batchSetWarehouseBatchItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **warehouseid** | **int**|  |
 **warehousebatchid** | **int**|  |
 **warehousebatchitemWrite** | [**\Spy\SitooClient\Model\WarehousebatchitemWrite[]**](../Model/WarehousebatchitemWrite.md)|  |

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

## `getWarehouseBatch()`

```php
getWarehouseBatch($siteid, $warehouseid, $warehousebatchid): \Spy\SitooClient\Model\WarehousebatchRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehouseBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$warehouseid = 56; // int
$warehousebatchid = 56; // int

try {
    $result = $apiInstance->getWarehouseBatch($siteid, $warehouseid, $warehousebatchid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseBatchesApi->getWarehouseBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **warehouseid** | **int**|  |
 **warehousebatchid** | **int**|  |

### Return type

[**\Spy\SitooClient\Model\WarehousebatchRead**](../Model/WarehousebatchRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWarehouseBatchItems()`

```php
getWarehouseBatchItems($siteid, $warehouseid, $warehousebatchid, $start, $num, $fields): \Spy\SitooClient\Model\GetWarehouseBatchItemsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehouseBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$warehouseid = 56; // int
$warehousebatchid = 56; // int
$start = 56; // int
$num = 56; // int
$fields = array('fields_example'); // string[] | list of fields, comma-separated

try {
    $result = $apiInstance->getWarehouseBatchItems($siteid, $warehouseid, $warehousebatchid, $start, $num, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseBatchesApi->getWarehouseBatchItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **warehouseid** | **int**|  |
 **warehousebatchid** | **int**|  |
 **start** | **int**|  | [optional]
 **num** | **int**|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional]

### Return type

[**\Spy\SitooClient\Model\GetWarehouseBatchItemsResponse**](../Model/GetWarehouseBatchItemsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWarehouseBatches()`

```php
getWarehouseBatches($siteid, $warehouseid, $transactiontype, $warehousebatchstate, $start, $num, $fields): \Spy\SitooClient\Model\GetWarehouseBatchesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehouseBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$warehouseid = 56; // int
$transactiontype = 56; // int
$warehousebatchstate = 56; // int
$start = 56; // int
$num = 56; // int
$fields = array('fields_example'); // string[] | list of fields, comma-separated

try {
    $result = $apiInstance->getWarehouseBatches($siteid, $warehouseid, $transactiontype, $warehousebatchstate, $start, $num, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseBatchesApi->getWarehouseBatches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **warehouseid** | **int**|  |
 **transactiontype** | **int**|  | [optional]
 **warehousebatchstate** | **int**|  | [optional]
 **start** | **int**|  | [optional]
 **num** | **int**|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional]

### Return type

[**\Spy\SitooClient\Model\GetWarehouseBatchesResponse**](../Model/GetWarehouseBatchesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWarehouseBatch()`

```php
updateWarehouseBatch($siteid, $warehouseid, $warehousebatchid, $warehousebatchWrite): bool
```



Note! Changing the warehousebatchstate from 10 (Open) to 20 (Closed) will trigger the commit of a transaction for the batch items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehouseBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$warehouseid = 56; // int
$warehousebatchid = 56; // int
$warehousebatchWrite = {warehousebatchstate=20, emailowner=info@example.com, comment=Stocktaking has been completed!}; // \Spy\SitooClient\Model\WarehousebatchWrite

try {
    $result = $apiInstance->updateWarehouseBatch($siteid, $warehouseid, $warehousebatchid, $warehousebatchWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseBatchesApi->updateWarehouseBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **warehouseid** | **int**|  |
 **warehousebatchid** | **int**|  |
 **warehousebatchWrite** | [**\Spy\SitooClient\Model\WarehousebatchWrite**](../Model/WarehousebatchWrite.md)|  |

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
