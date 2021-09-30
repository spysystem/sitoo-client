# Spy\SitooClient\PriceListsApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPriceList()**](PriceListsApi.md#addPriceList) | **POST** /sites/{siteid}/pricelists.json | 
[**batchDeletePriceListItems()**](PriceListsApi.md#batchDeletePriceListItems) | **DELETE** /sites/{siteid}/pricelists/{pricelistid}/pricelistitems.json | 
[**batchSetPriceListItems()**](PriceListsApi.md#batchSetPriceListItems) | **PUT** /sites/{siteid}/pricelists/{pricelistid}/pricelistitems.json | 
[**deletePriceList()**](PriceListsApi.md#deletePriceList) | **DELETE** /sites/{siteid}/pricelists/{pricelistid}.json | 
[**getPriceList()**](PriceListsApi.md#getPriceList) | **GET** /sites/{siteid}/pricelists/{pricelistid}.json | 
[**getPriceLists()**](PriceListsApi.md#getPriceLists) | **GET** /sites/{siteid}/pricelists.json | 
[**getPriceListsItems()**](PriceListsApi.md#getPriceListsItems) | **GET** /sites/{siteid}/pricelists/{pricelistid}/pricelistitems.json | 
[**updatePriceList()**](PriceListsApi.md#updatePriceList) | **PUT** /sites/{siteid}/pricelists/{pricelistid}.json | 


## `addPriceList()`

```php
addPriceList($siteid, $pricelistWrite)
```



Note! The total number of price lists allowed is limited to 100.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$pricelistWrite = {pricelistname=Resellers}; // \Spy\SitooClient\Model\PricelistWrite

try {
    $apiInstance->addPriceList($siteid, $pricelistWrite);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->addPriceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **pricelistWrite** | [**\Spy\SitooClient\Model\PricelistWrite**](../Model/PricelistWrite.md)|  |

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

## `batchDeletePriceListItems()`

```php
batchDeletePriceListItems($siteid, $pricelistid, $requestBody)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$pricelistid = 56; // int
$requestBody = [{sku=36305-1}, {sku=36401-1}, {sku=36522-3}]; // object[]

try {
    $apiInstance->batchDeletePriceListItems($siteid, $pricelistid, $requestBody);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->batchDeletePriceListItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **pricelistid** | **int**|  |
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

## `batchSetPriceListItems()`

```php
batchSetPriceListItems($siteid, $pricelistid, $pricelistitemWrite): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$pricelistid = 56; // int
$pricelistitemWrite = [{sku=36305-1, moneyprice=795.00}, {sku=36401-1, moneyprice=895.00, moneypricevolume=[{levelstart=2, moneyprice=849.00}, {levelstart=4, moneyprice=749.00}]}, {sku=36522-3, moneyprice=849.00, moneypricevolume=[{levelstart=4, moneyprice=729.00}]}]; // \Spy\SitooClient\Model\PricelistitemWrite[]

try {
    $result = $apiInstance->batchSetPriceListItems($siteid, $pricelistid, $pricelistitemWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->batchSetPriceListItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **pricelistid** | **int**|  |
 **pricelistitemWrite** | [**\Spy\SitooClient\Model\PricelistitemWrite[]**](../Model/PricelistitemWrite.md)|  |

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

## `deletePriceList()`

```php
deletePriceList($siteid, $pricelistid): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$pricelistid = 56; // int

try {
    $result = $apiInstance->deletePriceList($siteid, $pricelistid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->deletePriceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **pricelistid** | **int**|  |

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

## `getPriceList()`

```php
getPriceList($siteid, $pricelistid): \Spy\SitooClient\Model\PricelistRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$pricelistid = 56; // int

try {
    $result = $apiInstance->getPriceList($siteid, $pricelistid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->getPriceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **pricelistid** | **int**|  |

### Return type

[**\Spy\SitooClient\Model\PricelistRead**](../Model/PricelistRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceLists()`

```php
getPriceLists($siteid, $start, $num, $fields): \Spy\SitooClient\Model\GetPriceListsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\PriceListsApi(
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
    $result = $apiInstance->getPriceLists($siteid, $start, $num, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->getPriceLists: ', $e->getMessage(), PHP_EOL;
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

[**\Spy\SitooClient\Model\GetPriceListsResponse**](../Model/GetPriceListsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceListsItems()`

```php
getPriceListsItems($siteid, $pricelistid, $start, $num, $fields): \Spy\SitooClient\Model\GetPriceListsItemsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$pricelistid = 56; // int
$start = 56; // int
$num = 56; // int
$fields = array('fields_example'); // string[] | list of fields, comma-separated

try {
    $result = $apiInstance->getPriceListsItems($siteid, $pricelistid, $start, $num, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->getPriceListsItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **pricelistid** | **int**|  |
 **start** | **int**|  | [optional]
 **num** | **int**|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional]

### Return type

[**\Spy\SitooClient\Model\GetPriceListsItemsResponse**](../Model/GetPriceListsItemsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePriceList()`

```php
updatePriceList($siteid, $pricelistid, $pricelistWrite): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$pricelistid = 56; // int
$pricelistWrite = {pricelistdescription=Pricelist for Resellers}; // \Spy\SitooClient\Model\PricelistWrite

try {
    $result = $apiInstance->updatePriceList($siteid, $pricelistid, $pricelistWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->updatePriceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **pricelistid** | **int**|  |
 **pricelistWrite** | [**\Spy\SitooClient\Model\PricelistWrite**](../Model/PricelistWrite.md)|  |

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
