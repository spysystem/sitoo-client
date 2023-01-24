# Spy\SitooClient\ProductsApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchAddProducts()**](ProductsApi.md#batchAddProducts) | **POST** /sites/{siteid}/products.json |  |
| [**batchDeleteProducts()**](ProductsApi.md#batchDeleteProducts) | **DELETE** /sites/{siteid}/products.json |  |
| [**batchUpdateProducts()**](ProductsApi.md#batchUpdateProducts) | **PUT** /sites/{siteid}/products.json |  |
| [**deleteProduct()**](ProductsApi.md#deleteProduct) | **DELETE** /sites/{siteid}/products/{productid}.json |  |
| [**getProduct()**](ProductsApi.md#getProduct) | **GET** /sites/{siteid}/products/{productid}.json |  |
| [**getProducts()**](ProductsApi.md#getProducts) | **GET** /sites/{siteid}/products.json |  |
| [**updateProduct()**](ProductsApi.md#updateProduct) | **PUT** /sites/{siteid}/products/{productid}.json |  |


## `batchAddProducts()`

```php
batchAddProducts($siteid, $productWrite): \Spy\SitooClient\Model\BatchResponse[]
```



This functions allows multiple items to be sent at once, like in the example below. For each item sent in an array a response is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$productWrite = [{sku=Q100, title=Box, moneyprice=99.00}, {sku=Q101, title=Box Deluxe, moneyprice=129.00}]; // \Spy\SitooClient\Model\ProductWrite[]

try {
    $result = $apiInstance->batchAddProducts($siteid, $productWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->batchAddProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **siteid** | **int**|  | |
| **productWrite** | [**\Spy\SitooClient\Model\ProductWrite[]**](../Model/ProductWrite.md)|  | |

### Return type

[**\Spy\SitooClient\Model\BatchResponse[]**](../Model/BatchResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchDeleteProducts()`

```php
batchDeleteProducts($siteid, $requestBody)
```



See product for fields.Required fields:productid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$requestBody = [{productid=18}, {productid=19}]; // object[]

try {
    $apiInstance->batchDeleteProducts($siteid, $requestBody);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->batchDeleteProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **siteid** | **int**|  | |
| **requestBody** | [**object[]**](../Model/object.md)|  | |

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

## `batchUpdateProducts()`

```php
batchUpdateProducts($siteid, $productWrite): \Spy\SitooClient\Model\BatchUpdateItemResponse[]
```



Send an array of object. Note that the productid must be added as a field for each item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$productWrite = [{productid=12, moneyprice=990.00}, {productid=13, moneyprice=1290.00}]; // \Spy\SitooClient\Model\ProductWrite[]

try {
    $result = $apiInstance->batchUpdateProducts($siteid, $productWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->batchUpdateProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **siteid** | **int**|  | |
| **productWrite** | [**\Spy\SitooClient\Model\ProductWrite[]**](../Model/ProductWrite.md)|  | |

### Return type

[**\Spy\SitooClient\Model\BatchUpdateItemResponse[]**](../Model/BatchUpdateItemResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProduct()`

```php
deleteProduct($siteid, $productid): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$productid = 56; // int

try {
    $result = $apiInstance->deleteProduct($siteid, $productid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **siteid** | **int**|  | |
| **productid** | **int**|  | |

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

## `getProduct()`

```php
getProduct($siteid, $productid): \Spy\SitooClient\Model\ProductRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$productid = 56; // int

try {
    $result = $apiInstance->getProduct($siteid, $productid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **siteid** | **int**|  | |
| **productid** | **int**|  | |

### Return type

[**\Spy\SitooClient\Model\ProductRead**](../Model/ProductRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProducts()`

```php
getProducts($siteid, $sku, $includeinactive, $datelastmodified, $start, $num, $fields): \Spy\SitooClient\Model\GetProductsResponse
```



Get collection of product. Note! Only request fields that you need since some fields are calculated and can result in unnecessary lengthy operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$sku = 'sku_example'; // string
$includeinactive = True; // bool
$datelastmodified = 56; // int
$start = 56; // int
$num = 56; // int
$fields = array('fields_example'); // string[] | list of fields, comma-separated

try {
    $result = $apiInstance->getProducts($siteid, $sku, $includeinactive, $datelastmodified, $start, $num, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **siteid** | **int**|  | |
| **sku** | **string**|  | [optional] |
| **includeinactive** | **bool**|  | [optional] |
| **datelastmodified** | **int**|  | [optional] |
| **start** | **int**|  | [optional] |
| **num** | **int**|  | [optional] |
| **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional] |

### Return type

[**\Spy\SitooClient\Model\GetProductsResponse**](../Model/GetProductsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProduct()`

```php
updateProduct($siteid, $productid, $productWrite): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$productid = 56; // int
$productWrite = {title=Blanket Red Striped}; // \Spy\SitooClient\Model\ProductWrite

try {
    $result = $apiInstance->updateProduct($siteid, $productid, $productWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **siteid** | **int**|  | |
| **productid** | **int**|  | |
| **productWrite** | [**\Spy\SitooClient\Model\ProductWrite**](../Model/ProductWrite.md)|  | |

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
