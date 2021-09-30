# Spy\SitooClient\GiftCardsApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGiftCard()**](GiftCardsApi.md#addGiftCard) | **POST** /sites/{siteid}/giftcards.json | 
[**addGiftCardTransaction()**](GiftCardsApi.md#addGiftCardTransaction) | **POST** /sites/{siteid}/giftcards/{cardnumber}/transactions.json | 
[**deleteGiftCardTransactions()**](GiftCardsApi.md#deleteGiftCardTransactions) | **DELETE** /sites/{siteid}/giftcards/{cardnumber}/transactions.json | 
[**getGiftCard()**](GiftCardsApi.md#getGiftCard) | **GET** /sites/{siteid}/giftcards/{cardnumber}.json | 


## `addGiftCard()`

```php
addGiftCard($siteid, $giftcardWrite, $deliverytype, $deliverytext, $email, $mobile, $productReference, $pin): \Spy\SitooClient\Model\GiftcardresponseRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$giftcardWrite = {type=giftcard, currencycode=USD, cardnumber=95116763063530548720, transactions=[{moneyamount=500.00, merchant_reference=SC101}]}; // \Spy\SitooClient\Model\GiftcardWrite
$deliverytype = 'deliverytype_example'; // string
$deliverytext = 'deliverytext_example'; // string
$email = 'email_example'; // string
$mobile = 'mobile_example'; // string
$productReference = 'productReference_example'; // string
$pin = 'pin_example'; // string

try {
    $result = $apiInstance->addGiftCard($siteid, $giftcardWrite, $deliverytype, $deliverytext, $email, $mobile, $productReference, $pin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->addGiftCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **giftcardWrite** | [**\Spy\SitooClient\Model\GiftcardWrite**](../Model/GiftcardWrite.md)|  |
 **deliverytype** | **string**|  | [optional]
 **deliverytext** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **productReference** | **string**|  | [optional]
 **pin** | **string**|  | [optional]

### Return type

[**\Spy\SitooClient\Model\GiftcardresponseRead**](../Model/GiftcardresponseRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addGiftCardTransaction()`

```php
addGiftCardTransaction($siteid, $cardnumber, $giftcardtransactionWrite, $pin): \Spy\SitooClient\Model\GiftcardresponseRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$cardnumber = 56; // int
$giftcardtransactionWrite = {moneyamount=-299.00, merchant_reference=SC102}; // \Spy\SitooClient\Model\GiftcardtransactionWrite
$pin = 'pin_example'; // string

try {
    $result = $apiInstance->addGiftCardTransaction($siteid, $cardnumber, $giftcardtransactionWrite, $pin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->addGiftCardTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **cardnumber** | **int**|  |
 **giftcardtransactionWrite** | [**\Spy\SitooClient\Model\GiftcardtransactionWrite**](../Model/GiftcardtransactionWrite.md)|  |
 **pin** | **string**|  | [optional]

### Return type

[**\Spy\SitooClient\Model\GiftcardresponseRead**](../Model/GiftcardresponseRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGiftCardTransactions()`

```php
deleteGiftCardTransactions($siteid, $cardnumber, $giftcardresponseWrite): bool
```



Used for rollback of transaction that has been performed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$cardnumber = 56; // int
$giftcardresponseWrite = [3459, a57a121adda749bd7c8e37d13913724cabe7c56e]; // \Spy\SitooClient\Model\GiftcardresponseWrite

try {
    $result = $apiInstance->deleteGiftCardTransactions($siteid, $cardnumber, $giftcardresponseWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->deleteGiftCardTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **cardnumber** | **int**|  |
 **giftcardresponseWrite** | [**\Spy\SitooClient\Model\GiftcardresponseWrite**](../Model/GiftcardresponseWrite.md)|  |

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

## `getGiftCard()`

```php
getGiftCard($siteid, $cardnumber, $pin): \Spy\SitooClient\Model\GiftcardresponseRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\GiftCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$cardnumber = 56; // int
$pin = 'pin_example'; // string

try {
    $result = $apiInstance->getGiftCard($siteid, $cardnumber, $pin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardsApi->getGiftCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **cardnumber** | **int**|  |
 **pin** | **string**|  | [optional]

### Return type

[**\Spy\SitooClient\Model\GiftcardresponseRead**](../Model/GiftcardresponseRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
