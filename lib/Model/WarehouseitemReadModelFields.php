<?php
/**
 * WarehouseitemReadModelFields
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
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Spy\SitooClient\Model;

/**
 * WarehouseitemReadModelFields Class Doc Comment
 *
 * @category Class
 * @description Contains the current state of a product&#39;s stock count and stock value. Also has the bin location within the warehouse and the reordering threshold.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WarehouseitemReadModelFields
{
    public string $strWarehouseitemid = 'warehouseitemid';
    public string $strWarehouseid = 'warehouseid';
    public string $strSku = 'sku';
    public string $strBinlocation = 'binlocation';
    public string $strDecimalthreshold = 'decimalthreshold';
    public string $strDecimaltotal = 'decimaltotal';
    public string $strMoneytotal = 'moneytotal';
    public string $strDatelastmodified = 'datelastmodified';
    public string $strDatelaststocktaking = 'datelaststocktaking';
    public string $strDecimalreserved = 'decimalreserved';
    public string $strDecimalavailable = 'decimalavailable';
}

