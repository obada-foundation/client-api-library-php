# Obada\NFTApi

All URIs are relative to http://obs.node.obada.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**mint()**](NFTApi.md#mint) | **POST** /nft/{key}/mint | Mints NFT
[**nFT()**](NFTApi.md#nFT) | **GET** /nft/{key} | Fetch NFT from OBADA blockchain Node
[**transfer()**](NFTApi.md#transfer) | **POST** /nft/{key}/transfer | Transfer NFT to another address


## `mint()`

```php
mint($key)
```

Mints NFT

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Obada\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Obada\Api\NFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = did:obada:fe096095-e0f0-4918-9607-6567bd5756b5; // string | The given ObitDID or USN argument

try {
    $apiInstance->mint($key);
} catch (Exception $e) {
    echo 'Exception when calling NFTApi->mint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The given ObitDID or USN argument |

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

## `nFT()`

```php
nFT($key): \Obada\ClientHelper\NFT
```

Fetch NFT from OBADA blockchain Node

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Obada\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Obada\Api\NFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = did:obada:fe096095-e0f0-4918-9607-6567bd5756b5; // string | The given ObitDID or USN argument

try {
    $result = $apiInstance->nFT($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NFTApi->nFT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The given ObitDID or USN argument |

### Return type

[**\Obada\ClientHelper\NFT**](../Model/NFT.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transfer()`

```php
transfer($key, $transferNFTRequest)
```

Transfer NFT to another address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Obada\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Obada\Api\NFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = did:obada:fe096095-e0f0-4918-9607-6567bd5756b5; // string | The given ObitDID or USN argument
$transferNFTRequest = new \Obada\ClientHelper\TransferNFTRequest(); // \Obada\ClientHelper\TransferNFTRequest

try {
    $apiInstance->transfer($key, $transferNFTRequest);
} catch (Exception $e) {
    echo 'Exception when calling NFTApi->transfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The given ObitDID or USN argument |
 **transferNFTRequest** | [**\Obada\ClientHelper\TransferNFTRequest**](../Model/TransferNFTRequest.md)|  | [optional]

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
