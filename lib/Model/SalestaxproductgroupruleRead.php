<?php
/**
 * SalestaxproductgroupruleRead
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
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
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
 * SalestaxproductgroupruleRead Class Doc Comment
 *
 * @category Class
 * @description A sales tax rule for a specific product group.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SalestaxproductgroupruleRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return SalestaxproductgroupruleReadModelFields
      */
    public static function GetModelFields(): SalestaxproductgroupruleReadModelFields
    {
        return new SalestaxproductgroupruleReadModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return SalestaxproductgroupruleReadModelAttributes
      */
    public static function GetModelAttributes(): SalestaxproductgroupruleReadModelAttributes
    {
        return new SalestaxproductgroupruleReadModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'salestaxproductgrouprule-read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vatid' => 'int',
        'type' => 'int',
        'moneymin' => 'string',
        'moneymax' => 'string',
        'decimalvalue' => 'string',
        'externalid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'vatid' => null,
        'type' => null,
        'moneymin' => null,
        'moneymax' => null,
        'decimalvalue' => null,
        'externalid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vatid' => false,
		'type' => false,
		'moneymin' => false,
		'moneymax' => false,
		'decimalvalue' => false,
		'externalid' => false
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
        'vatid' => 'vatid',
        'type' => 'type',
        'moneymin' => 'moneymin',
        'moneymax' => 'moneymax',
        'decimalvalue' => 'decimalvalue',
        'externalid' => 'externalid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vatid' => 'setVatid',
        'type' => 'setType',
        'moneymin' => 'setMoneymin',
        'moneymax' => 'setMoneymax',
        'decimalvalue' => 'setDecimalvalue',
        'externalid' => 'setExternalid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vatid' => 'getVatid',
        'type' => 'getType',
        'moneymin' => 'getMoneymin',
        'moneymax' => 'getMoneymax',
        'decimalvalue' => 'getDecimalvalue',
        'externalid' => 'getExternalid'
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
        $this->setIfExists('vatid', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('moneymin', $data ?? [], null);
        $this->setIfExists('moneymax', $data ?? [], null);
        $this->setIfExists('decimalvalue', $data ?? [], null);
        $this->setIfExists('externalid', $data ?? [], null);
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

        if ($this->container['decimalvalue'] === null) {
            $invalidProperties[] = "'decimalvalue' can't be null";
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
     * Gets vatid
     *
     * @return int|null
     */
    public function getVatid()
    {
        return $this->container['vatid'];
    }

    /**
     * Sets vatid
     *
     * @param int|null $vatid The VAT ID of the productgroup that this rule applies to.
     *
     * @return self
     */
    public function setVatid($vatid)
    {
        if (is_null($vatid)) {
            throw new \InvalidArgumentException('non-nullable vatid cannot be null');
        }
        $this->container['vatid'] = $vatid;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|null $type The type for this rule.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets moneymin
     *
     * @return string|null
     */
    public function getMoneymin()
    {
        return $this->container['moneymin'];
    }

    /**
     * Sets moneymin
     *
     * @param string|null $moneymin The minimum value for this rule (if applicable).
     *
     * @return self
     */
    public function setMoneymin($moneymin)
    {
        if (is_null($moneymin)) {
            throw new \InvalidArgumentException('non-nullable moneymin cannot be null');
        }
        $this->container['moneymin'] = $moneymin;

        return $this;
    }

    /**
     * Gets moneymax
     *
     * @return string|null
     */
    public function getMoneymax()
    {
        return $this->container['moneymax'];
    }

    /**
     * Sets moneymax
     *
     * @param string|null $moneymax The maximum value for this rule (if applicable).
     *
     * @return self
     */
    public function setMoneymax($moneymax)
    {
        if (is_null($moneymax)) {
            throw new \InvalidArgumentException('non-nullable moneymax cannot be null');
        }
        $this->container['moneymax'] = $moneymax;

        return $this;
    }

    /**
     * Gets decimalvalue
     *
     * @return string
     */
    public function getDecimalvalue()
    {
        return $this->container['decimalvalue'];
    }

    /**
     * Sets decimalvalue
     *
     * @param string $decimalvalue The tax percentage for this rule.
     *
     * @return self
     */
    public function setDecimalvalue($decimalvalue)
    {
        if (is_null($decimalvalue)) {
            throw new \InvalidArgumentException('non-nullable decimalvalue cannot be null');
        }
        $this->container['decimalvalue'] = $decimalvalue;

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
     * @param string|null $externalid An external ID used for this rule. (e.g Product Tax Code)
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


