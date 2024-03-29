<?php
/**
 * OrderpaymentAdditionaldataWriteModelFields
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
 * OrderpaymentAdditionaldataWriteModelFields Class Doc Comment
 *
 * @category Class
 * @description Additional data for this payment. The defined properties can be generated by Sitoo, any other properties are allowed as long as their values are of type string.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderpaymentAdditionaldataWriteModelFields
{
    public string $strAdyenCardalias = 'adyen-cardalias';
    public string $strAdyenCardtype = 'adyen-cardtype';
    public string $strAdyenPaymentmethod = 'adyen-paymentmethod';
    public string $strAdyenPaymentmethodvariant = 'adyen-paymentmethodvariant';
    public string $strAdyenPspreference = 'adyen-pspreference';
    public string $strAdyenTenderreference = 'adyen-tenderreference';
    public string $strAdyenTxdate = 'adyen-txdate';
    public string $strBamboraHost2tInternalreference = 'bambora-host2t-internalreference';
    public string $strBamboraHost2tTerminalid = 'bambora-host2t-terminalid';
    public string $strCoineyTransactionref = 'coiney-transactionref';
    public string $strCustompaymentMobile = 'custompayment-mobile';
    public string $strCustompaymentPaymentid = 'custompayment-paymentid';
    public string $strGiftcardCardnumber = 'giftcard-cardnumber';
    public string $strGiftcardCardnumberDisplay = 'giftcard-cardnumber-display';
    public string $strIzettlePanhash = 'izettle-panhash';
    public string $strIzettleSitooreference = 'izettle-sitooreference';
    public string $strKlarnaKlarnareference = 'klarna-klarnareference';
    public string $strKlarnaMerchantid = 'klarna-merchantid';
    public string $strKlarnaOrderid = 'klarna-orderid';
    public string $strKlarnav2Id = 'klarnav2-id';
    public string $strMobile = 'mobile';
    public string $strMobilepayPaymentid = 'mobilepay-paymentid';
    public string $strNetsAmount = 'nets-amount';
    public string $strNetsIssuerid = 'nets-issuerid';
    public string $strNetsSitooreference = 'nets-sitooreference';
    public string $strNetsTerminalid = 'nets-terminalid';
    public string $strPaymentMethod = 'payment-method';
    public string $strPosOriginalsalesPaymentIndex = 'pos-originalsales-payment-index';
    public string $strSwishPaymentid = 'swish-paymentid';
    public string $strVerifoneLppReferenceNumber = 'verifone-lpp-reference-number';
    public string $strVerifoneCardMaskedPan = 'verifone-card-masked-pan';
    public string $strVirtualPayment = 'virtual-payment';
}

