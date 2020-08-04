# # WebhookResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pkiWebhookID** | **int** | The Webhook ID. This value is visible in the admin interface. | 
**eWebhookModule** | **string** | The Module generating the Event. | 
**eWebhookEzsignevent** | **string** | This Ezsign Event. This property will be set only if the Module is \&quot;Ezsign\&quot;. | [optional] 
**pksCustomerCode** | **string** | The Customer Code in which the event was generated | 
**sWebhookUrl** | **string** | The url being called | 
**sWebhookEmailfailed** | **string** | The email that will receive the webhook in case all attempts fail. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

