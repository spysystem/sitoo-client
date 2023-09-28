# # GiftcardRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of giftcard. |
**currencycode** | **string** | Currency for the giftcard. (ISO 4217, alpha-3) |
**cardnumber** | **string** | The unique id of the gift card (card number). | [optional]
**cardnumberDisplay** | **string** | The masked card number, used for public display. | [optional]
**redeemable** | **bool** | If true, the gift card is active for redeem with the moneyamount available. | [optional]
**dateExpires** | **int** | The date for the expiration of the gift card. (If passed, the gift card is invalid) | [optional]
**dateCreated** | **int** | The date that the gift card was created. | [optional]
**moneyamount** | **string** | Current monetary value of the gift card. | [optional]
**requirespin** | **bool** | Indicates if PIN is required when redeeming the gift card. | [optional]
**transactions** | [**\Spy\SitooClient\Model\GiftcardtransactionRead[]**](GiftcardtransactionRead.md) | The transactions for this gift card. An array of giftcardtransaction. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
