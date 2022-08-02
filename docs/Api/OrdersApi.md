# Spy\SitooClient\OrdersApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addOrder()**](OrdersApi.md#addOrder) | **POST** /sites/{siteid}/orders.json |  |
[**addOrderDelivery()**](OrdersApi.md#addOrderDelivery) | **POST** /sites/{siteid}/orders/{orderid}/orderdeliveries.json |  |
[**addOrderLogItem()**](OrdersApi.md#addOrderLogItem) | **POST** /sites/{siteid}/orders/{orderid}/orderlogitems.json |  |
[**getAllOrders()**](OrdersApi.md#getAllOrders) | **GET** /orders.json |  |
[**getOrder()**](OrdersApi.md#getOrder) | **GET** /sites/{siteid}/orders/{orderid}.json |  |
[**getOrderDeliveries()**](OrdersApi.md#getOrderDeliveries) | **GET** /sites/{siteid}/orders/{orderid}/orderdeliveries.json |  |
[**getOrderLogItems()**](OrdersApi.md#getOrderLogItems) | **GET** /sites/{siteid}/orders/{orderid}/orderlogitems.json |  |
[**getOrders()**](OrdersApi.md#getOrders) | **GET** /sites/{siteid}/orders.json |  |
[**updateOrder()**](OrdersApi.md#updateOrder) | **PUT** /sites/{siteid}/orders/{orderid}.json |  |


## `addOrder()`

```php
addOrder($siteid, $orderWrite)
```



Note! You can't delete an order, set orderstate to cancelled instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$orderWrite = {ordertypeid=10, namefirst=John, namelast=Smith, company=Company Inc, phone=555-1451, email=john.smith@example.com, currencycode=USD, orderitems=[{productname=Sofa Cosy, sku=10038-2, quantity=1, moneyrowprice=125.00, vatvalue=25}, {productname=Sofa Cosy, sku=83428-0, quantity=2, moneyrowprice=250.00, moneyrowdiscount=50.00, vatvalue=25}, {productname=Sofa Stressless, sku=83537-0, quantity=1, moneyrowprice=106.00, vatvalue=6}]}; // \Spy\SitooClient\Model\OrderWrite

try {
    $apiInstance->addOrder($siteid, $orderWrite);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->addOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **orderWrite** | [**\Spy\SitooClient\Model\OrderWrite**](../Model/OrderWrite.md)|  |

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

## `addOrderDelivery()`

```php
addOrderDelivery($siteid, $orderid, $orderdeliveryWrite, $ignorestock)
```



See orderdelivery for fields. Required fields: warehouseid orderdeliveryitems. Required fields for order delivery items: orderitemid quantity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$orderid = 56; // int
$orderdeliveryWrite = {warehouseid=2, orderdeliveryref=D123456789, orderdeliveryitems=[{orderitemid=0, quantity=1}, {orderitemid=1, quantity=2}, {orderitemid=2, quantity=1}]}; // \Spy\SitooClient\Model\OrderdeliveryWrite
$ignorestock = True; // bool

try {
    $apiInstance->addOrderDelivery($siteid, $orderid, $orderdeliveryWrite, $ignorestock);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->addOrderDelivery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **orderid** | **int**|  |
 **orderdeliveryWrite** | [**\Spy\SitooClient\Model\OrderdeliveryWrite**](../Model/OrderdeliveryWrite.md)|  |
 **ignorestock** | **bool**|  | [optional]

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

## `addOrderLogItem()`

```php
addOrderLogItem($siteid, $orderid, $orderlogitemWrite): bool
```



This endpoint is used to add log items to the order. NOTE! Check orderlogitem for types allowed to post to an order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$orderid = 56; // int
$orderlogitemWrite = {orderlogtypeid=900}; // \Spy\SitooClient\Model\OrderlogitemWrite

try {
    $result = $apiInstance->addOrderLogItem($siteid, $orderid, $orderlogitemWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->addOrderLogItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **orderid** | **int**|  |
 **orderlogitemWrite** | [**\Spy\SitooClient\Model\OrderlogitemWrite**](../Model/OrderlogitemWrite.md)|  |

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

## `getAllOrders()`

```php
getAllOrders($eshopid, $externalid, $orderid, $orderidfrom, $orderidto, $orderdatefrom, $orderdateto, $orderstate, $paymentstate, $ordertype, $email, $start, $num, $sort, $fields): \Spy\SitooClient\Model\GetAllOrdersResponse
```



Use fields to only query the information needed for your use case. Use filter eshopid to only query orders for one site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eshopid = /orders?eshopid=1; // int[]
$externalid = /orders?externalid=EXT987654321; // string[]
$orderid = /orders?orderid=12345,12351; // int[]
$orderidfrom = 56; // int
$orderidto = 56; // int
$orderdatefrom = 56; // int
$orderdateto = 56; // int
$orderstate = /orders?orderstate=0,10; // int[]
$paymentstate = /orders?paymentstate=15; // int[]
$ordertype = /orders?ordertype=10; // int[]
$email = 'email_example'; // string
$start = 56; // int
$num = 56; // int
$sort = 'sort_example'; // string
$fields = array('fields_example'); // string[] | list of fields, comma-separated

try {
    $result = $apiInstance->getAllOrders($eshopid, $externalid, $orderid, $orderidfrom, $orderidto, $orderdatefrom, $orderdateto, $orderstate, $paymentstate, $ordertype, $email, $start, $num, $sort, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getAllOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eshopid** | [**int[]**](../Model/int.md)|  | [optional]
 **externalid** | [**string[]**](../Model/string.md)|  | [optional]
 **orderid** | [**int[]**](../Model/int.md)|  | [optional]
 **orderidfrom** | **int**|  | [optional]
 **orderidto** | **int**|  | [optional]
 **orderdatefrom** | **int**|  | [optional]
 **orderdateto** | **int**|  | [optional]
 **orderstate** | [**int[]**](../Model/int.md)|  | [optional]
 **paymentstate** | [**int[]**](../Model/int.md)|  | [optional]
 **ordertype** | [**int[]**](../Model/int.md)|  | [optional]
 **email** | **string**|  | [optional]
 **start** | **int**|  | [optional]
 **num** | **int**|  | [optional]
 **sort** | **string**|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional]

### Return type

[**\Spy\SitooClient\Model\GetAllOrdersResponse**](../Model/GetAllOrdersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($siteid, $orderid): \Spy\SitooClient\Model\OrderRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$orderid = 56; // int

try {
    $result = $apiInstance->getOrder($siteid, $orderid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **orderid** | **int**|  |

### Return type

[**\Spy\SitooClient\Model\OrderRead**](../Model/OrderRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderDeliveries()`

```php
getOrderDeliveries($siteid, $orderid, $ignorestock): \Spy\SitooClient\Model\GetOrderDeliveriesResponse
```



See orderdelivery for fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$orderid = 56; // int
$ignorestock = True; // bool

try {
    $result = $apiInstance->getOrderDeliveries($siteid, $orderid, $ignorestock);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderDeliveries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **orderid** | **int**|  |
 **ignorestock** | **bool**|  | [optional]

### Return type

[**\Spy\SitooClient\Model\GetOrderDeliveriesResponse**](../Model/GetOrderDeliveriesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderLogItems()`

```php
getOrderLogItems($siteid, $orderid): \Spy\SitooClient\Model\GetOrderLogItemsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$orderid = 56; // int

try {
    $result = $apiInstance->getOrderLogItems($siteid, $orderid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderLogItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **orderid** | **int**|  |

### Return type

[**\Spy\SitooClient\Model\GetOrderLogItemsResponse**](../Model/GetOrderLogItemsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($siteid, $externalid, $orderid, $orderidfrom, $orderidto, $orderdatefrom, $orderdateto, $orderstate, $paymentstate, $ordertype, $email, $start, $num, $sort, $fields): \Spy\SitooClient\Model\GetOrdersResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$externalid = /sites/{siteid}/orders?externalid=EXT987654321; // string[]
$orderid = /sites/{siteid}/orders?orderid=12345,12351; // int[]
$orderidfrom = 56; // int
$orderidto = 56; // int
$orderdatefrom = 56; // int
$orderdateto = 56; // int
$orderstate = /sites/{siteid}/orders?orderstate=0,10; // int[]
$paymentstate = /sites/{siteid}/orders?paymentstate=15; // int[]
$ordertype = /sites/{siteid}/orders?ordertype=10; // int[]
$email = 'email_example'; // string
$start = 56; // int
$num = 56; // int
$sort = 'sort_example'; // string
$fields = array('fields_example'); // string[] | list of fields, comma-separated

try {
    $result = $apiInstance->getOrders($siteid, $externalid, $orderid, $orderidfrom, $orderidto, $orderdatefrom, $orderdateto, $orderstate, $paymentstate, $ordertype, $email, $start, $num, $sort, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **externalid** | [**string[]**](../Model/string.md)|  | [optional]
 **orderid** | [**int[]**](../Model/int.md)|  | [optional]
 **orderidfrom** | **int**|  | [optional]
 **orderidto** | **int**|  | [optional]
 **orderdatefrom** | **int**|  | [optional]
 **orderdateto** | **int**|  | [optional]
 **orderstate** | [**int[]**](../Model/int.md)|  | [optional]
 **paymentstate** | [**int[]**](../Model/int.md)|  | [optional]
 **ordertype** | [**int[]**](../Model/int.md)|  | [optional]
 **email** | **string**|  | [optional]
 **start** | **int**|  | [optional]
 **num** | **int**|  | [optional]
 **sort** | **string**|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional]

### Return type

[**\Spy\SitooClient\Model\GetOrdersResponse**](../Model/GetOrdersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrder()`

```php
updateOrder($siteid, $orderid, $orderWrite): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$orderid = 56; // int
$orderWrite = {namefirst=Adam, namelast=Smith}; // \Spy\SitooClient\Model\OrderWrite

try {
    $result = $apiInstance->updateOrder($siteid, $orderid, $orderWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **orderid** | **int**|  |
 **orderWrite** | [**\Spy\SitooClient\Model\OrderWrite**](../Model/OrderWrite.md)|  |

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
