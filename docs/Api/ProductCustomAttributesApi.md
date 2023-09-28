# Spy\SitooClient\ProductCustomAttributesApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCustomAttribute()**](ProductCustomAttributesApi.md#addCustomAttribute) | **POST** /sites/{siteid}/customattributes.json |  |
[**deleteCustomAttribute()**](ProductCustomAttributesApi.md#deleteCustomAttribute) | **DELETE** /sites/{siteid}/customattributes/{attributeid}.json |  |
[**getCustomAttribute()**](ProductCustomAttributesApi.md#getCustomAttribute) | **GET** /sites/{siteid}/customattributes/{attributeid}.json |  |
[**getCustomAttributes()**](ProductCustomAttributesApi.md#getCustomAttributes) | **GET** /sites/{siteid}/customattributes.json |  |
[**updateCustomAttribute()**](ProductCustomAttributesApi.md#updateCustomAttribute) | **PUT** /sites/{siteid}/customattributes/{attributeid}.json |  |


## `addCustomAttribute()`

```php
addCustomAttribute($siteid, $customAttributeWrite)
```



Endpoint for adding custom attributes to use for products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductCustomAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$customAttributeWrite = {id=material, title=Material, type=string, enums=[Cotton, Polyester], searchable=false}; // \Spy\SitooClient\Model\CustomAttributeWrite

try {
    $apiInstance->addCustomAttribute($siteid, $customAttributeWrite);
} catch (Exception $e) {
    echo 'Exception when calling ProductCustomAttributesApi->addCustomAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **customAttributeWrite** | [**\Spy\SitooClient\Model\CustomAttributeWrite**](../Model/CustomAttributeWrite.md)|  |

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

## `deleteCustomAttribute()`

```php
deleteCustomAttribute($siteid, $attributeid)
```



Delete a custom attribute for products. Note! Attributes can only be deleted if no product values exist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductCustomAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$attributeid = 'attributeid_example'; // string

try {
    $apiInstance->deleteCustomAttribute($siteid, $attributeid);
} catch (Exception $e) {
    echo 'Exception when calling ProductCustomAttributesApi->deleteCustomAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **attributeid** | **string**|  |

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

## `getCustomAttribute()`

```php
getCustomAttribute($siteid, $attributeid)
```



Returns a custom attribute for products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductCustomAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$attributeid = 'attributeid_example'; // string

try {
    $apiInstance->getCustomAttribute($siteid, $attributeid);
} catch (Exception $e) {
    echo 'Exception when calling ProductCustomAttributesApi->getCustomAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **attributeid** | **string**|  |

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

## `getCustomAttributes()`

```php
getCustomAttributes($siteid, $start, $num)
```



Returns envelope with custom attributes for products. The list returned will be sorted by ID in ascending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductCustomAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$start = 56; // int
$num = 56; // int

try {
    $apiInstance->getCustomAttributes($siteid, $start, $num);
} catch (Exception $e) {
    echo 'Exception when calling ProductCustomAttributesApi->getCustomAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **start** | **int**|  | [optional]
 **num** | **int**|  | [optional]

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

## `updateCustomAttribute()`

```php
updateCustomAttribute($siteid, $attributeid, $customAttributeWrite)
```



Update a custom attribute for products. Note that the following fields are not allowed in an update (id, type, searchable)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductCustomAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$attributeid = 'attributeid_example'; // string
$customAttributeWrite = {enums=[Cotton, Polyester, Velvet]}; // \Spy\SitooClient\Model\CustomAttributeWrite

try {
    $apiInstance->updateCustomAttribute($siteid, $attributeid, $customAttributeWrite);
} catch (Exception $e) {
    echo 'Exception when calling ProductCustomAttributesApi->updateCustomAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **attributeid** | **string**|  |
 **customAttributeWrite** | [**\Spy\SitooClient\Model\CustomAttributeWrite**](../Model/CustomAttributeWrite.md)|  |

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
