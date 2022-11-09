# Obada\KeysApi

All URIs are relative to http://obs.node.obada.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllMasterKeys()**](KeysApi.md#getAllMasterKeys) | **GET** /keys | Retreave all master keys
[**newMasterKey()**](KeysApi.md#newMasterKey) | **POST** /keys/new | Creates a new master key from mnemonic phrase
[**newPrivateKey()**](KeysApi.md#newPrivateKey) | **POST** /keys/{kid}/new-private-key | Create a new private key from master key


## `getAllMasterKeys()`

```php
getAllMasterKeys(): \Obada\ClientHelper\MasterKey[]
```

Retreave all master keys

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

try {
    $result = $apiInstance->getAllMasterKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->getAllMasterKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Obada\ClientHelper\MasterKey[]**](../Model/MasterKey.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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
