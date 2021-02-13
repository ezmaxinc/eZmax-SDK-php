<?php
/**
 * PhoneRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eZmax API Definition
 *
 * This API expose all the functionnalities for the eZmax and eZsign application.
 *
 * The version of the OpenAPI document: 1.0.30
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;

use \ArrayAccess;
use \eZmaxAPI\ObjectSerializer;

/**
 * PhoneRequest Class Doc Comment
 *
 * @category Class
 * @description A Phone Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PhoneRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'phone-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiPhonetypeID' => 'int',
        'ePhoneType' => '\eZmaxAPI\Model\FieldEPhoneType',
        'sPhoneRegion' => 'string',
        'sPhoneExchange' => 'string',
        'sPhoneNumber' => 'string',
        'sPhoneInternational' => 'string',
        'sPhoneExtension' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiPhonetypeID' => null,
        'ePhoneType' => null,
        'sPhoneRegion' => null,
        'sPhoneExchange' => null,
        'sPhoneNumber' => null,
        'sPhoneInternational' => null,
        'sPhoneExtension' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'fkiPhonetypeID' => 'fkiPhonetypeID',
        'ePhoneType' => 'ePhoneType',
        'sPhoneRegion' => 'sPhoneRegion',
        'sPhoneExchange' => 'sPhoneExchange',
        'sPhoneNumber' => 'sPhoneNumber',
        'sPhoneInternational' => 'sPhoneInternational',
        'sPhoneExtension' => 'sPhoneExtension'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiPhonetypeID' => 'setFkiPhonetypeID',
        'ePhoneType' => 'setEPhoneType',
        'sPhoneRegion' => 'setSPhoneRegion',
        'sPhoneExchange' => 'setSPhoneExchange',
        'sPhoneNumber' => 'setSPhoneNumber',
        'sPhoneInternational' => 'setSPhoneInternational',
        'sPhoneExtension' => 'setSPhoneExtension'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiPhonetypeID' => 'getFkiPhonetypeID',
        'ePhoneType' => 'getEPhoneType',
        'sPhoneRegion' => 'getSPhoneRegion',
        'sPhoneExchange' => 'getSPhoneExchange',
        'sPhoneNumber' => 'getSPhoneNumber',
        'sPhoneInternational' => 'getSPhoneInternational',
        'sPhoneExtension' => 'getSPhoneExtension'
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
        $this->container['fkiPhonetypeID'] = $data['fkiPhonetypeID'] ?? null;
        $this->container['ePhoneType'] = $data['ePhoneType'] ?? null;
        $this->container['sPhoneRegion'] = $data['sPhoneRegion'] ?? null;
        $this->container['sPhoneExchange'] = $data['sPhoneExchange'] ?? null;
        $this->container['sPhoneNumber'] = $data['sPhoneNumber'] ?? null;
        $this->container['sPhoneInternational'] = $data['sPhoneInternational'] ?? null;
        $this->container['sPhoneExtension'] = $data['sPhoneExtension'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fkiPhonetypeID'] === null) {
            $invalidProperties[] = "'fkiPhonetypeID' can't be null";
        }
        if ($this->container['ePhoneType'] === null) {
            $invalidProperties[] = "'ePhoneType' can't be null";
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
     * Gets fkiPhonetypeID
     *
     * @return int
     */
    public function getFkiPhonetypeID()
    {
        return $this->container['fkiPhonetypeID'];
    }

    /**
     * Sets fkiPhonetypeID
     *
     * @param int $fkiPhonetypeID The unique ID of the Phonetype.  Valid values:  |Value|Description| |-|-| |1|Office| |2|Home| |3|Mobile| |4|Fax| |5|Pager| |6|Toll Free|
     *
     * @return self
     */
    public function setFkiPhonetypeID($fkiPhonetypeID)
    {
        $this->container['fkiPhonetypeID'] = $fkiPhonetypeID;

        return $this;
    }

    /**
     * Gets ePhoneType
     *
     * @return \eZmaxAPI\Model\FieldEPhoneType
     */
    public function getEPhoneType()
    {
        return $this->container['ePhoneType'];
    }

    /**
     * Sets ePhoneType
     *
     * @param \eZmaxAPI\Model\FieldEPhoneType $ePhoneType ePhoneType
     *
     * @return self
     */
    public function setEPhoneType($ePhoneType)
    {
        $this->container['ePhoneType'] = $ePhoneType;

        return $this;
    }

    /**
     * Gets sPhoneRegion
     *
     * @return string|null
     */
    public function getSPhoneRegion()
    {
        return $this->container['sPhoneRegion'];
    }

    /**
     * Sets sPhoneRegion
     *
     * @param string|null $sPhoneRegion The region of the phone number. (For a North America Number only)  The region is the \"514\" section in this sample phone number: (514) 990-1516 x123
     *
     * @return self
     */
    public function setSPhoneRegion($sPhoneRegion)
    {
        $this->container['sPhoneRegion'] = $sPhoneRegion;

        return $this;
    }

    /**
     * Gets sPhoneExchange
     *
     * @return string|null
     */
    public function getSPhoneExchange()
    {
        return $this->container['sPhoneExchange'];
    }

    /**
     * Sets sPhoneExchange
     *
     * @param string|null $sPhoneExchange The exchange of the phone number. (For a North America Number only)  The exchange is the \"990\" section in this sample phone number: (514) 990-1516 x123
     *
     * @return self
     */
    public function setSPhoneExchange($sPhoneExchange)
    {
        $this->container['sPhoneExchange'] = $sPhoneExchange;

        return $this;
    }

    /**
     * Gets sPhoneNumber
     *
     * @return string|null
     */
    public function getSPhoneNumber()
    {
        return $this->container['sPhoneNumber'];
    }

    /**
     * Sets sPhoneNumber
     *
     * @param string|null $sPhoneNumber The number of the phone number. (For a North America Number only)  The number is the \"1516\" section in this sample phone number: (514) 990-1516 x123
     *
     * @return self
     */
    public function setSPhoneNumber($sPhoneNumber)
    {
        $this->container['sPhoneNumber'] = $sPhoneNumber;

        return $this;
    }

    /**
     * Gets sPhoneInternational
     *
     * @return string|null
     */
    public function getSPhoneInternational()
    {
        return $this->container['sPhoneInternational'];
    }

    /**
     * Sets sPhoneInternational
     *
     * @param string|null $sPhoneInternational The international phone number. (For phone numbers outside of North)  Do not specify the \"011\" part of the phone number used to dial an international phone number from North America.  For example for this sample phone number \"+442071838750\", you would send \"442071838750\" without the \"+\" sign.
     *
     * @return self
     */
    public function setSPhoneInternational($sPhoneInternational)
    {
        $this->container['sPhoneInternational'] = $sPhoneInternational;

        return $this;
    }

    /**
     * Gets sPhoneExtension
     *
     * @return string|null
     */
    public function getSPhoneExtension()
    {
        return $this->container['sPhoneExtension'];
    }

    /**
     * Sets sPhoneExtension
     *
     * @param string|null $sPhoneExtension The extension of the phone number.  The extension is the \"123\" section in this sample phone number: (514) 990-1516 x123.  It can also be used with international phone numbers
     *
     * @return self
     */
    public function setSPhoneExtension($sPhoneExtension)
    {
        $this->container['sPhoneExtension'] = $sPhoneExtension;

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
        return json_encode(
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


