# # ProductWrite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**productid** | **int** |  | [optional]
**sku** | **string** | Stock Keeping Unit (ie. the article number). Should only contain [A-Za-z0-9_+-/]. |
**skumanufacturer** | **string** | The Stock Keeping Unit (SKU) for the manufacturer. | [optional]
**descriptionshort** | **string** | A short description, typically used in product lists etc. | [optional]
**description** | **string** | The main description of the product. | [optional]
**moneyprice** | **string** | Price of the product. If this field is used for setting price on a product, the price will be set for the \&quot;Default\&quot; price list. It is recommended to use the Price Lists endpoints for setting product prices instead. | [optional]
**moneypriceorg** | **string** | Suggested Retail Price (SRP) | [optional]
**moneypricein** | **string** | Purchase price which can be used to help calculate profit on products. (Always excluding VAT) | [optional]
**unitlabel** | **string** | Unit label (eg. \&quot;pcs\&quot;, \&quot;kg\&quot;). Default is an empty string. | [optional]
**allowdecimals** | **bool** | Set this if the product can be purchased with fractional quantity. | [optional]
**deliveryinfo** | **string** | Delivery information that can be provided to the customer after the purchase. | [optional]
**active** | **bool** | If false, the product is not shown in in the Webshop. | [optional]
**activepos** | **bool** | If false, the product is not shown in in the POS. | [optional]
**vatid** | **int** | The reference to which Product Group the product belongs to. The Product Group also determines VAT. See productgroup for more information. | [optional]
**defaultcategoryid** | **int** | Default category for the product. If set to a category then the value will also be added to categories. If set to null, then the previous value will be removed from categories. | [optional]
**categories** | **string[]** | Array of category ID:s that the product belongs to. | [optional]
**manufacturerid** | **int** | The reference to the manufacturer. | [optional]
**manufacturerurl** | **string** | Manufacturer&#39;s url for the product. | [optional]
**custom1** | **string** | Custom field 1. | [optional]
**custom2** | **string** | Custom field 2. | [optional]
**custom3** | **string** | Custom field 3. | [optional]
**custom4** | **string** | Custom field 4. | [optional]
**custom5** | **string** | Custom field 5. | [optional]
**stockcountenable** | **bool** | Turns on/off stock handling for the product. | [optional]
**barcode** | **string** | Barcode for the product. | [optional]
**barcodealiases** | **string[]** | Barcode aliases for the product. Used if multiple barcodes exist for product. | [optional]
**similar** | **string[]** | Array of product ID:s for products that are similar to this one. (Only applicable to regular products and main product variants) | [optional]
**related** | **string[]** | Array of product ID:s for products that are related to this one. (Only applicable to regular products and main product variants) | [optional]
**accessories** | **string[]** | Array of product ID:s for products that are accessories to this one. (Only applicable to regular products and main product variants) | [optional]
**customattributes** | **object** | Map of attribute values for the product. The keys must exist as ID of attributes defined. The value type is defined by the attribute. | [optional]
**title** | **string** | Title of product (ie. Product Name). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
