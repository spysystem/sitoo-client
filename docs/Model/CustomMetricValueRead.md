# # CustomMetricValueRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | The name of the Custom Metric |
**date** | **string** | Required if metric grouping is date or date_store | [optional]
**storeId** | **string** | Required if metric grouping is store or date_store | [optional]
**valueScalar** | **float** | Value. Set if metric type is scalar | [optional]
**valueSeries** | [**\Spy\SitooClient\Model\CustomMetricValueValueSeriesRead**](CustomMetricValueValueSeriesRead.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
