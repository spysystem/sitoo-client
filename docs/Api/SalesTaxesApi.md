# Spy\SitooClient\SalesTaxesApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addSalesTax()**](SalesTaxesApi.md#addSalesTax) | **POST** /sites/{siteid}/salestaxes.json |  |
[**addSalesTaxGroup()**](SalesTaxesApi.md#addSalesTaxGroup) | **POST** /sites/{siteid}/salestaxgroups.json |  |
[**deleteSalesTax()**](SalesTaxesApi.md#deleteSalesTax) | **DELETE** /sites/{siteid}/salestaxes/{salestaxid}.json |  |
[**deleteSalesTaxGroup()**](SalesTaxesApi.md#deleteSalesTaxGroup) | **DELETE** /sites/{siteid}/salestaxgroups/{salestaxgroupid}.json |  |
[**getSalesTax()**](SalesTaxesApi.md#getSalesTax) | **GET** /sites/{siteid}/salestaxes/{salestaxid}.json |  |
[**getSalesTaxGroup()**](SalesTaxesApi.md#getSalesTaxGroup) | **GET** /sites/{siteid}/salestaxgroups/{salestaxgroupid}.json |  |
[**getSalesTaxGroups()**](SalesTaxesApi.md#getSalesTaxGroups) | **GET** /sites/{siteid}/salestaxgroups.json |  |
[**getSalesTaxes()**](SalesTaxesApi.md#getSalesTaxes) | **GET** /sites/{siteid}/salestaxes.json |  |
[**updateSalesTax()**](SalesTaxesApi.md#updateSalesTax) | **PUT** /sites/{siteid}/salestaxes/{salestaxid}.json |  |
[**updateSalesTaxGroup()**](SalesTaxesApi.md#updateSalesTaxGroup) | **PUT** /sites/{siteid}/salestaxgroups/{salestaxgroupid}.json |  |


## `addSalesTax()`

```php
addSalesTax($siteid, $salestaxWrite)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\SalesTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$salestaxWrite = {name=Washington State Tax, decimalvaluedefault=6.500}; // \Spy\SitooClient\Model\SalestaxWrite

try {
    $apiInstance->addSalesTax($siteid, $salestaxWrite);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxesApi->addSalesTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **salestaxWrite** | [**\Spy\SitooClient\Model\SalestaxWrite**](../Model/SalestaxWrite.md)|  |

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

## `addSalesTaxGroup()`

```php
addSalesTaxGroup($siteid, $salestaxgroupWrite)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\SalesTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$salestaxgroupWrite = {name=Miami State (General), region=FL, salestaxes=[{salestaxid=1}]}; // \Spy\SitooClient\Model\SalestaxgroupWrite

try {
    $apiInstance->addSalesTaxGroup($siteid, $salestaxgroupWrite);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxesApi->addSalesTaxGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **salestaxgroupWrite** | [**\Spy\SitooClient\Model\SalestaxgroupWrite**](../Model/SalestaxgroupWrite.md)|  |

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

## `deleteSalesTax()`

```php
deleteSalesTax($siteid, $salestaxid): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\SalesTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$salestaxid = 56; // int

try {
    $result = $apiInstance->deleteSalesTax($siteid, $salestaxid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxesApi->deleteSalesTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **salestaxid** | **int**|  |

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

## `deleteSalesTaxGroup()`

```php
deleteSalesTaxGroup($siteid, $salestaxgroupid): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\SalesTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$salestaxgroupid = 56; // int

try {
    $result = $apiInstance->deleteSalesTaxGroup($siteid, $salestaxgroupid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxesApi->deleteSalesTaxGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **salestaxgroupid** | **int**|  |

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

## `getSalesTax()`

```php
getSalesTax($siteid, $salestaxid): \Spy\SitooClient\Model\SalestaxRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\SalesTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$salestaxid = 56; // int

try {
    $result = $apiInstance->getSalesTax($siteid, $salestaxid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxesApi->getSalesTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **salestaxid** | **int**|  |

### Return type

[**\Spy\SitooClient\Model\SalestaxRead**](../Model/SalestaxRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesTaxGroup()`

```php
getSalesTaxGroup($siteid, $salestaxgroupid): \Spy\SitooClient\Model\SalestaxgroupRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\SalesTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$salestaxgroupid = 56; // int

try {
    $result = $apiInstance->getSalesTaxGroup($siteid, $salestaxgroupid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxesApi->getSalesTaxGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **salestaxgroupid** | **int**|  |

### Return type

[**\Spy\SitooClient\Model\SalestaxgroupRead**](../Model/SalestaxgroupRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesTaxGroups()`

```php
getSalesTaxGroups($siteid, $start, $num, $fields): \Spy\SitooClient\Model\GetSalesTaxGroupsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\SalesTaxesApi(
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
    $result = $apiInstance->getSalesTaxGroups($siteid, $start, $num, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxesApi->getSalesTaxGroups: ', $e->getMessage(), PHP_EOL;
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

[**\Spy\SitooClient\Model\GetSalesTaxGroupsResponse**](../Model/GetSalesTaxGroupsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesTaxes()`

```php
getSalesTaxes($siteid, $start, $num, $fields): \Spy\SitooClient\Model\GetSalesTaxesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\SalesTaxesApi(
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
    $result = $apiInstance->getSalesTaxes($siteid, $start, $num, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxesApi->getSalesTaxes: ', $e->getMessage(), PHP_EOL;
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

[**\Spy\SitooClient\Model\GetSalesTaxesResponse**](../Model/GetSalesTaxesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSalesTax()`

```php
updateSalesTax($siteid, $salestaxid, $salestaxWrite): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\SalesTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$salestaxid = 56; // int
$salestaxWrite = {name=WA State Tax}; // \Spy\SitooClient\Model\SalestaxWrite

try {
    $result = $apiInstance->updateSalesTax($siteid, $salestaxid, $salestaxWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxesApi->updateSalesTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **salestaxid** | **int**|  |
 **salestaxWrite** | [**\Spy\SitooClient\Model\SalestaxWrite**](../Model/SalestaxWrite.md)|  |

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

## `updateSalesTaxGroup()`

```php
updateSalesTaxGroup($siteid, $salestaxgroupid, $salestaxgroupWrite): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\SalesTaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$salestaxgroupid = 56; // int
$salestaxgroupWrite = {name=Miami State (Default)}; // \Spy\SitooClient\Model\SalestaxgroupWrite

try {
    $result = $apiInstance->updateSalesTaxGroup($siteid, $salestaxgroupid, $salestaxgroupWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxesApi->updateSalesTaxGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **salestaxgroupid** | **int**|  |
 **salestaxgroupWrite** | [**\Spy\SitooClient\Model\SalestaxgroupWrite**](../Model/SalestaxgroupWrite.md)|  |

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
