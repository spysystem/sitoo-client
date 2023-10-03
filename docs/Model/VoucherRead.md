# # VoucherRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**voucherid** | **int** | The ID of the voucher. | [optional]
**activepos** | **bool** | If true then this voucher is active in the POS. | [optional]
**vouchercode** | **string** | Code used for this voucher. (Used for grouping vouchers in reports and stats) | [optional]
**voucherpassword** | **string** | Optional password used for this voucher. | [optional]
**vouchername** | **string** | Name of this voucher. |
**vouchercomment** | **string** | Internal description for this voucher. | [optional]
**datecreated** | **int** | The date this voucher was created. | [optional]
**datestart** | **int** | The start date for the validity of this voucher. No start date if value is null. | [optional]
**dateend** | **int** | The end date for the validity of this voucher. No end date if value is null. | [optional]
**tags** | **string[]** | The tags for this voucher. If added, then the voucher will only be applied for stores with the same tags. | [optional]
**vouchertype** | **int** | Voucher Type |
**valueX** | **int** | The X value (integer) used for calculations on the voucher. | [optional]
**valueY** | **int** | The Y value (integer) used for calculations on the voucher. | [optional]
**valueZ** | **int** | The Z value (integer) used for calculations on the voucher. | [optional]
**moneyM** | **string** | The M value (money) used for calculations on the voucher. | [optional]
**moneyN** | **string** | The N value (money) used for calculations on the voucher. | [optional]
**vouchername1** | **string** | The vouchername used when voucher of type ProductBuy3For2Or2For1AndAHalf has triggered a 3 for 2 discount. | [optional]
**vouchercode1** | **string** | The vouchercode used when voucher of type ProductBuy3For2Or2For1AndAHalf has triggered a 3 for 2 discount. | [optional]
**vouchername2** | **string** | The vouchername used when voucher of type ProductBuy3For2Or2For1AndAHalf has triggered a 2 for 1.5 discount. | [optional]
**vouchercode2** | **string** | The vouchercode used when voucher of type ProductBuy3For2Or2For1AndAHalf has triggered a 2 for 1.5 discount. | [optional]
**maxuses** | **int** | The maximum number of times the voucher can be applied for a purchase. | [optional]
**priority** | **int** | The priority of the voucher where 1 is highest and 5 is lowest. | [optional]
**pricelisttags** | **string[]** | These tags are used to activate price lists with the same tags. | [optional]
**vouchergrouptype** | **int** | The group type for the voucher. Implicit value depending on the vouchertype. | [optional]
**voucherstate** | **int** | Voucher state. | [optional]
**products** | **int[]** | An array of product ID. | [optional]
**productoptions** | [**\Spy\SitooClient\Model\VoucherproductoptionRead[]**](VoucherproductoptionRead.md) | An array of voucherproductoption used for vouchers of Package group type. Each option of the array must be fulfilled for the voucher to be applied. | [optional]
**discountoptions** | [**\Spy\SitooClient\Model\VoucherdiscountoptionRead[]**](VoucherdiscountoptionRead.md) | An array of voucherdiscountoption used for vouchers of type ProductBuyXGetDiscountList. Each discount option can be used if the products required have been added to the cart. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
