<?php
/**
 * EzsignfolderRequest
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
 * This API expose all the functionnalities for the eZmax and eZsign application.  We provide SDKs for customers. They are generated using OpenAPI codegen, we encourage customers to use them as we also provide samples for them.  You can choose to build your own implementation manually or can use any compatible OpenAPI 3.0 generator like Swagger Codegen, OpenAPI codegen or any commercial generators.  If you need helping understanding how to use this API, don't waste too much time looging for it. Contact support-api@ezmax.ca, we're here to help. We are developpers so we know programmers don't like bad documentation. If you don't find what you need in the documentation, let us know, we'll improve it and put you rapidly up on track.
 *
 * The version of the OpenAPI document: 1.0.0
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
 * EzsignfolderRequest Class Doc Comment
 *
 * @category Class
 * @description An Ezsignfolder Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EzsignfolderRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignfolder-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiEzsignfoldertypeID' => 'int',
        'fkiLanguageID' => 'int',
        'sEzsignfolderDescription' => 'string',
        'tEzsignfolderNote' => 'string',
        'fkiEzsigntsarequirementID' => 'int',
        'eObjectType' => '\eZmaxAPI\Model\CommonEObjectType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'fkiEzsignfoldertypeID' => null,
        'fkiLanguageID' => null,
        'sEzsignfolderDescription' => null,
        'tEzsignfolderNote' => null,
        'fkiEzsigntsarequirementID' => null,
        'eObjectType' => null
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
        'fkiEzsignfoldertypeID' => 'fkiEzsignfoldertypeID',
        'fkiLanguageID' => 'fkiLanguageID',
        'sEzsignfolderDescription' => 'sEzsignfolderDescription',
        'tEzsignfolderNote' => 'tEzsignfolderNote',
        'fkiEzsigntsarequirementID' => 'fkiEzsigntsarequirementID',
        'eObjectType' => 'eObjectType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sEzsignfolderDescription' => 'setSEzsignfolderDescription',
        'tEzsignfolderNote' => 'setTEzsignfolderNote',
        'fkiEzsigntsarequirementID' => 'setFkiEzsigntsarequirementID',
        'eObjectType' => 'setEObjectType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sEzsignfolderDescription' => 'getSEzsignfolderDescription',
        'tEzsignfolderNote' => 'getTEzsignfolderNote',
        'fkiEzsigntsarequirementID' => 'getFkiEzsigntsarequirementID',
        'eObjectType' => 'getEObjectType'
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
        $this->container['fkiEzsignfoldertypeID'] = isset($data['fkiEzsignfoldertypeID']) ? $data['fkiEzsignfoldertypeID'] : null;
        $this->container['fkiLanguageID'] = isset($data['fkiLanguageID']) ? $data['fkiLanguageID'] : null;
        $this->container['sEzsignfolderDescription'] = isset($data['sEzsignfolderDescription']) ? $data['sEzsignfolderDescription'] : null;
        $this->container['tEzsignfolderNote'] = isset($data['tEzsignfolderNote']) ? $data['tEzsignfolderNote'] : null;
        $this->container['fkiEzsigntsarequirementID'] = isset($data['fkiEzsigntsarequirementID']) ? $data['fkiEzsigntsarequirementID'] : null;
        $this->container['eObjectType'] = isset($data['eObjectType']) ? $data['eObjectType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fkiEzsignfoldertypeID'] === null) {
            $invalidProperties[] = "'fkiEzsignfoldertypeID' can't be null";
        }
        if ($this->container['fkiLanguageID'] === null) {
            $invalidProperties[] = "'fkiLanguageID' can't be null";
        }
        if ($this->container['sEzsignfolderDescription'] === null) {
            $invalidProperties[] = "'sEzsignfolderDescription' can't be null";
        }
        if ($this->container['tEzsignfolderNote'] === null) {
            $invalidProperties[] = "'tEzsignfolderNote' can't be null";
        }
        if ($this->container['fkiEzsigntsarequirementID'] === null) {
            $invalidProperties[] = "'fkiEzsigntsarequirementID' can't be null";
        }
        if ($this->container['eObjectType'] === null) {
            $invalidProperties[] = "'eObjectType' can't be null";
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
     * Gets fkiEzsignfoldertypeID
     *
     * @return int
     */
    public function getFkiEzsignfoldertypeID()
    {
        return $this->container['fkiEzsignfoldertypeID'];
    }

    /**
     * Sets fkiEzsignfoldertypeID
     *
     * @param int $fkiEzsignfoldertypeID The Ezsign Folder Type ID. This value can be queried by the API and is also visible in the admin interface.  There are two types of Ezsignfoldertype. **User** and **Shared**. **User** can only be seen by the user who created the folder or its assistants. Access to **Shared** folders are configurable for access and email delivery. You should typically choose a **Shared** type here.
     *
     * @return $this
     */
    public function setFkiEzsignfoldertypeID($fkiEzsignfoldertypeID)
    {
        $this->container['fkiEzsignfoldertypeID'] = $fkiEzsignfoldertypeID;

        return $this;
    }

    /**
     * Gets fkiLanguageID
     *
     * @return int
     */
    public function getFkiLanguageID()
    {
        return $this->container['fkiLanguageID'];
    }

    /**
     * Sets fkiLanguageID
     *
     * @param int $fkiLanguageID The ID of the language, Valid values are: 1. French 2. English
     *
     * @return $this
     */
    public function setFkiLanguageID($fkiLanguageID)
    {
        $this->container['fkiLanguageID'] = $fkiLanguageID;

        return $this;
    }

    /**
     * Gets sEzsignfolderDescription
     *
     * @return string
     */
    public function getSEzsignfolderDescription()
    {
        return $this->container['sEzsignfolderDescription'];
    }

    /**
     * Sets sEzsignfolderDescription
     *
     * @param string $sEzsignfolderDescription The description of the Ezsign Folder
     *
     * @return $this
     */
    public function setSEzsignfolderDescription($sEzsignfolderDescription)
    {
        $this->container['sEzsignfolderDescription'] = $sEzsignfolderDescription;

        return $this;
    }

    /**
     * Gets tEzsignfolderNote
     *
     * @return string
     */
    public function getTEzsignfolderNote()
    {
        return $this->container['tEzsignfolderNote'];
    }

    /**
     * Sets tEzsignfolderNote
     *
     * @param string $tEzsignfolderNote Somes extra notes about the eZsign Folder
     *
     * @return $this
     */
    public function setTEzsignfolderNote($tEzsignfolderNote)
    {
        $this->container['tEzsignfolderNote'] = $tEzsignfolderNote;

        return $this;
    }

    /**
     * Gets fkiEzsigntsarequirementID
     *
     * @return int
     */
    public function getFkiEzsigntsarequirementID()
    {
        return $this->container['fkiEzsigntsarequirementID'];
    }

    /**
     * Sets fkiEzsigntsarequirementID
     *
     * @param int $fkiEzsigntsarequirementID Determine if a Time Stamping Authority should add a timestamp on each of the signature. Valid values are: 1. No. No TSA Timestamping will requested. This will make all signatures a lot faster since no round-trip to the TSA server will be required. Timestamping will be made using eZsign server's time. 2. Best effort. Timestamping from a Time Stamping Authority will be requested but is not mandatory. In the very improbable case it cannot be completed, the timestamping will be made using eZsign server's time. **Additional fee applies** 3. Mandatory. Timestamping from a Time Stamping Authority will be requested and is mandatory. In the very improbable case it cannot be completed, the signature will fail and the user will be asked to retry. **Additional fee applies**
     *
     * @return $this
     */
    public function setFkiEzsigntsarequirementID($fkiEzsigntsarequirementID)
    {
        $this->container['fkiEzsigntsarequirementID'] = $fkiEzsigntsarequirementID;

        return $this;
    }

    /**
     * Gets eObjectType
     *
     * @return \eZmaxAPI\Model\CommonEObjectType
     */
    public function getEObjectType()
    {
        return $this->container['eObjectType'];
    }

    /**
     * Sets eObjectType
     *
     * @param \eZmaxAPI\Model\CommonEObjectType $eObjectType eObjectType
     *
     * @return $this
     */
    public function setEObjectType($eObjectType)
    {
        $this->container['eObjectType'] = $eObjectType;

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


