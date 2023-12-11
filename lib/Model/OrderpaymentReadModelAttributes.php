<?php
/**
 * OrderpaymentReadModelAttributes
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
 * OrderpaymentReadModelAttributes Class Doc Comment
 *
 * @category Class
 * @description Payment for order.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderpaymentReadModelAttributes
{
    public string $strName = 'name';
    public string $strMoneyamount = 'moneyamount';
    public string $strExternalid = 'externalid';
    public string $strReftype = 'reftype';
    public string $strRefid = 'refid';
    public string $strCardissuer = 'cardissuer';
    public string $strAdditionaldata = 'additionaldata';
    public string $strReservedpaymentid = 'reservedpaymentid';
}

