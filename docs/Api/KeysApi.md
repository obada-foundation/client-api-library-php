# Obada\KeysApi

All URIs are relative to http://obs.node.obada.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**newPrivateKey()**](KeysApi.md#newPrivateKey) | **POST** /keys/{kid}/new-private-key | Create a new private key from master key


## `newPrivateKey()`

```php
newPrivateKey($kid)
```

Create a new private key from master key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Obada\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Obada\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kid = 123456; // string | Master key associative name

try {
    $apiInstance->newPrivateKey($kid);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->newPrivateKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kid** | **string**| Master key associative name |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
