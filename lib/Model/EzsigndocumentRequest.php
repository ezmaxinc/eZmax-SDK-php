<?php
/**
 * EzsigndocumentRequest
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
 * The version of the OpenAPI document: 1.0.17
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
 * EzsigndocumentRequest Class Doc Comment
 *
 * @category Class
 * @description An Ezsigndocument Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class EzsigndocumentRequest implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigndocument-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'eEzsigndocumentSource' => 'string',
        'eEzsigndocumentFormat' => 'string',
        'sEzsigndocumentBase64' => 'string',
        'fkiEzsignfolderID' => 'int',
        'dtEzsigndocumentDuedate' => 'string',
        'fkiLanguageID' => 'int',
        'sEzsigndocumentFilename' => 'string',
        'sEzsigndocumentName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'eEzsigndocumentSource' => null,
        'eEzsigndocumentFormat' => null,
        'sEzsigndocumentBase64' => 'byte',
        'fkiEzsignfolderID' => null,
        'dtEzsigndocumentDuedate' => null,
        'fkiLanguageID' => null,
        'sEzsigndocumentFilename' => null,
        'sEzsigndocumentName' => null
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
        'eEzsigndocumentSource' => 'eEzsigndocumentSource',
        'eEzsigndocumentFormat' => 'eEzsigndocumentFormat',
        'sEzsigndocumentBase64' => 'sEzsigndocumentBase64',
        'fkiEzsignfolderID' => 'fkiEzsignfolderID',
        'dtEzsigndocumentDuedate' => 'dtEzsigndocumentDuedate',
        'fkiLanguageID' => 'fkiLanguageID',
        'sEzsigndocumentFilename' => 'sEzsigndocumentFilename',
        'sEzsigndocumentName' => 'sEzsigndocumentName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eEzsigndocumentSource' => 'setEEzsigndocumentSource',
        'eEzsigndocumentFormat' => 'setEEzsigndocumentFormat',
        'sEzsigndocumentBase64' => 'setSEzsigndocumentBase64',
        'fkiEzsignfolderID' => 'setFkiEzsignfolderID',
        'dtEzsigndocumentDuedate' => 'setDtEzsigndocumentDuedate',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sEzsigndocumentFilename' => 'setSEzsigndocumentFilename',
        'sEzsigndocumentName' => 'setSEzsigndocumentName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eEzsigndocumentSource' => 'getEEzsigndocumentSource',
        'eEzsigndocumentFormat' => 'getEEzsigndocumentFormat',
        'sEzsigndocumentBase64' => 'getSEzsigndocumentBase64',
        'fkiEzsignfolderID' => 'getFkiEzsignfolderID',
        'dtEzsigndocumentDuedate' => 'getDtEzsigndocumentDuedate',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sEzsigndocumentFilename' => 'getSEzsigndocumentFilename',
        'sEzsigndocumentName' => 'getSEzsigndocumentName'
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

    const E_EZSIGNDOCUMENT_SOURCE_BASE64 = 'Base64';
    const E_EZSIGNDOCUMENT_FORMAT_PDF = 'Pdf';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEEzsigndocumentSourceAllowableValues()
    {
        return [
            self::E_EZSIGNDOCUMENT_SOURCE_BASE64,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEEzsigndocumentFormatAllowableValues()
    {
        return [
            self::E_EZSIGNDOCUMENT_FORMAT_PDF,
        ];
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
        $this->container['eEzsigndocumentSource'] = $data['eEzsigndocumentSource'] ?? null;
        $this->container['eEzsigndocumentFormat'] = $data['eEzsigndocumentFormat'] ?? null;
        $this->container['sEzsigndocumentBase64'] = $data['sEzsigndocumentBase64'] ?? null;
        $this->container['fkiEzsignfolderID'] = $data['fkiEzsignfolderID'] ?? null;
        $this->container['dtEzsigndocumentDuedate'] = $data['dtEzsigndocumentDuedate'] ?? null;
        $this->container['fkiLanguageID'] = $data['fkiLanguageID'] ?? null;
        $this->container['sEzsigndocumentFilename'] = $data['sEzsigndocumentFilename'] ?? null;
        $this->container['sEzsigndocumentName'] = $data['sEzsigndocumentName'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['eEzsigndocumentSource'] === null) {
            $invalidProperties[] = "'eEzsigndocumentSource' can't be null";
        }
        $allowedValues = $this->getEEzsigndocumentSourceAllowableValues();
        if (!is_null($this->container['eEzsigndocumentSource']) && !in_array($this->container['eEzsigndocumentSource'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'eEzsigndocumentSource', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['eEzsigndocumentFormat'] === null) {
            $invalidProperties[] = "'eEzsigndocumentFormat' can't be null";
        }
        $allowedValues = $this->getEEzsigndocumentFormatAllowableValues();
        if (!is_null($this->container['eEzsigndocumentFormat']) && !in_array($this->container['eEzsigndocumentFormat'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'eEzsigndocumentFormat', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fkiEzsignfolderID'] === null) {
            $invalidProperties[] = "'fkiEzsignfolderID' can't be null";
        }
        if (($this->container['fkiEzsignfolderID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiEzsignfolderID', must be bigger than or equal to 1.";
        }

        if ($this->container['dtEzsigndocumentDuedate'] === null) {
            $invalidProperties[] = "'dtEzsigndocumentDuedate' can't be null";
        }
        if ($this->container['fkiLanguageID'] === null) {
            $invalidProperties[] = "'fkiLanguageID' can't be null";
        }
        if (($this->container['fkiLanguageID'] > 2)) {
            $invalidProperties[] = "invalid value for 'fkiLanguageID', must be smaller than or equal to 2.";
        }

        if (($this->container['fkiLanguageID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiLanguageID', must be bigger than or equal to 1.";
        }

        if ($this->container['sEzsigndocumentFilename'] === null) {
            $invalidProperties[] = "'sEzsigndocumentFilename' can't be null";
        }
        if ($this->container['sEzsigndocumentName'] === null) {
            $invalidProperties[] = "'sEzsigndocumentName' can't be null";
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
     * Gets eEzsigndocumentSource
     *
     * @return string
     */
    public function getEEzsigndocumentSource()
    {
        return $this->container['eEzsigndocumentSource'];
    }

    /**
     * Sets eEzsigndocumentSource
     *
     * @param string $eEzsigndocumentSource Indicates where to look for the document binary content.
     *
     * @return self
     */
    public function setEEzsigndocumentSource($eEzsigndocumentSource)
    {
        $allowedValues = $this->getEEzsigndocumentSourceAllowableValues();
        if (!in_array($eEzsigndocumentSource, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'eEzsigndocumentSource', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['eEzsigndocumentSource'] = $eEzsigndocumentSource;

        return $this;
    }

    /**
     * Gets eEzsigndocumentFormat
     *
     * @return string
     */
    public function getEEzsigndocumentFormat()
    {
        return $this->container['eEzsigndocumentFormat'];
    }

    /**
     * Sets eEzsigndocumentFormat
     *
     * @param string $eEzsigndocumentFormat Indicates the format of the document.
     *
     * @return self
     */
    public function setEEzsigndocumentFormat($eEzsigndocumentFormat)
    {
        $allowedValues = $this->getEEzsigndocumentFormatAllowableValues();
        if (!in_array($eEzsigndocumentFormat, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'eEzsigndocumentFormat', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['eEzsigndocumentFormat'] = $eEzsigndocumentFormat;

        return $this;
    }

    /**
     * Gets sEzsigndocumentBase64
     *
     * @return string|null
     */
    public function getSEzsigndocumentBase64()
    {
        return $this->container['sEzsigndocumentBase64'];
    }

    /**
     * Sets sEzsigndocumentBase64
     *
     * @param string|null $sEzsigndocumentBase64 The Base64 encoded binary content of the document.  This field is Required when eEzsigndocumentSource = Base64.
     *
     * @return self
     */
    public function setSEzsigndocumentBase64($sEzsigndocumentBase64)
    {
        $this->container['sEzsigndocumentBase64'] = $sEzsigndocumentBase64;

        return $this;
    }

    /**
     * Gets fkiEzsignfolderID
     *
     * @return int
     */
    public function getFkiEzsignfolderID()
    {
        return $this->container['fkiEzsignfolderID'];
    }

    /**
     * Sets fkiEzsignfolderID
     *
     * @param int $fkiEzsignfolderID A reference to a valid Ezsignfolder.  That value is returned after a successful Ezsignfolder Creation.
     *
     * @return self
     */
    public function setFkiEzsignfolderID($fkiEzsignfolderID)
    {

        if (($fkiEzsignfolderID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsignfolderID when calling EzsigndocumentRequest., must be bigger than or equal to 1.');
        }

        $this->container['fkiEzsignfolderID'] = $fkiEzsignfolderID;

        return $this;
    }

    /**
     * Gets dtEzsigndocumentDuedate
     *
     * @return string
     */
    public function getDtEzsigndocumentDuedate()
    {
        return $this->container['dtEzsigndocumentDuedate'];
    }

    /**
     * Sets dtEzsigndocumentDuedate
     *
     * @param string $dtEzsigndocumentDuedate Represent a Date Time. The timezone is the one configured in the User's profile.
     *
     * @return self
     */
    public function setDtEzsigndocumentDuedate($dtEzsigndocumentDuedate)
    {
        $this->container['dtEzsigndocumentDuedate'] = $dtEzsigndocumentDuedate;

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
     * @param int $fkiLanguageID The unique ID of the Language.  Valid values:  |Value|Description| |-|-| |1|French| |2|English|
     *
     * @return self
     */
    public function setFkiLanguageID($fkiLanguageID)
    {

        if (($fkiLanguageID > 2)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigndocumentRequest., must be smaller than or equal to 2.');
        }
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigndocumentRequest., must be bigger than or equal to 1.');
        }

        $this->container['fkiLanguageID'] = $fkiLanguageID;

        return $this;
    }

    /**
     * Gets sEzsigndocumentFilename
     *
     * @return string
     */
    public function getSEzsigndocumentFilename()
    {
        return $this->container['sEzsigndocumentFilename'];
    }

    /**
     * Sets sEzsigndocumentFilename
     *
     * @param string $sEzsigndocumentFilename The actual file name that will be used when downloading or attaching to an email.
     *
     * @return self
     */
    public function setSEzsigndocumentFilename($sEzsigndocumentFilename)
    {
        $this->container['sEzsigndocumentFilename'] = $sEzsigndocumentFilename;

        return $this;
    }

    /**
     * Gets sEzsigndocumentName
     *
     * @return string
     */
    public function getSEzsigndocumentName()
    {
        return $this->container['sEzsigndocumentName'];
    }

    /**
     * Sets sEzsigndocumentName
     *
     * @param string $sEzsigndocumentName The name of the document that will be presented to Ezsignfoldersignerassociations
     *
     * @return self
     */
    public function setSEzsigndocumentName($sEzsigndocumentName)
    {
        $this->container['sEzsigndocumentName'] = $sEzsigndocumentName;

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
        return isset($this->container[$offset]) ?? null;
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


