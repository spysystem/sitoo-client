<?php
/**
 * ManufacturerRead
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
 * ManufacturerRead Class Doc Comment
 *
 * @category Class
 * @description Manufacturer or brand.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ManufacturerRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return ManufacturerReadModelFields
      */
    public static function GetModelFields(): ManufacturerReadModelFields
    {
        return new ManufacturerReadModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return ManufacturerReadModelAttributes
      */
    public static function GetModelAttributes(): ManufacturerReadModelAttributes
    {
        return new ManufacturerReadModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'manufacturer-read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'externalcompanyid' => 'int',
        'name' => 'string',
        'description' => 'string',
        'address' => 'string',
        'zip' => 'string',
        'city' => 'string',
        'state' => 'string',
        'countryid' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'url1' => 'string',
        'url2' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'externalcompanyid' => null,
        'name' => null,
        'description' => null,
        'address' => null,
        'zip' => null,
        'city' => null,
        'state' => null,
        'countryid' => null,
        'phone' => null,
        'email' => null,
        'url1' => null,
        'url2' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'externalcompanyid' => false,
		'name' => false,
		'description' => false,
		'address' => false,
		'zip' => false,
		'city' => false,
		'state' => false,
		'countryid' => false,
		'phone' => false,
		'email' => false,
		'url1' => false,
		'url2' => false
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
        'externalcompanyid' => 'externalcompanyid',
        'name' => 'name',
        'description' => 'description',
        'address' => 'address',
        'zip' => 'zip',
        'city' => 'city',
        'state' => 'state',
        'countryid' => 'countryid',
        'phone' => 'phone',
        'email' => 'email',
        'url1' => 'url1',
        'url2' => 'url2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'externalcompanyid' => 'setExternalcompanyid',
        'name' => 'setName',
        'description' => 'setDescription',
        'address' => 'setAddress',
        'zip' => 'setZip',
        'city' => 'setCity',
        'state' => 'setState',
        'countryid' => 'setCountryid',
        'phone' => 'setPhone',
        'email' => 'setEmail',
        'url1' => 'setUrl1',
        'url2' => 'setUrl2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'externalcompanyid' => 'getExternalcompanyid',
        'name' => 'getName',
        'description' => 'getDescription',
        'address' => 'getAddress',
        'zip' => 'getZip',
        'city' => 'getCity',
        'state' => 'getState',
        'countryid' => 'getCountryid',
        'phone' => 'getPhone',
        'email' => 'getEmail',
        'url1' => 'getUrl1',
        'url2' => 'getUrl2'
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
        $this->setIfExists('externalcompanyid', $data, null);
        $this->setIfExists('name', $data, null);
        $this->setIfExists('description', $data, null);
        $this->setIfExists('address', $data, null);
        $this->setIfExists('zip', $data, null);
        $this->setIfExists('city', $data, null);
        $this->setIfExists('state', $data, null);
        $this->setIfExists('countryid', $data, null);
        $this->setIfExists('phone', $data, null);
        $this->setIfExists('email', $data, null);
        $this->setIfExists('url1', $data, null);
        $this->setIfExists('url2', $data, null);
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
     * Gets externalcompanyid
     *
     * @return int|null
     */
    public function getExternalcompanyid()
    {
        return $this->container['externalcompanyid'];
    }

    /**
     * Sets externalcompanyid
     *
     * @param int|null $externalcompanyid Manufacturer ID.
     *
     * @return self
     */
    public function setExternalcompanyid($externalcompanyid)
    {

        if (is_null($externalcompanyid)) {
            throw new \InvalidArgumentException('non-nullable externalcompanyid cannot be null');
        }

        $this->container['externalcompanyid'] = $externalcompanyid;

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
     * @param string $name Name of manufacturer.
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
     * @param string|null $description Description.
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
     * @param string|null $address Address.
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
     * @param string|null $zip Zip.
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
     * @param string|null $city City.
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
     * @param string|null $state State / Region.
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
     * @param string|null $countryid Country ID (2-letter ISO 3166).
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
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Phone.
     *
     * @return self
     */
    public function setPhone($phone)
    {

        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Email.
     *
     * @return self
     */
    public function setEmail($email)
    {

        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets url1
     *
     * @return string|null
     */
    public function getUrl1()
    {
        return $this->container['url1'];
    }

    /**
     * Sets url1
     *
     * @param string|null $url1 Home Page url.
     *
     * @return self
     */
    public function setUrl1($url1)
    {

        if (is_null($url1)) {
            throw new \InvalidArgumentException('non-nullable url1 cannot be null');
        }

        $this->container['url1'] = $url1;

        return $this;
    }

    /**
     * Gets url2
     *
     * @return string|null
     */
    public function getUrl2()
    {
        return $this->container['url2'];
    }

    /**
     * Sets url2
     *
     * @param string|null $url2 External link url.
     *
     * @return self
     */
    public function setUrl2($url2)
    {

        if (is_null($url2)) {
            throw new \InvalidArgumentException('non-nullable url2 cannot be null');
        }

        $this->container['url2'] = $url2;

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


