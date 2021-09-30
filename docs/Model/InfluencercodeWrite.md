# # InfluencercodeWrite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The unique influencer code. Can only contain [0-9a-zA-Z&amp;_-.] |
**name** | **string** | The name of the influencer for this code. |
**active** | **bool** | If true, then this influencer code is active. | [optional]
**datestart** | **int** | The date used for the activation of this influencer code. No activation date if value is null. | [optional]
**dateend** | **int** | The date used for the expiration of this influencer code. No expiration date if value is null. | [optional]
**voucherpassword** | **string** | The password used for unlocking the voucher. |
**vouchercode** | **string** | Value used to override vouchercode in the voucher applied for the purchase, or null to leave original value. | [optional]
**vouchername** | **string** | Value used to override vouchername in the voucher applied for the purchase, or null to leave original value. | [optional]
**vouchercomment** | **string** | Value used to override vouchercomment in voucher the voucher applied for the purchase, or null to leave original value. | [optional]
**maxuses** | **int** | The maximum times the influencer code can be used or null for unlimited use. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
