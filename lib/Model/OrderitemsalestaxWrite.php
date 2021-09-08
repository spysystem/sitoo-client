<?php
/**
 * OrderitemsalestaxWrite
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
 * OrderitemsalestaxWrite Class Doc Comment
 *
 * @category Class
 * @description Sales tax for orderitem.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderitemsalestaxWrite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'orderitemsalestax-write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'code' => 'string',
        'externalid' => 'string',
        'groupregion' => 'string',
        'moneytotal' => 'string',
        'moneytax' => 'string',
        'decimaltaxvalue' => 'string'
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
        'code' => null,
        'externalid' => null,
        'groupregion' => null,
        'moneytotal' => null,
        'moneytax' => null,
        'decimaltaxvalue' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'name' => false,
		'code' => false,
		'externalid' => false,
		'groupregion' => false,
		'moneytotal' => false,
		'moneytax' => false,
		'decimaltaxvalue' => false
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
        'code' => 'code',
        'externalid' => 'externalid',
        'groupregion' => 'groupregion',
        'moneytotal' => 'moneytotal',
        'moneytax' => 'moneytax',
        'decimaltaxvalue' => 'decimaltaxvalue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'code' => 'setCode',
        'externalid' => 'setExternalid',
        'groupregion' => 'setGroupregion',
        'moneytotal' => 'setMoneytotal',
        'moneytax' => 'setMoneytax',
        'decimaltaxvalue' => 'setDecimaltaxvalue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'code' => 'getCode',
        'externalid' => 'getExternalid',
        'groupregion' => 'getGroupregion',
        'moneytotal' => 'getMoneytotal',
        'moneytax' => 'getMoneytax',
        'decimaltaxvalue' => 'getDecimaltaxvalue'
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
        $this->setIfExists('code', $data, null);
        $this->setIfExists('externalid', $data, null);
        $this->setIfExists('groupregion', $data, null);
        $this->setIfExists('moneytotal', $data, null);
        $this->setIfExists('moneytax', $data, null);
        $this->setIfExists('decimaltaxvalue', $data, null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['moneytotal'] === null) {
            $invalidProperties[] = "'moneytotal' can't be null";
        }
        if ($this->container['moneytax'] === null) {
            $invalidProperties[] = "'moneytax' can't be null";
        }
        if ($this->container['decimaltaxvalue'] === null) {
            $invalidProperties[] = "'decimaltaxvalue' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the sales tax.
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
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code An identifier that can be used to specify the sales tax.
     *
     * @return self
     */
    public function setCode($code)
    {

        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets externalid
     *
     * @return string|null
     */
    public function getExternalid()
    {
        return $this->container['externalid'];
    }

    /**
     * Sets externalid
     *
     * @param string|null $externalid A custom value to make it easier to export to external systems.
     *
     * @return self
     */
    public function setExternalid($externalid)
    {

        if (is_null($externalid)) {
            throw new \InvalidArgumentException('non-nullable externalid cannot be null');
        }

        $this->container['externalid'] = $externalid;

        return $this;
    }

    /**
     * Gets groupregion
     *
     * @return string|null
     */
    public function getGroupregion()
    {
        return $this->container['groupregion'];
    }

    /**
     * Sets groupregion
     *
     * @param string|null $groupregion The region of the salestaxgroup this salestax item belongs to.
     *
     * @return self
     */
    public function setGroupregion($groupregion)
    {

        if (is_null($groupregion)) {
            throw new \InvalidArgumentException('non-nullable groupregion cannot be null');
        }

        $this->container['groupregion'] = $groupregion;

        return $this;
    }

    /**
     * Gets moneytotal
     *
     * @return string
     */
    public function getMoneytotal()
    {
        return $this->container['moneytotal'];
    }

    /**
     * Sets moneytotal
     *
     * @param string $moneytotal The total sales the collected tax is calculated on. (ie. the sales with no tax)
     *
     * @return self
     */
    public function setMoneytotal($moneytotal)
    {

        if (is_null($moneytotal)) {
            throw new \InvalidArgumentException('non-nullable moneytotal cannot be null');
        }

        $this->container['moneytotal'] = $moneytotal;

        return $this;
    }

    /**
     * Gets moneytax
     *
     * @return string
     */
    public function getMoneytax()
    {
        return $this->container['moneytax'];
    }

    /**
     * Sets moneytax
     *
     * @param string $moneytax The total net money value for the this sales tax.
     *
     * @return self
     */
    public function setMoneytax($moneytax)
    {

        if (is_null($moneytax)) {
            throw new \InvalidArgumentException('non-nullable moneytax cannot be null');
        }

        $this->container['moneytax'] = $moneytax;

        return $this;
    }

    /**
     * Gets decimaltaxvalue
     *
     * @return string
     */
    public function getDecimaltaxvalue()
    {
        return $this->container['decimaltaxvalue'];
    }

    /**
     * Sets decimaltaxvalue
     *
     * @param string $decimaltaxvalue The tax value in percent.
     *
     * @return self
     */
    public function setDecimaltaxvalue($decimaltaxvalue)
    {

        if (is_null($decimaltaxvalue)) {
            throw new \InvalidArgumentException('non-nullable decimaltaxvalue cannot be null');
        }

        $this->container['decimaltaxvalue'] = $decimaltaxvalue;

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


