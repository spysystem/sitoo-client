# Spy\SitooClient\ManufacturersApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchAddManufacturers()**](ManufacturersApi.md#batchAddManufacturers) | **POST** /sites/{siteid}/manufacturers.json | 
[**batchDeleteManufacturers()**](ManufacturersApi.md#batchDeleteManufacturers) | **DELETE** /sites/{siteid}/manufacturers.json | 
[**batchUpdateManufacturers()**](ManufacturersApi.md#batchUpdateManufacturers) | **PUT** /sites/{siteid}/manufacturers.json | 
[**deleteManufacturer()**](ManufacturersApi.md#deleteManufacturer) | **DELETE** /sites/{siteid}/manufacturers/{externalcompanyid}.json | 
[**getManufacturer()**](ManufacturersApi.md#getManufacturer) | **GET** /sites/{siteid}/manufacturers/{externalcompanyid}.json | 
[**getManufacturers()**](ManufacturersApi.md#getManufacturers) | **GET** /sites/{siteid}/manufacturers.json | 
[**updateManufacturer()**](ManufacturersApi.md#updateManufacturer) | **PUT** /sites/{siteid}/manufacturers/{externalcompanyid}.json | 


## `batchAddManufacturers()`

```php
batchAddManufacturers($siteid, $manufacturerWrite)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ManufacturersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$manufacturerWrite = [{name=Sitoo, url1=http://www.sitoo.com}, {name=Example Inc., url1=http://www.example.com}]; // \Spy\SitooClient\Model\ManufacturerWrite[]

try {
    $apiInstance->batchAddManufacturers($siteid, $manufacturerWrite);
} catch (Exception $e) {
    echo 'Exception when calling ManufacturersApi->batchAddManufacturers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **manufacturerWrite** | [**\Spy\SitooClient\Model\ManufacturerWrite[]**](../Model/ManufacturerWrite.md)|  |

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

## `batchDeleteManufacturers()`

```php
batchDeleteManufacturers($siteid, $requestBody)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ManufacturersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$requestBody = [{externalcompanyid=3}]; // object[]

try {
    $apiInstance->batchDeleteManufacturers($siteid, $requestBody);
} catch (Exception $e) {
    echo 'Exception when calling ManufacturersApi->batchDeleteManufacturers: ', $e->getMessage(), PHP_EOL;
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

## `batchUpdateManufacturers()`

```php
batchUpdateManufacturers($siteid, $manufacturerWrite): bool
```



Note that manufacturerid is named externalcompanyid in the manufacturer object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ManufacturersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$manufacturerWrite = [{externalcompanyid=1, name=Sitoo}, {externalcompanyid=3, name=Example Inc.}]; // \Spy\SitooClient\Model\ManufacturerWrite[]

try {
    $result = $apiInstance->batchUpdateManufacturers($siteid, $manufacturerWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufacturersApi->batchUpdateManufacturers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **manufacturerWrite** | [**\Spy\SitooClient\Model\ManufacturerWrite[]**](../Model/ManufacturerWrite.md)|  |

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

## `deleteManufacturer()`

```php
deleteManufacturer($siteid, $externalcompanyid): bool
```



Note that manufacturerid is named externalcompanyid in the manufacturer object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ManufacturersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$externalcompanyid = 56; // int

try {
    $result = $apiInstance->deleteManufacturer($siteid, $externalcompanyid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufacturersApi->deleteManufacturer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **externalcompanyid** | **int**|  |

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

## `getManufacturer()`

```php
getManufacturer($siteid, $externalcompanyid): \Spy\SitooClient\Model\ManufacturerRead
```



Note that manufacturerid is named externalcompanyid in the manufacturer object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ManufacturersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$externalcompanyid = 56; // int

try {
    $result = $apiInstance->getManufacturer($siteid, $externalcompanyid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufacturersApi->getManufacturer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **externalcompanyid** | **int**|  |

### Return type

[**\Spy\SitooClient\Model\ManufacturerRead**](../Model/ManufacturerRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getManufacturers()`

```php
getManufacturers($siteid, $start, $num, $fields): \Spy\SitooClient\Model\GetManufacturersResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ManufacturersApi(
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
    $result = $apiInstance->getManufacturers($siteid, $start, $num, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufacturersApi->getManufacturers: ', $e->getMessage(), PHP_EOL;
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

[**\Spy\SitooClient\Model\GetManufacturersResponse**](../Model/GetManufacturersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateManufacturer()`

```php
updateManufacturer($siteid, $externalcompanyid, $manufacturerWrite): bool
```



Note that manufacturerid is named externalcompanyid in the manufacturer object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ManufacturersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$externalcompanyid = 56; // int
$manufacturerWrite = {description=Updated description for manufacturer}; // \Spy\SitooClient\Model\ManufacturerWrite

try {
    $result = $apiInstance->updateManufacturer($siteid, $externalcompanyid, $manufacturerWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufacturersApi->updateManufacturer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **externalcompanyid** | **int**|  |
 **manufacturerWrite** | [**\Spy\SitooClient\Model\ManufacturerWrite**](../Model/ManufacturerWrite.md)|  |

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
