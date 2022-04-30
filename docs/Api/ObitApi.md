# Obada\ObitApi

All URIs are relative to http://obs.node.obada.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**get()**](ObitApi.md#get) | **GET** /obits/{obit_did} | Get Obit by DID or USN
[**history()**](ObitApi.md#history) | **GET** /obits/{obit_did}/history | Get Obit history by DID or USN
[**save()**](ObitApi.md#save) | **POST** /obits | Save Obit
[**search()**](ObitApi.md#search) | **GET** /obits | Search obits by query


## `get()`

```php
get($obitDid): \Obada\ClientHelper\Obit
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
$obitDid = did:obada:fe096095-e0f0-4918-9607-6567bd5756b5; // string | The given ObitDID or USN argument

try {
    $result = $apiInstance->get($obitDid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **obitDid** | **string**| The given ObitDID or USN argument |

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
save($saveObitRequest)
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
$saveObitRequest = new \Obada\ClientHelper\SaveObitRequest(); // \Obada\ClientHelper\SaveObitRequest

try {
    $apiInstance->save($saveObitRequest);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->save: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **saveObitRequest** | [**\Obada\ClientHelper\SaveObitRequest**](../Model/SaveObitRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
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
