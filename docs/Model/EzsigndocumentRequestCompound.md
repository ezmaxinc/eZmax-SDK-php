# # EzsigndocumentRequestCompound

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eEzsigndocumentSource** | **string** | Indicates where to look for the document binary content. |
**eEzsigndocumentFormat** | **string** | Indicates the format of the document. |
**sEzsigndocumentBase64** | **string** | The Base64 encoded binary content of the document.  This field is Required when eEzsigndocumentSource &#x3D; Base64. | [optional]
**fkiEzsignfolderID** | **int** | A reference to a valid Ezsignfolder.  That value is returned after a successful Ezsignfolder Creation. |
**dtEzsigndocumentDuedate** | **string** | Represent a Date Time. The timezone is the one configured in the User&#39;s profile. |
**fkiLanguageID** | **int** | The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English| |
**sEzsigndocumentName** | **string** | The name of the document that will be presented to Ezsignfoldersignerassociations |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
