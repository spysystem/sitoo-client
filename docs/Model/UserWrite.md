# # UserWrite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Email for user. Must be unique. |
**namefirst** | **string** | First name. | [optional]
**namelast** | **string** | Last name. | [optional]
**personalid** | **string** | Personal ID. | [optional]
**externalid** | **string** | External ID or null if not used. | [optional]
**company** | **string** | Company name. | [optional]
**department** | **string** | Department. | [optional]
**companyid** | **string** | Organization ID. | [optional]
**address** | **string** | Address. | [optional]
**address2** | **string** | Extra address field. | [optional]
**zip** | **string** | Zip or postal code. | [optional]
**city** | **string** | City. | [optional]
**state** | **string** | State or region. | [optional]
**countryid** | **string** | Country ID (ISO 3166-1, alpha-2). | [optional]
**phone** | **string** | Phone number. | [optional]
**mobile** | **string** | Mobile phone number. | [optional]
**notes** | **string** | Internal notes about the user. | [optional]
**pin** | **string** | Write only. Personal Identification Number (4 or 6 digits). Must be unique. | [optional]
**customernumber** | **string** | Customer number. | [optional]
**voucherpasswords** | **string[]** | Array of voucher passwords (string) used to activate campaigns for customer in Sitoo POS. | [optional]
**role** | **int** | The access role for this user, or null if not applicable. (Note! Admin value is Read only) | [optional]
**warehouses** | **string[]** | An array of warehouse IDs that the Store Manager or Store Staff should have access to. Other roles will not be affected by this property. | [optional]
**posrefundcard** | **bool** | If true, the user has the right to perform refund for card payments in Sitoo POS. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
