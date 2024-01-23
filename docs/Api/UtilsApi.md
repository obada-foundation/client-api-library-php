# Obada\UtilsApi

All URIs are relative to http://obs.node.obada.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateChecksum()**](UtilsApi.md#generateChecksum) | **POST** /obit/checksum | Generates Obit checksum |
| [**generateDID()**](UtilsApi.md#generateDID) | **POST** /obit/did | Generate Obit DID |


## `generateChecksum()`

```php
generateChecksum($generateObitChecksumRequest): \Obada\ClientHelper\GenerateObitChecksumResponse
```

Generates Obit checksum

Generates Obit checksum and provides a log of generation details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Obada\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Obada\Api\UtilsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generateObitChecksumRequest = new \Obada\ClientHelper\GenerateObitChecksumRequest(); // \Obada\ClientHelper\GenerateObitChecksumRequest

try {
    $result = $apiInstance->generateChecksum($generateObitChecksumRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilsApi->generateChecksum: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generateObitChecksumRequest** | [**\Obada\ClientHelper\GenerateObitChecksumRequest**](../Model/GenerateObitChecksumRequest.md)|  | [optional] |

### Return type

[**\Obada\ClientHelper\GenerateObitChecksumResponse**](../Model/GenerateObitChecksumResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateDID()`

```php
generateDID($generateObitDIDRequest): \Obada\ClientHelper\GenerateObitDIDResponse
```

Generate Obit DID

Returns the Obit DID for a given device_id, part_number and serial_number input.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Obada\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Obada\Api\UtilsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generateObitDIDRequest = new \Obada\ClientHelper\GenerateObitDIDRequest(); // \Obada\ClientHelper\GenerateObitDIDRequest

try {
    $result = $apiInstance->generateDID($generateObitDIDRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilsApi->generateDID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generateObitDIDRequest** | [**\Obada\ClientHelper\GenerateObitDIDRequest**](../Model/GenerateObitDIDRequest.md)|  | [optional] |

### Return type

[**\Obada\ClientHelper\GenerateObitDIDResponse**](../Model/GenerateObitDIDResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
