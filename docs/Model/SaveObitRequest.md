# # SaveObitRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**manufacturer** | **string** | Waiting more specific details from Rohi |
**partNumber** | **string** | Manufacturer provided. In cases where no part number is provided for the product, use model, or the most specific ID available from the manufacturer. MWCN2LL/A (an iPhone 11 Pro, Silver, 256GB, model A2160) |
**serialNumber** | **string** | Serial number hashed with sha256 hash function |
**documents** | [**\Obada\ClientHelper\DeviceDocument[]**](DeviceDocument.md) |  | [optional]
**encryptDocuments** | **bool** | If true then client helper will encrypt documents with randomly generated key | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
