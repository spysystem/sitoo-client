# Spy\SitooClient\InfluencerVouchersApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addInfluencerVoucherTransaction()**](InfluencerVouchersApi.md#addInfluencerVoucherTransaction) | **POST** /sites/{siteid}/influencervouchers/{influencercode}/transactions.json |  |
[**deleteInfluencerVoucherTransaction()**](InfluencerVouchersApi.md#deleteInfluencerVoucherTransaction) | **DELETE** /sites/{siteid}/influencervouchers/{influencercode}/transactions/{transactionid}.json |  |
[**getInfluencerVoucher()**](InfluencerVouchersApi.md#getInfluencerVoucher) | **GET** /sites/{siteid}/influencervouchers/{influencercode}.json |  |


## `addInfluencerVoucherTransaction()`

```php
addInfluencerVoucherTransaction($siteid, $influencercode, $influencervouchertransactionWrite): \Spy\SitooClient\Model\InfluencervouchertransactionresponseRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\InfluencerVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$influencercode = 56; // int
$influencervouchertransactionWrite = {moneyordertotal=100.00, moneyinfluencertotal=80.00, moneyinfluencerdiscount=20.00, currencycode=USD}; // \Spy\SitooClient\Model\InfluencervouchertransactionWrite

try {
    $result = $apiInstance->addInfluencerVoucherTransaction($siteid, $influencercode, $influencervouchertransactionWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfluencerVouchersApi->addInfluencerVoucherTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **influencercode** | **int**|  |
 **influencervouchertransactionWrite** | [**\Spy\SitooClient\Model\InfluencervouchertransactionWrite**](../Model/InfluencervouchertransactionWrite.md)|  |

### Return type

[**\Spy\SitooClient\Model\InfluencervouchertransactionresponseRead**](../Model/InfluencervouchertransactionresponseRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInfluencerVoucherTransaction()`

```php
deleteInfluencerVoucherTransaction($siteid, $influencercode, $transactionid): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\InfluencerVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$influencercode = 56; // int
$transactionid = 56; // int

try {
    $result = $apiInstance->deleteInfluencerVoucherTransaction($siteid, $influencercode, $transactionid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfluencerVouchersApi->deleteInfluencerVoucherTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **influencercode** | **int**|  |
 **transactionid** | **int**|  |

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

## `getInfluencerVoucher()`

```php
getInfluencerVoucher($siteid, $influencercode): \Spy\SitooClient\Model\InfluencervoucherRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\InfluencerVouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$influencercode = 56; // int

try {
    $result = $apiInstance->getInfluencerVoucher($siteid, $influencercode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InfluencerVouchersApi->getInfluencerVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **influencercode** | **int**|  |

### Return type

[**\Spy\SitooClient\Model\InfluencervoucherRead**](../Model/InfluencervoucherRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
