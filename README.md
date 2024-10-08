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
$address = obada1yxxnd624tgwqm3eyv5smdvjrrydfh9h943qptg; // string | OBADA address

try {
    $result = $apiInstance->account($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->account: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://obs.node.obada.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**account**](docs/Api/AccountsApi.md#account) | **GET** /accounts/{address} | Fetches an information about single account
*AccountsApi* | [**accounts**](docs/Api/AccountsApi.md#accounts) | **GET** /accounts | Returns a list of OBADA accounts
*AccountsApi* | [**deleteImportedAccount**](docs/Api/AccountsApi.md#deleteimportedaccount) | **DELETE** /accounts/{address} | Delete imported account
*AccountsApi* | [**exportAccount**](docs/Api/AccountsApi.md#exportaccount) | **POST** /accounts/export-account | Export OBADA account (private key) from client-helper
*AccountsApi* | [**getMnemonic**](docs/Api/AccountsApi.md#getmnemonic) | **GET** /accounts/mnemonic | Fetching an existing mnemonic phrase
*AccountsApi* | [**importAccount**](docs/Api/AccountsApi.md#importaccount) | **POST** /accounts/import-account | Imports an existing OBADA account (private key) to the client-helper user profile
*AccountsApi* | [**importWallet**](docs/Api/AccountsApi.md#importwallet) | **POST** /accounts/import-wallet | Imports an existing HD wallet to the client-helper user profile
*AccountsApi* | [**newAccount**](docs/Api/AccountsApi.md#newaccount) | **POST** /accounts/new-account | Creates a new OBADA account from HD wallet master key
*AccountsApi* | [**newMnemonic**](docs/Api/AccountsApi.md#newmnemonic) | **GET** /accounts/new-mnemonic | Generate a new mnemonic phrase for seeding wallet
*AccountsApi* | [**newWallet**](docs/Api/AccountsApi.md#newwallet) | **POST** /accounts/new-wallet | Creates profile HD wallet
*AccountsApi* | [**register**](docs/Api/AccountsApi.md#register) | **POST** /accounts/register | Register a new client-helper user profile
*AccountsApi* | [**sendCoins**](docs/Api/AccountsApi.md#sendcoins) | **POST** /accounts/{address}/send-coins | Send coins from selected account
*AccountsApi* | [**updateAccount**](docs/Api/AccountsApi.md#updateaccount) | **POST** /accounts/{address} | Sets account specific information
*NFTApi* | [**batchMint**](docs/Api/NFTApi.md#batchmint) | **POST** /nft/batch-mint | Mints batches of NFT
*NFTApi* | [**batchSend**](docs/Api/NFTApi.md#batchsend) | **POST** /nft/batch-send | Send a batch of NFTs to another address
*NFTApi* | [**mint**](docs/Api/NFTApi.md#mint) | **POST** /nft/{key}/mint | Mints NFT
*NFTApi* | [**nft**](docs/Api/NFTApi.md#nft) | **GET** /nft/{key} | Fetch NFT from OBADA blockchain Node
*NFTApi* | [**send**](docs/Api/NFTApi.md#send) | **POST** /nft/{key}/send | Send NFT to another address
*NFTApi* | [**updateMetadata**](docs/Api/NFTApi.md#updatemetadata) | **POST** /nft/{key}/metadata | Update NFT metadata
*ObitApi* | [**batchSave**](docs/Api/ObitApi.md#batchsave) | **POST** /obits/batch | Batch Save Obit
*ObitApi* | [**get**](docs/Api/ObitApi.md#get) | **GET** /obits/{key} | Get Obit by DID or USN
*ObitApi* | [**history**](docs/Api/ObitApi.md#history) | **GET** /obits/{key}/history | Get Obit history by DID or USN
*ObitApi* | [**save**](docs/Api/ObitApi.md#save) | **POST** /obits | Save Obit
*ObitApi* | [**search**](docs/Api/ObitApi.md#search) | **GET** /obits | Search obits by query
*UtilsApi* | [**generateChecksum**](docs/Api/UtilsApi.md#generatechecksum) | **POST** /obit/checksum | Generates Obit checksum
*UtilsApi* | [**generateDID**](docs/Api/UtilsApi.md#generatedid) | **POST** /obit/did | Generate Obit DID

## Models

- [Account](docs/Model/Account.md)
- [AccountBalance](docs/Model/AccountBalance.md)
- [AccountRequest](docs/Model/AccountRequest.md)
- [Accounts](docs/Model/Accounts.md)
- [BatchMintNFTRequest](docs/Model/BatchMintNFTRequest.md)
- [BatchSaveObitRequest](docs/Model/BatchSaveObitRequest.md)
- [BatchSaveObitRequestObitsInner](docs/Model/BatchSaveObitRequestObitsInner.md)
- [BatchSendNFTRequest](docs/Model/BatchSendNFTRequest.md)
- [DeviceDocument](docs/Model/DeviceDocument.md)
- [Document](docs/Model/Document.md)
- [ExportAccountRequest](docs/Model/ExportAccountRequest.md)
- [ExportAccountResponse](docs/Model/ExportAccountResponse.md)
- [GenerateObitChecksumRequest](docs/Model/GenerateObitChecksumRequest.md)
- [GenerateObitChecksumResponse](docs/Model/GenerateObitChecksumResponse.md)
- [GenerateObitDIDRequest](docs/Model/GenerateObitDIDRequest.md)
- [GenerateObitDIDResponse](docs/Model/GenerateObitDIDResponse.md)
- [ImportAccountRequest](docs/Model/ImportAccountRequest.md)
- [InternalServerError](docs/Model/InternalServerError.md)
- [MnemonicRequest](docs/Model/MnemonicRequest.md)
- [NFT](docs/Model/NFT.md)
- [NFTData](docs/Model/NFTData.md)
- [NewMnemonic](docs/Model/NewMnemonic.md)
- [NotAuthorized](docs/Model/NotAuthorized.md)
- [NotFound](docs/Model/NotFound.md)
- [Obit](docs/Model/Obit.md)
- [ObitHistoryValue](docs/Model/ObitHistoryValue.md)
- [Obits](docs/Model/Obits.md)
- [ObitsMeta](docs/Model/ObitsMeta.md)
- [Profile](docs/Model/Profile.md)
- [RegisterRequest](docs/Model/RegisterRequest.md)
- [SaveObitRequest](docs/Model/SaveObitRequest.md)
- [SendCoinsRequest](docs/Model/SendCoinsRequest.md)
- [SendNFTRequest](docs/Model/SendNFTRequest.md)
- [UnprocessableEntity](docs/Model/UnprocessableEntity.md)
- [UnprocessableEntityFieldsInner](docs/Model/UnprocessableEntityFieldsInner.md)
- [WalletExistsError](docs/Model/WalletExistsError.md)

## Authorization

Authentication schemes defined for the API:
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
    - Generator version: `7.9.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
