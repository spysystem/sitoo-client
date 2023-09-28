# # ServiceOrderWrite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**revision** | **int** | Revision number of the service order. Must be the last revision for the service order on PUT, used to ensure data consistency. On POST, it must not be present. | [optional]
**state** | **string** |  | [optional]
**store** | [**\Spy\SitooClient\Model\ServiceOrderStoreWrite**](ServiceOrderStoreWrite.md) |  |
**owner** | [**\Spy\SitooClient\Model\ServiceOrderOwnerWrite**](ServiceOrderOwnerWrite.md) |  |
**customer** | [**\Spy\SitooClient\Model\ServiceOrderCustomerWrite**](ServiceOrderCustomerWrite.md) |  |
**currency** | **string** | Currency for the service order (ISO 4217, alpha-3 uppercased) |
**note** | **string** | The note set on the service order | [optional]
**product** | [**\Spy\SitooClient\Model\ServiceOrderProductWrite**](ServiceOrderProductWrite.md) |  |
**author** | [**\Spy\SitooClient\Model\ServiceOrderAuthorWrite**](ServiceOrderAuthorWrite.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
