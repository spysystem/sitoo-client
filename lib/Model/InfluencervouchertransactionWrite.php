<?php
/**
 * InfluencervouchertransactionWrite
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
 * InfluencervouchertransactionWrite Class Doc Comment
 *
 * @category Class
 * @description The influencer voucher transaction object.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InfluencervouchertransactionWrite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return InfluencervouchertransactionWriteModelFields
      */
    public static function GetModelFields(): InfluencervouchertransactionWriteModelFields
    {
        return new InfluencervouchertransactionWriteModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return InfluencervouchertransactionWriteModelAttributes
      */
    public static function GetModelAttributes(): InfluencervouchertransactionWriteModelAttributes
    {
        return new InfluencervouchertransactionWriteModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'influencervouchertransaction-write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'moneyordertotal' => 'string',
        'moneyinfluencertotal' => 'string',
        'moneyinfluencerdiscount' => 'string',
        'currencycode' => 'string',
        'merchantReference' => 'string',
        'staffReference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'moneyordertotal' => null,
        'moneyinfluencertotal' => null,
        'moneyinfluencerdiscount' => null,
        'currencycode' => null,
        'merchantReference' => null,
        'staffReference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'moneyordertotal' => false,
		'moneyinfluencertotal' => false,
		'moneyinfluencerdiscount' => false,
		'currencycode' => false,
		'merchantReference' => false,
		'staffReference' => false
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
        'moneyordertotal' => 'moneyordertotal',
        'moneyinfluencertotal' => 'moneyinfluencertotal',
        'moneyinfluencerdiscount' => 'moneyinfluencerdiscount',
        'currencycode' => 'currencycode',
        'merchantReference' => 'merchant_reference',
        'staffReference' => 'staff_reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'moneyordertotal' => 'setMoneyordertotal',
        'moneyinfluencertotal' => 'setMoneyinfluencertotal',
        'moneyinfluencerdiscount' => 'setMoneyinfluencerdiscount',
        'currencycode' => 'setCurrencycode',
        'merchantReference' => 'setMerchantReference',
        'staffReference' => 'setStaffReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'moneyordertotal' => 'getMoneyordertotal',
        'moneyinfluencertotal' => 'getMoneyinfluencertotal',
        'moneyinfluencerdiscount' => 'getMoneyinfluencerdiscount',
        'currencycode' => 'getCurrencycode',
        'merchantReference' => 'getMerchantReference',
        'staffReference' => 'getStaffReference'
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
        $this->setIfExists('moneyordertotal', $data, null);
        $this->setIfExists('moneyinfluencertotal', $data, null);
        $this->setIfExists('moneyinfluencerdiscount', $data, null);
        $this->setIfExists('currencycode', $data, null);
        $this->setIfExists('merchantReference', $data, null);
        $this->setIfExists('staffReference', $data, null);
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

        if ($this->container['moneyordertotal'] === null) {
            $invalidProperties[] = "'moneyordertotal' can't be null";
        }
        if ($this->container['moneyinfluencertotal'] === null) {
            $invalidProperties[] = "'moneyinfluencertotal' can't be null";
        }
        if ($this->container['moneyinfluencerdiscount'] === null) {
            $invalidProperties[] = "'moneyinfluencerdiscount' can't be null";
        }
        if ($this->container['currencycode'] === null) {
            $invalidProperties[] = "'currencycode' can't be null";
        }
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
     * Gets moneyordertotal
     *
     * @return string
     */
    public function getMoneyordertotal()
    {
        return $this->container['moneyordertotal'];
    }

    /**
     * Sets moneyordertotal
     *
     * @param string $moneyordertotal The total amount of sales for this transaction.
     *
     * @return self
     */
    public function setMoneyordertotal($moneyordertotal)
    {

        if (is_null($moneyordertotal)) {
            throw new \InvalidArgumentException('non-nullable moneyordertotal cannot be null');
        }

        $this->container['moneyordertotal'] = $moneyordertotal;

        return $this;
    }

    /**
     * Gets moneyinfluencertotal
     *
     * @return string
     */
    public function getMoneyinfluencertotal()
    {
        return $this->container['moneyinfluencertotal'];
    }

    /**
     * Sets moneyinfluencertotal
     *
     * @param string $moneyinfluencertotal The amount of sold items where the influencer voucher applied for this transaction.
     *
     * @return self
     */
    public function setMoneyinfluencertotal($moneyinfluencertotal)
    {

        if (is_null($moneyinfluencertotal)) {
            throw new \InvalidArgumentException('non-nullable moneyinfluencertotal cannot be null');
        }

        $this->container['moneyinfluencertotal'] = $moneyinfluencertotal;

        return $this;
    }

    /**
     * Gets moneyinfluencerdiscount
     *
     * @return string
     */
    public function getMoneyinfluencerdiscount()
    {
        return $this->container['moneyinfluencerdiscount'];
    }

    /**
     * Sets moneyinfluencerdiscount
     *
     * @param string $moneyinfluencerdiscount The amount of discount the influencer voucher gave for this transaction.
     *
     * @return self
     */
    public function setMoneyinfluencerdiscount($moneyinfluencerdiscount)
    {

        if (is_null($moneyinfluencerdiscount)) {
            throw new \InvalidArgumentException('non-nullable moneyinfluencerdiscount cannot be null');
        }

        $this->container['moneyinfluencerdiscount'] = $moneyinfluencerdiscount;

        return $this;
    }

    /**
     * Gets currencycode
     *
     * @return string
     */
    public function getCurrencycode()
    {
        return $this->container['currencycode'];
    }

    /**
     * Sets currencycode
     *
     * @param string $currencycode Currency for the transaction. (ISO 4217, alpha-3 uppercased)
     *
     * @return self
     */
    public function setCurrencycode($currencycode)
    {

        if (is_null($currencycode)) {
            throw new \InvalidArgumentException('non-nullable currencycode cannot be null');
        }

        $this->container['currencycode'] = $currencycode;

        return $this;
    }

    /**
     * Gets merchantReference
     *
     * @return string|null
     */
    public function getMerchantReference()
    {
        return $this->container['merchantReference'];
    }

    /**
     * Sets merchantReference
     *
     * @param string|null $merchantReference Optional merchant/store reference for this transaction.
     *
     * @return self
     */
    public function setMerchantReference($merchantReference)
    {

        if (is_null($merchantReference)) {
            throw new \InvalidArgumentException('non-nullable merchantReference cannot be null');
        }

        $this->container['merchantReference'] = $merchantReference;

        return $this;
    }

    /**
     * Gets staffReference
     *
     * @return string|null
     */
    public function getStaffReference()
    {
        return $this->container['staffReference'];
    }

    /**
     * Sets staffReference
     *
     * @param string|null $staffReference Optional staff reference for this transaction.
     *
     * @return self
     */
    public function setStaffReference($staffReference)
    {

        if (is_null($staffReference)) {
            throw new \InvalidArgumentException('non-nullable staffReference cannot be null');
        }

        $this->container['staffReference'] = $staffReference;

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


