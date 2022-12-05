<?php
/**
 * UserWrite
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
 * UserWrite Class Doc Comment
 *
 * @category Class
 * @description Users are common to all sites in a system. Roles and access rights are set per site.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserWrite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return UserWriteModelFields
      */
    public static function GetModelFields(): UserWriteModelFields
    {
        return new UserWriteModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return UserWriteModelAttributes
      */
    public static function GetModelAttributes(): UserWriteModelAttributes
    {
        return new UserWriteModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'user-write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'string',
        'namefirst' => 'string',
        'namelast' => 'string',
        'personalid' => 'string',
        'externalid' => 'string',
        'company' => 'string',
        'department' => 'string',
        'companyid' => 'string',
        'address' => 'string',
        'address2' => 'string',
        'zip' => 'string',
        'city' => 'string',
        'state' => 'string',
        'countryid' => 'string',
        'phone' => 'string',
        'mobile' => 'string',
        'notes' => 'string',
        'pin' => 'string',
        'customernumber' => 'string',
        'voucherpasswords' => 'string[]',
        'role' => 'int',
        'warehouses' => 'string[]',
        'posrefundcard' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email' => null,
        'namefirst' => null,
        'namelast' => null,
        'personalid' => null,
        'externalid' => null,
        'company' => null,
        'department' => null,
        'companyid' => null,
        'address' => null,
        'address2' => null,
        'zip' => null,
        'city' => null,
        'state' => null,
        'countryid' => null,
        'phone' => null,
        'mobile' => null,
        'notes' => null,
        'pin' => null,
        'customernumber' => null,
        'voucherpasswords' => null,
        'role' => null,
        'warehouses' => null,
        'posrefundcard' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'email' => false,
		'namefirst' => false,
		'namelast' => false,
		'personalid' => false,
		'externalid' => false,
		'company' => false,
		'department' => false,
		'companyid' => false,
		'address' => false,
		'address2' => false,
		'zip' => false,
		'city' => false,
		'state' => false,
		'countryid' => false,
		'phone' => false,
		'mobile' => false,
		'notes' => false,
		'pin' => false,
		'customernumber' => false,
		'voucherpasswords' => false,
		'role' => false,
		'warehouses' => false,
		'posrefundcard' => false
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
        'email' => 'email',
        'namefirst' => 'namefirst',
        'namelast' => 'namelast',
        'personalid' => 'personalid',
        'externalid' => 'externalid',
        'company' => 'company',
        'department' => 'department',
        'companyid' => 'companyid',
        'address' => 'address',
        'address2' => 'address2',
        'zip' => 'zip',
        'city' => 'city',
        'state' => 'state',
        'countryid' => 'countryid',
        'phone' => 'phone',
        'mobile' => 'mobile',
        'notes' => 'notes',
        'pin' => 'pin',
        'customernumber' => 'customernumber',
        'voucherpasswords' => 'voucherpasswords',
        'role' => 'role',
        'warehouses' => 'warehouses',
        'posrefundcard' => 'posrefundcard'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'namefirst' => 'setNamefirst',
        'namelast' => 'setNamelast',
        'personalid' => 'setPersonalid',
        'externalid' => 'setExternalid',
        'company' => 'setCompany',
        'department' => 'setDepartment',
        'companyid' => 'setCompanyid',
        'address' => 'setAddress',
        'address2' => 'setAddress2',
        'zip' => 'setZip',
        'city' => 'setCity',
        'state' => 'setState',
        'countryid' => 'setCountryid',
        'phone' => 'setPhone',
        'mobile' => 'setMobile',
        'notes' => 'setNotes',
        'pin' => 'setPin',
        'customernumber' => 'setCustomernumber',
        'voucherpasswords' => 'setVoucherpasswords',
        'role' => 'setRole',
        'warehouses' => 'setWarehouses',
        'posrefundcard' => 'setPosrefundcard'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'namefirst' => 'getNamefirst',
        'namelast' => 'getNamelast',
        'personalid' => 'getPersonalid',
        'externalid' => 'getExternalid',
        'company' => 'getCompany',
        'department' => 'getDepartment',
        'companyid' => 'getCompanyid',
        'address' => 'getAddress',
        'address2' => 'getAddress2',
        'zip' => 'getZip',
        'city' => 'getCity',
        'state' => 'getState',
        'countryid' => 'getCountryid',
        'phone' => 'getPhone',
        'mobile' => 'getMobile',
        'notes' => 'getNotes',
        'pin' => 'getPin',
        'customernumber' => 'getCustomernumber',
        'voucherpasswords' => 'getVoucherpasswords',
        'role' => 'getRole',
        'warehouses' => 'getWarehouses',
        'posrefundcard' => 'getPosrefundcard'
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
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('namefirst', $data ?? [], null);
        $this->setIfExists('namelast', $data ?? [], null);
        $this->setIfExists('personalid', $data ?? [], null);
        $this->setIfExists('externalid', $data ?? [], null);
        $this->setIfExists('company', $data ?? [], null);
        $this->setIfExists('department', $data ?? [], null);
        $this->setIfExists('companyid', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('address2', $data ?? [], null);
        $this->setIfExists('zip', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('countryid', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('mobile', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('pin', $data ?? [], null);
        $this->setIfExists('customernumber', $data ?? [], null);
        $this->setIfExists('voucherpasswords', $data ?? [], null);
        $this->setIfExists('role', $data ?? [], null);
        $this->setIfExists('warehouses', $data ?? [], null);
        $this->setIfExists('posrefundcard', $data ?? [], null);
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

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email for user. Must be unique.
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
     * Gets namefirst
     *
     * @return string|null
     */
    public function getNamefirst()
    {
        return $this->container['namefirst'];
    }

    /**
     * Sets namefirst
     *
     * @param string|null $namefirst First name.
     *
     * @return self
     */
    public function setNamefirst($namefirst)
    {

        if (is_null($namefirst)) {
            throw new \InvalidArgumentException('non-nullable namefirst cannot be null');
        }

        $this->container['namefirst'] = $namefirst;

        return $this;
    }

    /**
     * Gets namelast
     *
     * @return string|null
     */
    public function getNamelast()
    {
        return $this->container['namelast'];
    }

    /**
     * Sets namelast
     *
     * @param string|null $namelast Last name.
     *
     * @return self
     */
    public function setNamelast($namelast)
    {

        if (is_null($namelast)) {
            throw new \InvalidArgumentException('non-nullable namelast cannot be null');
        }

        $this->container['namelast'] = $namelast;

        return $this;
    }

    /**
     * Gets personalid
     *
     * @return string|null
     */
    public function getPersonalid()
    {
        return $this->container['personalid'];
    }

    /**
     * Sets personalid
     *
     * @param string|null $personalid Personal ID.
     *
     * @return self
     */
    public function setPersonalid($personalid)
    {

        if (is_null($personalid)) {
            throw new \InvalidArgumentException('non-nullable personalid cannot be null');
        }

        $this->container['personalid'] = $personalid;

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
     * @param string|null $externalid External ID or null if not used.
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
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company Company name.
     *
     * @return self
     */
    public function setCompany($company)
    {

        if (is_null($company)) {
            throw new \InvalidArgumentException('non-nullable company cannot be null');
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string|null
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string|null $department Department.
     *
     * @return self
     */
    public function setDepartment($department)
    {

        if (is_null($department)) {
            throw new \InvalidArgumentException('non-nullable department cannot be null');
        }

        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets companyid
     *
     * @return string|null
     */
    public function getCompanyid()
    {
        return $this->container['companyid'];
    }

    /**
     * Sets companyid
     *
     * @param string|null $companyid Organization ID.
     *
     * @return self
     */
    public function setCompanyid($companyid)
    {

        if (is_null($companyid)) {
            throw new \InvalidArgumentException('non-nullable companyid cannot be null');
        }

        $this->container['companyid'] = $companyid;

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
     * @param string|null $address2 Extra address field.
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
     * @param string|null $zip Zip or postal code.
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
     * @param string|null $state State or region.
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
     * @param string|null $countryid Country ID (ISO 3166-1, alpha-2).
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
     * @param string|null $phone Phone number.
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
     * Gets mobile
     *
     * @return string|null
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string|null $mobile Mobile phone number.
     *
     * @return self
     */
    public function setMobile($mobile)
    {

        if (is_null($mobile)) {
            throw new \InvalidArgumentException('non-nullable mobile cannot be null');
        }

        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes Internal notes about the user.
     *
     * @return self
     */
    public function setNotes($notes)
    {

        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }

        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets pin
     *
     * @return string|null
     */
    public function getPin()
    {
        return $this->container['pin'];
    }

    /**
     * Sets pin
     *
     * @param string|null $pin Write only. Personal Identification Number (4 or 6 digits). Must be unique.
     *
     * @return self
     */
    public function setPin($pin)
    {

        if (is_null($pin)) {
            throw new \InvalidArgumentException('non-nullable pin cannot be null');
        }

        $this->container['pin'] = $pin;

        return $this;
    }

    /**
     * Gets customernumber
     *
     * @return string|null
     */
    public function getCustomernumber()
    {
        return $this->container['customernumber'];
    }

    /**
     * Sets customernumber
     *
     * @param string|null $customernumber Customer number.
     *
     * @return self
     */
    public function setCustomernumber($customernumber)
    {

        if (is_null($customernumber)) {
            throw new \InvalidArgumentException('non-nullable customernumber cannot be null');
        }

        $this->container['customernumber'] = $customernumber;

        return $this;
    }

    /**
     * Gets voucherpasswords
     *
     * @return string[]|null
     */
    public function getVoucherpasswords()
    {
        return $this->container['voucherpasswords'];
    }

    /**
     * Sets voucherpasswords
     *
     * @param string[]|null $voucherpasswords Array of voucher passwords (string) used to activate campaigns for customer in Sitoo POS.
     *
     * @return self
     */
    public function setVoucherpasswords($voucherpasswords)
    {

        if (is_null($voucherpasswords)) {
            throw new \InvalidArgumentException('non-nullable voucherpasswords cannot be null');
        }

        $this->container['voucherpasswords'] = $voucherpasswords;

        return $this;
    }

    /**
     * Gets role
     *
     * @return int|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param int|null $role The access role for this user, or null if not applicable. (Note! Admin value is Read only)
     *
     * @return self
     */
    public function setRole($role)
    {

        if (is_null($role)) {
            throw new \InvalidArgumentException('non-nullable role cannot be null');
        }

        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets warehouses
     *
     * @return string[]|null
     */
    public function getWarehouses()
    {
        return $this->container['warehouses'];
    }

    /**
     * Sets warehouses
     *
     * @param string[]|null $warehouses An array of warehouse IDs that the Store Manager or Store Staff should have access to. Other roles will not be affected by this property.
     *
     * @return self
     */
    public function setWarehouses($warehouses)
    {

        if (is_null($warehouses)) {
            throw new \InvalidArgumentException('non-nullable warehouses cannot be null');
        }

        $this->container['warehouses'] = $warehouses;

        return $this;
    }

    /**
     * Gets posrefundcard
     *
     * @return bool|null
     */
    public function getPosrefundcard()
    {
        return $this->container['posrefundcard'];
    }

    /**
     * Sets posrefundcard
     *
     * @param bool|null $posrefundcard If true, the user has the right to perform refund for card payments in Sitoo POS.
     *
     * @return self
     */
    public function setPosrefundcard($posrefundcard)
    {

        if (is_null($posrefundcard)) {
            throw new \InvalidArgumentException('non-nullable posrefundcard cannot be null');
        }

        $this->container['posrefundcard'] = $posrefundcard;

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


