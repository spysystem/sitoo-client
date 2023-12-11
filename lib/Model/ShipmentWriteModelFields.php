<?php
/**
 * ShipmentWriteModelFields
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
 * ShipmentWriteModelFields Class Doc Comment
 *
 * @category Class
 * @description A shipment is the object used for handling shipments in Sitoo systems. Shipments are common to all sites.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentWriteModelFields
{
    public string $strShipmentstate = 'shipmentstate';
    public string $strArchived = 'archived';
    public string $strExternalid = 'externalid';
    public string $strBarcode = 'barcode';
    public string $strComment = 'comment';
    public string $strEmailowner = 'emailowner';
    public string $strEmailreceivedby = 'emailreceivedby';
    public string $strDateestimatedpickup = 'dateestimatedpickup';
    public string $strDateestimateddelivery = 'dateestimateddelivery';
    public string $strSenderWarehouseid = 'sender_warehouseid';
    public string $strSenderName = 'sender_name';
    public string $strSenderAddress = 'sender_address';
    public string $strSenderAddress2 = 'sender_address2';
    public string $strSenderZip = 'sender_zip';
    public string $strSenderCity = 'sender_city';
    public string $strSenderState = 'sender_state';
    public string $strSenderCountryid = 'sender_countryid';
    public string $strSenderReferencename = 'sender_referencename';
    public string $strSenderReferenceemail = 'sender_referenceemail';
    public string $strSenderReferencemobile = 'sender_referencemobile';
    public string $strSenderInstructions = 'sender_instructions';
    public string $strReceiverWarehouseid = 'receiver_warehouseid';
    public string $strReceiverName = 'receiver_name';
    public string $strReceiverAddress = 'receiver_address';
    public string $strReceiverAddress2 = 'receiver_address2';
    public string $strReceiverZip = 'receiver_zip';
    public string $strReceiverCity = 'receiver_city';
    public string $strReceiverState = 'receiver_state';
    public string $strReceiverCountryid = 'receiver_countryid';
    public string $strReceiverReferencename = 'receiver_referencename';
    public string $strReceiverReferenceemail = 'receiver_referenceemail';
    public string $strReceiverReferencemobile = 'receiver_referencemobile';
    public string $strReceiverInstructions = 'receiver_instructions';
    public string $strCarrierName = 'carrier_name';
    public string $strCarrierReference = 'carrier_reference';
    public string $strCarrierTrackingurl = 'carrier_trackingurl';
    public string $strShipmentpackages = 'shipmentpackages';
    public string $strShipmentitems = 'shipmentitems';
}

