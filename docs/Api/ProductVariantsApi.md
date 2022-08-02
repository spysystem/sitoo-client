# Spy\SitooClient\ProductVariantsApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProductVariants()**](ProductVariantsApi.md#getProductVariants) | **GET** /sites/{siteid}/products/{productid}/productvariants.json |  |
[**setProductVariants()**](ProductVariantsApi.md#setProductVariants) | **PUT** /sites/{siteid}/products/{productid}/productvariants.json |  |


## `getProductVariants()`

```php
getProductVariants($siteid, $productid): \Spy\SitooClient\Model\ProductvariantsRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$productid = 56; // int

try {
    $result = $apiInstance->getProductVariants($siteid, $productid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantsApi->getProductVariants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **productid** | **int**|  |

### Return type

[**\Spy\SitooClient\Model\ProductvariantsRead**](../Model/ProductvariantsRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setProductVariants()`

```php
setProductVariants($siteid, $productid, $productvariantsWrite): bool
```



Note that current variants will either be replaced or deleted with the new variants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ProductVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$productid = 56; // int
$productvariantsWrite = {groups=[{name=Color, options=[Red, Purple]}], variants=[{productid=21, active=true, activepos=true, title=Blanket Red, sku=54051-1, deliverystatus=, moneyprice=59.00, moneypriceorg=59.00, moneypricein=8.00, moneyofferprice=0.00, barcode=, friendly=blanket-red, attributes=[Red]}, {productid=0, active=true, activepos=true, title=Blanket Purple, sku=54051-10, deliverystatus=, moneyprice=189.00, moneypriceorg=0.00, moneypricein=8.00, moneyofferprice=0.00, barcode=, friendly=blanket-purple, attributes=[Purple]}]}; // \Spy\SitooClient\Model\ProductvariantsWrite

try {
    $result = $apiInstance->setProductVariants($siteid, $productid, $productvariantsWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantsApi->setProductVariants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **productid** | **int**|  |
 **productvariantsWrite** | [**\Spy\SitooClient\Model\ProductvariantsWrite**](../Model/ProductvariantsWrite.md)|  |

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
