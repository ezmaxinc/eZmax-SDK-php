<?php
/**
 * CommonResponseObjDebugPayload
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
 * This API expose all the functionnalities for the eZmax and eZsign applications.
 *
 * The version of the OpenAPI document: 1.0.35
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
 * CommonResponseObjDebugPayload Class Doc Comment
 *
 * @category Class
 * @description This is a debug object containing debugging information on the actual function
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CommonResponseObjDebugPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Common-Response-objDebugPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'iVersionMin' => 'int',
        'iVersionMax' => 'int',
        'aRequiredPermissions' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'iVersionMin' => null,
        'iVersionMax' => null,
        'aRequiredPermissions' => null
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
        'iVersionMin' => 'iVersionMin',
        'iVersionMax' => 'iVersionMax',
        'aRequiredPermissions' => 'a_RequiredPermissions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iVersionMin' => 'setIVersionMin',
        'iVersionMax' => 'setIVersionMax',
        'aRequiredPermissions' => 'setARequiredPermissions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iVersionMin' => 'getIVersionMin',
        'iVersionMax' => 'getIVersionMax',
        'aRequiredPermissions' => 'getARequiredPermissions'
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
        $this->container['iVersionMin'] = $data['iVersionMin'] ?? null;
        $this->container['iVersionMax'] = $data['iVersionMax'] ?? null;
        $this->container['aRequiredPermissions'] = $data['aRequiredPermissions'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['iVersionMin'] === null) {
            $invalidProperties[] = "'iVersionMin' can't be null";
        }
        if ($this->container['iVersionMax'] === null) {
            $invalidProperties[] = "'iVersionMax' can't be null";
        }
        if ($this->container['aRequiredPermissions'] === null) {
            $invalidProperties[] = "'aRequiredPermissions' can't be null";
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
     * Gets iVersionMin
     *
     * @return int
     */
    public function getIVersionMin()
    {
        return $this->container['iVersionMin'];
    }

    /**
     * Sets iVersionMin
     *
     * @param int $iVersionMin The minimum version of the function that can be called
     *
     * @return self
     */
    public function setIVersionMin($iVersionMin)
    {
        $this->container['iVersionMin'] = $iVersionMin;

        return $this;
    }

    /**
     * Gets iVersionMax
     *
     * @return int
     */
    public function getIVersionMax()
    {
        return $this->container['iVersionMax'];
    }

    /**
     * Sets iVersionMax
     *
     * @param int $iVersionMax The maximum version of the function that can be called
     *
     * @return self
     */
    public function setIVersionMax($iVersionMax)
    {
        $this->container['iVersionMax'] = $iVersionMax;

        return $this;
    }

    /**
     * Gets aRequiredPermissions
     *
     * @return int[]
     */
    public function getARequiredPermissions()
    {
        return $this->container['aRequiredPermissions'];
    }

    /**
     * Sets aRequiredPermissions
     *
     * @param int[] $aRequiredPermissions An array of permissions required to access this function.  If the value \"0\" is present in the array, anyone can call this function.  You must have one of the permission to access the function. You don't need to have all of them.
     *
     * @return self
     */
    public function setARequiredPermissions($aRequiredPermissions)
    {
        $this->container['aRequiredPermissions'] = $aRequiredPermissions;

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


