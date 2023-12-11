<?php
/**
 * ProductWrite
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
 * ProductWrite Class Doc Comment
 *
 * @category Class
 * @description The main product object. Note that stock values are retrieved using the warehouse endpoints.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductWrite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return ProductWriteModelFields
      */
    public static function GetModelFields(): ProductWriteModelFields
    {
        return new ProductWriteModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return ProductWriteModelAttributes
      */
    public static function GetModelAttributes(): ProductWriteModelAttributes
    {
        return new ProductWriteModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'product-write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'productid' => 'int',
        'sku' => 'string',
        'skumanufacturer' => 'string',
        'descriptionshort' => 'string',
        'description' => 'string',
        'moneyprice' => 'string',
        'moneypriceorg' => 'string',
        'moneypricein' => 'string',
        'unitlabel' => 'string',
        'allowdecimals' => 'bool',
        'deliveryinfo' => 'string',
        'active' => 'bool',
        'activepos' => 'bool',
        'vatid' => 'int',
        'defaultcategoryid' => 'int',
        'categories' => 'string[]',
        'manufacturerid' => 'int',
        'manufacturerurl' => 'string',
        'custom1' => 'string',
        'custom2' => 'string',
        'custom3' => 'string',
        'custom4' => 'string',
        'custom5' => 'string',
        'stockcountenable' => 'bool',
        'barcode' => 'string',
        'barcodealiases' => 'string[]',
        'similar' => 'string[]',
        'related' => 'string[]',
        'accessories' => 'string[]',
        'customattributes' => 'object',
        'title' => 'string'
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
        'sku' => null,
        'skumanufacturer' => null,
        'descriptionshort' => null,
        'description' => null,
        'moneyprice' => null,
        'moneypriceorg' => null,
        'moneypricein' => null,
        'unitlabel' => null,
        'allowdecimals' => null,
        'deliveryinfo' => null,
        'active' => null,
        'activepos' => null,
        'vatid' => null,
        'defaultcategoryid' => null,
        'categories' => null,
        'manufacturerid' => null,
        'manufacturerurl' => null,
        'custom1' => null,
        'custom2' => null,
        'custom3' => null,
        'custom4' => null,
        'custom5' => null,
        'stockcountenable' => null,
        'barcode' => null,
        'barcodealiases' => null,
        'similar' => null,
        'related' => null,
        'accessories' => null,
        'customattributes' => null,
        'title' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'productid' => false,
		'sku' => false,
		'skumanufacturer' => false,
		'descriptionshort' => false,
		'description' => false,
		'moneyprice' => false,
		'moneypriceorg' => false,
		'moneypricein' => false,
		'unitlabel' => false,
		'allowdecimals' => false,
		'deliveryinfo' => false,
		'active' => false,
		'activepos' => false,
		'vatid' => false,
		'defaultcategoryid' => false,
		'categories' => false,
		'manufacturerid' => false,
		'manufacturerurl' => false,
		'custom1' => false,
		'custom2' => false,
		'custom3' => false,
		'custom4' => false,
		'custom5' => false,
		'stockcountenable' => false,
		'barcode' => false,
		'barcodealiases' => false,
		'similar' => false,
		'related' => false,
		'accessories' => false,
		'customattributes' => false,
		'title' => false
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
        'sku' => 'sku',
        'skumanufacturer' => 'skumanufacturer',
        'descriptionshort' => 'descriptionshort',
        'description' => 'description',
        'moneyprice' => 'moneyprice',
        'moneypriceorg' => 'moneypriceorg',
        'moneypricein' => 'moneypricein',
        'unitlabel' => 'unitlabel',
        'allowdecimals' => 'allowdecimals',
        'deliveryinfo' => 'deliveryinfo',
        'active' => 'active',
        'activepos' => 'activepos',
        'vatid' => 'vatid',
        'defaultcategoryid' => 'defaultcategoryid',
        'categories' => 'categories',
        'manufacturerid' => 'manufacturerid',
        'manufacturerurl' => 'manufacturerurl',
        'custom1' => 'custom1',
        'custom2' => 'custom2',
        'custom3' => 'custom3',
        'custom4' => 'custom4',
        'custom5' => 'custom5',
        'stockcountenable' => 'stockcountenable',
        'barcode' => 'barcode',
        'barcodealiases' => 'barcodealiases',
        'similar' => 'similar',
        'related' => 'related',
        'accessories' => 'accessories',
        'customattributes' => 'customattributes',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'productid' => 'setProductid',
        'sku' => 'setSku',
        'skumanufacturer' => 'setSkumanufacturer',
        'descriptionshort' => 'setDescriptionshort',
        'description' => 'setDescription',
        'moneyprice' => 'setMoneyprice',
        'moneypriceorg' => 'setMoneypriceorg',
        'moneypricein' => 'setMoneypricein',
        'unitlabel' => 'setUnitlabel',
        'allowdecimals' => 'setAllowdecimals',
        'deliveryinfo' => 'setDeliveryinfo',
        'active' => 'setActive',
        'activepos' => 'setActivepos',
        'vatid' => 'setVatid',
        'defaultcategoryid' => 'setDefaultcategoryid',
        'categories' => 'setCategories',
        'manufacturerid' => 'setManufacturerid',
        'manufacturerurl' => 'setManufacturerurl',
        'custom1' => 'setCustom1',
        'custom2' => 'setCustom2',
        'custom3' => 'setCustom3',
        'custom4' => 'setCustom4',
        'custom5' => 'setCustom5',
        'stockcountenable' => 'setStockcountenable',
        'barcode' => 'setBarcode',
        'barcodealiases' => 'setBarcodealiases',
        'similar' => 'setSimilar',
        'related' => 'setRelated',
        'accessories' => 'setAccessories',
        'customattributes' => 'setCustomattributes',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'productid' => 'getProductid',
        'sku' => 'getSku',
        'skumanufacturer' => 'getSkumanufacturer',
        'descriptionshort' => 'getDescriptionshort',
        'description' => 'getDescription',
        'moneyprice' => 'getMoneyprice',
        'moneypriceorg' => 'getMoneypriceorg',
        'moneypricein' => 'getMoneypricein',
        'unitlabel' => 'getUnitlabel',
        'allowdecimals' => 'getAllowdecimals',
        'deliveryinfo' => 'getDeliveryinfo',
        'active' => 'getActive',
        'activepos' => 'getActivepos',
        'vatid' => 'getVatid',
        'defaultcategoryid' => 'getDefaultcategoryid',
        'categories' => 'getCategories',
        'manufacturerid' => 'getManufacturerid',
        'manufacturerurl' => 'getManufacturerurl',
        'custom1' => 'getCustom1',
        'custom2' => 'getCustom2',
        'custom3' => 'getCustom3',
        'custom4' => 'getCustom4',
        'custom5' => 'getCustom5',
        'stockcountenable' => 'getStockcountenable',
        'barcode' => 'getBarcode',
        'barcodealiases' => 'getBarcodealiases',
        'similar' => 'getSimilar',
        'related' => 'getRelated',
        'accessories' => 'getAccessories',
        'customattributes' => 'getCustomattributes',
        'title' => 'getTitle'
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
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('skumanufacturer', $data ?? [], null);
        $this->setIfExists('descriptionshort', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('moneyprice', $data ?? [], null);
        $this->setIfExists('moneypriceorg', $data ?? [], null);
        $this->setIfExists('moneypricein', $data ?? [], null);
        $this->setIfExists('unitlabel', $data ?? [], null);
        $this->setIfExists('allowdecimals', $data ?? [], null);
        $this->setIfExists('deliveryinfo', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('activepos', $data ?? [], null);
        $this->setIfExists('vatid', $data ?? [], null);
        $this->setIfExists('defaultcategoryid', $data ?? [], null);
        $this->setIfExists('categories', $data ?? [], null);
        $this->setIfExists('manufacturerid', $data ?? [], null);
        $this->setIfExists('manufacturerurl', $data ?? [], null);
        $this->setIfExists('custom1', $data ?? [], null);
        $this->setIfExists('custom2', $data ?? [], null);
        $this->setIfExists('custom3', $data ?? [], null);
        $this->setIfExists('custom4', $data ?? [], null);
        $this->setIfExists('custom5', $data ?? [], null);
        $this->setIfExists('stockcountenable', $data ?? [], null);
        $this->setIfExists('barcode', $data ?? [], null);
        $this->setIfExists('barcodealiases', $data ?? [], null);
        $this->setIfExists('similar', $data ?? [], null);
        $this->setIfExists('related', $data ?? [], null);
        $this->setIfExists('accessories', $data ?? [], null);
        $this->setIfExists('customattributes', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
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
     * Gets productid
     *
     * @return int|null
     */
    public function getProductid()
    {
        return $this->container['productid'];
    }

    /**
     * Sets productid
     *
     * @param int|null $productid productid
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
     * @param string $sku Stock Keeping Unit (ie. the article number). Should only contain [A-Za-z0-9_+-/].
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
     * Gets skumanufacturer
     *
     * @return string|null
     */
    public function getSkumanufacturer()
    {
        return $this->container['skumanufacturer'];
    }

    /**
     * Sets skumanufacturer
     *
     * @param string|null $skumanufacturer The Stock Keeping Unit (SKU) for the manufacturer.
     *
     * @return self
     */
    public function setSkumanufacturer($skumanufacturer)
    {
        if (is_null($skumanufacturer)) {
            throw new \InvalidArgumentException('non-nullable skumanufacturer cannot be null');
        }
        $this->container['skumanufacturer'] = $skumanufacturer;

        return $this;
    }

    /**
     * Gets descriptionshort
     *
     * @return string|null
     */
    public function getDescriptionshort()
    {
        return $this->container['descriptionshort'];
    }

    /**
     * Sets descriptionshort
     *
     * @param string|null $descriptionshort A short description, typically used in product lists etc.
     *
     * @return self
     */
    public function setDescriptionshort($descriptionshort)
    {
        if (is_null($descriptionshort)) {
            throw new \InvalidArgumentException('non-nullable descriptionshort cannot be null');
        }
        $this->container['descriptionshort'] = $descriptionshort;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The main description of the product.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

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
     * @param string|null $moneyprice Price of the product. If this field is used for setting price on a product, the price will be set for the \"Default\" price list. It is recommended to use the Price Lists endpoints for setting product prices instead.
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
     * @return string|null
     */
    public function getMoneypriceorg()
    {
        return $this->container['moneypriceorg'];
    }

    /**
     * Sets moneypriceorg
     *
     * @param string|null $moneypriceorg Suggested Retail Price (SRP)
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
     * @return string|null
     */
    public function getMoneypricein()
    {
        return $this->container['moneypricein'];
    }

    /**
     * Sets moneypricein
     *
     * @param string|null $moneypricein Purchase price which can be used to help calculate profit on products. (Always excluding VAT)
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
     * @param string|null $unitlabel Unit label (eg. \"pcs\", \"kg\"). Default is an empty string.
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
     * Gets allowdecimals
     *
     * @return bool|null
     */
    public function getAllowdecimals()
    {
        return $this->container['allowdecimals'];
    }

    /**
     * Sets allowdecimals
     *
     * @param bool|null $allowdecimals Set this if the product can be purchased with fractional quantity.
     *
     * @return self
     */
    public function setAllowdecimals($allowdecimals)
    {
        if (is_null($allowdecimals)) {
            throw new \InvalidArgumentException('non-nullable allowdecimals cannot be null');
        }
        $this->container['allowdecimals'] = $allowdecimals;

        return $this;
    }

    /**
     * Gets deliveryinfo
     *
     * @return string|null
     */
    public function getDeliveryinfo()
    {
        return $this->container['deliveryinfo'];
    }

    /**
     * Sets deliveryinfo
     *
     * @param string|null $deliveryinfo Delivery information that can be provided to the customer after the purchase.
     *
     * @return self
     */
    public function setDeliveryinfo($deliveryinfo)
    {
        if (is_null($deliveryinfo)) {
            throw new \InvalidArgumentException('non-nullable deliveryinfo cannot be null');
        }
        $this->container['deliveryinfo'] = $deliveryinfo;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     * @deprecated
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active If false, the product is not shown in in the Webshop.
     *
     * @return self
     * @deprecated
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets activepos
     *
     * @return bool|null
     */
    public function getActivepos()
    {
        return $this->container['activepos'];
    }

    /**
     * Sets activepos
     *
     * @param bool|null $activepos If false, the product is not shown in in the POS.
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
     * @param int|null $vatid The reference to which Product Group the product belongs to. The Product Group also determines VAT. See productgroup for more information.
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
     * Gets defaultcategoryid
     *
     * @return int|null
     */
    public function getDefaultcategoryid()
    {
        return $this->container['defaultcategoryid'];
    }

    /**
     * Sets defaultcategoryid
     *
     * @param int|null $defaultcategoryid Default category for the product. If set to a category then the value will also be added to categories. If set to null, then the previous value will be removed from categories.
     *
     * @return self
     */
    public function setDefaultcategoryid($defaultcategoryid)
    {
        if (is_null($defaultcategoryid)) {
            throw new \InvalidArgumentException('non-nullable defaultcategoryid cannot be null');
        }
        $this->container['defaultcategoryid'] = $defaultcategoryid;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return string[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[]|null $categories Array of category ID:s that the product belongs to.
     *
     * @return self
     */
    public function setCategories($categories)
    {
        if (is_null($categories)) {
            throw new \InvalidArgumentException('non-nullable categories cannot be null');
        }
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets manufacturerid
     *
     * @return int|null
     */
    public function getManufacturerid()
    {
        return $this->container['manufacturerid'];
    }

    /**
     * Sets manufacturerid
     *
     * @param int|null $manufacturerid The reference to the manufacturer.
     *
     * @return self
     */
    public function setManufacturerid($manufacturerid)
    {
        if (is_null($manufacturerid)) {
            throw new \InvalidArgumentException('non-nullable manufacturerid cannot be null');
        }
        $this->container['manufacturerid'] = $manufacturerid;

        return $this;
    }

    /**
     * Gets manufacturerurl
     *
     * @return string|null
     */
    public function getManufacturerurl()
    {
        return $this->container['manufacturerurl'];
    }

    /**
     * Sets manufacturerurl
     *
     * @param string|null $manufacturerurl Manufacturer's url for the product.
     *
     * @return self
     */
    public function setManufacturerurl($manufacturerurl)
    {
        if (is_null($manufacturerurl)) {
            throw new \InvalidArgumentException('non-nullable manufacturerurl cannot be null');
        }
        $this->container['manufacturerurl'] = $manufacturerurl;

        return $this;
    }

    /**
     * Gets custom1
     *
     * @return string|null
     */
    public function getCustom1()
    {
        return $this->container['custom1'];
    }

    /**
     * Sets custom1
     *
     * @param string|null $custom1 Custom field 1.
     *
     * @return self
     */
    public function setCustom1($custom1)
    {
        if (is_null($custom1)) {
            throw new \InvalidArgumentException('non-nullable custom1 cannot be null');
        }
        $this->container['custom1'] = $custom1;

        return $this;
    }

    /**
     * Gets custom2
     *
     * @return string|null
     */
    public function getCustom2()
    {
        return $this->container['custom2'];
    }

    /**
     * Sets custom2
     *
     * @param string|null $custom2 Custom field 2.
     *
     * @return self
     */
    public function setCustom2($custom2)
    {
        if (is_null($custom2)) {
            throw new \InvalidArgumentException('non-nullable custom2 cannot be null');
        }
        $this->container['custom2'] = $custom2;

        return $this;
    }

    /**
     * Gets custom3
     *
     * @return string|null
     */
    public function getCustom3()
    {
        return $this->container['custom3'];
    }

    /**
     * Sets custom3
     *
     * @param string|null $custom3 Custom field 3.
     *
     * @return self
     */
    public function setCustom3($custom3)
    {
        if (is_null($custom3)) {
            throw new \InvalidArgumentException('non-nullable custom3 cannot be null');
        }
        $this->container['custom3'] = $custom3;

        return $this;
    }

    /**
     * Gets custom4
     *
     * @return string|null
     */
    public function getCustom4()
    {
        return $this->container['custom4'];
    }

    /**
     * Sets custom4
     *
     * @param string|null $custom4 Custom field 4.
     *
     * @return self
     */
    public function setCustom4($custom4)
    {
        if (is_null($custom4)) {
            throw new \InvalidArgumentException('non-nullable custom4 cannot be null');
        }
        $this->container['custom4'] = $custom4;

        return $this;
    }

    /**
     * Gets custom5
     *
     * @return string|null
     */
    public function getCustom5()
    {
        return $this->container['custom5'];
    }

    /**
     * Sets custom5
     *
     * @param string|null $custom5 Custom field 5.
     *
     * @return self
     */
    public function setCustom5($custom5)
    {
        if (is_null($custom5)) {
            throw new \InvalidArgumentException('non-nullable custom5 cannot be null');
        }
        $this->container['custom5'] = $custom5;

        return $this;
    }

    /**
     * Gets stockcountenable
     *
     * @return bool|null
     */
    public function getStockcountenable()
    {
        return $this->container['stockcountenable'];
    }

    /**
     * Sets stockcountenable
     *
     * @param bool|null $stockcountenable Turns on/off stock handling for the product.
     *
     * @return self
     */
    public function setStockcountenable($stockcountenable)
    {
        if (is_null($stockcountenable)) {
            throw new \InvalidArgumentException('non-nullable stockcountenable cannot be null');
        }
        $this->container['stockcountenable'] = $stockcountenable;

        return $this;
    }

    /**
     * Gets barcode
     *
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string|null $barcode Barcode for the product.
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
     * Gets similar
     *
     * @return string[]|null
     */
    public function getSimilar()
    {
        return $this->container['similar'];
    }

    /**
     * Sets similar
     *
     * @param string[]|null $similar Array of product ID:s for products that are similar to this one. (Only applicable to regular products and main product variants)
     *
     * @return self
     */
    public function setSimilar($similar)
    {
        if (is_null($similar)) {
            throw new \InvalidArgumentException('non-nullable similar cannot be null');
        }
        $this->container['similar'] = $similar;

        return $this;
    }

    /**
     * Gets related
     *
     * @return string[]|null
     */
    public function getRelated()
    {
        return $this->container['related'];
    }

    /**
     * Sets related
     *
     * @param string[]|null $related Array of product ID:s for products that are related to this one. (Only applicable to regular products and main product variants)
     *
     * @return self
     */
    public function setRelated($related)
    {
        if (is_null($related)) {
            throw new \InvalidArgumentException('non-nullable related cannot be null');
        }
        $this->container['related'] = $related;

        return $this;
    }

    /**
     * Gets accessories
     *
     * @return string[]|null
     */
    public function getAccessories()
    {
        return $this->container['accessories'];
    }

    /**
     * Sets accessories
     *
     * @param string[]|null $accessories Array of product ID:s for products that are accessories to this one. (Only applicable to regular products and main product variants)
     *
     * @return self
     */
    public function setAccessories($accessories)
    {
        if (is_null($accessories)) {
            throw new \InvalidArgumentException('non-nullable accessories cannot be null');
        }
        $this->container['accessories'] = $accessories;

        return $this;
    }

    /**
     * Gets customattributes
     *
     * @return object|null
     */
    public function getCustomattributes()
    {
        return $this->container['customattributes'];
    }

    /**
     * Sets customattributes
     *
     * @param object|null $customattributes Map of attribute values for the product. The keys must exist as ID of attributes defined. The value type is defined by the attribute.
     *
     * @return self
     */
    public function setCustomattributes($customattributes)
    {
        if (is_null($customattributes)) {
            throw new \InvalidArgumentException('non-nullable customattributes cannot be null');
        }
        $this->container['customattributes'] = $customattributes;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title of product (ie. Product Name).
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


