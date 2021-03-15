<?php
/**
 * EzsigndocumentGetObjectV1ResponseMPayload
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
 * EzsigndocumentGetObjectV1ResponseMPayload Class Doc Comment
 *
 * @category Class
 * @description Payload for the /1/object/ezsigndocument/getObject API Request
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class EzsigndocumentGetObjectV1ResponseMPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsigndocument-getObject-v1-Response-mPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiEzsignfolderID' => 'int',
        'dtEzsigndocumentDuedate' => 'string',
        'fkiLanguageID' => 'int',
        'sEzsigndocumentName' => 'string',
        'pkiEzsigndocumentID' => 'int',
        'eEzsigndocumentStep' => '\eZmaxAPI\Model\FieldEEzsigndocumentStep',
        'dtEzsigndocumentFirstsend' => 'string',
        'dtEzsigndocumentLastsend' => 'string',
        'iEzsigndocumentOrder' => 'int',
        'iEzsigndocumentPagetotal' => 'int',
        'iEzsigndocumentSignaturesigned' => 'int',
        'iEzsigndocumentSignaturetotal' => 'int',
        'sEzsigndocumentMD5initial' => 'string',
        'sEzsigndocumentMD5signed' => 'string',
        'objAudit' => '\eZmaxAPI\Model\CommonAudit'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiEzsignfolderID' => null,
        'dtEzsigndocumentDuedate' => null,
        'fkiLanguageID' => null,
        'sEzsigndocumentName' => null,
        'pkiEzsigndocumentID' => null,
        'eEzsigndocumentStep' => null,
        'dtEzsigndocumentFirstsend' => null,
        'dtEzsigndocumentLastsend' => null,
        'iEzsigndocumentOrder' => null,
        'iEzsigndocumentPagetotal' => null,
        'iEzsigndocumentSignaturesigned' => null,
        'iEzsigndocumentSignaturetotal' => 'int32',
        'sEzsigndocumentMD5initial' => null,
        'sEzsigndocumentMD5signed' => null,
        'objAudit' => null
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
        'fkiEzsignfolderID' => 'fkiEzsignfolderID',
        'dtEzsigndocumentDuedate' => 'dtEzsigndocumentDuedate',
        'fkiLanguageID' => 'fkiLanguageID',
        'sEzsigndocumentName' => 'sEzsigndocumentName',
        'pkiEzsigndocumentID' => 'pkiEzsigndocumentID',
        'eEzsigndocumentStep' => 'eEzsigndocumentStep',
        'dtEzsigndocumentFirstsend' => 'dtEzsigndocumentFirstsend',
        'dtEzsigndocumentLastsend' => 'dtEzsigndocumentLastsend',
        'iEzsigndocumentOrder' => 'iEzsigndocumentOrder',
        'iEzsigndocumentPagetotal' => 'iEzsigndocumentPagetotal',
        'iEzsigndocumentSignaturesigned' => 'iEzsigndocumentSignaturesigned',
        'iEzsigndocumentSignaturetotal' => 'iEzsigndocumentSignaturetotal',
        'sEzsigndocumentMD5initial' => 'sEzsigndocumentMD5initial',
        'sEzsigndocumentMD5signed' => 'sEzsigndocumentMD5signed',
        'objAudit' => 'objAudit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiEzsignfolderID' => 'setFkiEzsignfolderID',
        'dtEzsigndocumentDuedate' => 'setDtEzsigndocumentDuedate',
        'fkiLanguageID' => 'setFkiLanguageID',
        'sEzsigndocumentName' => 'setSEzsigndocumentName',
        'pkiEzsigndocumentID' => 'setPkiEzsigndocumentID',
        'eEzsigndocumentStep' => 'setEEzsigndocumentStep',
        'dtEzsigndocumentFirstsend' => 'setDtEzsigndocumentFirstsend',
        'dtEzsigndocumentLastsend' => 'setDtEzsigndocumentLastsend',
        'iEzsigndocumentOrder' => 'setIEzsigndocumentOrder',
        'iEzsigndocumentPagetotal' => 'setIEzsigndocumentPagetotal',
        'iEzsigndocumentSignaturesigned' => 'setIEzsigndocumentSignaturesigned',
        'iEzsigndocumentSignaturetotal' => 'setIEzsigndocumentSignaturetotal',
        'sEzsigndocumentMD5initial' => 'setSEzsigndocumentMD5initial',
        'sEzsigndocumentMD5signed' => 'setSEzsigndocumentMD5signed',
        'objAudit' => 'setObjAudit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiEzsignfolderID' => 'getFkiEzsignfolderID',
        'dtEzsigndocumentDuedate' => 'getDtEzsigndocumentDuedate',
        'fkiLanguageID' => 'getFkiLanguageID',
        'sEzsigndocumentName' => 'getSEzsigndocumentName',
        'pkiEzsigndocumentID' => 'getPkiEzsigndocumentID',
        'eEzsigndocumentStep' => 'getEEzsigndocumentStep',
        'dtEzsigndocumentFirstsend' => 'getDtEzsigndocumentFirstsend',
        'dtEzsigndocumentLastsend' => 'getDtEzsigndocumentLastsend',
        'iEzsigndocumentOrder' => 'getIEzsigndocumentOrder',
        'iEzsigndocumentPagetotal' => 'getIEzsigndocumentPagetotal',
        'iEzsigndocumentSignaturesigned' => 'getIEzsigndocumentSignaturesigned',
        'iEzsigndocumentSignaturetotal' => 'getIEzsigndocumentSignaturetotal',
        'sEzsigndocumentMD5initial' => 'getSEzsigndocumentMD5initial',
        'sEzsigndocumentMD5signed' => 'getSEzsigndocumentMD5signed',
        'objAudit' => 'getObjAudit'
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
        $this->container['fkiEzsignfolderID'] = $data['fkiEzsignfolderID'] ?? null;
        $this->container['dtEzsigndocumentDuedate'] = $data['dtEzsigndocumentDuedate'] ?? null;
        $this->container['fkiLanguageID'] = $data['fkiLanguageID'] ?? null;
        $this->container['sEzsigndocumentName'] = $data['sEzsigndocumentName'] ?? null;
        $this->container['pkiEzsigndocumentID'] = $data['pkiEzsigndocumentID'] ?? null;
        $this->container['eEzsigndocumentStep'] = $data['eEzsigndocumentStep'] ?? null;
        $this->container['dtEzsigndocumentFirstsend'] = $data['dtEzsigndocumentFirstsend'] ?? null;
        $this->container['dtEzsigndocumentLastsend'] = $data['dtEzsigndocumentLastsend'] ?? null;
        $this->container['iEzsigndocumentOrder'] = $data['iEzsigndocumentOrder'] ?? null;
        $this->container['iEzsigndocumentPagetotal'] = $data['iEzsigndocumentPagetotal'] ?? null;
        $this->container['iEzsigndocumentSignaturesigned'] = $data['iEzsigndocumentSignaturesigned'] ?? null;
        $this->container['iEzsigndocumentSignaturetotal'] = $data['iEzsigndocumentSignaturetotal'] ?? null;
        $this->container['sEzsigndocumentMD5initial'] = $data['sEzsigndocumentMD5initial'] ?? null;
        $this->container['sEzsigndocumentMD5signed'] = $data['sEzsigndocumentMD5signed'] ?? null;
        $this->container['objAudit'] = $data['objAudit'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fkiEzsignfolderID'] === null) {
            $invalidProperties[] = "'fkiEzsignfolderID' can't be null";
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

        if ($this->container['sEzsigndocumentName'] === null) {
            $invalidProperties[] = "'sEzsigndocumentName' can't be null";
        }
        if ($this->container['pkiEzsigndocumentID'] === null) {
            $invalidProperties[] = "'pkiEzsigndocumentID' can't be null";
        }
        if ($this->container['eEzsigndocumentStep'] === null) {
            $invalidProperties[] = "'eEzsigndocumentStep' can't be null";
        }
        if ($this->container['dtEzsigndocumentFirstsend'] === null) {
            $invalidProperties[] = "'dtEzsigndocumentFirstsend' can't be null";
        }
        if ($this->container['dtEzsigndocumentLastsend'] === null) {
            $invalidProperties[] = "'dtEzsigndocumentLastsend' can't be null";
        }
        if ($this->container['iEzsigndocumentOrder'] === null) {
            $invalidProperties[] = "'iEzsigndocumentOrder' can't be null";
        }
        if ($this->container['iEzsigndocumentPagetotal'] === null) {
            $invalidProperties[] = "'iEzsigndocumentPagetotal' can't be null";
        }
        if ($this->container['iEzsigndocumentSignaturesigned'] === null) {
            $invalidProperties[] = "'iEzsigndocumentSignaturesigned' can't be null";
        }
        if ($this->container['iEzsigndocumentSignaturetotal'] === null) {
            $invalidProperties[] = "'iEzsigndocumentSignaturetotal' can't be null";
        }
        if ($this->container['sEzsigndocumentMD5initial'] === null) {
            $invalidProperties[] = "'sEzsigndocumentMD5initial' can't be null";
        }
        if ($this->container['sEzsigndocumentMD5signed'] === null) {
            $invalidProperties[] = "'sEzsigndocumentMD5signed' can't be null";
        }
        if ($this->container['objAudit'] === null) {
            $invalidProperties[] = "'objAudit' can't be null";
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
     * @param int $fkiEzsignfolderID The unique ID of the Ezsignfolder
     *
     * @return self
     */
    public function setFkiEzsignfolderID($fkiEzsignfolderID)
    {
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
     * @param string $dtEzsigndocumentDuedate The maximum date and time at which the document can be signed.
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
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigndocumentGetObjectV1ResponseMPayload., must be smaller than or equal to 2.');
        }
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsigndocumentGetObjectV1ResponseMPayload., must be bigger than or equal to 1.');
        }

        $this->container['fkiLanguageID'] = $fkiLanguageID;

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
     * Gets pkiEzsigndocumentID
     *
     * @return int
     */
    public function getPkiEzsigndocumentID()
    {
        return $this->container['pkiEzsigndocumentID'];
    }

    /**
     * Sets pkiEzsigndocumentID
     *
     * @param int $pkiEzsigndocumentID The unique ID of the Ezsigntemplate
     *
     * @return self
     */
    public function setPkiEzsigndocumentID($pkiEzsigndocumentID)
    {
        $this->container['pkiEzsigndocumentID'] = $pkiEzsigndocumentID;

        return $this;
    }

    /**
     * Gets eEzsigndocumentStep
     *
     * @return \eZmaxAPI\Model\FieldEEzsigndocumentStep
     */
    public function getEEzsigndocumentStep()
    {
        return $this->container['eEzsigndocumentStep'];
    }

    /**
     * Sets eEzsigndocumentStep
     *
     * @param \eZmaxAPI\Model\FieldEEzsigndocumentStep $eEzsigndocumentStep eEzsigndocumentStep
     *
     * @return self
     */
    public function setEEzsigndocumentStep($eEzsigndocumentStep)
    {
        $this->container['eEzsigndocumentStep'] = $eEzsigndocumentStep;

        return $this;
    }

    /**
     * Gets dtEzsigndocumentFirstsend
     *
     * @return string
     */
    public function getDtEzsigndocumentFirstsend()
    {
        return $this->container['dtEzsigndocumentFirstsend'];
    }

    /**
     * Sets dtEzsigndocumentFirstsend
     *
     * @param string $dtEzsigndocumentFirstsend The date and time when the Ezsigndocument was first sent.
     *
     * @return self
     */
    public function setDtEzsigndocumentFirstsend($dtEzsigndocumentFirstsend)
    {
        $this->container['dtEzsigndocumentFirstsend'] = $dtEzsigndocumentFirstsend;

        return $this;
    }

    /**
     * Gets dtEzsigndocumentLastsend
     *
     * @return string
     */
    public function getDtEzsigndocumentLastsend()
    {
        return $this->container['dtEzsigndocumentLastsend'];
    }

    /**
     * Sets dtEzsigndocumentLastsend
     *
     * @param string $dtEzsigndocumentLastsend The date and time when the Ezsigndocument was sent the last time.
     *
     * @return self
     */
    public function setDtEzsigndocumentLastsend($dtEzsigndocumentLastsend)
    {
        $this->container['dtEzsigndocumentLastsend'] = $dtEzsigndocumentLastsend;

        return $this;
    }

    /**
     * Gets iEzsigndocumentOrder
     *
     * @return int
     */
    public function getIEzsigndocumentOrder()
    {
        return $this->container['iEzsigndocumentOrder'];
    }

    /**
     * Sets iEzsigndocumentOrder
     *
     * @param int $iEzsigndocumentOrder The order in which the Ezsigndocument will be presented to the signatory in the Ezsignfolder.
     *
     * @return self
     */
    public function setIEzsigndocumentOrder($iEzsigndocumentOrder)
    {
        $this->container['iEzsigndocumentOrder'] = $iEzsigndocumentOrder;

        return $this;
    }

    /**
     * Gets iEzsigndocumentPagetotal
     *
     * @return int
     */
    public function getIEzsigndocumentPagetotal()
    {
        return $this->container['iEzsigndocumentPagetotal'];
    }

    /**
     * Sets iEzsigndocumentPagetotal
     *
     * @param int $iEzsigndocumentPagetotal The number of pages in the Ezsigndocument.
     *
     * @return self
     */
    public function setIEzsigndocumentPagetotal($iEzsigndocumentPagetotal)
    {
        $this->container['iEzsigndocumentPagetotal'] = $iEzsigndocumentPagetotal;

        return $this;
    }

    /**
     * Gets iEzsigndocumentSignaturesigned
     *
     * @return int
     */
    public function getIEzsigndocumentSignaturesigned()
    {
        return $this->container['iEzsigndocumentSignaturesigned'];
    }

    /**
     * Sets iEzsigndocumentSignaturesigned
     *
     * @param int $iEzsigndocumentSignaturesigned The number of signatures that were signed in the document.
     *
     * @return self
     */
    public function setIEzsigndocumentSignaturesigned($iEzsigndocumentSignaturesigned)
    {
        $this->container['iEzsigndocumentSignaturesigned'] = $iEzsigndocumentSignaturesigned;

        return $this;
    }

    /**
     * Gets iEzsigndocumentSignaturetotal
     *
     * @return int
     */
    public function getIEzsigndocumentSignaturetotal()
    {
        return $this->container['iEzsigndocumentSignaturetotal'];
    }

    /**
     * Sets iEzsigndocumentSignaturetotal
     *
     * @param int $iEzsigndocumentSignaturetotal The number of total signatures that were requested in the Ezsigndocument.
     *
     * @return self
     */
    public function setIEzsigndocumentSignaturetotal($iEzsigndocumentSignaturetotal)
    {
        $this->container['iEzsigndocumentSignaturetotal'] = $iEzsigndocumentSignaturetotal;

        return $this;
    }

    /**
     * Gets sEzsigndocumentMD5initial
     *
     * @return string
     */
    public function getSEzsigndocumentMD5initial()
    {
        return $this->container['sEzsigndocumentMD5initial'];
    }

    /**
     * Sets sEzsigndocumentMD5initial
     *
     * @param string $sEzsigndocumentMD5initial MD5 Hash of the initial PDF Document before signatures were applied to it.
     *
     * @return self
     */
    public function setSEzsigndocumentMD5initial($sEzsigndocumentMD5initial)
    {
        $this->container['sEzsigndocumentMD5initial'] = $sEzsigndocumentMD5initial;

        return $this;
    }

    /**
     * Gets sEzsigndocumentMD5signed
     *
     * @return string
     */
    public function getSEzsigndocumentMD5signed()
    {
        return $this->container['sEzsigndocumentMD5signed'];
    }

    /**
     * Sets sEzsigndocumentMD5signed
     *
     * @param string $sEzsigndocumentMD5signed MD5 Hash of the final PDF Document after all signatures were applied to it.
     *
     * @return self
     */
    public function setSEzsigndocumentMD5signed($sEzsigndocumentMD5signed)
    {
        $this->container['sEzsigndocumentMD5signed'] = $sEzsigndocumentMD5signed;

        return $this;
    }

    /**
     * Gets objAudit
     *
     * @return \eZmaxAPI\Model\CommonAudit
     */
    public function getObjAudit()
    {
        return $this->container['objAudit'];
    }

    /**
     * Sets objAudit
     *
     * @param \eZmaxAPI\Model\CommonAudit $objAudit objAudit
     *
     * @return self
     */
    public function setObjAudit($objAudit)
    {
        $this->container['objAudit'] = $objAudit;

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


