<?php
/**
 * OrderpaymentAdditionaldataWriteModelAttributes
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
 * OrderpaymentAdditionaldataWriteModelAttributes Class Doc Comment
 *
 * @category Class
 * @description Additional data for this payment. The defined properties can be generated by Sitoo, any other properties are allowed as long as their values are of type string.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderpaymentAdditionaldataWriteModelAttributes
{
    public string $strAdyenCardalias = 'adyenCardalias';
    public string $strAdyenCardtype = 'adyenCardtype';
    public string $strAdyenPaymentmethod = 'adyenPaymentmethod';
    public string $strAdyenPaymentmethodvariant = 'adyenPaymentmethodvariant';
    public string $strAdyenPspreference = 'adyenPspreference';
    public string $strAdyenTenderreference = 'adyenTenderreference';
    public string $strAdyenTxdate = 'adyenTxdate';
    public string $strBamboraHost2tInternalreference = 'bamboraHost2tInternalreference';
    public string $strBamboraHost2tTerminalid = 'bamboraHost2tTerminalid';
    public string $strCoineyTransactionref = 'coineyTransactionref';
    public string $strCustompaymentMobile = 'custompaymentMobile';
    public string $strCustompaymentPaymentid = 'custompaymentPaymentid';
    public string $strGiftcardCardnumber = 'giftcardCardnumber';
    public string $strGiftcardCardnumberDisplay = 'giftcardCardnumberDisplay';
    public string $strIzettlePanhash = 'izettlePanhash';
    public string $strIzettleSitooreference = 'izettleSitooreference';
    public string $strKlarnaKlarnareference = 'klarnaKlarnareference';
    public string $strKlarnaMerchantid = 'klarnaMerchantid';
    public string $strKlarnaOrderid = 'klarnaOrderid';
    public string $strKlarnav2Id = 'klarnav2Id';
    public string $strMobile = 'mobile';
    public string $strMobilepayPaymentid = 'mobilepayPaymentid';
    public string $strNetsAmount = 'netsAmount';
    public string $strNetsIssuerid = 'netsIssuerid';
    public string $strNetsSitooreference = 'netsSitooreference';
    public string $strNetsTerminalid = 'netsTerminalid';
    public string $strPaymentMethod = 'paymentMethod';
    public string $strPosOriginalsalesPaymentIndex = 'posOriginalsalesPaymentIndex';
    public string $strSwishPaymentid = 'swishPaymentid';
    public string $strVerifoneLppReferenceNumber = 'verifoneLppReferenceNumber';
    public string $strVerifoneCardMaskedPan = 'verifoneCardMaskedPan';
    public string $strVirtualPayment = 'virtualPayment';
}

