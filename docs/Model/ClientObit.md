# # ClientObit

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
**modifiedAt** | **\DateTime** |  | [optional]
**rootHash** | **string** |  | [optional]
**metadata** | **object** | Get description from Rohi | [optional]
**documents** | **object** | To generate this link, take an SHA-256 hash of the document, and link to it as https://www.some-website.com?h1&#x3D;hash-of-document. Note this does not yet adhere to the hashlink standard. | [optional]
**structuredData** | **object** | Same as metadata but bigger. Key (string) &#x3D;&gt; Value (string) (hash per line sha256(key + value)) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
