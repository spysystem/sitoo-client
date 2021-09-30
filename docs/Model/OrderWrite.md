# # OrderWrite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**externalid** | **string** | External ID for the order. The externalid is unique for a system and can only contain [A-Za-z0-9_-] with a length of 1-40 characters. | [optional]
**creditorderid** | **int** | The ID of the order that was the source of this refund. | [optional]
**email** | **string** | Email. | [optional]
**namefirst** | **string** | First Name. | [optional]
**namelast** | **string** | Last Name. | [optional]
**personalid** | **string** | Personal Number or Organizational ID. | [optional]
**company** | **string** | Company Name. | [optional]
**phone** | **string** | Phone Number. | [optional]
**invoiceAddress** | **string** | Invoice Address. | [optional]
**invoiceAddress2** | **string** | Invoice Address 2. | [optional]
**invoiceZip** | **string** | Invoice Zip. | [optional]
**invoiceCity** | **string** | Invoice City. | [optional]
**invoiceState** | **string** | Invoice State. | [optional]
**invoiceCountryid** | **string** | Invoice Country ID (2-letter ISO 3166). | [optional]
**deliveryAddress** | **string** | Delivery Address. | [optional]
**deliveryAddress2** | **string** | Delivery Address 2. | [optional]
**deliveryZip** | **string** | Delivery Zip. | [optional]
**deliveryCity** | **string** | Delivery City. | [optional]
**deliveryState** | **string** | Delivery State. | [optional]
**deliveryCountryid** | **string** | Delivery Country ID (2-letter ISO 3166). | [optional]
**comment** | **string** | Order comment. | [optional]
**commentinternal** | **string** | Internal staff comment. | [optional]
**customerref** | **string** | Customer Reference. | [optional]
**checkoutref** | **string** | Checkout Reference (typically set by payment providers). | [optional]
**orderdate** | **int** | The date of the order. In a POST request, the default is the current timestamp. Orders generated from the POS will have the date of when the transaction was made. Note! if the POS is offline when the transaction is made, then the order will be created on the backend at a later time, but the date will still be set to when the transaction was made. | [optional]
**orderstateid** | **int** | Order state. | [optional]
**paymentstateid** | **int** | Payment state. | [optional]
**ordertypeid** | **int** | Order type. |
**warehouseid** | **int** | The ID of the warehouse that this order is registered for. | [optional]
**datereserved** | **int** | The date that a warehouse stock reservation is valid until. (Null value is allowed for no reservation) | [optional]
**currencycode** | **string** | Currency for the order. (ISO 4217, alpha-3 uppercased) If not provided, defaults to system currency. | [optional]
**additionaldata** | [**\Spy\SitooClient\Model\OrderAdditionaldataWrite**](OrderAdditionaldataWrite.md) |  | [optional]
**orderitems** | [**\Spy\SitooClient\Model\OrderitemWrite[]**](OrderitemWrite.md) | The order items for this order. An array of orderitem. | [optional]
**payments** | [**\Spy\SitooClient\Model\OrderpaymentWrite[]**](OrderpaymentWrite.md) | The payments for this order. An array of orderpayment. | [optional]
**reservedpayments** | [**\Spy\SitooClient\Model\OrderreservedpaymentWrite[]**](OrderreservedpaymentWrite.md) | The reserved payments for this order. An array of orderreservedpayment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
