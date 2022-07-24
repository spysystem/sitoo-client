<?php
/**
 * OrderpaymentRead
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
 * OrderpaymentRead Class Doc Comment
 *
 * @category Class
 * @description Payment for order.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderpaymentRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return OrderpaymentReadModelFields
      */
    public static function GetModelFields(): OrderpaymentReadModelFields
    {
        return new OrderpaymentReadModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return OrderpaymentReadModelAttributes
      */
    public static function GetModelAttributes(): OrderpaymentReadModelAttributes
    {
        return new OrderpaymentReadModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'orderpayment-read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'moneyamount' => 'string',
        'externalid' => 'string',
        'reftype' => 'string',
        'refid' => 'string',
        'cardissuer' => 'string',
        'additionaldata' => '\Spy\SitooClient\Model\OrderpaymentAdditionaldataRead',
        'reservedpaymentid' => 'string'
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
        'moneyamount' => null,
        'externalid' => null,
        'reftype' => null,
        'refid' => null,
        'cardissuer' => null,
        'additionaldata' => null,
        'reservedpaymentid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'moneyamount' => false,
		'externalid' => false,
		'reftype' => false,
		'refid' => false,
		'cardissuer' => false,
		'additionaldata' => false,
		'reservedpaymentid' => false
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
        'moneyamount' => 'moneyamount',
        'externalid' => 'externalid',
        'reftype' => 'reftype',
        'refid' => 'refid',
        'cardissuer' => 'cardissuer',
        'additionaldata' => 'additionaldata',
        'reservedpaymentid' => 'reservedpaymentid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'moneyamount' => 'setMoneyamount',
        'externalid' => 'setExternalid',
        'reftype' => 'setReftype',
        'refid' => 'setRefid',
        'cardissuer' => 'setCardissuer',
        'additionaldata' => 'setAdditionaldata',
        'reservedpaymentid' => 'setReservedpaymentid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'moneyamount' => 'getMoneyamount',
        'externalid' => 'getExternalid',
        'reftype' => 'getReftype',
        'refid' => 'getRefid',
        'cardissuer' => 'getCardissuer',
        'additionaldata' => 'getAdditionaldata',
        'reservedpaymentid' => 'getReservedpaymentid'
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
        $this->setIfExists('moneyamount', $data ?? [], null);
        $this->setIfExists('externalid', $data ?? [], null);
        $this->setIfExists('reftype', $data ?? [], null);
        $this->setIfExists('refid', $data ?? [], null);
        $this->setIfExists('cardissuer', $data ?? [], null);
        $this->setIfExists('additionaldata', $data ?? [], null);
        $this->setIfExists('reservedpaymentid', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['moneyamount'] === null) {
            $invalidProperties[] = "'moneyamount' can't be null";
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
     * @param string $name The name of the payment
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
     * Gets moneyamount
     *
     * @return string
     */
    public function getMoneyamount()
    {
        return $this->container['moneyamount'];
    }

    /**
     * Sets moneyamount
     *
     * @param string $moneyamount The amount of the payment
     *
     * @return self
     */
    public function setMoneyamount($moneyamount)
    {

        if (is_null($moneyamount)) {
            throw new \InvalidArgumentException('non-nullable moneyamount cannot be null');
        }

        $this->container['moneyamount'] = $moneyamount;

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
     * @param string|null $externalid External ID for the the payment (if applicable)
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
     * Gets reftype
     *
     * @return string|null
     */
    public function getReftype()
    {
        return $this->container['reftype'];
    }

    /**
     * Sets reftype
     *
     * @param string|null $reftype The reference type of the payment (if applicable)
     *
     * @return self
     */
    public function setReftype($reftype)
    {

        if (is_null($reftype)) {
            throw new \InvalidArgumentException('non-nullable reftype cannot be null');
        }

        $this->container['reftype'] = $reftype;

        return $this;
    }

    /**
     * Gets refid
     *
     * @return string|null
     */
    public function getRefid()
    {
        return $this->container['refid'];
    }

    /**
     * Sets refid
     *
     * @param string|null $refid The reference transaction id of the payment (if applicable)
     *
     * @return self
     */
    public function setRefid($refid)
    {

        if (is_null($refid)) {
            throw new \InvalidArgumentException('non-nullable refid cannot be null');
        }

        $this->container['refid'] = $refid;

        return $this;
    }

    /**
     * Gets cardissuer
     *
     * @return string|null
     */
    public function getCardissuer()
    {
        return $this->container['cardissuer'];
    }

    /**
     * Sets cardissuer
     *
     * @param string|null $cardissuer The card issuer (if applicable)
     *
     * @return self
     */
    public function setCardissuer($cardissuer)
    {

        if (is_null($cardissuer)) {
            throw new \InvalidArgumentException('non-nullable cardissuer cannot be null');
        }

        $this->container['cardissuer'] = $cardissuer;

        return $this;
    }

    /**
     * Gets additionaldata
     *
     * @return \Spy\SitooClient\Model\OrderpaymentAdditionaldataRead|null
     */
    public function getAdditionaldata()
    {
        return $this->container['additionaldata'];
    }

    /**
     * Sets additionaldata
     *
     * @param \Spy\SitooClient\Model\OrderpaymentAdditionaldataRead|null $additionaldata additionaldata
     *
     * @return self
     */
    public function setAdditionaldata($additionaldata)
    {

        if (is_null($additionaldata)) {
            throw new \InvalidArgumentException('non-nullable additionaldata cannot be null');
        }

        $this->container['additionaldata'] = $additionaldata;

        return $this;
    }

    /**
     * Gets reservedpaymentid
     *
     * @return string|null
     */
    public function getReservedpaymentid()
    {
        return $this->container['reservedpaymentid'];
    }

    /**
     * Sets reservedpaymentid
     *
     * @param string|null $reservedpaymentid Reference to the reserved payment for this payment (if applicable)
     *
     * @return self
     */
    public function setReservedpaymentid($reservedpaymentid)
    {

        if (is_null($reservedpaymentid)) {
            throw new \InvalidArgumentException('non-nullable reservedpaymentid cannot be null');
        }

        $this->container['reservedpaymentid'] = $reservedpaymentid;

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


