# Spy\SitooClient\WarehouseTransactionsApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchAddWarehouseTransactions()**](WarehouseTransactionsApi.md#batchAddWarehouseTransactions) | **POST** /sites/{siteid}/warehousetransactions.json |  |
[**getAllWarehouseTransactions()**](WarehouseTransactionsApi.md#getAllWarehouseTransactions) | **GET** /sites/{siteid}/warehousetransactions.json |  |
[**getWarehouseTransaction()**](WarehouseTransactionsApi.md#getWarehouseTransaction) | **GET** /sites/{siteid}/warehouses/{warehouseid}/warehousetransactions/{warehousetransactionid}.json |  |
[**getWarehouseTransactions()**](WarehouseTransactionsApi.md#getWarehouseTransactions) | **GET** /sites/{siteid}/warehouses/{warehouseid}/warehousetransactions.json |  |


## `batchAddWarehouseTransactions()`

```php
batchAddWarehouseTransactions($siteid, $warehousetransactionWrite)
```



This functions allows multiple transactions to be sent at once, like in the example below. For each item sent in an array a response is returned.NOTE! Transactions cannot be added to warehouses with warehousetype Virtual (20).NOTE 2! The maximum number of items allowed for one request to this endpoint is 1000.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehouseTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$warehousetransactionWrite = [{warehouseid=2, transactiontype=20, description=Move Out, externalid=EXTID1, reasoncode=null, items=[{sku=Q100, decimalquantity=-13.000}]}, {warehouseid=1, transactiontype=10, description=Move In, externalid=EXTID2, reasoncode=null, items=[{sku=Q100, decimalquantity=13.000, moneypricein=3.45}]}]; // \Spy\SitooClient\Model\WarehousetransactionWrite[]

try {
    $apiInstance->batchAddWarehouseTransactions($siteid, $warehousetransactionWrite);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseTransactionsApi->batchAddWarehouseTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **warehousetransactionWrite** | [**\Spy\SitooClient\Model\WarehousetransactionWrite[]**](../Model/WarehousetransactionWrite.md)|  |

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

## `getAllWarehouseTransactions()`

```php
getAllWarehouseTransactions($siteid, $warehousetransactionid, $warehousetransactionidfrom, $warehousetransactionidto, $datecreatedfrom, $datecreatedto, $warehouseid, $transactiontype, $start, $num, $sort, $fields): \Spy\SitooClient\Model\GetAllWarehouseTransactionsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehouseTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$warehousetransactionid = /sites/{siteid}/warehousetransactions?warehousetransactionid=123&warehousetransactionid=127&warehousetransactionid=135; // int[]
$warehousetransactionidfrom = 56; // int
$warehousetransactionidto = 56; // int
$datecreatedfrom = 56; // int
$datecreatedto = 56; // int
$warehouseid = 56; // int
$transactiontype = 56; // int
$start = 56; // int
$num = 56; // int
$sort = 'sort_example'; // string
$fields = array('fields_example'); // string[] | list of fields, comma-separated

try {
    $result = $apiInstance->getAllWarehouseTransactions($siteid, $warehousetransactionid, $warehousetransactionidfrom, $warehousetransactionidto, $datecreatedfrom, $datecreatedto, $warehouseid, $transactiontype, $start, $num, $sort, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseTransactionsApi->getAllWarehouseTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **warehousetransactionid** | [**int[]**](../Model/int.md)|  | [optional]
 **warehousetransactionidfrom** | **int**|  | [optional]
 **warehousetransactionidto** | **int**|  | [optional]
 **datecreatedfrom** | **int**|  | [optional]
 **datecreatedto** | **int**|  | [optional]
 **warehouseid** | **int**|  | [optional]
 **transactiontype** | **int**|  | [optional]
 **start** | **int**|  | [optional]
 **num** | **int**|  | [optional]
 **sort** | **string**|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional]

### Return type

[**\Spy\SitooClient\Model\GetAllWarehouseTransactionsResponse**](../Model/GetAllWarehouseTransactionsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWarehouseTransaction()`

```php
getWarehouseTransaction($siteid, $warehouseid, $warehousetransactionid): \Spy\SitooClient\Model\WarehousetransactionRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehouseTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$warehouseid = 56; // int
$warehousetransactionid = 56; // int

try {
    $result = $apiInstance->getWarehouseTransaction($siteid, $warehouseid, $warehousetransactionid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseTransactionsApi->getWarehouseTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **warehouseid** | **int**|  |
 **warehousetransactionid** | **int**|  |

### Return type

[**\Spy\SitooClient\Model\WarehousetransactionRead**](../Model/WarehousetransactionRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWarehouseTransactions()`

```php
getWarehouseTransactions($siteid, $warehouseid, $warehousetransactionid, $warehousetransactionidfrom, $warehousetransactionidto, $datecreatedfrom, $datecreatedto, $transactiontype, $start, $num, $sort, $fields): \Spy\SitooClient\Model\GetWarehouseTransactionsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\WarehouseTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$warehouseid = 56; // int
$warehousetransactionid = /sites/{siteid}/warehouses/{warehouseid}/warehousetransactions?warehousetransactionid=123,127,135; // int[]
$warehousetransactionidfrom = 56; // int
$warehousetransactionidto = 56; // int
$datecreatedfrom = 56; // int
$datecreatedto = 56; // int
$transactiontype = 56; // int
$start = 56; // int
$num = 56; // int
$sort = 'sort_example'; // string
$fields = array('fields_example'); // string[] | list of fields, comma-separated

try {
    $result = $apiInstance->getWarehouseTransactions($siteid, $warehouseid, $warehousetransactionid, $warehousetransactionidfrom, $warehousetransactionidto, $datecreatedfrom, $datecreatedto, $transactiontype, $start, $num, $sort, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseTransactionsApi->getWarehouseTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **warehouseid** | **int**|  |
 **warehousetransactionid** | [**int[]**](../Model/int.md)|  | [optional]
 **warehousetransactionidfrom** | **int**|  | [optional]
 **warehousetransactionidto** | **int**|  | [optional]
 **datecreatedfrom** | **int**|  | [optional]
 **datecreatedto** | **int**|  | [optional]
 **transactiontype** | **int**|  | [optional]
 **start** | **int**|  | [optional]
 **num** | **int**|  | [optional]
 **sort** | **string**|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional]

### Return type

[**\Spy\SitooClient\Model\GetWarehouseTransactionsResponse**](../Model/GetWarehouseTransactionsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
