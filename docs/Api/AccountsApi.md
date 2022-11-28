# Obada\AccountsApi

All URIs are relative to http://obs.node.obada.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**account()**](AccountsApi.md#account) | **GET** /accounts/{address} | Fetches an information about single account
[**accounts()**](AccountsApi.md#accounts) | **GET** /accounts | Returns a list of OBADA accounts
[**balance()**](AccountsApi.md#balance) | **GET** /accounts/my-balance | Shows account balance of OBADA address
[**importAccount()**](AccountsApi.md#importAccount) | **POST** /accounts/import-account | Imports an existing OBADA account (private key) client-helper user profile
[**importWallet()**](AccountsApi.md#importWallet) | **POST** /accounts/import-wallet | Imports an existing HD wallet to the client-helper user profile
[**newAccount()**](AccountsApi.md#newAccount) | **POST** /accounts/new-account | Creates a new OBADA account from HD wallet master key
[**newMnemonic()**](AccountsApi.md#newMnemonic) | **GET** /accounts/new-mnemonic | Generate a new mnemonic phrase for seeding wallet
[**newWallet()**](AccountsApi.md#newWallet) | **POST** /accounts/new-wallet | Creates profile HD wallet
[**register()**](AccountsApi.md#register) | **POST** /accounts/register | Register a new client-helper user profile


## `account()`

```php
account($address): \Obada\ClientHelper\Accounts
```

Fetches an information about single account

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
$address = obada1yxxnd624tgwqm3eyv5smdvjrrydfh9h943qptg; // string | OBADA address

try {
    $result = $apiInstance->account($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->account: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| OBADA address |

### Return type

[**\Obada\ClientHelper\Accounts**](../Model/Accounts.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accounts()`

```php
accounts(): \Obada\ClientHelper\Accounts
```

Returns a list of OBADA accounts

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
    $result = $apiInstance->accounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Obada\ClientHelper\Accounts**](../Model/Accounts.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `importAccount()`

```php
importAccount($importAccountRequest)
```

Imports an existing OBADA account (private key) client-helper user profile

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
$importAccountRequest = new \Obada\ClientHelper\ImportAccountRequest(); // \Obada\ClientHelper\ImportAccountRequest

try {
    $apiInstance->importAccount($importAccountRequest);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->importAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **importAccountRequest** | [**\Obada\ClientHelper\ImportAccountRequest**](../Model/ImportAccountRequest.md)|  | [optional]

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

## `importWallet()`

```php
importWallet($mnemonicRequest)
```

Imports an existing HD wallet to the client-helper user profile

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
$mnemonicRequest = new \Obada\ClientHelper\MnemonicRequest(); // \Obada\ClientHelper\MnemonicRequest

try {
    $apiInstance->importWallet($mnemonicRequest);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->importWallet: ', $e->getMessage(), PHP_EOL;
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

## `newAccount()`

```php
newAccount()
```

Creates a new OBADA account from HD wallet master key

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
    $apiInstance->newAccount();
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->newAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `newWallet()`

```php
newWallet($mnemonicRequest)
```

Creates profile HD wallet

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
$mnemonicRequest = new \Obada\ClientHelper\MnemonicRequest(); // \Obada\ClientHelper\MnemonicRequest

try {
    $apiInstance->newWallet($mnemonicRequest);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->newWallet: ', $e->getMessage(), PHP_EOL;
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
