<?php
/**
 * ShipmentitemWrite
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
 * ShipmentitemWrite Class Doc Comment
 *
 * @category Class
 * @description A shipment item is a row contained in a shipment. Can be grouped in shipmentpackage.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentitemWrite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return ShipmentitemWriteModelFields
      */
    public static function GetModelFields(): ShipmentitemWriteModelFields
    {
        return new ShipmentitemWriteModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return ShipmentitemWriteModelAttributes
      */
    public static function GetModelAttributes(): ShipmentitemWriteModelAttributes
    {
        return new ShipmentitemWriteModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'shipmentitem-write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipmentitemid' => 'int',
        'shipmentpackageid' => 'int',
        'sku' => 'string',
        'productname' => 'string',
        'unitlabel' => 'string',
        'decimalunitquantity' => 'string',
        'quantity' => 'int',
        'quantityreceived' => 'int',
        'moneypricein' => 'string',
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
        'shipmentitemid' => null,
        'shipmentpackageid' => null,
        'sku' => null,
        'productname' => null,
        'unitlabel' => null,
        'decimalunitquantity' => null,
        'quantity' => null,
        'quantityreceived' => null,
        'moneypricein' => null,
        'externalid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipmentitemid' => false,
		'shipmentpackageid' => false,
		'sku' => false,
		'productname' => false,
		'unitlabel' => false,
		'decimalunitquantity' => false,
		'quantity' => false,
		'quantityreceived' => false,
		'moneypricein' => false,
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
        'shipmentitemid' => 'shipmentitemid',
        'shipmentpackageid' => 'shipmentpackageid',
        'sku' => 'sku',
        'productname' => 'productname',
        'unitlabel' => 'unitlabel',
        'decimalunitquantity' => 'decimalunitquantity',
        'quantity' => 'quantity',
        'quantityreceived' => 'quantityreceived',
        'moneypricein' => 'moneypricein',
        'externalid' => 'externalid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipmentitemid' => 'setShipmentitemid',
        'shipmentpackageid' => 'setShipmentpackageid',
        'sku' => 'setSku',
        'productname' => 'setProductname',
        'unitlabel' => 'setUnitlabel',
        'decimalunitquantity' => 'setDecimalunitquantity',
        'quantity' => 'setQuantity',
        'quantityreceived' => 'setQuantityreceived',
        'moneypricein' => 'setMoneypricein',
        'externalid' => 'setExternalid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipmentitemid' => 'getShipmentitemid',
        'shipmentpackageid' => 'getShipmentpackageid',
        'sku' => 'getSku',
        'productname' => 'getProductname',
        'unitlabel' => 'getUnitlabel',
        'decimalunitquantity' => 'getDecimalunitquantity',
        'quantity' => 'getQuantity',
        'quantityreceived' => 'getQuantityreceived',
        'moneypricein' => 'getMoneypricein',
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
        $this->setIfExists('shipmentitemid', $data ?? [], null);
        $this->setIfExists('shipmentpackageid', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('productname', $data ?? [], null);
        $this->setIfExists('unitlabel', $data ?? [], null);
        $this->setIfExists('decimalunitquantity', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('quantityreceived', $data ?? [], null);
        $this->setIfExists('moneypricein', $data ?? [], null);
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
     * Gets shipmentitemid
     *
     * @return int|null
     */
    public function getShipmentitemid()
    {
        return $this->container['shipmentitemid'];
    }

    /**
     * Sets shipmentitemid
     *
     * @param int|null $shipmentitemid Row ID for shipment item.
     *
     * @return self
     */
    public function setShipmentitemid($shipmentitemid)
    {

        if (is_null($shipmentitemid)) {
            throw new \InvalidArgumentException('non-nullable shipmentitemid cannot be null');
        }

        $this->container['shipmentitemid'] = $shipmentitemid;

        return $this;
    }

    /**
     * Gets shipmentpackageid
     *
     * @return int|null
     */
    public function getShipmentpackageid()
    {
        return $this->container['shipmentpackageid'];
    }

    /**
     * Sets shipmentpackageid
     *
     * @param int|null $shipmentpackageid Reference to shipment package that this item belongs to.
     *
     * @return self
     */
    public function setShipmentpackageid($shipmentpackageid)
    {

        if (is_null($shipmentpackageid)) {
            throw new \InvalidArgumentException('non-nullable shipmentpackageid cannot be null');
        }

        $this->container['shipmentpackageid'] = $shipmentpackageid;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku The SKU for this shipment item.
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
     * Gets productname
     *
     * @return string|null
     */
    public function getProductname()
    {
        return $this->container['productname'];
    }

    /**
     * Sets productname
     *
     * @param string|null $productname The name of the product in this shipment item.
     *
     * @return self
     */
    public function setProductname($productname)
    {

        if (is_null($productname)) {
            throw new \InvalidArgumentException('non-nullable productname cannot be null');
        }

        $this->container['productname'] = $productname;

        return $this;
    }

    /**
     * Gets unitlabel
     *
     * @return string|null
     */
    public function getUnitlabel()
    {
        return $this->container['unitlabel'];
    }

    /**
     * Sets unitlabel
     *
     * @param string|null $unitlabel Unit (typically left blank) (e g \"kg\").
     *
     * @return self
     */
    public function setUnitlabel($unitlabel)
    {

        if (is_null($unitlabel)) {
            throw new \InvalidArgumentException('non-nullable unitlabel cannot be null');
        }

        $this->container['unitlabel'] = $unitlabel;

        return $this;
    }

    /**
     * Gets decimalunitquantity
     *
     * @return string|null
     */
    public function getDecimalunitquantity()
    {
        return $this->container['decimalunitquantity'];
    }

    /**
     * Sets decimalunitquantity
     *
     * @param string|null $decimalunitquantity Unit quantity if applicable, else null.
     *
     * @return self
     */
    public function setDecimalunitquantity($decimalunitquantity)
    {

        if (is_null($decimalunitquantity)) {
            throw new \InvalidArgumentException('non-nullable decimalunitquantity cannot be null');
        }

        $this->container['decimalunitquantity'] = $decimalunitquantity;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The number of units in this shipment item.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {

        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantityreceived
     *
     * @return int|null
     */
    public function getQuantityreceived()
    {
        return $this->container['quantityreceived'];
    }

    /**
     * Sets quantityreceived
     *
     * @param int|null $quantityreceived The number of units received for this shipment.
     *
     * @return self
     */
    public function setQuantityreceived($quantityreceived)
    {

        if (is_null($quantityreceived)) {
            throw new \InvalidArgumentException('non-nullable quantityreceived cannot be null');
        }

        $this->container['quantityreceived'] = $quantityreceived;

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
     * @param string|null $moneypricein The purchase price per unit for this shipment item or null. If entered it can be used for the warehouse stock transaction resulting from the shipment.
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
     * @param string|null $externalid External ID for shipment item (if applicable).
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


