<?php
/**
 * ProductWriteModelAttributes
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API Documentation for Sitoo
 *
 * Client for integrating to Sitoo
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Spy\SitooClient\Model;

/**
 * ProductWriteModelAttributes Class Doc Comment
 *
 * @category Class
 * @description The main product object. Note that stock values are retrieved using the warehouse endpoints.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductWriteModelAttributes
{
    public string $strProductid = 'productid';
    public string $strSku = 'sku';
    public string $strSkumanufacturer = 'skumanufacturer';
    public string $strDescriptionshort = 'descriptionshort';
    public string $strDescription = 'description';
    public string $strMoneyprice = 'moneyprice';
    public string $strMoneypriceorg = 'moneypriceorg';
    public string $strMoneypricein = 'moneypricein';
    public string $strUnitlabel = 'unitlabel';
    public string $strAllowdecimals = 'allowdecimals';
    public string $strDeliveryinfo = 'deliveryinfo';
    public string $strActive = 'active';
    public string $strActivepos = 'activepos';
    public string $strVatid = 'vatid';
    public string $strDefaultcategoryid = 'defaultcategoryid';
    public string $strCategories = 'categories';
    public string $strManufacturerid = 'manufacturerid';
    public string $strManufacturerurl = 'manufacturerurl';
    public string $strCustom1 = 'custom1';
    public string $strCustom2 = 'custom2';
    public string $strCustom3 = 'custom3';
    public string $strCustom4 = 'custom4';
    public string $strCustom5 = 'custom5';
    public string $strStockcountenable = 'stockcountenable';
    public string $strBarcode = 'barcode';
    public string $strBarcodealiases = 'barcodealiases';
    public string $strSimilar = 'similar';
    public string $strRelated = 'related';
    public string $strAccessories = 'accessories';
    public string $strCustomattributes = 'customattributes';
    public string $strTitle = 'title';
}

