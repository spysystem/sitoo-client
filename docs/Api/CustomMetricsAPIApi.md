# Spy\SitooClient\CustomMetricsAPIApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCustomMetric()**](CustomMetricsAPIApi.md#addCustomMetric) | **POST** /custom_metrics.json |  |
[**deleteCustomMetric()**](CustomMetricsAPIApi.md#deleteCustomMetric) | **DELETE** /custom_metrics/{key}.json |  |
[**deleteCustomMetricValues()**](CustomMetricsAPIApi.md#deleteCustomMetricValues) | **DELETE** /custom_metric_values/{key}.json |  |
[**getCustomMetricValues()**](CustomMetricsAPIApi.md#getCustomMetricValues) | **GET** /custom_metric_values.json |  |
[**getCustomMetrics()**](CustomMetricsAPIApi.md#getCustomMetrics) | **GET** /custom_metrics.json |  |
[**updateCustomMetricValues()**](CustomMetricsAPIApi.md#updateCustomMetricValues) | **PUT** /custom_metric_values.json |  |


## `addCustomMetric()`

```php
addCustomMetric($customMetricWrite): \Spy\SitooClient\Model\CustomMetricRead
```



Adds a new metric which will be immutable and can only be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\CustomMetricsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customMetricWrite = {key=cm_revenue_total_budget, grouping=date_store, type=scalar, format=money}; // \Spy\SitooClient\Model\CustomMetricWrite

try {
    $result = $apiInstance->addCustomMetric($customMetricWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomMetricsAPIApi->addCustomMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customMetricWrite** | [**\Spy\SitooClient\Model\CustomMetricWrite**](../Model/CustomMetricWrite.md)|  |

### Return type

[**\Spy\SitooClient\Model\CustomMetricRead**](../Model/CustomMetricRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomMetric()`

```php
deleteCustomMetric($key)
```



Delete a Custom Metric and all data associated with it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\CustomMetricsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string

try {
    $apiInstance->deleteCustomMetric($key);
} catch (Exception $e) {
    echo 'Exception when calling CustomMetricsAPIApi->deleteCustomMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomMetricValues()`

```php
deleteCustomMetricValues($key, $date, $numDays, $storeId)
```



All values for Custom Metrics that match the filter will be deleted. Note that query parameters for date and store only filter values that are grouped on them. E.g. a metric grouped on store_id will be matched if the query param for store_id matches (regardless if query parameter for date is passed or not)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\CustomMetricsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string
$date = 'date_example'; // string
$numDays = 'numDays_example'; // string
$storeId = 'storeId_example'; // string

try {
    $apiInstance->deleteCustomMetricValues($key, $date, $numDays, $storeId);
} catch (Exception $e) {
    echo 'Exception when calling CustomMetricsAPIApi->deleteCustomMetricValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**|  |
 **date** | **string**|  | [optional]
 **numDays** | **string**|  | [optional]
 **storeId** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomMetricValues()`

```php
getCustomMetricValues($keys, $date, $numDays, $storeId): \Spy\SitooClient\Model\CustomMetricValueRead
```



Get list of Custom Metric Values. All metrics that match the filter will be returned. Note that query parameters for date and store only filter values that are grouped on them. E.g. a metric grouped on store_id will be returned if the query param for store_id matches (regardless if query parameter for date is passed or not)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\CustomMetricsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keys = 'keys_example'; // string
$date = 'date_example'; // string
$numDays = 56; // int
$storeId = 'storeId_example'; // string

try {
    $result = $apiInstance->getCustomMetricValues($keys, $date, $numDays, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomMetricsAPIApi->getCustomMetricValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keys** | **string**|  | [optional]
 **date** | **string**|  | [optional]
 **numDays** | **int**|  | [optional]
 **storeId** | **string**|  | [optional]

### Return type

[**\Spy\SitooClient\Model\CustomMetricValueRead**](../Model/CustomMetricValueRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomMetrics()`

```php
getCustomMetrics($keys): \Spy\SitooClient\Model\CustomMetricRead
```



Get list of Custom Metrics. Use filter keys to filter out specific Custom Metrics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\CustomMetricsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keys = 'keys_example'; // string

try {
    $result = $apiInstance->getCustomMetrics($keys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomMetricsAPIApi->getCustomMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keys** | **string**|  | [optional]

### Return type

[**\Spy\SitooClient\Model\CustomMetricRead**](../Model/CustomMetricRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomMetricValues()`

```php
updateCustomMetricValues($customMetricValueWrite, $keys, $date, $numDays, $storeId): \Spy\SitooClient\Model\CustomMetricValueRead
```



Set values for Custom Metrics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\CustomMetricsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customMetricValueWrite = [{key=cm_revenue_total_budget, date=2020-12-11, store_id=12345, value_scalar=10000}, {key=cm_revenue_total_budget, date=2020-12-12, store_id=12345, value_scalar=15000}, {key=cm_revenue_total_budget, date=2020-12-13, store_id=12345, value_scalar=11000}, {key=cm_revenue_total_budget, date=2020-12-14, store_id=12345, value_scalar=7000}, {key=cm_revenue_total_budget, date=2020-12-15, store_id=12345, value_scalar=10000}]; // \Spy\SitooClient\Model\CustomMetricValueWrite[]
$keys = 'keys_example'; // string
$date = 'date_example'; // string
$numDays = 56; // int
$storeId = 'storeId_example'; // string

try {
    $result = $apiInstance->updateCustomMetricValues($customMetricValueWrite, $keys, $date, $numDays, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomMetricsAPIApi->updateCustomMetricValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customMetricValueWrite** | [**\Spy\SitooClient\Model\CustomMetricValueWrite[]**](../Model/CustomMetricValueWrite.md)|  |
 **keys** | **string**|  | [optional]
 **date** | **string**|  | [optional]
 **numDays** | **int**|  | [optional]
 **storeId** | **string**|  | [optional]

### Return type

[**\Spy\SitooClient\Model\CustomMetricValueRead**](../Model/CustomMetricValueRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
