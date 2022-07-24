<?php
/**
 * GiftcardReadModelAttributes
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
 * GiftcardReadModelAttributes Class Doc Comment
 *
 * @category Class
 * @description The gift card object.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GiftcardReadModelAttributes
{
    public string $strType = 'type';
    public string $strCurrencycode = 'currencycode';
    public string $strCardnumber = 'cardnumber';
    public string $strCardnumberDisplay = 'cardnumberDisplay';
    public string $strRedeemable = 'redeemable';
    public string $strDateExpires = 'dateExpires';
    public string $strDateCreated = 'dateCreated';
    public string $strMoneyamount = 'moneyamount';
    public string $strRequirespin = 'requirespin';
    public string $strTransactions = 'transactions';
}

