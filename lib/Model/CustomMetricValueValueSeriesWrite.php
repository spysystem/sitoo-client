<?php
/**
 * CustomMetricValueValueSeriesWrite
 *
 * PHP version 7.2
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
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
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
 * CustomMetricValueValueSeriesWrite Class Doc Comment
 *
 * @category Class
 * @description Series. Set if metric type is series
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CustomMetricValueValueSeriesWrite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return CustomMetricValueValueSeriesWriteModelFields
      */
    public static function GetModelFields(): CustomMetricValueValueSeriesWriteModelFields
    {
        return new CustomMetricValueValueSeriesWriteModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return CustomMetricValueValueSeriesWriteModelAttributes
      */
    public static function GetModelAttributes(): CustomMetricValueValueSeriesWriteModelAttributes
    {
        return new CustomMetricValueValueSeriesWriteModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomMetricValue-value_series-write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'totalCount' => 'int',
        'totalValue' => 'float',
        'series' => '\Spy\SitooClient\Model\CustomMetricValueValueSeriesSeriesWrite'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'totalCount' => null,
        'totalValue' => null,
        'series' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'totalCount' => false,
		'totalValue' => false,
		'series' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
     * Array of property to nullable mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPINullables()
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array
     */
    public function getOpenAPINullablesSetToNull()
    {
        return $this->openAPINullablesSetToNull;
    }

    public function setOpenAPINullablesSetToNull($nullablesSetToNull)
    {
        $this->openAPINullablesSetToNull=$nullablesSetToNull;

        return $this;
    }

    /**
     * Checks if a property is nullable
     *
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        if (isset(self::$openAPINullables[$property])) {
            return self::$openAPINullables[$property];
        }

        return false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        if (in_array($property, $this->getOpenAPINullablesSetToNull())) {
            return true;
        }
        return false;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'totalCount' => 'total_count',
        'totalValue' => 'total_value',
        'series' => 'series'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'totalCount' => 'setTotalCount',
        'totalValue' => 'setTotalValue',
        'series' => 'setSeries'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'totalCount' => 'getTotalCount',
        'totalValue' => 'getTotalValue',
        'series' => 'getSeries'
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
        $this->setIfExists('totalCount', $data, null);
        $this->setIfExists('totalValue', $data, null);
        $this->setIfExists('series', $data, null);
    }

    public function setIfExists(string $variableName, $fields, $defaultValue)
    {
        if (is_array($fields) && array_key_exists($variableName, $fields) && is_null($fields[$variableName]) && self::isNullable($variableName)) {
            array_push($this->openAPINullablesSetToNull, $variableName);
        }

        $this->container[$variableName] = isset($fields[$variableName]) ? $fields[$variableName] : $defaultValue;

        return $this;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['totalCount'] === null) {
            $invalidProperties[] = "'totalCount' can't be null";
        }
        if ($this->container['totalValue'] === null) {
            $invalidProperties[] = "'totalValue' can't be null";
        }
        if ($this->container['series'] === null) {
            $invalidProperties[] = "'series' can't be null";
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
     * Gets totalCount
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
     * Sets totalCount
     *
     * @param int $totalCount The total number of items for the series (The returned series may not include all items)
     *
     * @return self
     */
    public function setTotalCount($totalCount)
    {

        if (is_null($totalCount)) {
            throw new \InvalidArgumentException('non-nullable totalCount cannot be null');
        }

        $this->container['totalCount'] = $totalCount;

        return $this;
    }

    /**
     * Gets totalValue
     *
     * @return float
     */
    public function getTotalValue()
    {
        return $this->container['totalValue'];
    }

    /**
     * Sets totalValue
     *
     * @param float $totalValue The total value for the series (The actual series may not include all values)
     *
     * @return self
     */
    public function setTotalValue($totalValue)
    {

        if (is_null($totalValue)) {
            throw new \InvalidArgumentException('non-nullable totalValue cannot be null');
        }

        $this->container['totalValue'] = $totalValue;

        return $this;
    }

    /**
     * Gets series
     *
     * @return \Spy\SitooClient\Model\CustomMetricValueValueSeriesSeriesWrite
     */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
     * Sets series
     *
     * @param \Spy\SitooClient\Model\CustomMetricValueValueSeriesSeriesWrite $series series
     *
     * @return self
     */
    public function setSeries($series)
    {

        if (is_null($series)) {
            throw new \InvalidArgumentException('non-nullable series cannot be null');
        }

        $this->container['series'] = $series;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


