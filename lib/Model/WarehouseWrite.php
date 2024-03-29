<?php
/**
 * WarehouseWrite
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
 * WarehouseWrite Class Doc Comment
 *
 * @category Class
 * @description A location for stockenabled goods.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WarehouseWrite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return WarehouseWriteModelFields
      */
    public static function GetModelFields(): WarehouseWriteModelFields
    {
        return new WarehouseWriteModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return WarehouseWriteModelAttributes
      */
    public static function GetModelAttributes(): WarehouseWriteModelAttributes
    {
        return new WarehouseWriteModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'warehouse-write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'warehousetype' => 'int',
        'usetype' => 'int',
        'storeid' => 'int',
        'sellable' => 'bool',
        'currencycode' => 'string',
        'name' => 'string',
        'address' => 'string',
        'address2' => 'string',
        'zip' => 'string',
        'city' => 'string',
        'state' => 'string',
        'countryid' => 'string',
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
        'warehousetype' => null,
        'usetype' => null,
        'storeid' => null,
        'sellable' => null,
        'currencycode' => null,
        'name' => null,
        'address' => null,
        'address2' => null,
        'zip' => null,
        'city' => null,
        'state' => null,
        'countryid' => null,
        'externalid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'warehousetype' => false,
		'usetype' => false,
		'storeid' => false,
		'sellable' => false,
		'currencycode' => false,
		'name' => false,
		'address' => false,
		'address2' => false,
		'zip' => false,
		'city' => false,
		'state' => false,
		'countryid' => false,
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
        'warehousetype' => 'warehousetype',
        'usetype' => 'usetype',
        'storeid' => 'storeid',
        'sellable' => 'sellable',
        'currencycode' => 'currencycode',
        'name' => 'name',
        'address' => 'address',
        'address2' => 'address2',
        'zip' => 'zip',
        'city' => 'city',
        'state' => 'state',
        'countryid' => 'countryid',
        'externalid' => 'externalid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'warehousetype' => 'setWarehousetype',
        'usetype' => 'setUsetype',
        'storeid' => 'setStoreid',
        'sellable' => 'setSellable',
        'currencycode' => 'setCurrencycode',
        'name' => 'setName',
        'address' => 'setAddress',
        'address2' => 'setAddress2',
        'zip' => 'setZip',
        'city' => 'setCity',
        'state' => 'setState',
        'countryid' => 'setCountryid',
        'externalid' => 'setExternalid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'warehousetype' => 'getWarehousetype',
        'usetype' => 'getUsetype',
        'storeid' => 'getStoreid',
        'sellable' => 'getSellable',
        'currencycode' => 'getCurrencycode',
        'name' => 'getName',
        'address' => 'getAddress',
        'address2' => 'getAddress2',
        'zip' => 'getZip',
        'city' => 'getCity',
        'state' => 'getState',
        'countryid' => 'getCountryid',
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
        $this->setIfExists('warehousetype', $data ?? [], null);
        $this->setIfExists('usetype', $data ?? [], null);
        $this->setIfExists('storeid', $data ?? [], null);
        $this->setIfExists('sellable', $data ?? [], null);
        $this->setIfExists('currencycode', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('address2', $data ?? [], null);
        $this->setIfExists('zip', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('countryid', $data ?? [], null);
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

        if ($this->container['usetype'] === null) {
            $invalidProperties[] = "'usetype' can't be null";
        }
        if ($this->container['currencycode'] === null) {
            $invalidProperties[] = "'currencycode' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets warehousetype
     *
     * @return int|null
     */
    public function getWarehousetype()
    {
        return $this->container['warehousetype'];
    }

    /**
     * Sets warehousetype
     *
     * @param int|null $warehousetype Type of warehouse.
     *
     * @return self
     */
    public function setWarehousetype($warehousetype)
    {
        if (is_null($warehousetype)) {
            throw new \InvalidArgumentException('non-nullable warehousetype cannot be null');
        }
        $this->container['warehousetype'] = $warehousetype;

        return $this;
    }

    /**
     * Gets usetype
     *
     * @return int
     */
    public function getUsetype()
    {
        return $this->container['usetype'];
    }

    /**
     * Sets usetype
     *
     * @param int $usetype Use type for warehouse.
     *
     * @return self
     */
    public function setUsetype($usetype)
    {
        if (is_null($usetype)) {
            throw new \InvalidArgumentException('non-nullable usetype cannot be null');
        }
        $this->container['usetype'] = $usetype;

        return $this;
    }

    /**
     * Gets storeid
     *
     * @return int|null
     */
    public function getStoreid()
    {
        return $this->container['storeid'];
    }

    /**
     * Sets storeid
     *
     * @param int|null $storeid The ID of the store that the warehouse belongs to or null if not connected to a store.
     *
     * @return self
     */
    public function setStoreid($storeid)
    {
        if (is_null($storeid)) {
            throw new \InvalidArgumentException('non-nullable storeid cannot be null');
        }
        $this->container['storeid'] = $storeid;

        return $this;
    }

    /**
     * Gets sellable
     *
     * @return bool|null
     */
    public function getSellable()
    {
        return $this->container['sellable'];
    }

    /**
     * Sets sellable
     *
     * @param bool|null $sellable Determines if the warehouse contains sellable stock.
     *
     * @return self
     */
    public function setSellable($sellable)
    {
        if (is_null($sellable)) {
            throw new \InvalidArgumentException('non-nullable sellable cannot be null');
        }
        $this->container['sellable'] = $sellable;

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
     * @param string $currencycode The currency code used for the warehouse (3-letter ISO 4217).
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
     * @param string $name The name of the warehouse.
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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address Address for the warehouse.
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string|null $address2 Address 2 for the warehouse.
     *
     * @return self
     */
    public function setAddress2($address2)
    {
        if (is_null($address2)) {
            throw new \InvalidArgumentException('non-nullable address2 cannot be null');
        }
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string|null
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string|null $zip Zip for the warehouse.
     *
     * @return self
     */
    public function setZip($zip)
    {
        if (is_null($zip)) {
            throw new \InvalidArgumentException('non-nullable zip cannot be null');
        }
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City for the warehouse.
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state State for the warehouse.
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets countryid
     *
     * @return string|null
     */
    public function getCountryid()
    {
        return $this->container['countryid'];
    }

    /**
     * Sets countryid
     *
     * @param string|null $countryid Country ID for the warehouse (2-letter ISO 3166).
     *
     * @return self
     */
    public function setCountryid($countryid)
    {
        if (is_null($countryid)) {
            throw new \InvalidArgumentException('non-nullable countryid cannot be null');
        }
        $this->container['countryid'] = $countryid;

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
     * @param string|null $externalid External ID for the warehouse.
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


