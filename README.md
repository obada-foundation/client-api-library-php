# OpenAPIClient-php

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

For more information, please visit [https://www.obada.io](https://www.obada.io).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/obada-foundation/client-api-library-php.git"
    }
  ],
  "require": {
    "obada-foundation/client-api-library-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://obs.node.obada.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**balance**](docs/Api/AccountsApi.md#balance) | **GET** /accounts/my-balance | Shows account balance of OBADA address
*AccountsApi* | [**createAccount**](docs/Api/AccountsApi.md#createaccount) | **POST** /accounts | Creates a new Account
*ObitApi* | [**downloadFromChain**](docs/Api/ObitApi.md#downloadfromchain) | **GET** /obits/{key}/from-chain | Download NFT from the blockchain
*ObitApi* | [**get**](docs/Api/ObitApi.md#get) | **GET** /obits/{key} | Get Obit by DID or USN
*ObitApi* | [**history**](docs/Api/ObitApi.md#history) | **GET** /obits/{key}/history | Get Obit history by DID or USN
*ObitApi* | [**save**](docs/Api/ObitApi.md#save) | **POST** /obits | Save Obit
*ObitApi* | [**search**](docs/Api/ObitApi.md#search) | **GET** /obits | Search obits by query
*ObitApi* | [**uploadToChain**](docs/Api/ObitApi.md#uploadtochain) | **POST** /obits/{key}/to-chain | Uploads NFT to the blockchain
*UtilsApi* | [**generateChecksum**](docs/Api/UtilsApi.md#generatechecksum) | **POST** /obit/checksum | Generates Obit checksum
*UtilsApi* | [**generateDID**](docs/Api/UtilsApi.md#generatedid) | **POST** /obit/did | Generate Obit DID

## Models

- [Account](docs/Model/Account.md)
- [AccountBalance](docs/Model/AccountBalance.md)
- [DeviceDocument](docs/Model/DeviceDocument.md)
- [Document](docs/Model/Document.md)
- [GenerateObitChecksumRequest](docs/Model/GenerateObitChecksumRequest.md)
- [GenerateObitChecksumResponse](docs/Model/GenerateObitChecksumResponse.md)
- [GenerateObitDIDRequest](docs/Model/GenerateObitDIDRequest.md)
- [GenerateObitDIDResponse](docs/Model/GenerateObitDIDResponse.md)
- [History200Response](docs/Model/History200Response.md)
- [InternalServerError](docs/Model/InternalServerError.md)
- [NewAccountRequest](docs/Model/NewAccountRequest.md)
- [NotAuthorized](docs/Model/NotAuthorized.md)
- [NotFound](docs/Model/NotFound.md)
- [Obit](docs/Model/Obit.md)
- [ObitHistory](docs/Model/ObitHistory.md)
- [Obits](docs/Model/Obits.md)
- [ObitsMeta](docs/Model/ObitsMeta.md)
- [SaveObitRequest](docs/Model/SaveObitRequest.md)
- [UnprocessableEntity](docs/Model/UnprocessableEntity.md)
- [UnprocessableEntityFieldsInner](docs/Model/UnprocessableEntityFieldsInner.md)

## Authorization

### bearerAuth

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

techops@obada.io

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
