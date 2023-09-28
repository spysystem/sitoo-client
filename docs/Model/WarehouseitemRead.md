# # WarehouseitemRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**warehouseitemid** | **int** | The unique ID of the warehouseitem. | [optional]
**warehouseid** | **int** | The ID of the warehouse this warehouseitem belongs to. | [optional]
**sku** | **string** | The SKU for this stock item. |
**binlocation** | **string** | Bin location for the stock for this warehouse. | [optional]
**decimalthreshold** | **string** | Threshold for ordering new stock. | [optional]
**decimaltotal** | **string** | Current stock level for this warehouseitem. (Read Only if not warehousetype Virtual) | [optional]
**moneytotal** | **string** | Current stock value for this warehouseitem. (Read Only if not warehousetype Virtual) | [optional]
**datelastmodified** | **int** | The last date this warehouseitem has been part of a transaction. | [optional]
**datelaststocktaking** | **int** | The last date this warehouseitem has been part of a stocktaking transaction. | [optional]
**decimalreserved** | **string** | Reserved stock level for this warehouseitem. | [optional]
**decimalavailable** | **string** | Available stock level for this warehouseitem. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
