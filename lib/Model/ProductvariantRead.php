<?php
/**
 * ProductvariantRead
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
 * ProductvariantRead Class Doc Comment
 *
 * @category Class
 * @description Product variant data.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductvariantRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return ProductvariantReadModelFields
      */
    public static function GetModelFields(): ProductvariantReadModelFields
    {
        return new ProductvariantReadModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return ProductvariantReadModelAttributes
      */
    public static function GetModelAttributes(): ProductvariantReadModelAttributes
    {
        return new ProductvariantReadModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'productvariant-read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'productid' => 'int',
        'activepos' => 'bool',
        'title' => 'string',
        'sku' => 'string',
        'moneyprice' => 'string',
        'moneypriceorg' => 'string',
        'moneypricein' => 'string',
        'barcode' => 'string',
        'barcodealiases' => 'string[]',
        'attributes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'productid' => null,
        'activepos' => null,
        'title' => null,
        'sku' => null,
        'moneyprice' => null,
        'moneypriceorg' => null,
        'moneypricein' => null,
        'barcode' => null,
        'barcodealiases' => null,
        'attributes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'productid' => false,
		'activepos' => false,
		'title' => false,
		'sku' => false,
		'moneyprice' => false,
		'moneypriceorg' => false,
		'moneypricein' => false,
		'barcode' => false,
		'barcodealiases' => false,
		'attributes' => false
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
        'productid' => 'productid',
        'activepos' => 'activepos',
        'title' => 'title',
        'sku' => 'sku',
        'moneyprice' => 'moneyprice',
        'moneypriceorg' => 'moneypriceorg',
        'moneypricein' => 'moneypricein',
        'barcode' => 'barcode',
        'barcodealiases' => 'barcodealiases',
        'attributes' => 'attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'productid' => 'setProductid',
        'activepos' => 'setActivepos',
        'title' => 'setTitle',
        'sku' => 'setSku',
        'moneyprice' => 'setMoneyprice',
        'moneypriceorg' => 'setMoneypriceorg',
        'moneypricein' => 'setMoneypricein',
        'barcode' => 'setBarcode',
        'barcodealiases' => 'setBarcodealiases',
        'attributes' => 'setAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'productid' => 'getProductid',
        'activepos' => 'getActivepos',
        'title' => 'getTitle',
        'sku' => 'getSku',
        'moneyprice' => 'getMoneyprice',
        'moneypriceorg' => 'getMoneypriceorg',
        'moneypricein' => 'getMoneypricein',
        'barcode' => 'getBarcode',
        'barcodealiases' => 'getBarcodealiases',
        'attributes' => 'getAttributes'
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
        $this->setIfExists('productid', $data ?? [], null);
        $this->setIfExists('activepos', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('moneyprice', $data ?? [], null);
        $this->setIfExists('moneypriceorg', $data ?? [], null);
        $this->setIfExists('moneypricein', $data ?? [], null);
        $this->setIfExists('barcode', $data ?? [], null);
        $this->setIfExists('barcodealiases', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
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

        if ($this->container['productid'] === null) {
            $invalidProperties[] = "'productid' can't be null";
        }
        if ($this->container['activepos'] === null) {
            $invalidProperties[] = "'activepos' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['moneyprice'] === null) {
            $invalidProperties[] = "'moneyprice' can't be null";
        }
        if ($this->container['moneypriceorg'] === null) {
            $invalidProperties[] = "'moneypriceorg' can't be null";
        }
        if ($this->container['moneypricein'] === null) {
            $invalidProperties[] = "'moneypricein' can't be null";
        }
        if ($this->container['barcode'] === null) {
            $invalidProperties[] = "'barcode' can't be null";
        }
        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
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
     * Gets productid
     *
     * @return int
     */
    public function getProductid()
    {
        return $this->container['productid'];
    }

    /**
     * Sets productid
     *
     * @param int $productid The unique internal productid. It is unique over all sites in the system.
     *
     * @return self
     */
    public function setProductid($productid)
    {
        if (is_null($productid)) {
            throw new \InvalidArgumentException('non-nullable productid cannot be null');
        }
        $this->container['productid'] = $productid;

        return $this;
    }

    /**
     * Gets activepos
     *
     * @return bool
     */
    public function getActivepos()
    {
        return $this->container['activepos'];
    }

    /**
     * Sets activepos
     *
     * @param bool $activepos If false, the product is not shown in in the POS.
     *
     * @return self
     */
    public function setActivepos($activepos)
    {
        if (is_null($activepos)) {
            throw new \InvalidArgumentException('non-nullable activepos cannot be null');
        }
        $this->container['activepos'] = $activepos;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title of product (ie. Product Name).
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

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
     * @param string $sku Stock Keeping Unit (ie. the article number). If entered, it needs to be unique for the site.
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
     * Gets moneyprice
     *
     * @return string
     */
    public function getMoneyprice()
    {
        return $this->container['moneyprice'];
    }

    /**
     * Sets moneyprice
     *
     * @param string $moneyprice Price of the product. If this field is used for setting price on a product, the price will be set for the \"Default\" price list. It is recommended to use the Price Lists endpoints for setting product prices instead.
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
     * Gets moneypriceorg
     *
     * @return string
     */
    public function getMoneypriceorg()
    {
        return $this->container['moneypriceorg'];
    }

    /**
     * Sets moneypriceorg
     *
     * @param string $moneypriceorg Suggested Retail Price (SRP)
     *
     * @return self
     */
    public function setMoneypriceorg($moneypriceorg)
    {
        if (is_null($moneypriceorg)) {
            throw new \InvalidArgumentException('non-nullable moneypriceorg cannot be null');
        }
        $this->container['moneypriceorg'] = $moneypriceorg;

        return $this;
    }

    /**
     * Gets moneypricein
     *
     * @return string
     */
    public function getMoneypricein()
    {
        return $this->container['moneypricein'];
    }

    /**
     * Sets moneypricein
     *
     * @param string $moneypricein Purchase price which can be used to help calculate profit on products. (Always excluding VAT)
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
     * Gets barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string $barcode Barcode for the product.
     *
     * @return self
     */
    public function setBarcode($barcode)
    {
        if (is_null($barcode)) {
            throw new \InvalidArgumentException('non-nullable barcode cannot be null');
        }
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets barcodealiases
     *
     * @return string[]|null
     */
    public function getBarcodealiases()
    {
        return $this->container['barcodealiases'];
    }

    /**
     * Sets barcodealiases
     *
     * @param string[]|null $barcodealiases Barcode aliases for the product. Used if multiple barcodes exist for product.
     *
     * @return self
     */
    public function setBarcodealiases($barcodealiases)
    {
        if (is_null($barcodealiases)) {
            throw new \InvalidArgumentException('non-nullable barcodealiases cannot be null');
        }
        $this->container['barcodealiases'] = $barcodealiases;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return string[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param string[] $attributes Array of attributes (string). It corresponds to the groups array in productvariants. For each group in productvariants this array must have a value at the same index and with a value from the corresponding options array.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        if (is_null($attributes)) {
            throw new \InvalidArgumentException('non-nullable attributes cannot be null');
        }
        $this->container['attributes'] = $attributes;

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


