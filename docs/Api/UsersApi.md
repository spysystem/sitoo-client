# Spy\SitooClient\UsersApi

All URIs are relative to https://api.mysitoo.com/v2/accounts/1500.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchAddUsers()**](UsersApi.md#batchAddUsers) | **POST** /sites/{siteid}/users.json | 
[**batchUpdateUsers()**](UsersApi.md#batchUpdateUsers) | **PUT** /sites/{siteid}/users.json | 
[**deleteUser()**](UsersApi.md#deleteUser) | **DELETE** /sites/{siteid}/users/{userid}.json | 
[**getUser()**](UsersApi.md#getUser) | **GET** /sites/{siteid}/users/{userid}.json | 
[**getUsers()**](UsersApi.md#getUsers) | **GET** /sites/{siteid}/users.json | 
[**updateUser()**](UsersApi.md#updateUser) | **PUT** /sites/{siteid}/users/{userid}.json | 


## `batchAddUsers()`

```php
batchAddUsers($siteid, $userWrite)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$userWrite = [{email=laura.smith@example.com, namefirst=Laura, namelast=Smith}, {email=john.doe@example.com, namefirst=John, namelast=Doe}]; // \Spy\SitooClient\Model\UserWrite[]

try {
    $apiInstance->batchAddUsers($siteid, $userWrite);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->batchAddUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **userWrite** | [**\Spy\SitooClient\Model\UserWrite[]**](../Model/UserWrite.md)|  |

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

## `batchUpdateUsers()`

```php
batchUpdateUsers($siteid, $userWrite)
```



Send an array of object. Note that the userid must be added as a field for each item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$userWrite = [{userid={10840BB4-1FF3-3E63-7872-735A4846309E}, externalid=1234}, {userid={1F842C30-1982-5EB9-7C4F-408FE9546453}, externalid=5678}]; // \Spy\SitooClient\Model\UserWrite[]

try {
    $apiInstance->batchUpdateUsers($siteid, $userWrite);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->batchUpdateUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **userWrite** | [**\Spy\SitooClient\Model\UserWrite[]**](../Model/UserWrite.md)|  |

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

## `deleteUser()`

```php
deleteUser($siteid, $userid): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$userid = 56; // int

try {
    $result = $apiInstance->deleteUser($siteid, $userid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **userid** | **int**|  |

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

## `getUser()`

```php
getUser($siteid, $userid, $fields): \Spy\SitooClient\Model\UserRead
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$userid = 56; // int
$fields = array('fields_example'); // string[] | list of fields, comma-separated

try {
    $result = $apiInstance->getUser($siteid, $userid, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **userid** | **int**|  |
 **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional]

### Return type

[**\Spy\SitooClient\Model\UserRead**](../Model/UserRead.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsers()`

```php
getUsers($siteid, $start, $num, $email, $customernumber, $personalid, $mobile, $fields): \Spy\SitooClient\Model\GetUsersResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$start = 56; // int
$num = 56; // int
$email = 'email_example'; // string
$customernumber = 'customernumber_example'; // string
$personalid = 'personalid_example'; // string
$mobile = 'mobile_example'; // string
$fields = array('fields_example'); // string[] | list of fields, comma-separated

try {
    $result = $apiInstance->getUsers($siteid, $start, $num, $email, $customernumber, $personalid, $mobile, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **start** | **int**|  | [optional]
 **num** | **int**|  | [optional]
 **email** | **string**|  | [optional]
 **customernumber** | **string**|  | [optional]
 **personalid** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| list of fields, comma-separated | [optional]

### Return type

[**\Spy\SitooClient\Model\GetUsersResponse**](../Model/GetUsersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($siteid, $userid, $userWrite): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Spy\SitooClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Spy\SitooClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteid = 56; // int
$userid = 56; // int
$userWrite = {company=Example Inc.}; // \Spy\SitooClient\Model\UserWrite

try {
    $result = $apiInstance->updateUser($siteid, $userid, $userWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteid** | **int**|  |
 **userid** | **int**|  |
 **userWrite** | [**\Spy\SitooClient\Model\UserWrite**](../Model/UserWrite.md)|  |

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
