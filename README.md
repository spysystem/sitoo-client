# OpenAPIClient-php

Client for integrating to Sitoo


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/spysystem/sitoo-client.git"
    }
  ],
  "require": {
    "spysystem/sitoo-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Spy\SitooClient\Api\CashRegistersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$siteid = 56; // int
$registerid = 'registerid_example'; // string

try {
    $result = $apiInstance->getCashRegister($siteid, $registerid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashRegistersApi->getCashRegister: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.mysitoo.com/v2/accounts/1500*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CashRegistersApi* | [**getCashRegister**](docs/Api/CashRegistersApi.md#getcashregister) | **GET** /sites/{siteid}/cashregisters/{registerid} | 
*CashRegistersApi* | [**getCashRegisters**](docs/Api/CashRegistersApi.md#getcashregisters) | **GET** /sites/{siteid}/cashregisters | 
*CashRegistersApi* | [**getZReport**](docs/Api/CashRegistersApi.md#getzreport) | **GET** /sites/{siteid}/cashregisters/{registerid}/zreports/{zreportid} | 
*CashRegistersApi* | [**getZReports**](docs/Api/CashRegistersApi.md#getzreports) | **GET** /sites/{siteid}/cashregisters/{registerid}/zreports | 
*CategoriesApi* | [**addCategory**](docs/Api/CategoriesApi.md#addcategory) | **POST** /sites/{siteid}/categories | 
*CategoriesApi* | [**deleteCategory**](docs/Api/CategoriesApi.md#deletecategory) | **DELETE** /sites/{siteid}/categories/{categoryid} | 
*CategoriesApi* | [**getCategories**](docs/Api/CategoriesApi.md#getcategories) | **GET** /sites/{siteid}/categories | 
*CategoriesApi* | [**getCategory**](docs/Api/CategoriesApi.md#getcategory) | **GET** /sites/{siteid}/categories/{categoryid} | 
*CategoriesApi* | [**updateCategory**](docs/Api/CategoriesApi.md#updatecategory) | **PUT** /sites/{siteid}/categories/{categoryid} | 
*CustomMetricsAPIApi* | [**addCustomMetric**](docs/Api/CustomMetricsAPIApi.md#addcustommetric) | **POST** /custom_metrics | 
*CustomMetricsAPIApi* | [**deleteCustomMetric**](docs/Api/CustomMetricsAPIApi.md#deletecustommetric) | **DELETE** /custom_metrics/{key} | 
*CustomMetricsAPIApi* | [**deleteCustomMetricValues**](docs/Api/CustomMetricsAPIApi.md#deletecustommetricvalues) | **DELETE** /custom_metric_values/{key} | 
*CustomMetricsAPIApi* | [**getCustomMetricValues**](docs/Api/CustomMetricsAPIApi.md#getcustommetricvalues) | **GET** /custom_metric_values | 
*CustomMetricsAPIApi* | [**getCustomMetrics**](docs/Api/CustomMetricsAPIApi.md#getcustommetrics) | **GET** /custom_metrics | 
*CustomMetricsAPIApi* | [**updateCustomMetricValues**](docs/Api/CustomMetricsAPIApi.md#updatecustommetricvalues) | **PUT** /custom_metric_values | 
*GiftCardsApi* | [**addGiftCard**](docs/Api/GiftCardsApi.md#addgiftcard) | **POST** /accounts/{accountid}/sites/{siteid}/giftcards | 
*GiftCardsApi* | [**addGiftCardTransaction**](docs/Api/GiftCardsApi.md#addgiftcardtransaction) | **POST** /accounts/{accountid}/sites/{siteid}/giftcards/{cardnumber}/transactions | 
*GiftCardsApi* | [**deleteGiftCardTransactions**](docs/Api/GiftCardsApi.md#deletegiftcardtransactions) | **DELETE** /accounts/{accountid}/sites/{siteid}/giftcards/{cardnumber}/transactions | 
*GiftCardsApi* | [**getGiftCard**](docs/Api/GiftCardsApi.md#getgiftcard) | **GET** /accounts/{accountid}/sites/{siteid}/giftcards/{cardnumber} | 
*InfluencerCodesApi* | [**batchAddInfluencerCodes**](docs/Api/InfluencerCodesApi.md#batchaddinfluencercodes) | **POST** /sites/{siteid}/influencercodes | 
*InfluencerCodesApi* | [**batchDeleteInfluencerCodes**](docs/Api/InfluencerCodesApi.md#batchdeleteinfluencercodes) | **DELETE** /sites/{siteid}/influencercodes | 
*InfluencerCodesApi* | [**batchUpdateInfluencerCodes**](docs/Api/InfluencerCodesApi.md#batchupdateinfluencercodes) | **PUT** /sites/{siteid}/influencercodes | 
*InfluencerCodesApi* | [**getInfluencerCode**](docs/Api/InfluencerCodesApi.md#getinfluencercode) | **GET** /sites/{siteid}/influencercodes/{code} | 
*InfluencerCodesApi* | [**getInfluencerCodes**](docs/Api/InfluencerCodesApi.md#getinfluencercodes) | **GET** /sites/{siteid}/influencercodes | 
*InfluencerVouchersApi* | [**addInfluencerVoucherTransaction**](docs/Api/InfluencerVouchersApi.md#addinfluencervouchertransaction) | **POST** /sites/{siteid}/influencervouchers/{influencercode}/transactions | 
*InfluencerVouchersApi* | [**deleteInfluencerVoucherTransaction**](docs/Api/InfluencerVouchersApi.md#deleteinfluencervouchertransaction) | **DELETE** /sites/{siteid}/influencervouchers/{influencercode}/transactions/{transactionid} | 
*InfluencerVouchersApi* | [**getInfluencerVoucher**](docs/Api/InfluencerVouchersApi.md#getinfluencervoucher) | **GET** /sites/{siteid}/influencervouchers/{influencercode} | 
*ManufacturersApi* | [**batchAddManufacturers**](docs/Api/ManufacturersApi.md#batchaddmanufacturers) | **POST** /sites/{siteid}/manufacturers | 
*ManufacturersApi* | [**batchDeleteManufacturers**](docs/Api/ManufacturersApi.md#batchdeletemanufacturers) | **DELETE** /sites/{siteid}/manufacturers | 
*ManufacturersApi* | [**batchUpdateManufacturers**](docs/Api/ManufacturersApi.md#batchupdatemanufacturers) | **PUT** /sites/{siteid}/manufacturers | 
*ManufacturersApi* | [**deleteManufacturer**](docs/Api/ManufacturersApi.md#deletemanufacturer) | **DELETE** /sites/{siteid}/manufacturers/{externalcompanyid} | 
*ManufacturersApi* | [**getManufacturer**](docs/Api/ManufacturersApi.md#getmanufacturer) | **GET** /sites/{siteid}/manufacturers/{externalcompanyid} | 
*ManufacturersApi* | [**getManufacturers**](docs/Api/ManufacturersApi.md#getmanufacturers) | **GET** /sites/{siteid}/manufacturers | 
*ManufacturersApi* | [**updateManufacturer**](docs/Api/ManufacturersApi.md#updatemanufacturer) | **PUT** /sites/{siteid}/manufacturers/{externalcompanyid} | 
*OrdersApi* | [**addOrder**](docs/Api/OrdersApi.md#addorder) | **POST** /sites/{siteid}/orders | 
*OrdersApi* | [**addOrderDelivery**](docs/Api/OrdersApi.md#addorderdelivery) | **POST** /sites/{siteid}/orders/{orderid}/orderdeliveries | 
*OrdersApi* | [**addOrderLogItem**](docs/Api/OrdersApi.md#addorderlogitem) | **POST** /sites/{siteid}/orders/{orderid}/orderlogitems | 
*OrdersApi* | [**getAllOrders**](docs/Api/OrdersApi.md#getallorders) | **GET** /orders | 
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /sites/{siteid}/orders/{orderid} | 
*OrdersApi* | [**getOrderDeliveries**](docs/Api/OrdersApi.md#getorderdeliveries) | **GET** /sites/{siteid}/orders/{orderid}/orderdeliveries | 
*OrdersApi* | [**getOrderLogItems**](docs/Api/OrdersApi.md#getorderlogitems) | **GET** /sites/{siteid}/orders/{orderid}/orderlogitems | 
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /sites/{siteid}/orders | 
*OrdersApi* | [**updateOrder**](docs/Api/OrdersApi.md#updateorder) | **PUT** /sites/{siteid}/orders/{orderid} | 
*PriceListsApi* | [**addPriceList**](docs/Api/PriceListsApi.md#addpricelist) | **POST** /sites/{siteid}/pricelists | 
*PriceListsApi* | [**batchDeletePriceListItems**](docs/Api/PriceListsApi.md#batchdeletepricelistitems) | **DELETE** /sites/{siteid}/pricelists/{pricelistid}/pricelistitems | 
*PriceListsApi* | [**batchSetPriceListItems**](docs/Api/PriceListsApi.md#batchsetpricelistitems) | **PUT** /sites/{siteid}/pricelists/{pricelistid}/pricelistitems | 
*PriceListsApi* | [**deletePriceList**](docs/Api/PriceListsApi.md#deletepricelist) | **DELETE** /sites/{siteid}/pricelists/{pricelistid} | 
*PriceListsApi* | [**getPriceList**](docs/Api/PriceListsApi.md#getpricelist) | **GET** /sites/{siteid}/pricelists/{pricelistid} | 
*PriceListsApi* | [**getPriceLists**](docs/Api/PriceListsApi.md#getpricelists) | **GET** /sites/{siteid}/pricelists | 
*PriceListsApi* | [**getPriceListsItems**](docs/Api/PriceListsApi.md#getpricelistsitems) | **GET** /sites/{siteid}/pricelists/{pricelistid}/pricelistitems | 
*PriceListsApi* | [**updatePriceList**](docs/Api/PriceListsApi.md#updatepricelist) | **PUT** /sites/{siteid}/pricelists/{pricelistid} | 
*ProductCustomAttributesApi* | [**addCustomAttribute**](docs/Api/ProductCustomAttributesApi.md#addcustomattribute) | **POST** /sites/{siteid}/customattributes | 
*ProductCustomAttributesApi* | [**deleteCustomAttribute**](docs/Api/ProductCustomAttributesApi.md#deletecustomattribute) | **DELETE** /sites/{siteid}/customattributes/{attributeid} | 
*ProductCustomAttributesApi* | [**getCustomAttribute**](docs/Api/ProductCustomAttributesApi.md#getcustomattribute) | **GET** /sites/{siteid}/customattributes/{attributeid} | 
*ProductCustomAttributesApi* | [**getCustomAttributes**](docs/Api/ProductCustomAttributesApi.md#getcustomattributes) | **GET** /sites/{siteid}/customattributes | 
*ProductCustomAttributesApi* | [**updateCustomAttribute**](docs/Api/ProductCustomAttributesApi.md#updatecustomattribute) | **PUT** /sites/{siteid}/customattributes/{attributeid} | 
*ProductGroupsVATApi* | [**addProductGroup**](docs/Api/ProductGroupsVATApi.md#addproductgroup) | **POST** /sites/{siteid}/productgroups | 
*ProductGroupsVATApi* | [**deleteProductGroup**](docs/Api/ProductGroupsVATApi.md#deleteproductgroup) | **DELETE** /sites/{siteid}/productgroups/{vatid} | 
*ProductGroupsVATApi* | [**getProductGroup**](docs/Api/ProductGroupsVATApi.md#getproductgroup) | **GET** /sites/{siteid}/productgroups/{vatid} | 
*ProductGroupsVATApi* | [**getProductGroups**](docs/Api/ProductGroupsVATApi.md#getproductgroups) | **GET** /sites/{siteid}/productgroups | 
*ProductGroupsVATApi* | [**updateProductGroup**](docs/Api/ProductGroupsVATApi.md#updateproductgroup) | **PUT** /sites/{siteid}/productgroups/{vatid} | 
*ProductImagesAndFilesApi* | [**addProductFile**](docs/Api/ProductImagesAndFilesApi.md#addproductfile) | **POST** /sites/{siteid}/products/{productid}/files | 
*ProductImagesAndFilesApi* | [**addProductImage**](docs/Api/ProductImagesAndFilesApi.md#addproductimage) | **POST** /sites/{siteid}/products/{productid}/images | 
*ProductImagesAndFilesApi* | [**deleteProductFile**](docs/Api/ProductImagesAndFilesApi.md#deleteproductfile) | **DELETE** /sites/{siteid}/products/{productid}/files/{fileid} | 
*ProductImagesAndFilesApi* | [**deleteProductImage**](docs/Api/ProductImagesAndFilesApi.md#deleteproductimage) | **DELETE** /sites/{siteid}/products/{productid}/images/{imageid} | 
*ProductImagesAndFilesApi* | [**getProductFile**](docs/Api/ProductImagesAndFilesApi.md#getproductfile) | **GET** /sites/{siteid}/products/{productid}/files/{fileid} | 
*ProductImagesAndFilesApi* | [**getProductFiles**](docs/Api/ProductImagesAndFilesApi.md#getproductfiles) | **GET** /sites/{siteid}/products/{productid}/files | 
*ProductImagesAndFilesApi* | [**getProductImage**](docs/Api/ProductImagesAndFilesApi.md#getproductimage) | **GET** /sites/{siteid}/products/{productid}/images/{imageid} | 
*ProductImagesAndFilesApi* | [**getProductImages**](docs/Api/ProductImagesAndFilesApi.md#getproductimages) | **GET** /sites/{siteid}/products/{productid}/images | 
*ProductVariantsApi* | [**getProductVariants**](docs/Api/ProductVariantsApi.md#getproductvariants) | **GET** /sites/{siteid}/products/{productid}/productvariants | 
*ProductVariantsApi* | [**setProductVariants**](docs/Api/ProductVariantsApi.md#setproductvariants) | **PUT** /sites/{siteid}/products/{productid}/productvariants | 
*ProductsApi* | [**batchAddProducts**](docs/Api/ProductsApi.md#batchaddproducts) | **POST** /sites/{siteid}/products | 
*ProductsApi* | [**batchDeleteProducts**](docs/Api/ProductsApi.md#batchdeleteproducts) | **DELETE** /sites/{siteid}/products | 
*ProductsApi* | [**batchUpdateProducts**](docs/Api/ProductsApi.md#batchupdateproducts) | **PUT** /sites/{siteid}/products | 
*ProductsApi* | [**deleteProduct**](docs/Api/ProductsApi.md#deleteproduct) | **DELETE** /sites/{siteid}/products/{productid} | 
*ProductsApi* | [**getProduct**](docs/Api/ProductsApi.md#getproduct) | **GET** /sites/{siteid}/products/{productid} | 
*ProductsApi* | [**getProducts**](docs/Api/ProductsApi.md#getproducts) | **GET** /sites/{siteid}/products | 
*ProductsApi* | [**updateProduct**](docs/Api/ProductsApi.md#updateproduct) | **PUT** /sites/{siteid}/products/{productid} | 
*ReasonCodesApi* | [**addReasonCode**](docs/Api/ReasonCodesApi.md#addreasoncode) | **POST** /reasoncodes | 
*ReasonCodesApi* | [**deleteReasonCode**](docs/Api/ReasonCodesApi.md#deletereasoncode) | **DELETE** /reasoncodes/{reasoncodeid} | 
*ReasonCodesApi* | [**getReasonCode**](docs/Api/ReasonCodesApi.md#getreasoncode) | **GET** /reasoncodes/{reasoncodeid} | 
*ReasonCodesApi* | [**getReasonCodes**](docs/Api/ReasonCodesApi.md#getreasoncodes) | **GET** /reasoncodes | 
*ReasonCodesApi* | [**updateReasonCode**](docs/Api/ReasonCodesApi.md#updatereasoncode) | **PUT** /reasoncodes/{reasoncodeid} | 
*ResourcesApi* | [**getResources**](docs/Api/ResourcesApi.md#getresources) | **GET** /sites/{siteid}/resources | 
*SalesTaxesApi* | [**addSalesTax**](docs/Api/SalesTaxesApi.md#addsalestax) | **POST** /sites/{siteid}/salestaxes | 
*SalesTaxesApi* | [**addSalesTaxGroup**](docs/Api/SalesTaxesApi.md#addsalestaxgroup) | **POST** /sites/{siteid}/salestaxgroups | 
*SalesTaxesApi* | [**deleteSalesTax**](docs/Api/SalesTaxesApi.md#deletesalestax) | **DELETE** /sites/{siteid}/salestaxes/{salestaxid} | 
*SalesTaxesApi* | [**deleteSalesTaxGroup**](docs/Api/SalesTaxesApi.md#deletesalestaxgroup) | **DELETE** /sites/{siteid}/salestaxgroups/{salestaxgroupid} | 
*SalesTaxesApi* | [**getSalesTax**](docs/Api/SalesTaxesApi.md#getsalestax) | **GET** /sites/{siteid}/salestaxes/{salestaxid} | 
*SalesTaxesApi* | [**getSalesTaxGroup**](docs/Api/SalesTaxesApi.md#getsalestaxgroup) | **GET** /sites/{siteid}/salestaxgroups/{salestaxgroupid} | 
*SalesTaxesApi* | [**getSalesTaxGroups**](docs/Api/SalesTaxesApi.md#getsalestaxgroups) | **GET** /sites/{siteid}/salestaxgroups | 
*SalesTaxesApi* | [**getSalesTaxes**](docs/Api/SalesTaxesApi.md#getsalestaxes) | **GET** /sites/{siteid}/salestaxes | 
*SalesTaxesApi* | [**updateSalesTax**](docs/Api/SalesTaxesApi.md#updatesalestax) | **PUT** /sites/{siteid}/salestaxes/{salestaxid} | 
*SalesTaxesApi* | [**updateSalesTaxGroup**](docs/Api/SalesTaxesApi.md#updatesalestaxgroup) | **PUT** /sites/{siteid}/salestaxgroups/{salestaxgroupid} | 
*ServiceOrdersApi* | [**addServiceOrder**](docs/Api/ServiceOrdersApi.md#addserviceorder) | **POST** /serviceorders | 
*ServiceOrdersApi* | [**getServiceOrder**](docs/Api/ServiceOrdersApi.md#getserviceorder) | **GET** /serviceorders/{service_order_id} | 
*ServiceOrdersApi* | [**getServiceOrders**](docs/Api/ServiceOrdersApi.md#getserviceorders) | **GET** /serviceorders | 
*ServiceOrdersApi* | [**updateServiceOrder**](docs/Api/ServiceOrdersApi.md#updateserviceorder) | **PUT** /serviceorders/{service_order_id} | 
*ShipmentsApi* | [**addShipment**](docs/Api/ShipmentsApi.md#addshipment) | **POST** /shipments | 
*ShipmentsApi* | [**getShipment**](docs/Api/ShipmentsApi.md#getshipment) | **GET** /shipments/{shipmentid} | 
*ShipmentsApi* | [**getShipments**](docs/Api/ShipmentsApi.md#getshipments) | **GET** /shipments | 
*ShipmentsApi* | [**updateShipment**](docs/Api/ShipmentsApi.md#updateshipment) | **PUT** /shipments/{shipmentid} | 
*SitesApi* | [**getSite**](docs/Api/SitesApi.md#getsite) | **GET** /sites/{siteid} | 
*SitesApi* | [**getSites**](docs/Api/SitesApi.md#getsites) | **GET** /sites | 
*StoresApi* | [**addStore**](docs/Api/StoresApi.md#addstore) | **POST** /sites/{siteid}/stores | 
*StoresApi* | [**deleteStore**](docs/Api/StoresApi.md#deletestore) | **DELETE** /sites/{siteid}/stores/{storeid} | 
*StoresApi* | [**getStore**](docs/Api/StoresApi.md#getstore) | **GET** /sites/{siteid}/stores/{storeid} | 
*StoresApi* | [**getStores**](docs/Api/StoresApi.md#getstores) | **GET** /sites/{siteid}/stores | 
*StoresApi* | [**updateStore**](docs/Api/StoresApi.md#updatestore) | **PUT** /sites/{siteid}/stores/{storeid} | 
*UsersApi* | [**batchAddUsers**](docs/Api/UsersApi.md#batchaddusers) | **POST** /sites/{siteid}/users | 
*UsersApi* | [**batchUpdateUsers**](docs/Api/UsersApi.md#batchupdateusers) | **PUT** /sites/{siteid}/users | 
*UsersApi* | [**deleteUser**](docs/Api/UsersApi.md#deleteuser) | **DELETE** /sites/{siteid}/users/{userid} | 
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /sites/{siteid}/users/{userid} | 
*UsersApi* | [**getUsers**](docs/Api/UsersApi.md#getusers) | **GET** /sites/{siteid}/users | 
*UsersApi* | [**updateUser**](docs/Api/UsersApi.md#updateuser) | **PUT** /sites/{siteid}/users/{userid} | 
*VouchersApi* | [**addVoucher**](docs/Api/VouchersApi.md#addvoucher) | **POST** /sites/{siteid}/vouchers | 
*VouchersApi* | [**deleteVoucher**](docs/Api/VouchersApi.md#deletevoucher) | **DELETE** /sites/{siteid}/vouchers/{voucherid} | 
*VouchersApi* | [**getVoucher**](docs/Api/VouchersApi.md#getvoucher) | **GET** /sites/{siteid}/vouchers/{voucherid} | 
*VouchersApi* | [**getVouchers**](docs/Api/VouchersApi.md#getvouchers) | **GET** /sites/{siteid}/vouchers | 
*VouchersApi* | [**updateVoucher**](docs/Api/VouchersApi.md#updatevoucher) | **PUT** /sites/{siteid}/vouchers/{voucherid} | 
*WarehouseBatchesApi* | [**addWarehouseBatch**](docs/Api/WarehouseBatchesApi.md#addwarehousebatch) | **POST** /sites/{siteid}/warehouses/{warehouseid}/warehousebatches | 
*WarehouseBatchesApi* | [**batchDeleteWarehouseBatchItems**](docs/Api/WarehouseBatchesApi.md#batchdeletewarehousebatchitems) | **DELETE** /sites/{siteid}/warehouses/{warehouseid}/warehousebatches/{warehousebatchid}/warehousebatchitems | 
*WarehouseBatchesApi* | [**batchSetWarehouseBatchItems**](docs/Api/WarehouseBatchesApi.md#batchsetwarehousebatchitems) | **PUT** /sites/{siteid}/warehouses/{warehouseid}/warehousebatches/{warehousebatchid}/warehousebatchitems | 
*WarehouseBatchesApi* | [**getWarehouseBatch**](docs/Api/WarehouseBatchesApi.md#getwarehousebatch) | **GET** /sites/{siteid}/warehouses/{warehouseid}/warehousebatches/{warehousebatchid} | 
*WarehouseBatchesApi* | [**getWarehouseBatchItems**](docs/Api/WarehouseBatchesApi.md#getwarehousebatchitems) | **GET** /sites/{siteid}/warehouses/{warehouseid}/warehousebatches/{warehousebatchid}/warehousebatchitems | 
*WarehouseBatchesApi* | [**getWarehouseBatches**](docs/Api/WarehouseBatchesApi.md#getwarehousebatches) | **GET** /sites/{siteid}/warehouses/{warehouseid}/warehousebatches | 
*WarehouseBatchesApi* | [**updateWarehouseBatch**](docs/Api/WarehouseBatchesApi.md#updatewarehousebatch) | **PUT** /sites/{siteid}/warehouses/{warehouseid}/warehousebatches/{warehousebatchid} | 
*WarehouseTransactionsApi* | [**batchAddWarehouseTransactions**](docs/Api/WarehouseTransactionsApi.md#batchaddwarehousetransactions) | **POST** /sites/{siteid}/warehousetransactions | 
*WarehouseTransactionsApi* | [**getAllWarehouseTransactions**](docs/Api/WarehouseTransactionsApi.md#getallwarehousetransactions) | **GET** /sites/{siteid}/warehousetransactions | 
*WarehouseTransactionsApi* | [**getWarehouseTransaction**](docs/Api/WarehouseTransactionsApi.md#getwarehousetransaction) | **GET** /sites/{siteid}/warehouses/{warehouseid}/warehousetransactions/{warehousetransactionid} | 
*WarehouseTransactionsApi* | [**getWarehouseTransactions**](docs/Api/WarehouseTransactionsApi.md#getwarehousetransactions) | **GET** /sites/{siteid}/warehouses/{warehouseid}/warehousetransactions | 
*WarehousesApi* | [**addWarehouse**](docs/Api/WarehousesApi.md#addwarehouse) | **POST** /sites/{siteid}/warehouses | 
*WarehousesApi* | [**batchSetWarehouseItems**](docs/Api/WarehousesApi.md#batchsetwarehouseitems) | **PUT** /sites/{siteid}/warehouses/{warehouseid}/warehouseitems | 
*WarehousesApi* | [**deleteWarehouse**](docs/Api/WarehousesApi.md#deletewarehouse) | **DELETE** /sites/{siteid}/warehouses/{warehouseid} | 
*WarehousesApi* | [**getWarehouse**](docs/Api/WarehousesApi.md#getwarehouse) | **GET** /sites/{siteid}/warehouses/{warehouseid} | 
*WarehousesApi* | [**getWarehouseItems**](docs/Api/WarehousesApi.md#getwarehouseitems) | **GET** /sites/{siteid}/warehouses/{warehouseid}/warehouseitems | 
*WarehousesApi* | [**getWarehouses**](docs/Api/WarehousesApi.md#getwarehouses) | **GET** /sites/{siteid}/warehouses | 
*WarehousesApi* | [**updateWarehouse**](docs/Api/WarehousesApi.md#updatewarehouse) | **PUT** /sites/{siteid}/warehouses/{warehouseid} | 

## Models

- [CategoryRead](docs/Model/CategoryRead.md)
- [CategoryWrite](docs/Model/CategoryWrite.md)
- [CustomAttributeWrite](docs/Model/CustomAttributeWrite.md)
- [CustomMetricRead](docs/Model/CustomMetricRead.md)
- [CustomMetricValueRead](docs/Model/CustomMetricValueRead.md)
- [CustomMetricValueValueSeriesRead](docs/Model/CustomMetricValueValueSeriesRead.md)
- [CustomMetricValueValueSeriesSeriesRead](docs/Model/CustomMetricValueValueSeriesSeriesRead.md)
- [CustomMetricValueValueSeriesSeriesWrite](docs/Model/CustomMetricValueValueSeriesSeriesWrite.md)
- [CustomMetricValueValueSeriesWrite](docs/Model/CustomMetricValueValueSeriesWrite.md)
- [CustomMetricValueWrite](docs/Model/CustomMetricValueWrite.md)
- [CustomMetricWrite](docs/Model/CustomMetricWrite.md)
- [GetAllOrdersResponse](docs/Model/GetAllOrdersResponse.md)
- [GetAllWarehouseTransactionsResponse](docs/Model/GetAllWarehouseTransactionsResponse.md)
- [GetCashRegistersResponse](docs/Model/GetCashRegistersResponse.md)
- [GetCategoriesResponse](docs/Model/GetCategoriesResponse.md)
- [GetInfluencerCodesResponse](docs/Model/GetInfluencerCodesResponse.md)
- [GetManufacturersResponse](docs/Model/GetManufacturersResponse.md)
- [GetOrderDeliveriesResponse](docs/Model/GetOrderDeliveriesResponse.md)
- [GetOrderLogItemsResponse](docs/Model/GetOrderLogItemsResponse.md)
- [GetOrdersResponse](docs/Model/GetOrdersResponse.md)
- [GetPriceListsItemsResponse](docs/Model/GetPriceListsItemsResponse.md)
- [GetPriceListsResponse](docs/Model/GetPriceListsResponse.md)
- [GetProductFilesResponse](docs/Model/GetProductFilesResponse.md)
- [GetProductGroupsResponse](docs/Model/GetProductGroupsResponse.md)
- [GetProductImagesResponse](docs/Model/GetProductImagesResponse.md)
- [GetProductsResponse](docs/Model/GetProductsResponse.md)
- [GetReasonCodesResponse](docs/Model/GetReasonCodesResponse.md)
- [GetResourcesResponse](docs/Model/GetResourcesResponse.md)
- [GetSalesTaxGroupsResponse](docs/Model/GetSalesTaxGroupsResponse.md)
- [GetSalesTaxesResponse](docs/Model/GetSalesTaxesResponse.md)
- [GetShipmentsResponse](docs/Model/GetShipmentsResponse.md)
- [GetSitesResponse](docs/Model/GetSitesResponse.md)
- [GetStoresResponse](docs/Model/GetStoresResponse.md)
- [GetUsersResponse](docs/Model/GetUsersResponse.md)
- [GetVouchersResponse](docs/Model/GetVouchersResponse.md)
- [GetWarehouseBatchItemsResponse](docs/Model/GetWarehouseBatchItemsResponse.md)
- [GetWarehouseBatchesResponse](docs/Model/GetWarehouseBatchesResponse.md)
- [GetWarehouseItemsResponse](docs/Model/GetWarehouseItemsResponse.md)
- [GetWarehouseTransactionsResponse](docs/Model/GetWarehouseTransactionsResponse.md)
- [GetWarehousesResponse](docs/Model/GetWarehousesResponse.md)
- [GetZReportsResponse](docs/Model/GetZReportsResponse.md)
- [GiftcardRead](docs/Model/GiftcardRead.md)
- [GiftcardWrite](docs/Model/GiftcardWrite.md)
- [GiftcardresponseRead](docs/Model/GiftcardresponseRead.md)
- [GiftcardresponseWrite](docs/Model/GiftcardresponseWrite.md)
- [GiftcardtransactionRead](docs/Model/GiftcardtransactionRead.md)
- [GiftcardtransactionWrite](docs/Model/GiftcardtransactionWrite.md)
- [InfluencercodeRead](docs/Model/InfluencercodeRead.md)
- [InfluencercodeWrite](docs/Model/InfluencercodeWrite.md)
- [InfluencervoucherRead](docs/Model/InfluencervoucherRead.md)
- [InfluencervouchertransactionWrite](docs/Model/InfluencervouchertransactionWrite.md)
- [InfluencervouchertransactionresponseRead](docs/Model/InfluencervouchertransactionresponseRead.md)
- [ManufacturerRead](docs/Model/ManufacturerRead.md)
- [ManufacturerWrite](docs/Model/ManufacturerWrite.md)
- [OrderAdditionaldataRead](docs/Model/OrderAdditionaldataRead.md)
- [OrderAdditionaldataWrite](docs/Model/OrderAdditionaldataWrite.md)
- [OrderRead](docs/Model/OrderRead.md)
- [OrderWrite](docs/Model/OrderWrite.md)
- [OrderdeliveryRead](docs/Model/OrderdeliveryRead.md)
- [OrderdeliveryWrite](docs/Model/OrderdeliveryWrite.md)
- [OrderdeliveryitemRead](docs/Model/OrderdeliveryitemRead.md)
- [OrderdeliveryitemWrite](docs/Model/OrderdeliveryitemWrite.md)
- [OrderitemAdditionaldataRead](docs/Model/OrderitemAdditionaldataRead.md)
- [OrderitemAdditionaldataWrite](docs/Model/OrderitemAdditionaldataWrite.md)
- [OrderitemRead](docs/Model/OrderitemRead.md)
- [OrderitemWrite](docs/Model/OrderitemWrite.md)
- [OrderitemsalestaxRead](docs/Model/OrderitemsalestaxRead.md)
- [OrderitemsalestaxWrite](docs/Model/OrderitemsalestaxWrite.md)
- [OrderlogitemRead](docs/Model/OrderlogitemRead.md)
- [OrderlogitemWrite](docs/Model/OrderlogitemWrite.md)
- [OrderpaymentAdditionaldataRead](docs/Model/OrderpaymentAdditionaldataRead.md)
- [OrderpaymentAdditionaldataWrite](docs/Model/OrderpaymentAdditionaldataWrite.md)
- [OrderpaymentRead](docs/Model/OrderpaymentRead.md)
- [OrderpaymentWrite](docs/Model/OrderpaymentWrite.md)
- [OrderreservedpaymentRead](docs/Model/OrderreservedpaymentRead.md)
- [OrderreservedpaymentWrite](docs/Model/OrderreservedpaymentWrite.md)
- [PosregisterRead](docs/Model/PosregisterRead.md)
- [PoszreportRead](docs/Model/PoszreportRead.md)
- [PoszreportdiscountRead](docs/Model/PoszreportdiscountRead.md)
- [PoszreportpaymentRead](docs/Model/PoszreportpaymentRead.md)
- [PoszreportproductgroupRead](docs/Model/PoszreportproductgroupRead.md)
- [PoszreportsalestaxRead](docs/Model/PoszreportsalestaxRead.md)
- [PoszreportsubpaymentRead](docs/Model/PoszreportsubpaymentRead.md)
- [PoszreportvatgroupRead](docs/Model/PoszreportvatgroupRead.md)
- [PricelistRead](docs/Model/PricelistRead.md)
- [PricelistWrite](docs/Model/PricelistWrite.md)
- [PricelistitemRead](docs/Model/PricelistitemRead.md)
- [PricelistitemWrite](docs/Model/PricelistitemWrite.md)
- [ProductRead](docs/Model/ProductRead.md)
- [ProductWrite](docs/Model/ProductWrite.md)
- [ProductgroupRead](docs/Model/ProductgroupRead.md)
- [ProductgroupWrite](docs/Model/ProductgroupWrite.md)
- [ProductvariantRead](docs/Model/ProductvariantRead.md)
- [ProductvariantWrite](docs/Model/ProductvariantWrite.md)
- [ProductvariantgroupRead](docs/Model/ProductvariantgroupRead.md)
- [ProductvariantgroupWrite](docs/Model/ProductvariantgroupWrite.md)
- [ProductvariantsRead](docs/Model/ProductvariantsRead.md)
- [ProductvariantsWrite](docs/Model/ProductvariantsWrite.md)
- [ReasoncodeRead](docs/Model/ReasoncodeRead.md)
- [ReasoncodeWrite](docs/Model/ReasoncodeWrite.md)
- [ResourceRead](docs/Model/ResourceRead.md)
- [ResourceWrite](docs/Model/ResourceWrite.md)
- [SalestaxRead](docs/Model/SalestaxRead.md)
- [SalestaxWrite](docs/Model/SalestaxWrite.md)
- [SalestaxgroupRead](docs/Model/SalestaxgroupRead.md)
- [SalestaxgroupWrite](docs/Model/SalestaxgroupWrite.md)
- [SalestaxproductgroupruleRead](docs/Model/SalestaxproductgroupruleRead.md)
- [SalestaxproductgroupruleWrite](docs/Model/SalestaxproductgroupruleWrite.md)
- [ServiceOrderAuthorWrite](docs/Model/ServiceOrderAuthorWrite.md)
- [ServiceOrderCustomerWrite](docs/Model/ServiceOrderCustomerWrite.md)
- [ServiceOrderOwnerWrite](docs/Model/ServiceOrderOwnerWrite.md)
- [ServiceOrderProductServicesWrite](docs/Model/ServiceOrderProductServicesWrite.md)
- [ServiceOrderProductWrite](docs/Model/ServiceOrderProductWrite.md)
- [ServiceOrderStoreWrite](docs/Model/ServiceOrderStoreWrite.md)
- [ServiceOrderWrite](docs/Model/ServiceOrderWrite.md)
- [ShipmentRead](docs/Model/ShipmentRead.md)
- [ShipmentWrite](docs/Model/ShipmentWrite.md)
- [ShipmentitemRead](docs/Model/ShipmentitemRead.md)
- [ShipmentitemWrite](docs/Model/ShipmentitemWrite.md)
- [ShipmentpackageRead](docs/Model/ShipmentpackageRead.md)
- [ShipmentpackageWrite](docs/Model/ShipmentpackageWrite.md)
- [SiteRead](docs/Model/SiteRead.md)
- [StoreRead](docs/Model/StoreRead.md)
- [StoreWrite](docs/Model/StoreWrite.md)
- [UserRead](docs/Model/UserRead.md)
- [UserWrite](docs/Model/UserWrite.md)
- [VolumepricelevelRead](docs/Model/VolumepricelevelRead.md)
- [VolumepricelevelWrite](docs/Model/VolumepricelevelWrite.md)
- [VoucherRead](docs/Model/VoucherRead.md)
- [VoucherWrite](docs/Model/VoucherWrite.md)
- [VoucherdiscountoptionRead](docs/Model/VoucherdiscountoptionRead.md)
- [VoucherdiscountoptionWrite](docs/Model/VoucherdiscountoptionWrite.md)
- [VoucherproductoptionRead](docs/Model/VoucherproductoptionRead.md)
- [VoucherproductoptionWrite](docs/Model/VoucherproductoptionWrite.md)
- [WarehouseRead](docs/Model/WarehouseRead.md)
- [WarehouseWrite](docs/Model/WarehouseWrite.md)
- [WarehousebatchRead](docs/Model/WarehousebatchRead.md)
- [WarehousebatchWrite](docs/Model/WarehousebatchWrite.md)
- [WarehousebatchitemRead](docs/Model/WarehousebatchitemRead.md)
- [WarehousebatchitemWrite](docs/Model/WarehousebatchitemWrite.md)
- [WarehouseitemRead](docs/Model/WarehouseitemRead.md)
- [WarehouseitemWrite](docs/Model/WarehouseitemWrite.md)
- [WarehouseitemlogRead](docs/Model/WarehouseitemlogRead.md)
- [WarehouseitemlogWrite](docs/Model/WarehouseitemlogWrite.md)
- [WarehousetransactionRead](docs/Model/WarehousetransactionRead.md)
- [WarehousetransactionWrite](docs/Model/WarehousetransactionWrite.md)

## Authorization

### basic

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
