# Obada\ObitApi

All URIs are relative to http://obs.node.obada.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadFromChain()**](ObitApi.md#downloadFromChain) | **GET** /obits/{key}/from-chain | Download NFT from the blockchain
[**get()**](ObitApi.md#get) | **GET** /obits/{key} | Get Obit by DID or USN
[**history()**](ObitApi.md#history) | **GET** /obits/{obit_did}/history | Get Obit history by DID or USN
[**save()**](ObitApi.md#save) | **POST** /obits | Save Obit
[**search()**](ObitApi.md#search) | **GET** /obits | Search obits by query
[**uploadToChain()**](ObitApi.md#uploadToChain) | **GET** /obits/{key}/to-chain | Uploads NFT to the blockchain


## `downloadFromChain()`

```php
downloadFromChain($key)
```

Download NFT from the blockchain

This operation downloads NFT from chain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = did:obada:fe096095-e0f0-4918-9607-6567bd5756b5; // string | The given ObitDID or USN argument

try {
    $apiInstance->downloadFromChain($key);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->downloadFromChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The given ObitDID or USN argument |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `get()`

```php
get($key): \Obada\ClientHelper\Obit
```

Get Obit by DID or USN

Get a single Obit by given ObitDID or USN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = did:obada:fe096095-e0f0-4918-9607-6567bd5756b5; // string | The given ObitDID or USN argument

try {
    $result = $apiInstance->get($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The given ObitDID or USN argument |

### Return type

[**\Obada\ClientHelper\Obit**](../Model/Obit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `history()`

```php
history($obitDid): \Obada\ClientHelper\InlineResponse200
```

Get Obit history by DID or USN

Shows the history of changes by given Obit with ObitDID or USN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$obitDid = did:obada:fe096095-e0f0-4918-9607-6567bd5756b5; // string | The given ObitDID or USN argument

try {
    $result = $apiInstance->history($obitDid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->history: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **obitDid** | **string**| The given ObitDID or USN argument |

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

## `save()`

```php
save($manufacturer, $partNumber, $serialNumber): \Obada\ClientHelper\Obit
```

Save Obit

Returns Obit with updated checksum if data was changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manufacturer = 'manufacturer_example'; // string | Waiting more specific details from Rohi
$partNumber = 'partNumber_example'; // string | Manufacturer provided. In cases where no part number is provided for the product, use model, or the most specific ID available from the manufacturer. MWCN2LL/A (an iPhone 11 Pro, Silver, 256GB, model A2160)
$serialNumber = 'serialNumber_example'; // string | Serial number hashed with sha256 hash function

try {
    $result = $apiInstance->save($manufacturer, $partNumber, $serialNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->save: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manufacturer** | **string**| Waiting more specific details from Rohi |
 **partNumber** | **string**| Manufacturer provided. In cases where no part number is provided for the product, use model, or the most specific ID available from the manufacturer. MWCN2LL/A (an iPhone 11 Pro, Silver, 256GB, model A2160) |
 **serialNumber** | **string**| Serial number hashed with sha256 hash function |

### Return type

[**\Obada\ClientHelper\Obit**](../Model/Obit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `search()`

```php
search($q, $offset): \Obada\ClientHelper\Obits
```

Search obits by query

Implements a fulltext search for obits by \"searchTerm\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = fe403a1afe16203f4b8bb3a0e72d3e17567897bc15293e4a87b663e441030aea; // string | Query argument that used for a fulltext search
$offset = 0; // int | Number of records to skip for pagination.

try {
    $result = $apiInstance->search($q, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->search: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Query argument that used for a fulltext search | [optional]
 **offset** | **int**| Number of records to skip for pagination. | [optional] [default to 0]

### Return type

[**\Obada\ClientHelper\Obits**](../Model/Obits.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadToChain()`

```php
uploadToChain($key)
```

Uploads NFT to the blockchain

This operation actually executes NFT minting proccess

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = did:obada:fe096095-e0f0-4918-9607-6567bd5756b5; // string | The given ObitDID or USN argument

try {
    $apiInstance->uploadToChain($key);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->uploadToChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The given ObitDID or USN argument |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
