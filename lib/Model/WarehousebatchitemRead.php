<?php
/**
 * WarehousebatchitemRead
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
 * WarehousebatchitemRead Class Doc Comment
 *
 * @category Class
 * @description Warehouse batch item for a warehousebatch.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WarehousebatchitemRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return WarehousebatchitemReadModelFields
      */
    public static function GetModelFields(): WarehousebatchitemReadModelFields
    {
        return new WarehousebatchitemReadModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return WarehousebatchitemReadModelAttributes
      */
    public static function GetModelAttributes(): WarehousebatchitemReadModelAttributes
    {
        return new WarehousebatchitemReadModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'warehousebatchitem-read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'warehousebatchitemid' => 'int',
        'warehousebatchid' => 'int',
        'warehouseitemid' => 'int',
        'datemodified' => 'int',
        'decimalquantity' => 'string',
        'moneypricein' => 'string',
        'emailowner' => 'string',
        'comment' => 'string',
        'sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'warehousebatchitemid' => null,
        'warehousebatchid' => null,
        'warehouseitemid' => null,
        'datemodified' => null,
        'decimalquantity' => null,
        'moneypricein' => null,
        'emailowner' => null,
        'comment' => null,
        'sku' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'warehousebatchitemid' => false,
		'warehousebatchid' => false,
		'warehouseitemid' => false,
		'datemodified' => false,
		'decimalquantity' => false,
		'moneypricein' => false,
		'emailowner' => false,
		'comment' => false,
		'sku' => false
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
        'warehousebatchitemid' => 'warehousebatchitemid',
        'warehousebatchid' => 'warehousebatchid',
        'warehouseitemid' => 'warehouseitemid',
        'datemodified' => 'datemodified',
        'decimalquantity' => 'decimalquantity',
        'moneypricein' => 'moneypricein',
        'emailowner' => 'emailowner',
        'comment' => 'comment',
        'sku' => 'sku'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'warehousebatchitemid' => 'setWarehousebatchitemid',
        'warehousebatchid' => 'setWarehousebatchid',
        'warehouseitemid' => 'setWarehouseitemid',
        'datemodified' => 'setDatemodified',
        'decimalquantity' => 'setDecimalquantity',
        'moneypricein' => 'setMoneypricein',
        'emailowner' => 'setEmailowner',
        'comment' => 'setComment',
        'sku' => 'setSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'warehousebatchitemid' => 'getWarehousebatchitemid',
        'warehousebatchid' => 'getWarehousebatchid',
        'warehouseitemid' => 'getWarehouseitemid',
        'datemodified' => 'getDatemodified',
        'decimalquantity' => 'getDecimalquantity',
        'moneypricein' => 'getMoneypricein',
        'emailowner' => 'getEmailowner',
        'comment' => 'getComment',
        'sku' => 'getSku'
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
        $this->setIfExists('warehousebatchitemid', $data ?? [], null);
        $this->setIfExists('warehousebatchid', $data ?? [], null);
        $this->setIfExists('warehouseitemid', $data ?? [], null);
        $this->setIfExists('datemodified', $data ?? [], null);
        $this->setIfExists('decimalquantity', $data ?? [], null);
        $this->setIfExists('moneypricein', $data ?? [], null);
        $this->setIfExists('emailowner', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
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

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
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
     * Gets warehousebatchitemid
     *
     * @return int|null
     */
    public function getWarehousebatchitemid()
    {
        return $this->container['warehousebatchitemid'];
    }

    /**
     * Sets warehousebatchitemid
     *
     * @param int|null $warehousebatchitemid The unique ID of the warehousebatchitem.
     *
     * @return self
     */
    public function setWarehousebatchitemid($warehousebatchitemid)
    {
        if (is_null($warehousebatchitemid)) {
            throw new \InvalidArgumentException('non-nullable warehousebatchitemid cannot be null');
        }
        $this->container['warehousebatchitemid'] = $warehousebatchitemid;

        return $this;
    }

    /**
     * Gets warehousebatchid
     *
     * @return int|null
     */
    public function getWarehousebatchid()
    {
        return $this->container['warehousebatchid'];
    }

    /**
     * Sets warehousebatchid
     *
     * @param int|null $warehousebatchid The ID of the warehousebatch that this warehousebatchitem belongs to.
     *
     * @return self
     */
    public function setWarehousebatchid($warehousebatchid)
    {
        if (is_null($warehousebatchid)) {
            throw new \InvalidArgumentException('non-nullable warehousebatchid cannot be null');
        }
        $this->container['warehousebatchid'] = $warehousebatchid;

        return $this;
    }

    /**
     * Gets warehouseitemid
     *
     * @return int|null
     */
    public function getWarehouseitemid()
    {
        return $this->container['warehouseitemid'];
    }

    /**
     * Sets warehouseitemid
     *
     * @param int|null $warehouseitemid The unique ID of the warehouseitem.
     *
     * @return self
     */
    public function setWarehouseitemid($warehouseitemid)
    {
        if (is_null($warehouseitemid)) {
            throw new \InvalidArgumentException('non-nullable warehouseitemid cannot be null');
        }
        $this->container['warehouseitemid'] = $warehouseitemid;

        return $this;
    }

    /**
     * Gets datemodified
     *
     * @return int|null
     */
    public function getDatemodified()
    {
        return $this->container['datemodified'];
    }

    /**
     * Sets datemodified
     *
     * @param int|null $datemodified The modified date for this warehousebatchitem.
     *
     * @return self
     */
    public function setDatemodified($datemodified)
    {
        if (is_null($datemodified)) {
            throw new \InvalidArgumentException('non-nullable datemodified cannot be null');
        }
        $this->container['datemodified'] = $datemodified;

        return $this;
    }

    /**
     * Gets decimalquantity
     *
     * @return string|null
     */
    public function getDecimalquantity()
    {
        return $this->container['decimalquantity'];
    }

    /**
     * Sets decimalquantity
     *
     * @param string|null $decimalquantity The stock quantity for this warehousebatchitem.
     *
     * @return self
     */
    public function setDecimalquantity($decimalquantity)
    {
        if (is_null($decimalquantity)) {
            throw new \InvalidArgumentException('non-nullable decimalquantity cannot be null');
        }
        $this->container['decimalquantity'] = $decimalquantity;

        return $this;
    }

    /**
     * Gets moneypricein
     *
     * @return string|null
     */
    public function getMoneypricein()
    {
        return $this->container['moneypricein'];
    }

    /**
     * Sets moneypricein
     *
     * @param string|null $moneypricein The purchase price per item for this warehousebatchitem.
     *
     * @return self
     */
    public function setMoneypricein($moneypricein)
    {
        if (is_null($moneypricein)) {
            throw new \InvalidArgumentException('non-nullable moneypricein cannot be null');
        }
        $this->container['moneypricein'] = $moneypricein;

        return $this;
    }

    /**
     * Gets emailowner
     *
     * @return string|null
     */
    public function getEmailowner()
    {
        return $this->container['emailowner'];
    }

    /**
     * Sets emailowner
     *
     * @param string|null $emailowner The email for the owner of this warehousebatchitem.
     *
     * @return self
     */
    public function setEmailowner($emailowner)
    {
        if (is_null($emailowner)) {
            throw new \InvalidArgumentException('non-nullable emailowner cannot be null');
        }
        $this->container['emailowner'] = $emailowner;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment A comment for the warehousebatchitem.
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (is_null($comment)) {
            throw new \InvalidArgumentException('non-nullable comment cannot be null');
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku The SKU for this stock item.
     *
     * @return self
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }
        $this->container['sku'] = $sku;

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


