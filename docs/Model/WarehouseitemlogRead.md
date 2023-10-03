# # WarehouseitemlogRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**warehouseitemlogid** | **int** | The unique ID of the warehouseitemlog. | [optional]
**warehouseitemid** | **int** | The ID of the warehouseitem that this warehouseitemlog belongs to. | [optional]
**warehousetransactionid** | **int** | The ID of the warehousetransaction that this warehouseitemlog belongs to. | [optional]
**decimalquantity** | **string** | The change of stock in this transaction. |
**decimaltotal** | **string** | The stock level after this transaction. | [optional]
**moneypricein** | **string** | The purchase price per item for this transaction (Not applicable for all transaction types). | [optional]
**moneytotal** | **string** | The value of this stock after this transaction. | [optional]
**moneyvalue** | **string** | The sum value of this itemlog entry. (The warehouse value changed). | [optional]
**sku** | **string** | The SKU for this stock item. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
