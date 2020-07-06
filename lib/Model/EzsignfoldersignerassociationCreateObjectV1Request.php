<?php
/**
 * EzsignfoldersignerassociationCreateObjectV1Request
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
 * This API expose all the functionnalities for the eZmax and eZsign application.  We provide SDKs for customers. They are generated using OpenAPI codegen, we encourage customers to use them as we also provide samples for them.  You can choose to build your own implementation manually or can use any compatible OpenAPI 3.0 generator like Swagger Codegen, OpenAPI codegen or any commercial generators.  If you need helping understanding how to use this API, don't waste too much time looking for it. Contact support-api@ezmax.ca, we're here to help. We are developpers so we know programmers don't like bad documentation. If you don't find what you need in the documentation, let us know, we'll improve it and put you rapidly up on track.
 *
 * The version of the OpenAPI document: 1.0.2
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
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
 * EzsignfoldersignerassociationCreateObjectV1Request Class Doc Comment
 *
 * @category Class
 * @description Request for the /1/object/ezsignfoldersignerassociation/createObject API Request
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EzsignfoldersignerassociationCreateObjectV1Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignfoldersignerassociation-createObject-v1-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'objEzsignfoldersignerassociation' => '\eZmaxAPI\Model\EzsignfoldersignerassociationRequest',
        'objEzsignfoldersignerassociationCompound' => '\eZmaxAPI\Model\EzsignfoldersignerassociationRequestCompound'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'objEzsignfoldersignerassociation' => null,
        'objEzsignfoldersignerassociationCompound' => null
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
        'objEzsignfoldersignerassociation' => 'objEzsignfoldersignerassociation',
        'objEzsignfoldersignerassociationCompound' => 'objEzsignfoldersignerassociationCompound'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'objEzsignfoldersignerassociation' => 'setObjEzsignfoldersignerassociation',
        'objEzsignfoldersignerassociationCompound' => 'setObjEzsignfoldersignerassociationCompound'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'objEzsignfoldersignerassociation' => 'getObjEzsignfoldersignerassociation',
        'objEzsignfoldersignerassociationCompound' => 'getObjEzsignfoldersignerassociationCompound'
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
        $this->container['objEzsignfoldersignerassociation'] = isset($data['objEzsignfoldersignerassociation']) ? $data['objEzsignfoldersignerassociation'] : null;
        $this->container['objEzsignfoldersignerassociationCompound'] = isset($data['objEzsignfoldersignerassociationCompound']) ? $data['objEzsignfoldersignerassociationCompound'] : null;
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
     * Gets objEzsignfoldersignerassociation
     *
     * @return \eZmaxAPI\Model\EzsignfoldersignerassociationRequest|null
     */
    public function getObjEzsignfoldersignerassociation()
    {
        return $this->container['objEzsignfoldersignerassociation'];
    }

    /**
     * Sets objEzsignfoldersignerassociation
     *
     * @param \eZmaxAPI\Model\EzsignfoldersignerassociationRequest|null $objEzsignfoldersignerassociation objEzsignfoldersignerassociation
     *
     * @return $this
     */
    public function setObjEzsignfoldersignerassociation($objEzsignfoldersignerassociation)
    {
        $this->container['objEzsignfoldersignerassociation'] = $objEzsignfoldersignerassociation;

        return $this;
    }

    /**
     * Gets objEzsignfoldersignerassociationCompound
     *
     * @return \eZmaxAPI\Model\EzsignfoldersignerassociationRequestCompound|null
     */
    public function getObjEzsignfoldersignerassociationCompound()
    {
        return $this->container['objEzsignfoldersignerassociationCompound'];
    }

    /**
     * Sets objEzsignfoldersignerassociationCompound
     *
     * @param \eZmaxAPI\Model\EzsignfoldersignerassociationRequestCompound|null $objEzsignfoldersignerassociationCompound objEzsignfoldersignerassociationCompound
     *
     * @return $this
     */
    public function setObjEzsignfoldersignerassociationCompound($objEzsignfoldersignerassociationCompound)
    {
        $this->container['objEzsignfoldersignerassociationCompound'] = $objEzsignfoldersignerassociationCompound;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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

