# # ProductvariantRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**productid** | **int** | The unique internal productid. It is unique over all sites in the system. |
**activepos** | **bool** | If false, the product is not shown in in the POS. |
**title** | **string** | Title of product (ie. Product Name). |
**sku** | **string** | Stock Keeping Unit (ie. the article number). If entered, it needs to be unique for the site. |
**moneyprice** | **string** | Price of the product. If this field is used for setting price on a product, the price will be set for the \&quot;Default\&quot; price list. It is recommended to use the Price Lists endpoints for setting product prices instead. |
**moneypriceorg** | **string** | Suggested Retail Price (SRP) |
**moneypricein** | **string** | Purchase price which can be used to help calculate profit on products. (Always excluding VAT) |
**barcode** | **string** | Barcode for the product. |
**barcodealiases** | **string[]** | Barcode aliases for the product. Used if multiple barcodes exist for product. | [optional]
**attributes** | **string[]** | Array of attributes (string). It corresponds to the groups array in productvariants. For each group in productvariants this array must have a value at the same index and with a value from the corresponding options array. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
