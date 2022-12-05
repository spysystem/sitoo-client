<?php
/**
 * OrderReadModelFields
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
 * OrderReadModelFields Class Doc Comment
 *
 * @category Class
 * @description The Sitoo order object.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderReadModelFields
{
    public string $strOrderid = 'orderid';
    public string $strEshopid = 'eshopid';
    public string $strExternalid = 'externalid';
    public string $strCreditorderid = 'creditorderid';
    public string $strEmail = 'email';
    public string $strNamefirst = 'namefirst';
    public string $strNamelast = 'namelast';
    public string $strPersonalid = 'personalid';
    public string $strCompany = 'company';
    public string $strPhone = 'phone';
    public string $strInvoiceAddress = 'invoice_address';
    public string $strInvoiceAddress2 = 'invoice_address2';
    public string $strInvoiceZip = 'invoice_zip';
    public string $strInvoiceCity = 'invoice_city';
    public string $strInvoiceState = 'invoice_state';
    public string $strInvoiceCountryid = 'invoice_countryid';
    public string $strDeliveryAddress = 'delivery_address';
    public string $strDeliveryAddress2 = 'delivery_address2';
    public string $strDeliveryZip = 'delivery_zip';
    public string $strDeliveryCity = 'delivery_city';
    public string $strDeliveryState = 'delivery_state';
    public string $strDeliveryCountryid = 'delivery_countryid';
    public string $strComment = 'comment';
    public string $strCommentinternal = 'commentinternal';
    public string $strCustomerref = 'customerref';
    public string $strCheckoutref = 'checkoutref';
    public string $strMoneytotalNet = 'moneytotal_net';
    public string $strMoneytotalVat = 'moneytotal_vat';
    public string $strMoneycheckoutNet = 'moneycheckout_net';
    public string $strMoneycheckoutVat = 'moneycheckout_vat';
    public string $strMoneytotalGrossCheckout = 'moneytotal_gross_checkout';
    public string $strMoneydeliveryNet = 'moneydelivery_net';
    public string $strMoneydeliveryVat = 'moneydelivery_vat';
    public string $strMoneytotalGrossDelivery = 'moneytotal_gross_delivery';
    public string $strMoneyfinalNet = 'moneyfinal_net';
    public string $strMoneyfinalVat = 'moneyfinal_vat';
    public string $strMoneyfinalSalestax = 'moneyfinal_salestax';
    public string $strMoneytotalGrossRoundoff = 'moneytotal_gross_roundoff';
    public string $strMoneytotalGrossAll = 'moneytotal_gross_all';
    public string $strOrderdate = 'orderdate';
    public string $strOrderstateid = 'orderstateid';
    public string $strPaymentstateid = 'paymentstateid';
    public string $strOrdertypeid = 'ordertypeid';
    public string $strUseridStaff = 'userid_staff';
    public string $strRegisterid = 'registerid';
    public string $strWarehouseid = 'warehouseid';
    public string $strDatereserved = 'datereserved';
    public string $strCurrencycode = 'currencycode';
    public string $strAdditionaldata = 'additionaldata';
    public string $strOrderitems = 'orderitems';
    public string $strPayments = 'payments';
    public string $strReservedpayments = 'reservedpayments';
    public string $strOrderlogitems = 'orderlogitems';
}

