<?php
/**
 * OrderAdditionaldataWriteModelFields
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
 * OrderAdditionaldataWriteModelFields Class Doc Comment
 *
 * @category Class
 * @description Additional data for this order. The defined properties can be generated by Sitoo, any other properties are allowed as long as their values are of type string.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderAdditionaldataWriteModelFields
{
    public string $strCrmCustomerid = 'crm-customerid';
    public string $strCrmMembernumber = 'crm-membernumber';
    public string $strCustomcrmContactid = 'customcrm-contactid';
    public string $strCustomcrmMembernumber = 'customcrm-membernumber';
    public string $strDeliveryIgnoreStock = 'delivery-ignore-stock';
    public string $strDeliveryPickupExternalid = 'delivery-pickup-externalid';
    public string $strDeliveryPickupWarehouseid = 'delivery-pickup-warehouseid';
    public string $strInfluencerInfluencercode = 'influencer-influencercode';
    public string $strInfluencerInfluencername = 'influencer-influencername';
    public string $strPosOriginalsalesOrderid = 'pos-originalsales-orderid';
    public string $strPosReceiptid = 'pos-receiptid';
    public string $strPosRefundsalesOrderid = 'pos-refundsales-orderid';
    public string $strPosRefundOrderid = 'pos-refund-orderid';
    public string $strPosRefundReceiptid = 'pos-refund-receiptid';
    public string $strPosSourceorderid = 'pos-sourceorderid';
    public string $strPosStaffUserid = 'pos-staff-userid';
    public string $strPosStaffExternalid = 'pos-staff-externalid';
    public string $strPosStaff2Externalid = 'pos-staff2-externalid';
    public string $strPosStaffsalesUserid = 'pos-staffsales-userid';
    public string $strPosStaffsalesExternalid = 'pos-staffsales-externalid';
    public string $strPosStaffsalesName = 'pos-staffsales-name';
    public string $strPosTimezone = 'pos-timezone';
    public string $strRefundreasoncodeComment = 'refundreasoncode-comment';
    public string $strRefundreasoncodeReasoncode = 'refundreasoncode-reasoncode';
    public string $strServiceorderId = 'serviceorder-id';
    public string $strStoreExternalid = 'store-externalid';
    public string $strStoreExternalgroupid = 'store-externalgroupid';
    public string $strStoreName = 'store-name';
    public string $strVoyadoContactid = 'voyado-contactid';
    public string $strVoyadoMembernumber = 'voyado-membernumber';
}
