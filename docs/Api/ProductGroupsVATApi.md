# Spy\SitooClient\ProductGroupsVATApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addProductGroup()**](ProductGroupsVATApi.md#addProductGroup) | **POST** /sites/{siteid}/productgroups.json |  |
[**deleteProductGroup()**](ProductGroupsVATApi.md#deleteProductGroup) | **DELETE** /sites/{siteid}/productgroups/{vatid}.json |  |
[**getProductGroup()**](ProductGroupsVATApi.md#getProductGroup) | **GET** /sites/{siteid}/productgroups/{vatid}.json |  |
[**getProductGroups()**](ProductGroupsVATApi.md#getProductGroups) | **GET** /sites/{siteid}/productgroups.json |  |
[**updateProductGroup()**](ProductGroupsVATApi.md#updateProductGroup) | **PUT** /sites/{siteid}/productgroups/{vatid}.json |  |


## `addProductGroup()`

```php
addProductGroup($siteid, $productgroupWrite)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductGroupsVATApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$productgroupWrite = {value=0, productgrouptype=30, productgroupname=Gift Card}; // \Spy\SitooClient\Model\ProductgroupWrite

try {
    $apiInstance->addProductGroup($siteid, $productgroupWrite);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupsVATApi->addProductGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **productgroupWrite** | [**\Spy\SitooClient\Model\ProductgroupWrite**](../Model/ProductgroupWrite.md)|  |

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

## `deleteProductGroup()`

```php
deleteProductGroup($siteid, $vatid): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductGroupsVATApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$vatid = 56; // int

try {
    $result = $apiInstance->deleteProductGroup($siteid, $vatid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupsVATApi->deleteProductGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **vatid** | **int**|  |

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

## `getProductGroup()`

```php
getProductGroup($siteid, $vatid): \Spy\SitooClient\Model\ProductgroupRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductGroupsVATApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$vatid = 56; // int

try {
    $result = $apiInstance->getProductGroup($siteid, $vatid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupsVATApi->getProductGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **vatid** | **int**|  |

### Return type

[**\Spy\SitooClient\Model\ProductgroupRead**](../Model/ProductgroupRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductGroups()`

```php
getProductGroups($siteid, $start, $num, $fields): \Spy\SitooClient\Model\GetProductGroupsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductGroupsVATApi(
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
    $result = $apiInstance->getProductGroups($siteid, $start, $num, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupsVATApi->getProductGroups: ', $e->getMessage(), PHP_EOL;
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

[**\Spy\SitooClient\Model\GetProductGroupsResponse**](../Model/GetProductGroupsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductGroup()`

```php
updateProductGroup($siteid, $vatid, $productgroupWrite): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductGroupsVATApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$vatid = 56; // int
$productgroupWrite = {value=14}; // \Spy\SitooClient\Model\ProductgroupWrite

try {
    $result = $apiInstance->updateProductGroup($siteid, $vatid, $productgroupWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupsVATApi->updateProductGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **vatid** | **int**|  |
 **productgroupWrite** | [**\Spy\SitooClient\Model\ProductgroupWrite**](../Model/ProductgroupWrite.md)|  |

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
