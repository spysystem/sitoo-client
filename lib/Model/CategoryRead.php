<?php
/**
 * CategoryRead
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
 * CategoryRead Class Doc Comment
 *
 * @category Class
 * @description Categories are the menu items for the webshop and can also be used as containers for products.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CategoryRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return CategoryReadModelFields
      */
    public static function GetModelFields(): CategoryReadModelFields
    {
        return new CategoryReadModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return CategoryReadModelAttributes
      */
    public static function GetModelAttributes(): CategoryReadModelAttributes
    {
        return new CategoryReadModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'category-read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'categoryid' => 'int',
        'categoryparentid' => 'int',
        'visible' => 'bool',
        'sortorder' => 'int',
        'custom1' => 'string',
        'custom2' => 'string',
        'friendly' => 'string',
        'seoTitle' => 'string',
        'seoKeywords' => 'string',
        'seoDescription' => 'string',
        'title' => 'string',
        'datecreated' => 'int',
        'datemodified' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'categoryid' => null,
        'categoryparentid' => null,
        'visible' => null,
        'sortorder' => null,
        'custom1' => null,
        'custom2' => null,
        'friendly' => null,
        'seoTitle' => null,
        'seoKeywords' => null,
        'seoDescription' => null,
        'title' => null,
        'datecreated' => null,
        'datemodified' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'categoryid' => false,
		'categoryparentid' => false,
		'visible' => false,
		'sortorder' => false,
		'custom1' => false,
		'custom2' => false,
		'friendly' => false,
		'seoTitle' => false,
		'seoKeywords' => false,
		'seoDescription' => false,
		'title' => false,
		'datecreated' => false,
		'datemodified' => false
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
        'categoryid' => 'categoryid',
        'categoryparentid' => 'categoryparentid',
        'visible' => 'visible',
        'sortorder' => 'sortorder',
        'custom1' => 'custom1',
        'custom2' => 'custom2',
        'friendly' => 'friendly',
        'seoTitle' => 'seo_title',
        'seoKeywords' => 'seo_keywords',
        'seoDescription' => 'seo_description',
        'title' => 'title',
        'datecreated' => 'datecreated',
        'datemodified' => 'datemodified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categoryid' => 'setCategoryid',
        'categoryparentid' => 'setCategoryparentid',
        'visible' => 'setVisible',
        'sortorder' => 'setSortorder',
        'custom1' => 'setCustom1',
        'custom2' => 'setCustom2',
        'friendly' => 'setFriendly',
        'seoTitle' => 'setSeoTitle',
        'seoKeywords' => 'setSeoKeywords',
        'seoDescription' => 'setSeoDescription',
        'title' => 'setTitle',
        'datecreated' => 'setDatecreated',
        'datemodified' => 'setDatemodified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categoryid' => 'getCategoryid',
        'categoryparentid' => 'getCategoryparentid',
        'visible' => 'getVisible',
        'sortorder' => 'getSortorder',
        'custom1' => 'getCustom1',
        'custom2' => 'getCustom2',
        'friendly' => 'getFriendly',
        'seoTitle' => 'getSeoTitle',
        'seoKeywords' => 'getSeoKeywords',
        'seoDescription' => 'getSeoDescription',
        'title' => 'getTitle',
        'datecreated' => 'getDatecreated',
        'datemodified' => 'getDatemodified'
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
        $this->setIfExists('categoryid', $data ?? [], null);
        $this->setIfExists('categoryparentid', $data ?? [], null);
        $this->setIfExists('visible', $data ?? [], null);
        $this->setIfExists('sortorder', $data ?? [], null);
        $this->setIfExists('custom1', $data ?? [], null);
        $this->setIfExists('custom2', $data ?? [], null);
        $this->setIfExists('friendly', $data ?? [], null);
        $this->setIfExists('seoTitle', $data ?? [], null);
        $this->setIfExists('seoKeywords', $data ?? [], null);
        $this->setIfExists('seoDescription', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('datecreated', $data ?? [], null);
        $this->setIfExists('datemodified', $data ?? [], null);
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

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
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
     * Gets categoryid
     *
     * @return int|null
     */
    public function getCategoryid()
    {
        return $this->container['categoryid'];
    }

    /**
     * Sets categoryid
     *
     * @param int|null $categoryid The category ID.
     *
     * @return self
     */
    public function setCategoryid($categoryid)
    {

        if (is_null($categoryid)) {
            throw new \InvalidArgumentException('non-nullable categoryid cannot be null');
        }

        $this->container['categoryid'] = $categoryid;

        return $this;
    }

    /**
     * Gets categoryparentid
     *
     * @return int|null
     */
    public function getCategoryparentid()
    {
        return $this->container['categoryparentid'];
    }

    /**
     * Sets categoryparentid
     *
     * @param int|null $categoryparentid The parent category ID or null for top level.
     *
     * @return self
     */
    public function setCategoryparentid($categoryparentid)
    {

        if (is_null($categoryparentid)) {
            throw new \InvalidArgumentException('non-nullable categoryparentid cannot be null');
        }

        $this->container['categoryparentid'] = $categoryparentid;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool|null
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool|null $visible Indicates whether the category is shown in menus or not.
     *
     * @return self
     */
    public function setVisible($visible)
    {

        if (is_null($visible)) {
            throw new \InvalidArgumentException('non-nullable visible cannot be null');
        }

        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets sortorder
     *
     * @return int|null
     */
    public function getSortorder()
    {
        return $this->container['sortorder'];
    }

    /**
     * Sets sortorder
     *
     * @param int|null $sortorder Index for this category among siblings. Zero based.
     *
     * @return self
     */
    public function setSortorder($sortorder)
    {

        if (is_null($sortorder)) {
            throw new \InvalidArgumentException('non-nullable sortorder cannot be null');
        }

        $this->container['sortorder'] = $sortorder;

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
     * Gets friendly
     *
     * @return string|null
     */
    public function getFriendly()
    {
        return $this->container['friendly'];
    }

    /**
     * Sets friendly
     *
     * @param string|null $friendly Friendly name. Absolute url = site url + friendly.
     *
     * @return self
     */
    public function setFriendly($friendly)
    {

        if (is_null($friendly)) {
            throw new \InvalidArgumentException('non-nullable friendly cannot be null');
        }

        $this->container['friendly'] = $friendly;

        return $this;
    }

    /**
     * Gets seoTitle
     *
     * @return string|null
     */
    public function getSeoTitle()
    {
        return $this->container['seoTitle'];
    }

    /**
     * Sets seoTitle
     *
     * @param string|null $seoTitle Used for the html title element. If empty the title field will be used instead.
     *
     * @return self
     */
    public function setSeoTitle($seoTitle)
    {

        if (is_null($seoTitle)) {
            throw new \InvalidArgumentException('non-nullable seoTitle cannot be null');
        }

        $this->container['seoTitle'] = $seoTitle;

        return $this;
    }

    /**
     * Gets seoKeywords
     *
     * @return string|null
     */
    public function getSeoKeywords()
    {
        return $this->container['seoKeywords'];
    }

    /**
     * Sets seoKeywords
     *
     * @param string|null $seoKeywords Meta keywords.
     *
     * @return self
     */
    public function setSeoKeywords($seoKeywords)
    {

        if (is_null($seoKeywords)) {
            throw new \InvalidArgumentException('non-nullable seoKeywords cannot be null');
        }

        $this->container['seoKeywords'] = $seoKeywords;

        return $this;
    }

    /**
     * Gets seoDescription
     *
     * @return string|null
     */
    public function getSeoDescription()
    {
        return $this->container['seoDescription'];
    }

    /**
     * Sets seoDescription
     *
     * @param string|null $seoDescription Meta description.
     *
     * @return self
     */
    public function setSeoDescription($seoDescription)
    {

        if (is_null($seoDescription)) {
            throw new \InvalidArgumentException('non-nullable seoDescription cannot be null');
        }

        $this->container['seoDescription'] = $seoDescription;

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
     * @param string $title Title of category.
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
     * Gets datecreated
     *
     * @return int|null
     */
    public function getDatecreated()
    {
        return $this->container['datecreated'];
    }

    /**
     * Sets datecreated
     *
     * @param int|null $datecreated Timestamp when this category was created.
     *
     * @return self
     */
    public function setDatecreated($datecreated)
    {

        if (is_null($datecreated)) {
            throw new \InvalidArgumentException('non-nullable datecreated cannot be null');
        }

        $this->container['datecreated'] = $datecreated;

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
     * @param int|null $datemodified Timestamp when this category was last modified.
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


