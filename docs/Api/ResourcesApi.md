# Spy\SitooClient\ResourcesApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getResources()**](ResourcesApi.md#getResources) | **GET** /sites/{siteid}/resources.json |  |


## `getResources()`

```php
getResources($siteid, $start, $num, $fields): \Spy\SitooClient\Model\GetResourcesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\ResourcesApi(
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
    $result = $apiInstance->getResources($siteid, $start, $num, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->getResources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **siteid** | **int**|  | |
| **start** | **int**|  | [optional] |
| **num** | **int**|  | [optional] |
| **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional] |

### Return type

[**\Spy\SitooClient\Model\GetResourcesResponse**](../Model/GetResourcesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
