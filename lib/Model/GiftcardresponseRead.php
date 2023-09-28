<?php
/**
 * GiftcardresponseRead
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

use \ArrayAccess;
use \Spy\SitooClient\ObjectSerializer;

/**
 * GiftcardresponseRead Class Doc Comment
 *
 * @category Class
 * @description Response object for gift card operations.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GiftcardresponseRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return GiftcardresponseReadModelFields
      */
    public static function GetModelFields(): GiftcardresponseReadModelFields
    {
        return new GiftcardresponseReadModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return GiftcardresponseReadModelAttributes
      */
    public static function GetModelAttributes(): GiftcardresponseReadModelAttributes
    {
        return new GiftcardresponseReadModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'giftcardresponse-read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'giftcard' => '\Spy\SitooClient\Model\GiftcardRead',
        'addedtransactionids' => 'string[]',
        'receipttext' => 'string',
        'printVoucher' => 'bool',
        'printPin' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'giftcard' => null,
        'addedtransactionids' => null,
        'receipttext' => null,
        'printVoucher' => null,
        'printPin' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'giftcard' => false,
		'addedtransactionids' => false,
		'receipttext' => false,
		'printVoucher' => false,
		'printPin' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of property to nullable mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPINullables()
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array
     */
    public function getOpenAPINullablesSetToNull()
    {
        return $this->openAPINullablesSetToNull;
    }

    public function setOpenAPINullablesSetToNull($nullablesSetToNull)
    {
        $this->openAPINullablesSetToNull=$nullablesSetToNull;

        return $this;
    }

    /**
     * Checks if a property is nullable
     *
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        if (isset(self::$openAPINullables[$property])) {
            return self::$openAPINullables[$property];
        }

        return false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        if (in_array($property, $this->getOpenAPINullablesSetToNull())) {
            return true;
        }
        return false;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'giftcard' => 'giftcard',
        'addedtransactionids' => 'addedtransactionids',
        'receipttext' => 'receipttext',
        'printVoucher' => 'print_voucher',
        'printPin' => 'print_pin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'giftcard' => 'setGiftcard',
        'addedtransactionids' => 'setAddedtransactionids',
        'receipttext' => 'setReceipttext',
        'printVoucher' => 'setPrintVoucher',
        'printPin' => 'setPrintPin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'giftcard' => 'getGiftcard',
        'addedtransactionids' => 'getAddedtransactionids',
        'receipttext' => 'getReceipttext',
        'printVoucher' => 'getPrintVoucher',
        'printPin' => 'getPrintPin'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('giftcard', $data, null);
        $this->setIfExists('addedtransactionids', $data, null);
        $this->setIfExists('receipttext', $data, null);
        $this->setIfExists('printVoucher', $data, null);
        $this->setIfExists('printPin', $data, null);
    }

    public function setIfExists(string $variableName, $fields, $defaultValue)
    {
        if (is_array($fields) && array_key_exists($variableName, $fields) && is_null($fields[$variableName]) && self::isNullable($variableName)) {
            array_push($this->openAPINullablesSetToNull, $variableName);
        }

        $this->container[$variableName] = isset($fields[$variableName]) ? $fields[$variableName] : $defaultValue;

        return $this;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets giftcard
     *
     * @return \Spy\SitooClient\Model\GiftcardRead|null
     */
    public function getGiftcard()
    {
        return $this->container['giftcard'];
    }

    /**
     * Sets giftcard
     *
     * @param \Spy\SitooClient\Model\GiftcardRead|null $giftcard giftcard
     *
     * @return self
     */
    public function setGiftcard($giftcard)
    {

        if (is_null($giftcard)) {
            throw new \InvalidArgumentException('non-nullable giftcard cannot be null');
        }

        $this->container['giftcard'] = $giftcard;

        return $this;
    }

    /**
     * Gets addedtransactionids
     *
     * @return string[]|null
     */
    public function getAddedtransactionids()
    {
        return $this->container['addedtransactionids'];
    }

    /**
     * Sets addedtransactionids
     *
     * @param string[]|null $addedtransactionids An array of transactionids added by the request. (Used for rollback)
     *
     * @return self
     */
    public function setAddedtransactionids($addedtransactionids)
    {

        if (is_null($addedtransactionids)) {
            throw new \InvalidArgumentException('non-nullable addedtransactionids cannot be null');
        }

        $this->container['addedtransactionids'] = $addedtransactionids;

        return $this;
    }

    /**
     * Gets receipttext
     *
     * @return string|null
     */
    public function getReceipttext()
    {
        return $this->container['receipttext'];
    }

    /**
     * Sets receipttext
     *
     * @param string|null $receipttext Optional text printed on the receipt.
     *
     * @return self
     */
    public function setReceipttext($receipttext)
    {

        if (is_null($receipttext)) {
            throw new \InvalidArgumentException('non-nullable receipttext cannot be null');
        }

        $this->container['receipttext'] = $receipttext;

        return $this;
    }

    /**
     * Gets printVoucher
     *
     * @return bool|null
     */
    public function getPrintVoucher()
    {
        return $this->container['printVoucher'];
    }

    /**
     * Sets printVoucher
     *
     * @param bool|null $printVoucher If set to true, a gift card voucher should be printed.
     *
     * @return self
     */
    public function setPrintVoucher($printVoucher)
    {

        if (is_null($printVoucher)) {
            throw new \InvalidArgumentException('non-nullable printVoucher cannot be null');
        }

        $this->container['printVoucher'] = $printVoucher;

        return $this;
    }

    /**
     * Gets printPin
     *
     * @return string|null
     */
    public function getPrintPin()
    {
        return $this->container['printPin'];
    }

    /**
     * Sets printPin
     *
     * @param string|null $printPin Optional PIN printed for the gift card (usually 4-6 digits).
     *
     * @return self
     */
    public function setPrintPin($printPin)
    {

        if (is_null($printPin)) {
            throw new \InvalidArgumentException('non-nullable printPin cannot be null');
        }

        $this->container['printPin'] = $printPin;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return (string)json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


