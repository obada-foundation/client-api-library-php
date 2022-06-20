# Obada\AccountsApi

All URIs are relative to http://obs.node.obada.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccount()**](AccountsApi.md#createAccount) | **POST** /accounts | Creates a new Account


## `createAccount()`

```php
createAccount($newAccountRequest): \Obada\ClientHelper\Account
```

Creates a new Account

Creates a new account, using JWT uid as a internal user id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Obada\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Obada\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newAccountRequest = new \Obada\ClientHelper\NewAccountRequest(); // \Obada\ClientHelper\NewAccountRequest

try {
    $result = $apiInstance->createAccount($newAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **newAccountRequest** | [**\Obada\ClientHelper\NewAccountRequest**](../Model/NewAccountRequest.md)|  | [optional]

### Return type

[**\Obada\ClientHelper\Account**](../Model/Account.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
