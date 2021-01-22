# Obada\ObitApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadObitFromChain()**](ObitApi.md#downloadObitFromChain) | **POST** /server/obit/download | Download Obit from Blockchain
[**fetchObitFromChain()**](ObitApi.md#fetchObitFromChain) | **GET** /server/obit/{obit_did} | Get Obit From Blockchain
[**generateObit()**](ObitApi.md#generateObit) | **GET** /obit/generate | Generate Obit
[**getObit()**](ObitApi.md#getObit) | **GET** /client/obit/{obit_did} | Get Client Obit
[**saveObit()**](ObitApi.md#saveObit) | **POST** /client/obit | Save Client Obit
[**uploadObit()**](ObitApi.md#uploadObit) | **POST** /server/obit/upload | Upload Obit to Blockchain


## `downloadObitFromChain()`

```php
downloadObitFromChain($uNKNOWNBASETYPE): \Obada\ClientHelper\InlineResponse2004
```

Download Obit from Blockchain

Downloads the Obit information from the blockchain to the client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uNKNOWNBASETYPE = new \Obada\ClientHelper\UNKNOWN_BASE_TYPE(); // \Obada\ClientHelper\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->downloadObitFromChain($uNKNOWNBASETYPE);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->downloadObitFromChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uNKNOWNBASETYPE** | [**\Obada\ClientHelper\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

[**\Obada\ClientHelper\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchObitFromChain()`

```php
fetchObitFromChain($obitDid): \Obada\ClientHelper\InlineResponse2002
```

Get Obit From Blockchain

Retrieves Obit information from blockchain but does not download it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$obitDid = did:obada:81413bc1ad2074a6ae35d1f65f64f1bca2e8a20959f37ef0349a729ddc567d9b; // string | Required.

try {
    $result = $apiInstance->fetchObitFromChain($obitDid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->fetchObitFromChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **obitDid** | **string**| Required. |

### Return type

[**\Obada\ClientHelper\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateObit()`

```php
generateObit($manufacturer, $partNumber, $serialNumber): \Obada\ClientHelper\InlineResponse200
```

Generate Obit

Returns the usn & obit for a given device_id, part_number and serial_number input.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manufacturer = Apple; // string | Device Id (Required)
$partNumber = 123456789; // string | Part Number (Required)
$serialNumber = 123456789; // string | Serial Number (Required)

try {
    $result = $apiInstance->generateObit($manufacturer, $partNumber, $serialNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->generateObit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manufacturer** | **string**| Device Id (Required) |
 **partNumber** | **string**| Part Number (Required) |
 **serialNumber** | **string**| Serial Number (Required) |

### Return type

[**\Obada\ClientHelper\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObit()`

```php
getObit($obitDid): \Obada\ClientHelper\InlineResponse2001
```

Get Client Obit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$obitDid = did:obada:81413bc1ad2074a6ae35d1f65f64f1bca2e8a20959f37ef0349a729ddc567d9b; // string | Required.

try {
    $result = $apiInstance->getObit($obitDid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->getObit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **obitDid** | **string**| Required. |

### Return type

[**\Obada\ClientHelper\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveObit()`

```php
saveObit($uNKNOWNBASETYPE): \Obada\ClientHelper\InlineResponse2001
```

Save Client Obit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uNKNOWNBASETYPE = new \Obada\ClientHelper\UNKNOWN_BASE_TYPE(); // \Obada\ClientHelper\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->saveObit($uNKNOWNBASETYPE);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->saveObit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uNKNOWNBASETYPE** | [**\Obada\ClientHelper\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

[**\Obada\ClientHelper\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadObit()`

```php
uploadObit($uNKNOWNBASETYPE): \Obada\ClientHelper\InlineResponse2003
```

Upload Obit to Blockchain

Uploads Obit from client to the Blockchain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uNKNOWNBASETYPE = new \Obada\ClientHelper\UNKNOWN_BASE_TYPE(); // \Obada\ClientHelper\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->uploadObit($uNKNOWNBASETYPE);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->uploadObit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uNKNOWNBASETYPE** | [**\Obada\ClientHelper\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

[**\Obada\ClientHelper\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
