# # InlineResponse2004Obit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**obitDid** | **string** |  | [optional]
**usn** | **string** |  | [optional]
**ownerDid** | **string** |  | [optional]
**obitStatus** | **string** | Represent available Obit statuses:   - FUNCTIONAL   - NON_FUNCTIONAL   - DISPOSED   - STOLEN   - DISABLED_BY_OWNER | [optional]
**manufacturer** | **string** |  | [optional]
**partNumber** | **string** |  | [optional]
**serialNumberHash** | **string** |  | [optional]
**modifiedAt** | [**\DateTime**](\DateTime.md) |  | [optional]
**rootHash** | **string** |  | [optional]
**metadata** | [**\Obada\ClientHelper\InlineResponse2001ObitMetadata[]**](InlineResponse2001ObitMetadata.md) | Get description from Rohi | [optional]
**documents** | [**\Obada\ClientHelper\InlineResponse2001ObitDocuments[]**](InlineResponse2001ObitDocuments.md) | To generate this link, take an SHA-256 hash of the document, and link to it as https://www.some-website.com?h1&#x3D;hash-of-document. Note this does not yet adhere to the hashlink standard. | [optional]
**structuredData** | [**\Obada\ClientHelper\InlineResponse2004ObitStructuredData[]**](InlineResponse2004ObitStructuredData.md) | Same as metadata but bigger. Key (string) &#x3D;&gt; Value (string) (hash per line sha256(key + value)) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
