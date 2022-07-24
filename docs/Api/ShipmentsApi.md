# Spy\SitooClient\ShipmentsApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addShipment()**](ShipmentsApi.md#addShipment) | **POST** /shipments.json |  |
| [**getShipment()**](ShipmentsApi.md#getShipment) | **GET** /shipments/{shipmentid}.json |  |
| [**getShipments()**](ShipmentsApi.md#getShipments) | **GET** /shipments.json |  |
| [**updateShipment()**](ShipmentsApi.md#updateShipment) | **PUT** /shipments/{shipmentid}.json |  |


## `addShipment()`

```php
addShipment($shipmentWrite): int
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipmentWrite = {shipmentstate=10, comment=New shipment, receiver_warehouseid=1, receiver_name=City Concept Store, carrier_name=DHL, carrier_reference=123456789, shipmentpackages=[{shipmentpackageid=1, barcode=123456789}], shipmentitems=[{shipmentitemid=1, shipmentpackageid=1, sku=sku-1, productname=Product 1, quantity=150, externalid=12345-1}, {shipmentitemid=2, shipmentpackageid=1, sku=sku-2, productname=Product 2, quantity=80, externalid=12345-2}]}; // \Spy\SitooClient\Model\ShipmentWrite

try {
    $result = $apiInstance->addShipment($shipmentWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->addShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipmentWrite** | [**\Spy\SitooClient\Model\ShipmentWrite**](../Model/ShipmentWrite.md)|  | |

### Return type

**int**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipment()`

```php
getShipment($shipmentid): \Spy\SitooClient\Model\ShipmentRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipmentid = 56; // int

try {
    $result = $apiInstance->getShipment($shipmentid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipmentid** | **int**|  | |

### Return type

[**\Spy\SitooClient\Model\ShipmentRead**](../Model/ShipmentRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipments()`

```php
getShipments($shipmentid, $senderWarehouseid, $receiverWarehouseid, $archived, $start, $num, $fields): \Spy\SitooClient\Model\GetShipmentsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipmentid = /shipments?shipmentid=12345,12347,12335; // int[]
$senderWarehouseid = 56; // int
$receiverWarehouseid = 56; // int
$archived = 56; // int
$start = 56; // int
$num = 56; // int
$fields = array('fields_example'); // string[] | list of fields, comma-separated

try {
    $result = $apiInstance->getShipments($shipmentid, $senderWarehouseid, $receiverWarehouseid, $archived, $start, $num, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getShipments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipmentid** | [**int[]**](../Model/int.md)|  | [optional] |
| **senderWarehouseid** | **int**|  | [optional] |
| **receiverWarehouseid** | **int**|  | [optional] |
| **archived** | **int**|  | [optional] |
| **start** | **int**|  | [optional] |
| **num** | **int**|  | [optional] |
| **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional] |

### Return type

[**\Spy\SitooClient\Model\GetShipmentsResponse**](../Model/GetShipmentsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateShipment()`

```php
updateShipment($shipmentid, $shipmentWrite): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipmentid = 56; // int
$shipmentWrite = {shipmentstate=20, comment=Received at Store}; // \Spy\SitooClient\Model\ShipmentWrite

try {
    $result = $apiInstance->updateShipment($shipmentid, $shipmentWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->updateShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipmentid** | **int**|  | |
| **shipmentWrite** | [**\Spy\SitooClient\Model\ShipmentWrite**](../Model/ShipmentWrite.md)|  | |

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
