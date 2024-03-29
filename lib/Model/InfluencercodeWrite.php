<?php
/**
 * InfluencercodeWrite
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
 * InfluencercodeWrite Class Doc Comment
 *
 * @category Class
 * @description The object for influencer codes in Sitoo
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InfluencercodeWrite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return InfluencercodeWriteModelFields
      */
    public static function GetModelFields(): InfluencercodeWriteModelFields
    {
        return new InfluencercodeWriteModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return InfluencercodeWriteModelAttributes
      */
    public static function GetModelAttributes(): InfluencercodeWriteModelAttributes
    {
        return new InfluencercodeWriteModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'influencercode-write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'name' => 'string',
        'active' => 'bool',
        'datestart' => 'int',
        'dateend' => 'int',
        'voucherpassword' => 'string',
        'vouchercode' => 'string',
        'vouchername' => 'string',
        'vouchercomment' => 'string',
        'maxuses' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'name' => null,
        'active' => null,
        'datestart' => null,
        'dateend' => null,
        'voucherpassword' => null,
        'vouchercode' => null,
        'vouchername' => null,
        'vouchercomment' => null,
        'maxuses' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'code' => false,
		'name' => false,
		'active' => false,
		'datestart' => false,
		'dateend' => false,
		'voucherpassword' => false,
		'vouchercode' => false,
		'vouchername' => false,
		'vouchercomment' => false,
		'maxuses' => false
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
        'code' => 'code',
        'name' => 'name',
        'active' => 'active',
        'datestart' => 'datestart',
        'dateend' => 'dateend',
        'voucherpassword' => 'voucherpassword',
        'vouchercode' => 'vouchercode',
        'vouchername' => 'vouchername',
        'vouchercomment' => 'vouchercomment',
        'maxuses' => 'maxuses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'name' => 'setName',
        'active' => 'setActive',
        'datestart' => 'setDatestart',
        'dateend' => 'setDateend',
        'voucherpassword' => 'setVoucherpassword',
        'vouchercode' => 'setVouchercode',
        'vouchername' => 'setVouchername',
        'vouchercomment' => 'setVouchercomment',
        'maxuses' => 'setMaxuses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'name' => 'getName',
        'active' => 'getActive',
        'datestart' => 'getDatestart',
        'dateend' => 'getDateend',
        'voucherpassword' => 'getVoucherpassword',
        'vouchercode' => 'getVouchercode',
        'vouchername' => 'getVouchername',
        'vouchercomment' => 'getVouchercomment',
        'maxuses' => 'getMaxuses'
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('datestart', $data ?? [], null);
        $this->setIfExists('dateend', $data ?? [], null);
        $this->setIfExists('voucherpassword', $data ?? [], null);
        $this->setIfExists('vouchercode', $data ?? [], null);
        $this->setIfExists('vouchername', $data ?? [], null);
        $this->setIfExists('vouchercomment', $data ?? [], null);
        $this->setIfExists('maxuses', $data ?? [], null);
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

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['voucherpassword'] === null) {
            $invalidProperties[] = "'voucherpassword' can't be null";
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code The unique influencer code. Can only contain [0-9a-zA-Z&_-.]
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

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
     * @param string $name The name of the influencer for this code.
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
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active If true, then this influencer code is active.
     *
     * @return self
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
     * Gets datestart
     *
     * @return int|null
     */
    public function getDatestart()
    {
        return $this->container['datestart'];
    }

    /**
     * Sets datestart
     *
     * @param int|null $datestart The date used for the activation of this influencer code. No activation date if value is null.
     *
     * @return self
     */
    public function setDatestart($datestart)
    {
        if (is_null($datestart)) {
            throw new \InvalidArgumentException('non-nullable datestart cannot be null');
        }
        $this->container['datestart'] = $datestart;

        return $this;
    }

    /**
     * Gets dateend
     *
     * @return int|null
     */
    public function getDateend()
    {
        return $this->container['dateend'];
    }

    /**
     * Sets dateend
     *
     * @param int|null $dateend The date used for the expiration of this influencer code. No expiration date if value is null.
     *
     * @return self
     */
    public function setDateend($dateend)
    {
        if (is_null($dateend)) {
            throw new \InvalidArgumentException('non-nullable dateend cannot be null');
        }
        $this->container['dateend'] = $dateend;

        return $this;
    }

    /**
     * Gets voucherpassword
     *
     * @return string
     */
    public function getVoucherpassword()
    {
        return $this->container['voucherpassword'];
    }

    /**
     * Sets voucherpassword
     *
     * @param string $voucherpassword The password used for unlocking the voucher.
     *
     * @return self
     */
    public function setVoucherpassword($voucherpassword)
    {
        if (is_null($voucherpassword)) {
            throw new \InvalidArgumentException('non-nullable voucherpassword cannot be null');
        }
        $this->container['voucherpassword'] = $voucherpassword;

        return $this;
    }

    /**
     * Gets vouchercode
     *
     * @return string|null
     */
    public function getVouchercode()
    {
        return $this->container['vouchercode'];
    }

    /**
     * Sets vouchercode
     *
     * @param string|null $vouchercode Value used to override vouchercode in the voucher applied for the purchase, or null to leave original value.
     *
     * @return self
     */
    public function setVouchercode($vouchercode)
    {
        if (is_null($vouchercode)) {
            throw new \InvalidArgumentException('non-nullable vouchercode cannot be null');
        }
        $this->container['vouchercode'] = $vouchercode;

        return $this;
    }

    /**
     * Gets vouchername
     *
     * @return string|null
     */
    public function getVouchername()
    {
        return $this->container['vouchername'];
    }

    /**
     * Sets vouchername
     *
     * @param string|null $vouchername Value used to override vouchername in the voucher applied for the purchase, or null to leave original value.
     *
     * @return self
     */
    public function setVouchername($vouchername)
    {
        if (is_null($vouchername)) {
            throw new \InvalidArgumentException('non-nullable vouchername cannot be null');
        }
        $this->container['vouchername'] = $vouchername;

        return $this;
    }

    /**
     * Gets vouchercomment
     *
     * @return string|null
     */
    public function getVouchercomment()
    {
        return $this->container['vouchercomment'];
    }

    /**
     * Sets vouchercomment
     *
     * @param string|null $vouchercomment Value used to override vouchercomment in voucher the voucher applied for the purchase, or null to leave original value.
     *
     * @return self
     */
    public function setVouchercomment($vouchercomment)
    {
        if (is_null($vouchercomment)) {
            throw new \InvalidArgumentException('non-nullable vouchercomment cannot be null');
        }
        $this->container['vouchercomment'] = $vouchercomment;

        return $this;
    }

    /**
     * Gets maxuses
     *
     * @return int|null
     */
    public function getMaxuses()
    {
        return $this->container['maxuses'];
    }

    /**
     * Sets maxuses
     *
     * @param int|null $maxuses The maximum times the influencer code can be used or null for unlimited use.
     *
     * @return self
     */
    public function setMaxuses($maxuses)
    {
        if (is_null($maxuses)) {
            throw new \InvalidArgumentException('non-nullable maxuses cannot be null');
        }
        $this->container['maxuses'] = $maxuses;

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


