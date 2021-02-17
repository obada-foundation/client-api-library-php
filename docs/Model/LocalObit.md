# # LocalObit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**owner** | **string** | Owner is the person/entity that owns the obit and the physical asset it represents. |
**obitStatus** | **string** | Represent available Obit statuses:   - FUNCTIONAL   - NON_FUNCTIONAL   - DISPOSED   - STOLEN   - DISABLED_BY_OWNER |
**manufacturer** | **string** | Waiting more specific details from Rohi |
**partNumber** | **string** | Manufacturer provided. In cases where no part number is provided for the product, use model, or the most specific ID available from the manufacturer. MWCN2LL/A (an iPhone 11 Pro, Silver, 256GB, model A2160) |
**serialNumber** | **string** | Serial Number |
**metadata** | [**\Obada\ClientHelper\LocalObitMetadata[]**](LocalObitMetadata.md) | Get description from Rohi | [optional]
**documents** | [**\Obada\ClientHelper\LocalObitDocuments[]**](LocalObitDocuments.md) | To generate this link, take an SHA-256 hash of the document, and link to it as https://www.some-website.com?h1&#x3D;hash-of-document. Note this does not yet adhere to the hashlink standard. | [optional]
**structuredData** | [**\Obada\ClientHelper\LocalObitStructuredData[]**](LocalObitStructuredData.md) | Same as metadata but bigger. Key (string) &#x3D;&gt; Value (string) (hash per line sha256(key + value)) | [optional]
**modifiedAt** | [**\DateTime**](\DateTime.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
