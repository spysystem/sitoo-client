<?php
/**
 * PoszreportpaymentRead
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
 * PoszreportpaymentRead Class Doc Comment
 *
 * @category Class
 * @description Contains the payment details for a poszreport.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PoszreportpaymentRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return PoszreportpaymentReadModelFields
      */
    public static function GetModelFields(): PoszreportpaymentReadModelFields
    {
        return new PoszreportpaymentReadModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return PoszreportpaymentReadModelAttributes
      */
    public static function GetModelAttributes(): PoszreportpaymentReadModelAttributes
    {
        return new PoszreportpaymentReadModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'poszreportpayment-read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'moneytotal' => 'string',
        'moneycaptured' => 'string',
        'moneyinadvance' => 'string',
        'moneyreserved' => 'string',
        'subpayments' => '\Spy\SitooClient\Model\PoszreportsubpaymentRead[]'
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
        'moneytotal' => null,
        'moneycaptured' => null,
        'moneyinadvance' => null,
        'moneyreserved' => null,
        'subpayments' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'moneytotal' => false,
		'moneycaptured' => false,
		'moneyinadvance' => false,
		'moneyreserved' => false,
		'subpayments' => false
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
        'name' => 'name',
        'moneytotal' => 'moneytotal',
        'moneycaptured' => 'moneycaptured',
        'moneyinadvance' => 'moneyinadvance',
        'moneyreserved' => 'moneyreserved',
        'subpayments' => 'subpayments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'moneytotal' => 'setMoneytotal',
        'moneycaptured' => 'setMoneycaptured',
        'moneyinadvance' => 'setMoneyinadvance',
        'moneyreserved' => 'setMoneyreserved',
        'subpayments' => 'setSubpayments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'moneytotal' => 'getMoneytotal',
        'moneycaptured' => 'getMoneycaptured',
        'moneyinadvance' => 'getMoneyinadvance',
        'moneyreserved' => 'getMoneyreserved',
        'subpayments' => 'getSubpayments'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('moneytotal', $data ?? [], null);
        $this->setIfExists('moneycaptured', $data ?? [], null);
        $this->setIfExists('moneyinadvance', $data ?? [], null);
        $this->setIfExists('moneyreserved', $data ?? [], null);
        $this->setIfExists('subpayments', $data ?? [], null);
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
     * @param string|null $name The name of the payment.
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
     * Gets moneytotal
     *
     * @return string|null
     */
    public function getMoneytotal()
    {
        return $this->container['moneytotal'];
    }

    /**
     * Sets moneytotal
     *
     * @param string|null $moneytotal The total money value of the payment.
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
     * Gets subpayments
     *
     * @return \Spy\SitooClient\Model\PoszreportsubpaymentRead[]|null
     */
    public function getSubpayments()
    {
        return $this->container['subpayments'];
    }

    /**
     * Sets subpayments
     *
     * @param \Spy\SitooClient\Model\PoszreportsubpaymentRead[]|null $subpayments A specification of different payments within the payment type (if applicable). See poszreportsubpayment for fields.
     *
     * @return self
     */
    public function setSubpayments($subpayments)
    {
        if (is_null($subpayments)) {
            throw new \InvalidArgumentException('non-nullable subpayments cannot be null');
        }
        $this->container['subpayments'] = $subpayments;

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


