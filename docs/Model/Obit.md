# # Obit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**did** | **string** | OBADA decentralized identifier | [optional]
**usn** | **string** | Test An 8-12 character “URL Shortened” obit. Create the USN by Base(58) encoding the OBIT ID. Take the first 8 characters. Check for duplicates. With 16 million OBITs there is a 40% chance of collision. If so, add 4 characters. Repeat as necessary until a unique USN is generated. | [optional]
**owner** | **string** | Owner is the person/entity that owns the obit and the physical asset it represents. Format is a DID like did:obada:owner:1234. However in the current version only test numbers will be used. | [optional]
**manufacturer** | **string** | Waiting more specific details from Rohi |
**partNumber** | **string** | Manufacturer provided. In cases where no part number is provided for the product, use model, or the most specific ID available from the manufacturer. MWCN2LL/A (an iPhone 11 Pro, Silver, 256GB, model A2160) |
**serialNumberHash** | **string** | Serial number hashed with sha256 hash function | [optional]
**trustAnchorToken** | **string** | JWT token from the trust anchor | [optional]
**documents** | [**\Obada\ClientHelper\DocumentLink[]**](DocumentLink.md) | To generate this link, take an SHA-256 hash of the document, and link to it as https://www.some-website.com?h1&#x3D;hash-of-document. Note this does not yet adhere to the hashlink standard. | [optional]
**checksum** | **string** | Hash calculated by SHA256 (previous Obit checksum + Obit data). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
