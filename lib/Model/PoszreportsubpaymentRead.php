<?php
/**
 * PoszreportsubpaymentRead
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
 * PoszreportsubpaymentRead Class Doc Comment
 *
 * @category Class
 * @description Contains the details for a sub payment of poszreportpayment.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PoszreportsubpaymentRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'poszreportsubpayment-read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'moneysubtotal' => 'string',
        'moneycaptured' => 'string',
        'moneyinadvance' => 'string',
        'moneyreserved' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'moneysubtotal' => null,
        'moneycaptured' => null,
        'moneyinadvance' => null,
        'moneyreserved' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'name' => false,
		'moneysubtotal' => false,
		'moneycaptured' => false,
		'moneyinadvance' => false,
		'moneyreserved' => false
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
        'name' => 'name',
        'moneysubtotal' => 'moneysubtotal',
        'moneycaptured' => 'moneycaptured',
        'moneyinadvance' => 'moneyinadvance',
        'moneyreserved' => 'moneyreserved'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'moneysubtotal' => 'setMoneysubtotal',
        'moneycaptured' => 'setMoneycaptured',
        'moneyinadvance' => 'setMoneyinadvance',
        'moneyreserved' => 'setMoneyreserved'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'moneysubtotal' => 'getMoneysubtotal',
        'moneycaptured' => 'getMoneycaptured',
        'moneyinadvance' => 'getMoneyinadvance',
        'moneyreserved' => 'getMoneyreserved'
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
        $this->setIfExists('name', $data, null);
        $this->setIfExists('moneysubtotal', $data, null);
        $this->setIfExists('moneycaptured', $data, null);
        $this->setIfExists('moneyinadvance', $data, null);
        $this->setIfExists('moneyreserved', $data, null);
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the sub payment.
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets moneysubtotal
     *
     * @return string|null
     */
    public function getMoneysubtotal()
    {
        return $this->container['moneysubtotal'];
    }

    /**
     * Sets moneysubtotal
     *
     * @param string|null $moneysubtotal The money value of the sub payment.
     *
     * @return self
     */
    public function setMoneysubtotal($moneysubtotal)
    {

        if (is_null($moneysubtotal)) {
            throw new \InvalidArgumentException('non-nullable moneysubtotal cannot be null');
        }

        $this->container['moneysubtotal'] = $moneysubtotal;

        return $this;
    }

    /**
     * Gets moneycaptured
     *
     * @return string|null
     */
    public function getMoneycaptured()
    {
        return $this->container['moneycaptured'];
    }

    /**
     * Sets moneycaptured
     *
     * @param string|null $moneycaptured The amount captured for the payment. The difference between total and captured is the reserved amount.
     *
     * @return self
     */
    public function setMoneycaptured($moneycaptured)
    {

        if (is_null($moneycaptured)) {
            throw new \InvalidArgumentException('non-nullable moneycaptured cannot be null');
        }

        $this->container['moneycaptured'] = $moneycaptured;

        return $this;
    }

    /**
     * Gets moneyinadvance
     *
     * @return string|null
     */
    public function getMoneyinadvance()
    {
        return $this->container['moneyinadvance'];
    }

    /**
     * Sets moneyinadvance
     *
     * @param string|null $moneyinadvance The amount captured for the payment for items that were not delivered at the time of purchase (payment in advance).
     *
     * @return self
     */
    public function setMoneyinadvance($moneyinadvance)
    {

        if (is_null($moneyinadvance)) {
            throw new \InvalidArgumentException('non-nullable moneyinadvance cannot be null');
        }

        $this->container['moneyinadvance'] = $moneyinadvance;

        return $this;
    }

    /**
     * Gets moneyreserved
     *
     * @return string|null
     */
    public function getMoneyreserved()
    {
        return $this->container['moneyreserved'];
    }

    /**
     * Sets moneyreserved
     *
     * @param string|null $moneyreserved The reserved amount.
     *
     * @return self
     */
    public function setMoneyreserved($moneyreserved)
    {

        if (is_null($moneyreserved)) {
            throw new \InvalidArgumentException('non-nullable moneyreserved cannot be null');
        }

        $this->container['moneyreserved'] = $moneyreserved;

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


