# # OrderitemWrite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderitemtype** | **int** | Order item type.  Note that item of type Discount needs to be preceded by one of type Product (to which it belongs) and the field moneyrowdiscount should be used to set the value of the discount. | [optional]
**productname** | **string** | Product Name. The title for the product at the time of the order. |
**sku** | **string** | Stock-keeping unit (ie. the article number) for the product at the time of the order. | [optional]
**productattributes** | **string** | Product variant data (eg. \&quot;Color: Red, Size: M\&quot;) for the product at the time of the order. | [optional]
**externalinput** | **string** | Text entered by buyer (eg. text on a custom made t-shirt). | [optional]
**externalinputtitle** | **string** | Title for text entered by buyer (eg. \&quot;Your t-shirt text\&quot;). | [optional]
**unitlabel** | **string** | Unit (typically empty) (eg. \&quot;kg\&quot;). | [optional]
**quantity** | **int** | Quantity, the number of items. |
**decimalunitquantity** | **string** | Unit quantity if applicable, else null | [optional]
**moneypriceorg** | **string** | Regular net price of product per unit. (Suggested Retail Price) | [optional]
**vatvalue** | **float** | VAT percentage. | [optional]
**deliveryinfo** | **string** | Delivery info is information sent to the customer after the purchase. | [optional]
**vouchercode** | **string** | Voucher code. | [optional]
**vouchername** | **string** | Voucher name. The name shown when the code is applied. | [optional]
**vouchercomment** | **string** | Voucher comment. | [optional]
**vouchervalue** | **float** | Value of voucher. Percentage or fixed sum depending on ispercentage. | [optional]
**salestaxes** | [**\Spy\SitooClient\Model\OrderitemsalestaxWrite[]**](OrderitemsalestaxWrite.md) | Array of orderitemsalestax applied to this orderitem. | [optional]
**additionaldata** | [**\Spy\SitooClient\Model\OrderitemAdditionaldataWrite**](OrderitemAdditionaldataWrite.md) |  | [optional]
**moneyrowprice** | **string** | Total Row Price. (Only used for POST/PUT) | [optional]
**moneyrowdiscount** | **string** | Total Row Discount. (Only used for POST/PUT) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
