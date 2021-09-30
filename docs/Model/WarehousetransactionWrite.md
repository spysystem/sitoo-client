# # WarehousetransactionWrite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**warehouseid** | **int** | The ID of the warehouse that this warehousetransaction belongs to. |
**transactiontype** | **int** | The type of the transaction. (Sales, Refund and StockTaking are read only) |
**description** | **string** | A description of the transaction. | [optional]
**shipmentid** | **int** | The ID for the shipment that created this transaction (if applicable, otherwise null). | [optional]
**externalid** | **string** | External ID for the warehouse transaction (if applicable, otherwise null). | [optional]
**reasoncode** | **string** | A reason code for the warehouse transaction (if applicable, otherwise null). | [optional]
**items** | [**\Spy\SitooClient\Model\WarehouseitemlogWrite[]**](WarehouseitemlogWrite.md) | Array of warehouseitemlog. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
