# Spy\SitooClient\StoresApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addStore()**](StoresApi.md#addStore) | **POST** /sites/{siteid}/stores.json |  |
| [**deleteStore()**](StoresApi.md#deleteStore) | **DELETE** /sites/{siteid}/stores/{storeid}.json |  |
| [**getStore()**](StoresApi.md#getStore) | **GET** /sites/{siteid}/stores/{storeid}.json |  |
| [**getStores()**](StoresApi.md#getStores) | **GET** /sites/{siteid}/stores.json |  |
| [**updateStore()**](StoresApi.md#updateStore) | **PUT** /sites/{siteid}/stores/{storeid}.json |  |


## `addStore()`

```php
addStore($siteid, $storeWrite)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$storeWrite = {storetype=20, name=Outlet Store, externalid=OUTLET-1, externalgroupid=NA, state=NY, countryid=us, usetype_movein=10, usetype_moveout=20}; // \Spy\SitooClient\Model\StoreWrite

try {
    $apiInstance->addStore($siteid, $storeWrite);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->addStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **siteid** | **int**|  | |
| **storeWrite** | [**\Spy\SitooClient\Model\StoreWrite**](../Model/StoreWrite.md)|  | |

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

## `deleteStore()`

```php
deleteStore($siteid, $storeid): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$storeid = 56; // int

try {
    $result = $apiInstance->deleteStore($siteid, $storeid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->deleteStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **siteid** | **int**|  | |
| **storeid** | **int**|  | |

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

## `getStore()`

```php
getStore($siteid, $storeid): \Spy\SitooClient\Model\StoreRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$storeid = 56; // int

try {
    $result = $apiInstance->getStore($siteid, $storeid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **siteid** | **int**|  | |
| **storeid** | **int**|  | |

### Return type

[**\Spy\SitooClient\Model\StoreRead**](../Model/StoreRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStores()`

```php
getStores($siteid, $start, $num, $fields): \Spy\SitooClient\Model\GetStoresResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\StoresApi(
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
    $result = $apiInstance->getStores($siteid, $start, $num, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStores: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **siteid** | **int**|  | |
| **start** | **int**|  | [optional] |
| **num** | **int**|  | [optional] |
| **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional] |

### Return type

[**\Spy\SitooClient\Model\GetStoresResponse**](../Model/GetStoresResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStore()`

```php
updateStore($siteid, $storeid, $storeWrite): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$storeid = 56; // int
$storeWrite = {address=Main Street, city=New York}; // \Spy\SitooClient\Model\StoreWrite

try {
    $result = $apiInstance->updateStore($siteid, $storeid, $storeWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->updateStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **siteid** | **int**|  | |
| **storeid** | **int**|  | |
| **storeWrite** | [**\Spy\SitooClient\Model\StoreWrite**](../Model/StoreWrite.md)|  | |

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
