# Obada\DefaultApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**aa7a8417Bb9b4897B4dc03b0f56e852a()**](DefaultApi.md#aa7a8417Bb9b4897B4dc03b0f56e852a) | **GET** /client/obit/{obit_did} | Get Client Obit
[**b5523ce75ca3402cBea94616caf10295()**](DefaultApi.md#b5523ce75ca3402cBea94616caf10295) | **POST** /client/obit | Save Client Obit
[**call3ff98b15F7624dadBf5c165e2131e950()**](DefaultApi.md#call3ff98b15F7624dadBf5c165e2131e950) | **POST** /server/obit/upload | Upload Obit to Blockchain
[**call582a6705Ad704a638373A2da8d44a3cf()**](DefaultApi.md#call582a6705Ad704a638373A2da8d44a3cf) | **POST** /server/obit/download | Download Obit from Blockchain
[**call6e9d1c55D0f34caaBe6dB479f34401ce()**](DefaultApi.md#call6e9d1c55D0f34caaBe6dB479f34401ce) | **GET** /obit/generate | Generate Obit
[**call915b874a1e4945909805F077e19f99ca()**](DefaultApi.md#call915b874a1e4945909805F077e19f99ca) | **GET** /server/obit/{obit_did} | Get Obit From Blockchain


## `aa7a8417Bb9b4897B4dc03b0f56e852a()`

```php
aa7a8417Bb9b4897B4dc03b0f56e852a($obitDid): \Obada\ClientHelper\InlineResponse2001
```

Get Client Obit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$obitDid = did:obada:81413bc1ad2074a6ae35d1f65f64f1bca2e8a20959f37ef0349a729ddc567d9b; // string | Required.

try {
    $result = $apiInstance->aa7a8417Bb9b4897B4dc03b0f56e852a($obitDid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->aa7a8417Bb9b4897B4dc03b0f56e852a: ', $e->getMessage(), PHP_EOL;
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

## `b5523ce75ca3402cBea94616caf10295()`

```php
b5523ce75ca3402cBea94616caf10295($uNKNOWNBASETYPE): \Obada\ClientHelper\InlineResponse2001
```

Save Client Obit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uNKNOWNBASETYPE = new \Obada\ClientHelper\UNKNOWN_BASE_TYPE(); // \Obada\ClientHelper\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->b5523ce75ca3402cBea94616caf10295($uNKNOWNBASETYPE);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->b5523ce75ca3402cBea94616caf10295: ', $e->getMessage(), PHP_EOL;
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

## `call3ff98b15F7624dadBf5c165e2131e950()`

```php
call3ff98b15F7624dadBf5c165e2131e950($uNKNOWNBASETYPE): \Obada\ClientHelper\InlineResponse2003
```

Upload Obit to Blockchain

Uploads Obit from client to the Blockchain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uNKNOWNBASETYPE = new \Obada\ClientHelper\UNKNOWN_BASE_TYPE(); // \Obada\ClientHelper\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->call3ff98b15F7624dadBf5c165e2131e950($uNKNOWNBASETYPE);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->call3ff98b15F7624dadBf5c165e2131e950: ', $e->getMessage(), PHP_EOL;
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

## `call582a6705Ad704a638373A2da8d44a3cf()`

```php
call582a6705Ad704a638373A2da8d44a3cf($uNKNOWNBASETYPE): \Obada\ClientHelper\InlineResponse2001
```

Download Obit from Blockchain

Downloads the Obit information from the blockchain to the client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uNKNOWNBASETYPE = new \Obada\ClientHelper\UNKNOWN_BASE_TYPE(); // \Obada\ClientHelper\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->call582a6705Ad704a638373A2da8d44a3cf($uNKNOWNBASETYPE);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->call582a6705Ad704a638373A2da8d44a3cf: ', $e->getMessage(), PHP_EOL;
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

## `call6e9d1c55D0f34caaBe6dB479f34401ce()`

```php
call6e9d1c55D0f34caaBe6dB479f34401ce($manufacturer, $partNumber, $serialNumber): \Obada\ClientHelper\InlineResponse200
```

Generate Obit

Returns the usn & obit for a given device_id, part_number and serial_number input.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manufacturer = Apple; // string | Device Id (Required)
$partNumber = 123456789; // string | Part Number (Required)
$serialNumber = 123456789; // string | Serial Number (Required)

try {
    $result = $apiInstance->call6e9d1c55D0f34caaBe6dB479f34401ce($manufacturer, $partNumber, $serialNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->call6e9d1c55D0f34caaBe6dB479f34401ce: ', $e->getMessage(), PHP_EOL;
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

## `call915b874a1e4945909805F077e19f99ca()`

```php
call915b874a1e4945909805F077e19f99ca($obitDid): \Obada\ClientHelper\InlineResponse2002
```

Get Obit From Blockchain

Retrieves Obit information from blockchain but does not download it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$obitDid = did:obada:81413bc1ad2074a6ae35d1f65f64f1bca2e8a20959f37ef0349a729ddc567d9b; // string | Required.

try {
    $result = $apiInstance->call915b874a1e4945909805F077e19f99ca($obitDid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->call915b874a1e4945909805F077e19f99ca: ', $e->getMessage(), PHP_EOL;
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
