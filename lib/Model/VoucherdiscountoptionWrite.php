<?php
/**
 * VoucherdiscountoptionWrite
 *
 * PHP version 7.4
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

use \ArrayAccess;
use \Spy\SitooClient\ObjectSerializer;

/**
 * VoucherdiscountoptionWrite Class Doc Comment
 *
 * @category Class
 * @description Used for defining an option for vouchers of type ProductBuyXGetDiscountList.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VoucherdiscountoptionWrite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return VoucherdiscountoptionWriteModelFields
      */
    public static function GetModelFields(): VoucherdiscountoptionWriteModelFields
    {
        return new VoucherdiscountoptionWriteModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return VoucherdiscountoptionWriteModelAttributes
      */
    public static function GetModelAttributes(): VoucherdiscountoptionWriteModelAttributes
    {
        return new VoucherdiscountoptionWriteModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'voucherdiscountoption-write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'num' => 'int',
        'products' => 'int[]',
        'moneyprice' => 'string',
        'moneydiscount' => 'string',
        'decimaldiscount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'num' => null,
        'products' => null,
        'moneyprice' => null,
        'moneydiscount' => null,
        'decimaldiscount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'num' => false,
		'products' => false,
		'moneyprice' => false,
		'moneydiscount' => false,
		'decimaldiscount' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'num' => 'num',
        'products' => 'products',
        'moneyprice' => 'moneyprice',
        'moneydiscount' => 'moneydiscount',
        'decimaldiscount' => 'decimaldiscount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'num' => 'setNum',
        'products' => 'setProducts',
        'moneyprice' => 'setMoneyprice',
        'moneydiscount' => 'setMoneydiscount',
        'decimaldiscount' => 'setDecimaldiscount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'num' => 'getNum',
        'products' => 'getProducts',
        'moneyprice' => 'getMoneyprice',
        'moneydiscount' => 'getMoneydiscount',
        'decimaldiscount' => 'getDecimaldiscount'
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
        $this->setIfExists('num', $data ?? [], null);
        $this->setIfExists('products', $data ?? [], null);
        $this->setIfExists('moneyprice', $data ?? [], null);
        $this->setIfExists('moneydiscount', $data ?? [], null);
        $this->setIfExists('decimaldiscount', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets num
     *
     * @return int|null
     */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
     * Sets num
     *
     * @param int|null $num The number of products this discount option is valid for.
     *
     * @return self
     */
    public function setNum($num)
    {

        if (is_null($num)) {
            throw new \InvalidArgumentException('non-nullable num cannot be null');
        }

        $this->container['num'] = $num;

        return $this;
    }

    /**
     * Gets products
     *
     * @return int[]|null
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param int[]|null $products Array of productids which are used to activate this option.
     *
     * @return self
     */
    public function setProducts($products)
    {

        if (is_null($products)) {
            throw new \InvalidArgumentException('non-nullable products cannot be null');
        }

        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets moneyprice
     *
     * @return string|null
     */
    public function getMoneyprice()
    {
        return $this->container['moneyprice'];
    }

    /**
     * Sets moneyprice
     *
     * @param string|null $moneyprice The discounted price used, if set.
     *
     * @return self
     */
    public function setMoneyprice($moneyprice)
    {

        if (is_null($moneyprice)) {
            throw new \InvalidArgumentException('non-nullable moneyprice cannot be null');
        }

        $this->container['moneyprice'] = $moneyprice;

        return $this;
    }

    /**
     * Gets moneydiscount
     *
     * @return string|null
     */
    public function getMoneydiscount()
    {
        return $this->container['moneydiscount'];
    }

    /**
     * Sets moneydiscount
     *
     * @param string|null $moneydiscount The discount given, if set.
     *
     * @return self
     */
    public function setMoneydiscount($moneydiscount)
    {

        if (is_null($moneydiscount)) {
            throw new \InvalidArgumentException('non-nullable moneydiscount cannot be null');
        }

        $this->container['moneydiscount'] = $moneydiscount;

        return $this;
    }

    /**
     * Gets decimaldiscount
     *
     * @return string|null
     */
    public function getDecimaldiscount()
    {
        return $this->container['decimaldiscount'];
    }

    /**
     * Sets decimaldiscount
     *
     * @param string|null $decimaldiscount The discount in percentage given, if set.
     *
     * @return self
     */
    public function setDecimaldiscount($decimaldiscount)
    {

        if (is_null($decimaldiscount)) {
            throw new \InvalidArgumentException('non-nullable decimaldiscount cannot be null');
        }

        $this->container['decimaldiscount'] = $decimaldiscount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


