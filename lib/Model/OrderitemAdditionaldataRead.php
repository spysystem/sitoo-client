<?php
/**
 * OrderitemAdditionaldataRead
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
 * OrderitemAdditionaldataRead Class Doc Comment
 *
 * @category Class
 * @description Additional data for this order item. The defined properties can be generated by Sitoo, any other properties are allowed as long as their values are of type string.
 * @package  Spy\SitooClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderitemAdditionaldataRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return OrderitemAdditionaldataReadModelFields
      */
    public static function GetModelFields(): OrderitemAdditionaldataReadModelFields
    {
        return new OrderitemAdditionaldataReadModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return OrderitemAdditionaldataReadModelAttributes
      */
    public static function GetModelAttributes(): OrderitemAdditionaldataReadModelAttributes
    {
        return new OrderitemAdditionaldataReadModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'orderitem-additionaldata-read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'crmBonuscheckid' => 'string',
        'crmPromotionid' => 'string',
        'customcrmBonuscheckid' => 'string',
        'customcrmPromotionid' => 'string',
        'giftcardCardnumber' => 'string',
        'orderitemMoneyrowdiscount' => 'string',
        'posOriginalsalesOrderitemid' => 'string',
        'pricelistExternalid' => 'string',
        'productGroupName' => 'string',
        'reasoncodeManualdiscount' => 'string',
        'reasoncodeManualprice' => 'string',
        'reasoncodeReturn' => 'string',
        'returnWarehouseid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'crmBonuscheckid' => null,
        'crmPromotionid' => null,
        'customcrmBonuscheckid' => null,
        'customcrmPromotionid' => null,
        'giftcardCardnumber' => null,
        'orderitemMoneyrowdiscount' => null,
        'posOriginalsalesOrderitemid' => null,
        'pricelistExternalid' => null,
        'productGroupName' => null,
        'reasoncodeManualdiscount' => null,
        'reasoncodeManualprice' => null,
        'reasoncodeReturn' => null,
        'returnWarehouseid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'crmBonuscheckid' => false,
		'crmPromotionid' => false,
		'customcrmBonuscheckid' => false,
		'customcrmPromotionid' => false,
		'giftcardCardnumber' => false,
		'orderitemMoneyrowdiscount' => false,
		'posOriginalsalesOrderitemid' => false,
		'pricelistExternalid' => false,
		'productGroupName' => false,
		'reasoncodeManualdiscount' => false,
		'reasoncodeManualprice' => false,
		'reasoncodeReturn' => false,
		'returnWarehouseid' => false
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
        'crmBonuscheckid' => 'crm-bonuscheckid',
        'crmPromotionid' => 'crm-promotionid',
        'customcrmBonuscheckid' => 'customcrm-bonuscheckid',
        'customcrmPromotionid' => 'customcrm-promotionid',
        'giftcardCardnumber' => 'giftcard-cardnumber',
        'orderitemMoneyrowdiscount' => 'orderitem-moneyrowdiscount',
        'posOriginalsalesOrderitemid' => 'pos-originalsales-orderitemid',
        'pricelistExternalid' => 'pricelist-externalid',
        'productGroupName' => 'product-group-name',
        'reasoncodeManualdiscount' => 'reasoncode-manualdiscount',
        'reasoncodeManualprice' => 'reasoncode-manualprice',
        'reasoncodeReturn' => 'reasoncode-return',
        'returnWarehouseid' => 'return-warehouseid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'crmBonuscheckid' => 'setCrmBonuscheckid',
        'crmPromotionid' => 'setCrmPromotionid',
        'customcrmBonuscheckid' => 'setCustomcrmBonuscheckid',
        'customcrmPromotionid' => 'setCustomcrmPromotionid',
        'giftcardCardnumber' => 'setGiftcardCardnumber',
        'orderitemMoneyrowdiscount' => 'setOrderitemMoneyrowdiscount',
        'posOriginalsalesOrderitemid' => 'setPosOriginalsalesOrderitemid',
        'pricelistExternalid' => 'setPricelistExternalid',
        'productGroupName' => 'setProductGroupName',
        'reasoncodeManualdiscount' => 'setReasoncodeManualdiscount',
        'reasoncodeManualprice' => 'setReasoncodeManualprice',
        'reasoncodeReturn' => 'setReasoncodeReturn',
        'returnWarehouseid' => 'setReturnWarehouseid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'crmBonuscheckid' => 'getCrmBonuscheckid',
        'crmPromotionid' => 'getCrmPromotionid',
        'customcrmBonuscheckid' => 'getCustomcrmBonuscheckid',
        'customcrmPromotionid' => 'getCustomcrmPromotionid',
        'giftcardCardnumber' => 'getGiftcardCardnumber',
        'orderitemMoneyrowdiscount' => 'getOrderitemMoneyrowdiscount',
        'posOriginalsalesOrderitemid' => 'getPosOriginalsalesOrderitemid',
        'pricelistExternalid' => 'getPricelistExternalid',
        'productGroupName' => 'getProductGroupName',
        'reasoncodeManualdiscount' => 'getReasoncodeManualdiscount',
        'reasoncodeManualprice' => 'getReasoncodeManualprice',
        'reasoncodeReturn' => 'getReasoncodeReturn',
        'returnWarehouseid' => 'getReturnWarehouseid'
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
        $this->setIfExists('crmBonuscheckid', $data ?? [], null);
        $this->setIfExists('crmPromotionid', $data ?? [], null);
        $this->setIfExists('customcrmBonuscheckid', $data ?? [], null);
        $this->setIfExists('customcrmPromotionid', $data ?? [], null);
        $this->setIfExists('giftcardCardnumber', $data ?? [], null);
        $this->setIfExists('orderitemMoneyrowdiscount', $data ?? [], null);
        $this->setIfExists('posOriginalsalesOrderitemid', $data ?? [], null);
        $this->setIfExists('pricelistExternalid', $data ?? [], null);
        $this->setIfExists('productGroupName', $data ?? [], null);
        $this->setIfExists('reasoncodeManualdiscount', $data ?? [], null);
        $this->setIfExists('reasoncodeManualprice', $data ?? [], null);
        $this->setIfExists('reasoncodeReturn', $data ?? [], null);
        $this->setIfExists('returnWarehouseid', $data ?? [], null);
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
     * Gets crmBonuscheckid
     *
     * @return string|null
     */
    public function getCrmBonuscheckid()
    {
        return $this->container['crmBonuscheckid'];
    }

    /**
     * Sets crmBonuscheckid
     *
     * @param string|null $crmBonuscheckid ID of bonus check used
     *
     * @return self
     */
    public function setCrmBonuscheckid($crmBonuscheckid)
    {

        if (is_null($crmBonuscheckid)) {
            throw new \InvalidArgumentException('non-nullable crmBonuscheckid cannot be null');
        }

        $this->container['crmBonuscheckid'] = $crmBonuscheckid;

        return $this;
    }

    /**
     * Gets crmPromotionid
     *
     * @return string|null
     */
    public function getCrmPromotionid()
    {
        return $this->container['crmPromotionid'];
    }

    /**
     * Sets crmPromotionid
     *
     * @param string|null $crmPromotionid ID of promotion used
     *
     * @return self
     */
    public function setCrmPromotionid($crmPromotionid)
    {

        if (is_null($crmPromotionid)) {
            throw new \InvalidArgumentException('non-nullable crmPromotionid cannot be null');
        }

        $this->container['crmPromotionid'] = $crmPromotionid;

        return $this;
    }

    /**
     * Gets customcrmBonuscheckid
     *
     * @return string|null
     */
    public function getCustomcrmBonuscheckid()
    {
        return $this->container['customcrmBonuscheckid'];
    }

    /**
     * Sets customcrmBonuscheckid
     *
     * @param string|null $customcrmBonuscheckid ID of bonus check used
     *
     * @return self
     */
    public function setCustomcrmBonuscheckid($customcrmBonuscheckid)
    {

        if (is_null($customcrmBonuscheckid)) {
            throw new \InvalidArgumentException('non-nullable customcrmBonuscheckid cannot be null');
        }

        $this->container['customcrmBonuscheckid'] = $customcrmBonuscheckid;

        return $this;
    }

    /**
     * Gets customcrmPromotionid
     *
     * @return string|null
     */
    public function getCustomcrmPromotionid()
    {
        return $this->container['customcrmPromotionid'];
    }

    /**
     * Sets customcrmPromotionid
     *
     * @param string|null $customcrmPromotionid ID of promotion used
     *
     * @return self
     */
    public function setCustomcrmPromotionid($customcrmPromotionid)
    {

        if (is_null($customcrmPromotionid)) {
            throw new \InvalidArgumentException('non-nullable customcrmPromotionid cannot be null');
        }

        $this->container['customcrmPromotionid'] = $customcrmPromotionid;

        return $this;
    }

    /**
     * Gets giftcardCardnumber
     *
     * @return string|null
     */
    public function getGiftcardCardnumber()
    {
        return $this->container['giftcardCardnumber'];
    }

    /**
     * Sets giftcardCardnumber
     *
     * @param string|null $giftcardCardnumber Card number of giftcard purchased
     *
     * @return self
     */
    public function setGiftcardCardnumber($giftcardCardnumber)
    {

        if (is_null($giftcardCardnumber)) {
            throw new \InvalidArgumentException('non-nullable giftcardCardnumber cannot be null');
        }

        $this->container['giftcardCardnumber'] = $giftcardCardnumber;

        return $this;
    }

    /**
     * Gets orderitemMoneyrowdiscount
     *
     * @return string|null
     */
    public function getOrderitemMoneyrowdiscount()
    {
        return $this->container['orderitemMoneyrowdiscount'];
    }

    /**
     * Sets orderitemMoneyrowdiscount
     *
     * @param string|null $orderitemMoneyrowdiscount The total row discount sent in POST/PUT
     *
     * @return self
     */
    public function setOrderitemMoneyrowdiscount($orderitemMoneyrowdiscount)
    {

        if (is_null($orderitemMoneyrowdiscount)) {
            throw new \InvalidArgumentException('non-nullable orderitemMoneyrowdiscount cannot be null');
        }

        $this->container['orderitemMoneyrowdiscount'] = $orderitemMoneyrowdiscount;

        return $this;
    }

    /**
     * Gets posOriginalsalesOrderitemid
     *
     * @return string|null
     */
    public function getPosOriginalsalesOrderitemid()
    {
        return $this->container['posOriginalsalesOrderitemid'];
    }

    /**
     * Sets posOriginalsalesOrderitemid
     *
     * @param string|null $posOriginalsalesOrderitemid ID/Index referring to the item from the original purchase being returned, indicated by the pos-originalsales-orderid field on the order
     *
     * @return self
     */
    public function setPosOriginalsalesOrderitemid($posOriginalsalesOrderitemid)
    {

        if (is_null($posOriginalsalesOrderitemid)) {
            throw new \InvalidArgumentException('non-nullable posOriginalsalesOrderitemid cannot be null');
        }

        $this->container['posOriginalsalesOrderitemid'] = $posOriginalsalesOrderitemid;

        return $this;
    }

    /**
     * Gets pricelistExternalid
     *
     * @return string|null
     */
    public function getPricelistExternalid()
    {
        return $this->container['pricelistExternalid'];
    }

    /**
     * Sets pricelistExternalid
     *
     * @param string|null $pricelistExternalid External ID for the pricelist used
     *
     * @return self
     */
    public function setPricelistExternalid($pricelistExternalid)
    {

        if (is_null($pricelistExternalid)) {
            throw new \InvalidArgumentException('non-nullable pricelistExternalid cannot be null');
        }

        $this->container['pricelistExternalid'] = $pricelistExternalid;

        return $this;
    }

    /**
     * Gets productGroupName
     *
     * @return string|null
     */
    public function getProductGroupName()
    {
        return $this->container['productGroupName'];
    }

    /**
     * Sets productGroupName
     *
     * @param string|null $productGroupName The name of the product group for this item
     *
     * @return self
     */
    public function setProductGroupName($productGroupName)
    {

        if (is_null($productGroupName)) {
            throw new \InvalidArgumentException('non-nullable productGroupName cannot be null');
        }

        $this->container['productGroupName'] = $productGroupName;

        return $this;
    }

    /**
     * Gets reasoncodeManualdiscount
     *
     * @return string|null
     */
    public function getReasoncodeManualdiscount()
    {
        return $this->container['reasoncodeManualdiscount'];
    }

    /**
     * Sets reasoncodeManualdiscount
     *
     * @param string|null $reasoncodeManualdiscount Reason code for manual discount on item
     *
     * @return self
     */
    public function setReasoncodeManualdiscount($reasoncodeManualdiscount)
    {

        if (is_null($reasoncodeManualdiscount)) {
            throw new \InvalidArgumentException('non-nullable reasoncodeManualdiscount cannot be null');
        }

        $this->container['reasoncodeManualdiscount'] = $reasoncodeManualdiscount;

        return $this;
    }

    /**
     * Gets reasoncodeManualprice
     *
     * @return string|null
     */
    public function getReasoncodeManualprice()
    {
        return $this->container['reasoncodeManualprice'];
    }

    /**
     * Sets reasoncodeManualprice
     *
     * @param string|null $reasoncodeManualprice Reason code for manual price change on item
     *
     * @return self
     */
    public function setReasoncodeManualprice($reasoncodeManualprice)
    {

        if (is_null($reasoncodeManualprice)) {
            throw new \InvalidArgumentException('non-nullable reasoncodeManualprice cannot be null');
        }

        $this->container['reasoncodeManualprice'] = $reasoncodeManualprice;

        return $this;
    }

    /**
     * Gets reasoncodeReturn
     *
     * @return string|null
     */
    public function getReasoncodeReturn()
    {
        return $this->container['reasoncodeReturn'];
    }

    /**
     * Sets reasoncodeReturn
     *
     * @param string|null $reasoncodeReturn Reason code for return of item (Either reclaim or refund)
     *
     * @return self
     */
    public function setReasoncodeReturn($reasoncodeReturn)
    {

        if (is_null($reasoncodeReturn)) {
            throw new \InvalidArgumentException('non-nullable reasoncodeReturn cannot be null');
        }

        $this->container['reasoncodeReturn'] = $reasoncodeReturn;

        return $this;
    }

    /**
     * Gets returnWarehouseid
     *
     * @return string|null
     */
    public function getReturnWarehouseid()
    {
        return $this->container['returnWarehouseid'];
    }

    /**
     * Sets returnWarehouseid
     *
     * @param string|null $returnWarehouseid ID for the warehouse that the item was returned to (if other than the register warehouse)
     *
     * @return self
     */
    public function setReturnWarehouseid($returnWarehouseid)
    {

        if (is_null($returnWarehouseid)) {
            throw new \InvalidArgumentException('non-nullable returnWarehouseid cannot be null');
        }

        $this->container['returnWarehouseid'] = $returnWarehouseid;

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


