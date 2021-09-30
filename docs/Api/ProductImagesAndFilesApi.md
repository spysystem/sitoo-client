# Spy\SitooClient\ProductImagesAndFilesApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addProductFile()**](ProductImagesAndFilesApi.md#addProductFile) | **POST** /sites/{siteid}/products/{productid}/files.json | 
[**addProductImage()**](ProductImagesAndFilesApi.md#addProductImage) | **POST** /sites/{siteid}/products/{productid}/images.json | 
[**deleteProductFile()**](ProductImagesAndFilesApi.md#deleteProductFile) | **DELETE** /sites/{siteid}/products/{productid}/files/{fileid}.json | 
[**deleteProductImage()**](ProductImagesAndFilesApi.md#deleteProductImage) | **DELETE** /sites/{siteid}/products/{productid}/images/{imageid}.json | 
[**getProductFile()**](ProductImagesAndFilesApi.md#getProductFile) | **GET** /sites/{siteid}/products/{productid}/files/{fileid}.json | 
[**getProductFiles()**](ProductImagesAndFilesApi.md#getProductFiles) | **GET** /sites/{siteid}/products/{productid}/files.json | 
[**getProductImage()**](ProductImagesAndFilesApi.md#getProductImage) | **GET** /sites/{siteid}/products/{productid}/images/{imageid}.json | 
[**getProductImages()**](ProductImagesAndFilesApi.md#getProductImages) | **GET** /sites/{siteid}/products/{productid}/images.json | 


## `addProductFile()`

```php
addProductFile($siteid, $productid, $resourceWrite): bool
```



The only field that can be set is the resourceid. Optionally you can add a file using the field filedata which needs to be a base64-encoded string.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductImagesAndFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$productid = 56; // int
$resourceWrite = {resourceid=message.txt, filedata=SGVsbG8gV29ybGQh}; // \Spy\SitooClient\Model\ResourceWrite

try {
    $result = $apiInstance->addProductFile($siteid, $productid, $resourceWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductImagesAndFilesApi->addProductFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **productid** | **int**|  |
 **resourceWrite** | [**\Spy\SitooClient\Model\ResourceWrite**](../Model/ResourceWrite.md)|  |

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

## `addProductImage()`

```php
addProductImage($siteid, $productid, $resourceWrite): bool
```



The only field that can be set is the resourceid. Optionally you can add an image using the field filedata which needs to be a base64-encoded string.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductImagesAndFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$productid = 56; // int
$resourceWrite = {resourceid=message.gif, filedata=R0lGODlhHwAJAPABAAAAAP///yH5BAAAAAAALAAAAAAfAAkAAAItjI+pi3AOYgyuJTnp07ZvU1WaCF5mSWFpRnIfJ0Lni8Jbi8/hrWJQr2IIh4gCADs=}; // \Spy\SitooClient\Model\ResourceWrite

try {
    $result = $apiInstance->addProductImage($siteid, $productid, $resourceWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductImagesAndFilesApi->addProductImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **productid** | **int**|  |
 **resourceWrite** | [**\Spy\SitooClient\Model\ResourceWrite**](../Model/ResourceWrite.md)|  |

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

## `deleteProductFile()`

```php
deleteProductFile($siteid, $productid, $fileid): bool
```



Note that only the link between the product and the file is removed. Not the file itself.The fileid is the index of the file in the product's file list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductImagesAndFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$productid = 56; // int
$fileid = 56; // int

try {
    $result = $apiInstance->deleteProductFile($siteid, $productid, $fileid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductImagesAndFilesApi->deleteProductFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **productid** | **int**|  |
 **fileid** | **int**|  |

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

## `deleteProductImage()`

```php
deleteProductImage($siteid, $productid, $imageid): bool
```



Note that only the link between the product and the image is removed. Not the image itself.The imageid is the index of the image in the product's image list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductImagesAndFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$productid = 56; // int
$imageid = 56; // int

try {
    $result = $apiInstance->deleteProductImage($siteid, $productid, $imageid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductImagesAndFilesApi->deleteProductImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **productid** | **int**|  |
 **imageid** | **int**|  |

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

## `getProductFile()`

```php
getProductFile($siteid, $productid, $fileid): \Spy\SitooClient\Model\ResourceRead
```



The fileid is the index of the file in the product's file list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductImagesAndFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$productid = 56; // int
$fileid = 56; // int

try {
    $result = $apiInstance->getProductFile($siteid, $productid, $fileid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductImagesAndFilesApi->getProductFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **productid** | **int**|  |
 **fileid** | **int**|  |

### Return type

[**\Spy\SitooClient\Model\ResourceRead**](../Model/ResourceRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductFiles()`

```php
getProductFiles($siteid, $productid, $start, $num, $fields): \Spy\SitooClient\Model\GetProductFilesResponse
```



A file is typically an associated .pdf-file or similar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductImagesAndFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$productid = 56; // int
$start = 56; // int
$num = 56; // int
$fields = array('fields_example'); // string[] | list of fields, comma-separated

try {
    $result = $apiInstance->getProductFiles($siteid, $productid, $start, $num, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductImagesAndFilesApi->getProductFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **productid** | **int**|  |
 **start** | **int**|  | [optional]
 **num** | **int**|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional]

### Return type

[**\Spy\SitooClient\Model\GetProductFilesResponse**](../Model/GetProductFilesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductImage()`

```php
getProductImage($siteid, $productid, $imageid): \Spy\SitooClient\Model\ResourceRead
```



The imageid is the index of the image among this product's images.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductImagesAndFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$productid = 56; // int
$imageid = 56; // int

try {
    $result = $apiInstance->getProductImage($siteid, $productid, $imageid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductImagesAndFilesApi->getProductImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **productid** | **int**|  |
 **imageid** | **int**|  |

### Return type

[**\Spy\SitooClient\Model\ResourceRead**](../Model/ResourceRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductImages()`

```php
getProductImages($siteid, $productid, $start, $num, $fields): \Spy\SitooClient\Model\GetProductImagesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductImagesAndFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$productid = 56; // int
$start = 56; // int
$num = 56; // int
$fields = array('fields_example'); // string[] | list of fields, comma-separated

try {
    $result = $apiInstance->getProductImages($siteid, $productid, $start, $num, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductImagesAndFilesApi->getProductImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **productid** | **int**|  |
 **start** | **int**|  | [optional]
 **num** | **int**|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional]

### Return type

[**\Spy\SitooClient\Model\GetProductImagesResponse**](../Model/GetProductImagesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
