# Obada\KeysApi

All URIs are relative to http://obs.node.obada.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**newMasterKey()**](KeysApi.md#newMasterKey) | **POST** /keys/new | Creates a new master key from mnemonic phrase


## `newMasterKey()`

```php
newMasterKey($mnemonicRequest)
```

Creates a new master key from mnemonic phrase

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
$mnemonicRequest = new \Obada\ClientHelper\MnemonicRequest(); // \Obada\ClientHelper\MnemonicRequest

try {
    $apiInstance->newMasterKey($mnemonicRequest);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->newMasterKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mnemonicRequest** | [**\Obada\ClientHelper\MnemonicRequest**](../Model/MnemonicRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
