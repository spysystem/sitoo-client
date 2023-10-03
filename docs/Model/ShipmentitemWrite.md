# # ShipmentitemWrite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipmentitemid** | **int** | Row ID for shipment item. | [optional]
**shipmentpackageid** | **int** | Reference to shipment package that this item belongs to. | [optional]
**sku** | **string** | The SKU for this shipment item. | [optional]
**productname** | **string** | The name of the product in this shipment item. | [optional]
**unitlabel** | **string** | Unit (typically left blank) (e g \&quot;kg\&quot;). | [optional]
**decimalunitquantity** | **string** | Unit quantity if applicable, else null. | [optional]
**quantity** | **int** | The number of units in this shipment item. | [optional]
**quantityreceived** | **int** | The number of units received for this shipment. | [optional]
**moneypricein** | **string** | The purchase price per unit for this shipment item or null. If entered it can be used for the warehouse stock transaction resulting from the shipment. | [optional]
**externalid** | **string** | External ID for shipment item (if applicable). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
