# # PoszreportpaymentRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the payment. | [optional]
**moneytotal** | **string** | The total money value of the payment. | [optional]
**moneycaptured** | **string** | The amount captured for the payment. The difference between total and captured is the reserved amount. | [optional]
**moneyinadvance** | **string** | The amount captured for the payment for items that were not delivered at the time of purchase (payment in advance). | [optional]
**moneyreserved** | **string** | The reserved amount. | [optional]
**subpayments** | [**\Spy\SitooClient\Model\PoszreportsubpaymentRead[]**](PoszreportsubpaymentRead.md) | A specification of different payments within the payment type (if applicable). See poszreportsubpayment for fields. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
