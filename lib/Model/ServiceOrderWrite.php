<?php
/**
 * ServiceOrderWrite
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
 * ServiceOrderWrite Class Doc Comment
 *
 * @category Class
 * @description The Service Order
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ServiceOrderWrite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return ServiceOrderWriteModelFields
      */
    public static function GetModelFields(): ServiceOrderWriteModelFields
    {
        return new ServiceOrderWriteModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return ServiceOrderWriteModelAttributes
      */
    public static function GetModelAttributes(): ServiceOrderWriteModelAttributes
    {
        return new ServiceOrderWriteModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ServiceOrder-write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'revision' => 'int',
        'state' => 'string',
        'store' => '\Spy\SitooClient\Model\ServiceOrderStoreWrite',
        'owner' => '\Spy\SitooClient\Model\ServiceOrderOwnerWrite',
        'customer' => '\Spy\SitooClient\Model\ServiceOrderCustomerWrite',
        'currency' => 'string',
        'note' => 'string',
        'product' => '\Spy\SitooClient\Model\ServiceOrderProductWrite',
        'author' => '\Spy\SitooClient\Model\ServiceOrderAuthorWrite'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'revision' => null,
        'state' => null,
        'store' => null,
        'owner' => null,
        'customer' => null,
        'currency' => null,
        'note' => null,
        'product' => null,
        'author' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'revision' => false,
		'state' => false,
		'store' => false,
		'owner' => false,
		'customer' => false,
		'currency' => false,
		'note' => false,
		'product' => false,
		'author' => false
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
        'revision' => 'revision',
        'state' => 'state',
        'store' => 'store',
        'owner' => 'owner',
        'customer' => 'customer',
        'currency' => 'currency',
        'note' => 'note',
        'product' => 'product',
        'author' => 'author'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'revision' => 'setRevision',
        'state' => 'setState',
        'store' => 'setStore',
        'owner' => 'setOwner',
        'customer' => 'setCustomer',
        'currency' => 'setCurrency',
        'note' => 'setNote',
        'product' => 'setProduct',
        'author' => 'setAuthor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'revision' => 'getRevision',
        'state' => 'getState',
        'store' => 'getStore',
        'owner' => 'getOwner',
        'customer' => 'getCustomer',
        'currency' => 'getCurrency',
        'note' => 'getNote',
        'product' => 'getProduct',
        'author' => 'getAuthor'
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
        $this->setIfExists('revision', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('store', $data ?? [], null);
        $this->setIfExists('owner', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('author', $data ?? [], null);
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

        if ($this->container['store'] === null) {
            $invalidProperties[] = "'store' can't be null";
        }
        if ($this->container['owner'] === null) {
            $invalidProperties[] = "'owner' can't be null";
        }
        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['product'] === null) {
            $invalidProperties[] = "'product' can't be null";
        }
        if ($this->container['author'] === null) {
            $invalidProperties[] = "'author' can't be null";
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
     * Gets revision
     *
     * @return int|null
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param int|null $revision Revision number of the service order. Must be the last revision for the service order on PUT, used to ensure data consistency. On POST, it must not be present.
     *
     * @return self
     */
    public function setRevision($revision)
    {
        if (is_null($revision)) {
            throw new \InvalidArgumentException('non-nullable revision cannot be null');
        }
        $this->container['revision'] = $revision;

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
     * @param string|null $state state
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
     * Gets store
     *
     * @return \Spy\SitooClient\Model\ServiceOrderStoreWrite
     */
    public function getStore()
    {
        return $this->container['store'];
    }

    /**
     * Sets store
     *
     * @param \Spy\SitooClient\Model\ServiceOrderStoreWrite $store store
     *
     * @return self
     */
    public function setStore($store)
    {
        if (is_null($store)) {
            throw new \InvalidArgumentException('non-nullable store cannot be null');
        }
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \Spy\SitooClient\Model\ServiceOrderOwnerWrite
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Spy\SitooClient\Model\ServiceOrderOwnerWrite $owner owner
     *
     * @return self
     */
    public function setOwner($owner)
    {
        if (is_null($owner)) {
            throw new \InvalidArgumentException('non-nullable owner cannot be null');
        }
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Spy\SitooClient\Model\ServiceOrderCustomerWrite
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Spy\SitooClient\Model\ServiceOrderCustomerWrite $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Currency for the service order (ISO 4217, alpha-3 uppercased)
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note The note set on the service order
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            throw new \InvalidArgumentException('non-nullable note cannot be null');
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Spy\SitooClient\Model\ServiceOrderProductWrite
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Spy\SitooClient\Model\ServiceOrderProductWrite $product product
     *
     * @return self
     */
    public function setProduct($product)
    {
        if (is_null($product)) {
            throw new \InvalidArgumentException('non-nullable product cannot be null');
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets author
     *
     * @return \Spy\SitooClient\Model\ServiceOrderAuthorWrite
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param \Spy\SitooClient\Model\ServiceOrderAuthorWrite $author author
     *
     * @return self
     */
    public function setAuthor($author)
    {
        if (is_null($author)) {
            throw new \InvalidArgumentException('non-nullable author cannot be null');
        }
        $this->container['author'] = $author;

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


