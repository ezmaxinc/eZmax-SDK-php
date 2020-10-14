<?php
/**
 * EzsignsignatureRequest
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
 * The version of the OpenAPI document: 1.0.18
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
 * EzsignsignatureRequest Class Doc Comment
 *
 * @category Class
 * @description An Ezsignsignature Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class EzsignsignatureRequest implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignsignature-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiEzsignfoldersignerassociationID' => 'int',
        'iEzsignpagePagenumber' => 'int',
        'iEzsignsignatureX' => 'int',
        'iEzsignsignatureY' => 'int',
        'iEzsignsignatureStep' => 'int',
        'eEzsignsignatureType' => 'string',
        'fkiEzsigndocumentID' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiEzsignfoldersignerassociationID' => null,
        'iEzsignpagePagenumber' => null,
        'iEzsignsignatureX' => null,
        'iEzsignsignatureY' => null,
        'iEzsignsignatureStep' => null,
        'eEzsignsignatureType' => null,
        'fkiEzsigndocumentID' => null
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
        'fkiEzsignfoldersignerassociationID' => 'fkiEzsignfoldersignerassociationID',
        'iEzsignpagePagenumber' => 'iEzsignpagePagenumber',
        'iEzsignsignatureX' => 'iEzsignsignatureX',
        'iEzsignsignatureY' => 'iEzsignsignatureY',
        'iEzsignsignatureStep' => 'iEzsignsignatureStep',
        'eEzsignsignatureType' => 'eEzsignsignatureType',
        'fkiEzsigndocumentID' => 'fkiEzsigndocumentID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiEzsignfoldersignerassociationID' => 'setFkiEzsignfoldersignerassociationID',
        'iEzsignpagePagenumber' => 'setIEzsignpagePagenumber',
        'iEzsignsignatureX' => 'setIEzsignsignatureX',
        'iEzsignsignatureY' => 'setIEzsignsignatureY',
        'iEzsignsignatureStep' => 'setIEzsignsignatureStep',
        'eEzsignsignatureType' => 'setEEzsignsignatureType',
        'fkiEzsigndocumentID' => 'setFkiEzsigndocumentID'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiEzsignfoldersignerassociationID' => 'getFkiEzsignfoldersignerassociationID',
        'iEzsignpagePagenumber' => 'getIEzsignpagePagenumber',
        'iEzsignsignatureX' => 'getIEzsignsignatureX',
        'iEzsignsignatureY' => 'getIEzsignsignatureY',
        'iEzsignsignatureStep' => 'getIEzsignsignatureStep',
        'eEzsignsignatureType' => 'getEEzsignsignatureType',
        'fkiEzsigndocumentID' => 'getFkiEzsigndocumentID'
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

    const E_EZSIGNSIGNATURE_TYPE_ACKNOWLEDGEMENT = 'Acknowledgement';
    const E_EZSIGNSIGNATURE_TYPE_HANDWRITTEN = 'Handwritten';
    const E_EZSIGNSIGNATURE_TYPE_INITIALS = 'Initials';
    const E_EZSIGNSIGNATURE_TYPE_NAME = 'Name';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEEzsignsignatureTypeAllowableValues()
    {
        return [
            self::E_EZSIGNSIGNATURE_TYPE_ACKNOWLEDGEMENT,
            self::E_EZSIGNSIGNATURE_TYPE_HANDWRITTEN,
            self::E_EZSIGNSIGNATURE_TYPE_INITIALS,
            self::E_EZSIGNSIGNATURE_TYPE_NAME,
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
        $this->container['fkiEzsignfoldersignerassociationID'] = $data['fkiEzsignfoldersignerassociationID'] ?? null;
        $this->container['iEzsignpagePagenumber'] = $data['iEzsignpagePagenumber'] ?? null;
        $this->container['iEzsignsignatureX'] = $data['iEzsignsignatureX'] ?? null;
        $this->container['iEzsignsignatureY'] = $data['iEzsignsignatureY'] ?? null;
        $this->container['iEzsignsignatureStep'] = $data['iEzsignsignatureStep'] ?? null;
        $this->container['eEzsignsignatureType'] = $data['eEzsignsignatureType'] ?? null;
        $this->container['fkiEzsigndocumentID'] = $data['fkiEzsigndocumentID'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fkiEzsignfoldersignerassociationID'] === null) {
            $invalidProperties[] = "'fkiEzsignfoldersignerassociationID' can't be null";
        }
        if ($this->container['iEzsignpagePagenumber'] === null) {
            $invalidProperties[] = "'iEzsignpagePagenumber' can't be null";
        }
        if ($this->container['iEzsignsignatureX'] === null) {
            $invalidProperties[] = "'iEzsignsignatureX' can't be null";
        }
        if ($this->container['iEzsignsignatureY'] === null) {
            $invalidProperties[] = "'iEzsignsignatureY' can't be null";
        }
        if ($this->container['iEzsignsignatureStep'] === null) {
            $invalidProperties[] = "'iEzsignsignatureStep' can't be null";
        }
        if ($this->container['eEzsignsignatureType'] === null) {
            $invalidProperties[] = "'eEzsignsignatureType' can't be null";
        }
        $allowedValues = $this->getEEzsignsignatureTypeAllowableValues();
        if (!is_null($this->container['eEzsignsignatureType']) && !in_array($this->container['eEzsignsignatureType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'eEzsignsignatureType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fkiEzsigndocumentID'] === null) {
            $invalidProperties[] = "'fkiEzsigndocumentID' can't be null";
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
     * Gets fkiEzsignfoldersignerassociationID
     *
     * @return int
     */
    public function getFkiEzsignfoldersignerassociationID()
    {
        return $this->container['fkiEzsignfoldersignerassociationID'];
    }

    /**
     * Sets fkiEzsignfoldersignerassociationID
     *
     * @param int $fkiEzsignfoldersignerassociationID A reference to a valid Ezsignfoldersignerassociation.  That value is returned after a successful Ezsignfoldersignerassociation Creation.
     *
     * @return self
     */
    public function setFkiEzsignfoldersignerassociationID($fkiEzsignfoldersignerassociationID)
    {
        $this->container['fkiEzsignfoldersignerassociationID'] = $fkiEzsignfoldersignerassociationID;

        return $this;
    }

    /**
     * Gets iEzsignpagePagenumber
     *
     * @return int
     */
    public function getIEzsignpagePagenumber()
    {
        return $this->container['iEzsignpagePagenumber'];
    }

    /**
     * Sets iEzsignpagePagenumber
     *
     * @param int $iEzsignpagePagenumber The page number in the document where to apply the signature
     *
     * @return self
     */
    public function setIEzsignpagePagenumber($iEzsignpagePagenumber)
    {
        $this->container['iEzsignpagePagenumber'] = $iEzsignpagePagenumber;

        return $this;
    }

    /**
     * Gets iEzsignsignatureX
     *
     * @return int
     */
    public function getIEzsignsignatureX()
    {
        return $this->container['iEzsignsignatureX'];
    }

    /**
     * Sets iEzsignsignatureX
     *
     * @param int $iEzsignsignatureX The X coordinate (Horizontal) where to put the signature block on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the signature block 2 inches from the left border of the page, you would use \"200\" for the X coordinate.
     *
     * @return self
     */
    public function setIEzsignsignatureX($iEzsignsignatureX)
    {
        $this->container['iEzsignsignatureX'] = $iEzsignsignatureX;

        return $this;
    }

    /**
     * Gets iEzsignsignatureY
     *
     * @return int
     */
    public function getIEzsignsignatureY()
    {
        return $this->container['iEzsignsignatureY'];
    }

    /**
     * Sets iEzsignsignatureY
     *
     * @param int $iEzsignsignatureY The Y coordinate (Vertical) where to put the signature block on the page.  Coordinate is calculated at 100dpi (dot per inch). So for example, if you want to put the signature block 3 inches from the top border of the page, you would use \"300\" for the Y coordinate.
     *
     * @return self
     */
    public function setIEzsignsignatureY($iEzsignsignatureY)
    {
        $this->container['iEzsignsignatureY'] = $iEzsignsignatureY;

        return $this;
    }

    /**
     * Gets iEzsignsignatureStep
     *
     * @return int
     */
    public function getIEzsignsignatureStep()
    {
        return $this->container['iEzsignsignatureStep'];
    }

    /**
     * Sets iEzsignsignatureStep
     *
     * @param int $iEzsignsignatureStep The step when the Ezsignsigner will be invited to sign.  For example, if you say iEzsignsignatureStep=2, that block of signature will be available for signature only after ALL the signatures in step 1 are completed.
     *
     * @return self
     */
    public function setIEzsignsignatureStep($iEzsignsignatureStep)
    {
        $this->container['iEzsignsignatureStep'] = $iEzsignsignatureStep;

        return $this;
    }

    /**
     * Gets eEzsignsignatureType
     *
     * @return string
     */
    public function getEEzsignsignatureType()
    {
        return $this->container['eEzsignsignatureType'];
    }

    /**
     * Sets eEzsignsignatureType
     *
     * @param string $eEzsignsignatureType The type of signature required.  1. **Acknowledgement** is for an acknowledgment of receipt. 2. **Handwritten** is for a handwritten kind of signature where users needs to \"draw\" their signature on screen. 3. **Initials** is a simple \"click to add initials\" block. 4. **Name** is a simple \"Click to sign\" block. This is the most common block of signature.
     *
     * @return self
     */
    public function setEEzsignsignatureType($eEzsignsignatureType)
    {
        $allowedValues = $this->getEEzsignsignatureTypeAllowableValues();
        if (!in_array($eEzsignsignatureType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'eEzsignsignatureType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['eEzsignsignatureType'] = $eEzsignsignatureType;

        return $this;
    }

    /**
     * Gets fkiEzsigndocumentID
     *
     * @return int
     */
    public function getFkiEzsigndocumentID()
    {
        return $this->container['fkiEzsigndocumentID'];
    }

    /**
     * Sets fkiEzsigndocumentID
     *
     * @param int $fkiEzsigndocumentID A reference to a valid Ezsigndocument.  That value is returned after a successful Ezsigndocumentation Creation.
     *
     * @return self
     */
    public function setFkiEzsigndocumentID($fkiEzsigndocumentID)
    {
        $this->container['fkiEzsigndocumentID'] = $fkiEzsigndocumentID;

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


