<?php
/**
 * WarehouseitemRead
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
 * WarehouseitemRead Class Doc Comment
 *
 * @category Class
 * @description Contains the current state of a product&#39;s stock count and stock value. Also has the bin location within the warehouse and the reordering threshold.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WarehouseitemRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return WarehouseitemReadModelFields
      */
    public static function GetModelFields(): WarehouseitemReadModelFields
    {
        return new WarehouseitemReadModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return WarehouseitemReadModelAttributes
      */
    public static function GetModelAttributes(): WarehouseitemReadModelAttributes
    {
        return new WarehouseitemReadModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'warehouseitem-read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'warehouseitemid' => 'int',
        'warehouseid' => 'int',
        'sku' => 'string',
        'binlocation' => 'string',
        'decimalthreshold' => 'string',
        'decimaltotal' => 'string',
        'moneytotal' => 'string',
        'datelastmodified' => 'int',
        'datelaststocktaking' => 'int',
        'decimalreserved' => 'string',
        'decimalavailable' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'warehouseitemid' => null,
        'warehouseid' => null,
        'sku' => null,
        'binlocation' => null,
        'decimalthreshold' => null,
        'decimaltotal' => null,
        'moneytotal' => null,
        'datelastmodified' => null,
        'datelaststocktaking' => null,
        'decimalreserved' => null,
        'decimalavailable' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'warehouseitemid' => false,
		'warehouseid' => false,
		'sku' => false,
		'binlocation' => false,
		'decimalthreshold' => false,
		'decimaltotal' => false,
		'moneytotal' => false,
		'datelastmodified' => false,
		'datelaststocktaking' => false,
		'decimalreserved' => false,
		'decimalavailable' => false
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
        'warehouseitemid' => 'warehouseitemid',
        'warehouseid' => 'warehouseid',
        'sku' => 'sku',
        'binlocation' => 'binlocation',
        'decimalthreshold' => 'decimalthreshold',
        'decimaltotal' => 'decimaltotal',
        'moneytotal' => 'moneytotal',
        'datelastmodified' => 'datelastmodified',
        'datelaststocktaking' => 'datelaststocktaking',
        'decimalreserved' => 'decimalreserved',
        'decimalavailable' => 'decimalavailable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'warehouseitemid' => 'setWarehouseitemid',
        'warehouseid' => 'setWarehouseid',
        'sku' => 'setSku',
        'binlocation' => 'setBinlocation',
        'decimalthreshold' => 'setDecimalthreshold',
        'decimaltotal' => 'setDecimaltotal',
        'moneytotal' => 'setMoneytotal',
        'datelastmodified' => 'setDatelastmodified',
        'datelaststocktaking' => 'setDatelaststocktaking',
        'decimalreserved' => 'setDecimalreserved',
        'decimalavailable' => 'setDecimalavailable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'warehouseitemid' => 'getWarehouseitemid',
        'warehouseid' => 'getWarehouseid',
        'sku' => 'getSku',
        'binlocation' => 'getBinlocation',
        'decimalthreshold' => 'getDecimalthreshold',
        'decimaltotal' => 'getDecimaltotal',
        'moneytotal' => 'getMoneytotal',
        'datelastmodified' => 'getDatelastmodified',
        'datelaststocktaking' => 'getDatelaststocktaking',
        'decimalreserved' => 'getDecimalreserved',
        'decimalavailable' => 'getDecimalavailable'
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
        $this->setIfExists('warehouseitemid', $data ?? [], null);
        $this->setIfExists('warehouseid', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('binlocation', $data ?? [], null);
        $this->setIfExists('decimalthreshold', $data ?? [], null);
        $this->setIfExists('decimaltotal', $data ?? [], null);
        $this->setIfExists('moneytotal', $data ?? [], null);
        $this->setIfExists('datelastmodified', $data ?? [], null);
        $this->setIfExists('datelaststocktaking', $data ?? [], null);
        $this->setIfExists('decimalreserved', $data ?? [], null);
        $this->setIfExists('decimalavailable', $data ?? [], null);
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
     * Gets warehouseid
     *
     * @return int|null
     */
    public function getWarehouseid()
    {
        return $this->container['warehouseid'];
    }

    /**
     * Sets warehouseid
     *
     * @param int|null $warehouseid The ID of the warehouse this warehouseitem belongs to.
     *
     * @return self
     */
    public function setWarehouseid($warehouseid)
    {

        if (is_null($warehouseid)) {
            throw new \InvalidArgumentException('non-nullable warehouseid cannot be null');
        }

        $this->container['warehouseid'] = $warehouseid;

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
     * Gets binlocation
     *
     * @return string|null
     */
    public function getBinlocation()
    {
        return $this->container['binlocation'];
    }

    /**
     * Sets binlocation
     *
     * @param string|null $binlocation Bin location for the stock for this warehouse.
     *
     * @return self
     */
    public function setBinlocation($binlocation)
    {

        if (is_null($binlocation)) {
            throw new \InvalidArgumentException('non-nullable binlocation cannot be null');
        }

        $this->container['binlocation'] = $binlocation;

        return $this;
    }

    /**
     * Gets decimalthreshold
     *
     * @return string|null
     */
    public function getDecimalthreshold()
    {
        return $this->container['decimalthreshold'];
    }

    /**
     * Sets decimalthreshold
     *
     * @param string|null $decimalthreshold Threshold for ordering new stock.
     *
     * @return self
     */
    public function setDecimalthreshold($decimalthreshold)
    {

        if (is_null($decimalthreshold)) {
            throw new \InvalidArgumentException('non-nullable decimalthreshold cannot be null');
        }

        $this->container['decimalthreshold'] = $decimalthreshold;

        return $this;
    }

    /**
     * Gets decimaltotal
     *
     * @return string|null
     */
    public function getDecimaltotal()
    {
        return $this->container['decimaltotal'];
    }

    /**
     * Sets decimaltotal
     *
     * @param string|null $decimaltotal Current stock level for this warehouseitem. (Read Only if not warehousetype Virtual)
     *
     * @return self
     */
    public function setDecimaltotal($decimaltotal)
    {

        if (is_null($decimaltotal)) {
            throw new \InvalidArgumentException('non-nullable decimaltotal cannot be null');
        }

        $this->container['decimaltotal'] = $decimaltotal;

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
     * @param string|null $moneytotal Current stock value for this warehouseitem. (Read Only if not warehousetype Virtual)
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
     * Gets datelastmodified
     *
     * @return int|null
     */
    public function getDatelastmodified()
    {
        return $this->container['datelastmodified'];
    }

    /**
     * Sets datelastmodified
     *
     * @param int|null $datelastmodified The last date this warehouseitem has been part of a transaction.
     *
     * @return self
     */
    public function setDatelastmodified($datelastmodified)
    {

        if (is_null($datelastmodified)) {
            throw new \InvalidArgumentException('non-nullable datelastmodified cannot be null');
        }

        $this->container['datelastmodified'] = $datelastmodified;

        return $this;
    }

    /**
     * Gets datelaststocktaking
     *
     * @return int|null
     */
    public function getDatelaststocktaking()
    {
        return $this->container['datelaststocktaking'];
    }

    /**
     * Sets datelaststocktaking
     *
     * @param int|null $datelaststocktaking The last date this warehouseitem has been part of a stocktaking transaction.
     *
     * @return self
     */
    public function setDatelaststocktaking($datelaststocktaking)
    {

        if (is_null($datelaststocktaking)) {
            throw new \InvalidArgumentException('non-nullable datelaststocktaking cannot be null');
        }

        $this->container['datelaststocktaking'] = $datelaststocktaking;

        return $this;
    }

    /**
     * Gets decimalreserved
     *
     * @return string|null
     */
    public function getDecimalreserved()
    {
        return $this->container['decimalreserved'];
    }

    /**
     * Sets decimalreserved
     *
     * @param string|null $decimalreserved Reserved stock level for this warehouseitem.
     *
     * @return self
     */
    public function setDecimalreserved($decimalreserved)
    {

        if (is_null($decimalreserved)) {
            throw new \InvalidArgumentException('non-nullable decimalreserved cannot be null');
        }

        $this->container['decimalreserved'] = $decimalreserved;

        return $this;
    }

    /**
     * Gets decimalavailable
     *
     * @return string|null
     */
    public function getDecimalavailable()
    {
        return $this->container['decimalavailable'];
    }

    /**
     * Sets decimalavailable
     *
     * @param string|null $decimalavailable Available stock level for this warehouseitem.
     *
     * @return self
     */
    public function setDecimalavailable($decimalavailable)
    {

        if (is_null($decimalavailable)) {
            throw new \InvalidArgumentException('non-nullable decimalavailable cannot be null');
        }

        $this->container['decimalavailable'] = $decimalavailable;

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


