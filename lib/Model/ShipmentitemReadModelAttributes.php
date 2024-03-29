<?php
/**
 * ShipmentitemReadModelAttributes
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
 * ShipmentitemReadModelAttributes Class Doc Comment
 *
 * @category Class
 * @description A shipment item is a row contained in a shipment. Can be grouped in shipmentpackage.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentitemReadModelAttributes
{
    public string $strShipmentitemid = 'shipmentitemid';
    public string $strShipmentpackageid = 'shipmentpackageid';
    public string $strSku = 'sku';
    public string $strProductname = 'productname';
    public string $strUnitlabel = 'unitlabel';
    public string $strDecimalunitquantity = 'decimalunitquantity';
    public string $strQuantity = 'quantity';
    public string $strQuantityreceived = 'quantityreceived';
    public string $strMoneypricein = 'moneypricein';
    public string $strExternalid = 'externalid';
}

