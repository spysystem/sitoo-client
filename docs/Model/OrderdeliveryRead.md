# # OrderdeliveryRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderdeliveryid** | **int** | The order delivery ID is unique for a system. | [optional]
**orderid** | **int** | The order ID for which this delivery was made. | [optional]
**warehouseid** | **int** | The warehouse ID used for this order delivery. |
**orderdeliveryref** | **string** | Delivery reference (waybill no. or similar tracking number). | [optional]
**datedelivery** | **int** | The date of the order delivery. | [optional]
**datecancelled** | **int** | The date the delivery was cancelled, or null if not cancelled. | [optional]
**pluginname** | **string** | Name of plugin that handles this delivery. | [optional]
**orderdeliveryitems** | [**\Spy\SitooClient\Model\OrderdeliveryitemRead[]**](OrderdeliveryitemRead.md) | Array of delivery items for this delivery. See orderdeliveryitem for fields. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
