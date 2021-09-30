# # WarehousetransactionRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**warehousetransactionid** | **int** | The unique ID of the warehousetransaction. | [optional]
**warehouseid** | **int** | The ID of the warehouse that this warehousetransaction belongs to. |
**datecreated** | **int** | The date when the transaction was created. | [optional]
**transactiontype** | **int** | The type of the transaction. (Sales, Refund and StockTaking are read only) |
**description** | **string** | A description of the transaction. | [optional]
**orderdeliveryid** | **int** | The ID for the orderdelivery that created this transaction (if applicable, otherwise null). | [optional]
**shipmentid** | **int** | The ID for the shipment that created this transaction (if applicable, otherwise null). | [optional]
**externalid** | **string** | External ID for the warehouse transaction (if applicable, otherwise null). | [optional]
**reasoncode** | **string** | A reason code for the warehouse transaction (if applicable, otherwise null). | [optional]
**items** | [**\Spy\SitooClient\Model\WarehouseitemlogRead[]**](WarehouseitemlogRead.md) | Array of warehouseitemlog. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
