<?php
/**
 * OrderAdditionaldataWriteModelAttributes
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
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Spy\SitooClient\Model;

/**
 * OrderAdditionaldataWriteModelAttributes Class Doc Comment
 *
 * @category Class
 * @description Additional data for this order. The defined properties can be generated by Sitoo, any other properties are allowed as long as their values are of type string.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderAdditionaldataWriteModelAttributes
{
    public string $strCrmCustomerid = 'crmCustomerid';
    public string $strCrmMembernumber = 'crmMembernumber';
    public string $strCustomcrmContactid = 'customcrmContactid';
    public string $strCustomcrmMembernumber = 'customcrmMembernumber';
    public string $strDeliveryIgnoreStock = 'deliveryIgnoreStock';
    public string $strDeliveryPickupExternalid = 'deliveryPickupExternalid';
    public string $strDeliveryPickupWarehouseid = 'deliveryPickupWarehouseid';
    public string $strInfluencerInfluencercode = 'influencerInfluencercode';
    public string $strInfluencerInfluencername = 'influencerInfluencername';
    public string $strPosOriginalsalesOrderid = 'posOriginalsalesOrderid';
    public string $strPosReceiptid = 'posReceiptid';
    public string $strPosRefundsalesOrderid = 'posRefundsalesOrderid';
    public string $strPosRefundOrderid = 'posRefundOrderid';
    public string $strPosRefundReceiptid = 'posRefundReceiptid';
    public string $strPosSourceorderid = 'posSourceorderid';
    public string $strPosStaffUserid = 'posStaffUserid';
    public string $strPosStaffExternalid = 'posStaffExternalid';
    public string $strPosStaff2Externalid = 'posStaff2Externalid';
    public string $strPosStaffsalesUserid = 'posStaffsalesUserid';
    public string $strPosStaffsalesExternalid = 'posStaffsalesExternalid';
    public string $strPosStaffsalesName = 'posStaffsalesName';
    public string $strPosTimezone = 'posTimezone';
    public string $strRefundreasoncodeComment = 'refundreasoncodeComment';
    public string $strRefundreasoncodeReasoncode = 'refundreasoncodeReasoncode';
    public string $strServiceorderId = 'serviceorderId';
    public string $strStoreExternalid = 'storeExternalid';
    public string $strStoreExternalgroupid = 'storeExternalgroupid';
    public string $strStoreName = 'storeName';
    public string $strVoyadoContactid = 'voyadoContactid';
    public string $strVoyadoMembernumber = 'voyadoMembernumber';
}

