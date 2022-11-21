# Obada\AccountsApi

All URIs are relative to http://obs.node.obada.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**balance()**](AccountsApi.md#balance) | **GET** /accounts/my-balance | Shows account balance of OBADA address
[**newMnemonic()**](AccountsApi.md#newMnemonic) | **GET** /accounts/new-mnemonic | Generate a new mnemonic phrase for seeding wallet
[**register()**](AccountsApi.md#register) | **POST** /accounts/register | Register a new client-helper user profile


## `balance()`

```php
balance(): \Obada\ClientHelper\AccountBalance
```

Shows account balance of OBADA address

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

try {
    $result = $apiInstance->balance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->balance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Obada\ClientHelper\AccountBalance**](../Model/AccountBalance.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newMnemonic()`

```php
newMnemonic(): \Obada\ClientHelper\NewMnemonic
```

Generate a new mnemonic phrase for seeding wallet

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

try {
    $result = $apiInstance->newMnemonic();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->newMnemonic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Obada\ClientHelper\NewMnemonic**](../Model/NewMnemonic.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `register()`

```php
register($registerRequest): \Obada\ClientHelper\Profile
```

Register a new client-helper user profile

Creates a new profile, using JWT uid as a internal user id

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
$registerRequest = new \Obada\ClientHelper\RegisterRequest(); // \Obada\ClientHelper\RegisterRequest

try {
    $result = $apiInstance->register($registerRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->register: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registerRequest** | [**\Obada\ClientHelper\RegisterRequest**](../Model/RegisterRequest.md)|  | [optional]

### Return type

[**\Obada\ClientHelper\Profile**](../Model/Profile.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
