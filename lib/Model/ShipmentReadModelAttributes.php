<?php
/**
 * ShipmentReadModelAttributes
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
 * ShipmentReadModelAttributes Class Doc Comment
 *
 * @category Class
 * @description A shipment is the object used for handling shipments in Sitoo systems. Shipments are common to all sites.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentReadModelAttributes
{
    public string $strShipmentid = 'shipmentid';
    public string $strShipmentstate = 'shipmentstate';
    public string $strArchived = 'archived';
    public string $strExternalid = 'externalid';
    public string $strBarcode = 'barcode';
    public string $strComment = 'comment';
    public string $strEmailowner = 'emailowner';
    public string $strEmailreceivedby = 'emailreceivedby';
    public string $strDatenew = 'datenew';
    public string $strDateintransit = 'dateintransit';
    public string $strDatereceived = 'datereceived';
    public string $strDatecancelled = 'datecancelled';
    public string $strDateestimatedpickup = 'dateestimatedpickup';
    public string $strDateestimateddelivery = 'dateestimateddelivery';
    public string $strSenderWarehouseid = 'senderWarehouseid';
    public string $strSenderName = 'senderName';
    public string $strSenderAddress = 'senderAddress';
    public string $strSenderAddress2 = 'senderAddress2';
    public string $strSenderZip = 'senderZip';
    public string $strSenderCity = 'senderCity';
    public string $strSenderState = 'senderState';
    public string $strSenderCountryid = 'senderCountryid';
    public string $strSenderReferencename = 'senderReferencename';
    public string $strSenderReferenceemail = 'senderReferenceemail';
    public string $strSenderReferencemobile = 'senderReferencemobile';
    public string $strSenderInstructions = 'senderInstructions';
    public string $strReceiverWarehouseid = 'receiverWarehouseid';
    public string $strReceiverName = 'receiverName';
    public string $strReceiverAddress = 'receiverAddress';
    public string $strReceiverAddress2 = 'receiverAddress2';
    public string $strReceiverZip = 'receiverZip';
    public string $strReceiverCity = 'receiverCity';
    public string $strReceiverState = 'receiverState';
    public string $strReceiverCountryid = 'receiverCountryid';
    public string $strReceiverReferencename = 'receiverReferencename';
    public string $strReceiverReferenceemail = 'receiverReferenceemail';
    public string $strReceiverReferencemobile = 'receiverReferencemobile';
    public string $strReceiverInstructions = 'receiverInstructions';
    public string $strCarrierName = 'carrierName';
    public string $strCarrierReference = 'carrierReference';
    public string $strCarrierTrackingurl = 'carrierTrackingurl';
    public string $strShipmentpackages = 'shipmentpackages';
    public string $strShipmentitems = 'shipmentitems';
}

