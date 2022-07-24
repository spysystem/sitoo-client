<?php
/**
 * OrderWriteModelAttributes
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
 * OrderWriteModelAttributes Class Doc Comment
 *
 * @category Class
 * @description The Sitoo order object.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderWriteModelAttributes
{
    public string $strExternalid = 'externalid';
    public string $strCreditorderid = 'creditorderid';
    public string $strEmail = 'email';
    public string $strNamefirst = 'namefirst';
    public string $strNamelast = 'namelast';
    public string $strPersonalid = 'personalid';
    public string $strCompany = 'company';
    public string $strPhone = 'phone';
    public string $strInvoiceAddress = 'invoiceAddress';
    public string $strInvoiceAddress2 = 'invoiceAddress2';
    public string $strInvoiceZip = 'invoiceZip';
    public string $strInvoiceCity = 'invoiceCity';
    public string $strInvoiceState = 'invoiceState';
    public string $strInvoiceCountryid = 'invoiceCountryid';
    public string $strDeliveryAddress = 'deliveryAddress';
    public string $strDeliveryAddress2 = 'deliveryAddress2';
    public string $strDeliveryZip = 'deliveryZip';
    public string $strDeliveryCity = 'deliveryCity';
    public string $strDeliveryState = 'deliveryState';
    public string $strDeliveryCountryid = 'deliveryCountryid';
    public string $strComment = 'comment';
    public string $strCommentinternal = 'commentinternal';
    public string $strCustomerref = 'customerref';
    public string $strCheckoutref = 'checkoutref';
    public string $strOrderdate = 'orderdate';
    public string $strOrderstateid = 'orderstateid';
    public string $strPaymentstateid = 'paymentstateid';
    public string $strOrdertypeid = 'ordertypeid';
    public string $strWarehouseid = 'warehouseid';
    public string $strDatereserved = 'datereserved';
    public string $strCurrencycode = 'currencycode';
    public string $strAdditionaldata = 'additionaldata';
    public string $strOrderitems = 'orderitems';
    public string $strPayments = 'payments';
    public string $strReservedpayments = 'reservedpayments';
}

