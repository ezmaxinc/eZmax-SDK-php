<?php
/**
 * EzsignfolderResponse
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
 * The version of the OpenAPI document: 1.0.8
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
 * EzsignfolderResponse Class Doc Comment
 *
 * @category Class
 * @description An Ezsignfolder Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EzsignfolderResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ezsignfolder-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiEzsignfoldertypeID' => 'int',
        'fkiEzsigntsarequirementID' => 'int',
        'sEzsignfolderDescription' => 'string',
        'tEzsignfolderNote' => 'string',
        'eEzsignfolderSendreminderfrequency' => '\eZmaxAPI\Model\FieldEEzsignfolderSendreminderfrequency',
        'pkiEzsignfolderID' => 'int',
        'dtEzsignfolderSentdate' => 'string',
        'eEzsignfolderStep' => '\eZmaxAPI\Model\FieldEEzsignfolderStep',
        'fkiLanguageID' => 'int',
        'dtEzsignfolderClose' => 'string',
        'fkiUserIDCreated' => 'int',
        'fkiUserIDModified' => 'int',
        'fkiApikeyIDCreated' => 'int',
        'fkiApikeyIDModified' => 'int',
        'dtCreatedDate' => 'string',
        'dtModifiedDate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'fkiEzsignfoldertypeID' => null,
        'fkiEzsigntsarequirementID' => null,
        'sEzsignfolderDescription' => null,
        'tEzsignfolderNote' => null,
        'eEzsignfolderSendreminderfrequency' => null,
        'pkiEzsignfolderID' => null,
        'dtEzsignfolderSentdate' => null,
        'eEzsignfolderStep' => null,
        'fkiLanguageID' => null,
        'dtEzsignfolderClose' => null,
        'fkiUserIDCreated' => null,
        'fkiUserIDModified' => null,
        'fkiApikeyIDCreated' => null,
        'fkiApikeyIDModified' => null,
        'dtCreatedDate' => null,
        'dtModifiedDate' => null
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
        'fkiEzsigntsarequirementID' => 'fkiEzsigntsarequirementID',
        'sEzsignfolderDescription' => 'sEzsignfolderDescription',
        'tEzsignfolderNote' => 'tEzsignfolderNote',
        'eEzsignfolderSendreminderfrequency' => 'eEzsignfolderSendreminderfrequency',
        'pkiEzsignfolderID' => 'pkiEzsignfolderID',
        'dtEzsignfolderSentdate' => 'dtEzsignfolderSentdate',
        'eEzsignfolderStep' => 'eEzsignfolderStep',
        'fkiLanguageID' => 'fkiLanguageID',
        'dtEzsignfolderClose' => 'dtEzsignfolderClose',
        'fkiUserIDCreated' => 'fkiUserIDCreated',
        'fkiUserIDModified' => 'fkiUserIDModified',
        'fkiApikeyIDCreated' => 'fkiApikeyIDCreated',
        'fkiApikeyIDModified' => 'fkiApikeyIDModified',
        'dtCreatedDate' => 'dtCreatedDate',
        'dtModifiedDate' => 'dtModifiedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiEzsignfoldertypeID' => 'setFkiEzsignfoldertypeID',
        'fkiEzsigntsarequirementID' => 'setFkiEzsigntsarequirementID',
        'sEzsignfolderDescription' => 'setSEzsignfolderDescription',
        'tEzsignfolderNote' => 'setTEzsignfolderNote',
        'eEzsignfolderSendreminderfrequency' => 'setEEzsignfolderSendreminderfrequency',
        'pkiEzsignfolderID' => 'setPkiEzsignfolderID',
        'dtEzsignfolderSentdate' => 'setDtEzsignfolderSentdate',
        'eEzsignfolderStep' => 'setEEzsignfolderStep',
        'fkiLanguageID' => 'setFkiLanguageID',
        'dtEzsignfolderClose' => 'setDtEzsignfolderClose',
        'fkiUserIDCreated' => 'setFkiUserIDCreated',
        'fkiUserIDModified' => 'setFkiUserIDModified',
        'fkiApikeyIDCreated' => 'setFkiApikeyIDCreated',
        'fkiApikeyIDModified' => 'setFkiApikeyIDModified',
        'dtCreatedDate' => 'setDtCreatedDate',
        'dtModifiedDate' => 'setDtModifiedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiEzsignfoldertypeID' => 'getFkiEzsignfoldertypeID',
        'fkiEzsigntsarequirementID' => 'getFkiEzsigntsarequirementID',
        'sEzsignfolderDescription' => 'getSEzsignfolderDescription',
        'tEzsignfolderNote' => 'getTEzsignfolderNote',
        'eEzsignfolderSendreminderfrequency' => 'getEEzsignfolderSendreminderfrequency',
        'pkiEzsignfolderID' => 'getPkiEzsignfolderID',
        'dtEzsignfolderSentdate' => 'getDtEzsignfolderSentdate',
        'eEzsignfolderStep' => 'getEEzsignfolderStep',
        'fkiLanguageID' => 'getFkiLanguageID',
        'dtEzsignfolderClose' => 'getDtEzsignfolderClose',
        'fkiUserIDCreated' => 'getFkiUserIDCreated',
        'fkiUserIDModified' => 'getFkiUserIDModified',
        'fkiApikeyIDCreated' => 'getFkiApikeyIDCreated',
        'fkiApikeyIDModified' => 'getFkiApikeyIDModified',
        'dtCreatedDate' => 'getDtCreatedDate',
        'dtModifiedDate' => 'getDtModifiedDate'
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
        $this->container['fkiEzsigntsarequirementID'] = isset($data['fkiEzsigntsarequirementID']) ? $data['fkiEzsigntsarequirementID'] : null;
        $this->container['sEzsignfolderDescription'] = isset($data['sEzsignfolderDescription']) ? $data['sEzsignfolderDescription'] : null;
        $this->container['tEzsignfolderNote'] = isset($data['tEzsignfolderNote']) ? $data['tEzsignfolderNote'] : null;
        $this->container['eEzsignfolderSendreminderfrequency'] = isset($data['eEzsignfolderSendreminderfrequency']) ? $data['eEzsignfolderSendreminderfrequency'] : null;
        $this->container['pkiEzsignfolderID'] = isset($data['pkiEzsignfolderID']) ? $data['pkiEzsignfolderID'] : null;
        $this->container['dtEzsignfolderSentdate'] = isset($data['dtEzsignfolderSentdate']) ? $data['dtEzsignfolderSentdate'] : null;
        $this->container['eEzsignfolderStep'] = isset($data['eEzsignfolderStep']) ? $data['eEzsignfolderStep'] : null;
        $this->container['fkiLanguageID'] = isset($data['fkiLanguageID']) ? $data['fkiLanguageID'] : null;
        $this->container['dtEzsignfolderClose'] = isset($data['dtEzsignfolderClose']) ? $data['dtEzsignfolderClose'] : null;
        $this->container['fkiUserIDCreated'] = isset($data['fkiUserIDCreated']) ? $data['fkiUserIDCreated'] : null;
        $this->container['fkiUserIDModified'] = isset($data['fkiUserIDModified']) ? $data['fkiUserIDModified'] : null;
        $this->container['fkiApikeyIDCreated'] = isset($data['fkiApikeyIDCreated']) ? $data['fkiApikeyIDCreated'] : null;
        $this->container['fkiApikeyIDModified'] = isset($data['fkiApikeyIDModified']) ? $data['fkiApikeyIDModified'] : null;
        $this->container['dtCreatedDate'] = isset($data['dtCreatedDate']) ? $data['dtCreatedDate'] : null;
        $this->container['dtModifiedDate'] = isset($data['dtModifiedDate']) ? $data['dtModifiedDate'] : null;
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
        if ($this->container['fkiEzsigntsarequirementID'] === null) {
            $invalidProperties[] = "'fkiEzsigntsarequirementID' can't be null";
        }
        if (($this->container['fkiEzsigntsarequirementID'] > 3)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntsarequirementID', must be smaller than or equal to 3.";
        }

        if (($this->container['fkiEzsigntsarequirementID'] < 1)) {
            $invalidProperties[] = "invalid value for 'fkiEzsigntsarequirementID', must be bigger than or equal to 1.";
        }

        if ($this->container['sEzsignfolderDescription'] === null) {
            $invalidProperties[] = "'sEzsignfolderDescription' can't be null";
        }
        if ($this->container['tEzsignfolderNote'] === null) {
            $invalidProperties[] = "'tEzsignfolderNote' can't be null";
        }
        if ($this->container['eEzsignfolderSendreminderfrequency'] === null) {
            $invalidProperties[] = "'eEzsignfolderSendreminderfrequency' can't be null";
        }
        if ($this->container['pkiEzsignfolderID'] === null) {
            $invalidProperties[] = "'pkiEzsignfolderID' can't be null";
        }
        if ($this->container['dtEzsignfolderSentdate'] === null) {
            $invalidProperties[] = "'dtEzsignfolderSentdate' can't be null";
        }
        if ($this->container['eEzsignfolderStep'] === null) {
            $invalidProperties[] = "'eEzsignfolderStep' can't be null";
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

        if ($this->container['dtEzsignfolderClose'] === null) {
            $invalidProperties[] = "'dtEzsignfolderClose' can't be null";
        }
        if ($this->container['fkiUserIDCreated'] === null) {
            $invalidProperties[] = "'fkiUserIDCreated' can't be null";
        }
        if ($this->container['fkiUserIDModified'] === null) {
            $invalidProperties[] = "'fkiUserIDModified' can't be null";
        }
        if ($this->container['dtCreatedDate'] === null) {
            $invalidProperties[] = "'dtCreatedDate' can't be null";
        }
        if ($this->container['dtModifiedDate'] === null) {
            $invalidProperties[] = "'dtModifiedDate' can't be null";
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
     * @param int $fkiEzsignfoldertypeID The unique ID of the Ezsignfoldertype.    This value can be queried by the API and is also visible in the admin interface.    There are two types of Ezsignfoldertype. **User** and **Shared**. **User** can only be seen by the user who created the folder or its assistants. Access to **Shared** folders are configurable for access and email delivery. You should typically choose a **Shared** type here.
     *
     * @return $this
     */
    public function setFkiEzsignfoldertypeID($fkiEzsignfoldertypeID)
    {
        $this->container['fkiEzsignfoldertypeID'] = $fkiEzsignfoldertypeID;

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
     * @param int $fkiEzsigntsarequirementID The unique ID of the Ezsigntsarequirement.  Determine if a Time Stamping Authority should add a timestamp on each of the signature. Valid values are: 1. No. No TSA Timestamping will requested. This will make all signatures a lot faster since no round-trip to the TSA server will be required. Timestamping will be made using eZsign server's time. 2. Best effort. Timestamping from a Time Stamping Authority will be requested but is not mandatory. In the very improbable case it cannot be completed, the timestamping will be made using eZsign server's time. **Additional fee applies** 3. Mandatory. Timestamping from a Time Stamping Authority will be requested and is mandatory. In the very improbable case it cannot be completed, the signature will fail and the user will be asked to retry. **Additional fee applies**
     *
     * @return $this
     */
    public function setFkiEzsigntsarequirementID($fkiEzsigntsarequirementID)
    {

        if (($fkiEzsigntsarequirementID > 3)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntsarequirementID when calling EzsignfolderResponse., must be smaller than or equal to 3.');
        }
        if (($fkiEzsigntsarequirementID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiEzsigntsarequirementID when calling EzsignfolderResponse., must be bigger than or equal to 1.');
        }

        $this->container['fkiEzsigntsarequirementID'] = $fkiEzsigntsarequirementID;

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
     * Gets eEzsignfolderSendreminderfrequency
     *
     * @return \eZmaxAPI\Model\FieldEEzsignfolderSendreminderfrequency
     */
    public function getEEzsignfolderSendreminderfrequency()
    {
        return $this->container['eEzsignfolderSendreminderfrequency'];
    }

    /**
     * Sets eEzsignfolderSendreminderfrequency
     *
     * @param \eZmaxAPI\Model\FieldEEzsignfolderSendreminderfrequency $eEzsignfolderSendreminderfrequency eEzsignfolderSendreminderfrequency
     *
     * @return $this
     */
    public function setEEzsignfolderSendreminderfrequency($eEzsignfolderSendreminderfrequency)
    {
        $this->container['eEzsignfolderSendreminderfrequency'] = $eEzsignfolderSendreminderfrequency;

        return $this;
    }

    /**
     * Gets pkiEzsignfolderID
     *
     * @return int
     */
    public function getPkiEzsignfolderID()
    {
        return $this->container['pkiEzsignfolderID'];
    }

    /**
     * Sets pkiEzsignfolderID
     *
     * @param int $pkiEzsignfolderID The unique ID of the Ezsignfolder
     *
     * @return $this
     */
    public function setPkiEzsignfolderID($pkiEzsignfolderID)
    {
        $this->container['pkiEzsignfolderID'] = $pkiEzsignfolderID;

        return $this;
    }

    /**
     * Gets dtEzsignfolderSentdate
     *
     * @return string
     */
    public function getDtEzsignfolderSentdate()
    {
        return $this->container['dtEzsignfolderSentdate'];
    }

    /**
     * Sets dtEzsignfolderSentdate
     *
     * @param string $dtEzsignfolderSentdate The date and time at which the Ezsign folder was sent the last time.
     *
     * @return $this
     */
    public function setDtEzsignfolderSentdate($dtEzsignfolderSentdate)
    {
        $this->container['dtEzsignfolderSentdate'] = $dtEzsignfolderSentdate;

        return $this;
    }

    /**
     * Gets eEzsignfolderStep
     *
     * @return \eZmaxAPI\Model\FieldEEzsignfolderStep
     */
    public function getEEzsignfolderStep()
    {
        return $this->container['eEzsignfolderStep'];
    }

    /**
     * Sets eEzsignfolderStep
     *
     * @param \eZmaxAPI\Model\FieldEEzsignfolderStep $eEzsignfolderStep eEzsignfolderStep
     *
     * @return $this
     */
    public function setEEzsignfolderStep($eEzsignfolderStep)
    {
        $this->container['eEzsignfolderStep'] = $eEzsignfolderStep;

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
     * @param int $fkiLanguageID The unique ID of the Language.  Valid values are: 1. French 2. English
     *
     * @return $this
     */
    public function setFkiLanguageID($fkiLanguageID)
    {

        if (($fkiLanguageID > 2)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsignfolderResponse., must be smaller than or equal to 2.');
        }
        if (($fkiLanguageID < 1)) {
            throw new \InvalidArgumentException('invalid value for $fkiLanguageID when calling EzsignfolderResponse., must be bigger than or equal to 1.');
        }

        $this->container['fkiLanguageID'] = $fkiLanguageID;

        return $this;
    }

    /**
     * Gets dtEzsignfolderClose
     *
     * @return string
     */
    public function getDtEzsignfolderClose()
    {
        return $this->container['dtEzsignfolderClose'];
    }

    /**
     * Sets dtEzsignfolderClose
     *
     * @param string $dtEzsignfolderClose The date and time at which the folder was closed. Either by applying the last signature or by completing it prematurely.
     *
     * @return $this
     */
    public function setDtEzsignfolderClose($dtEzsignfolderClose)
    {
        $this->container['dtEzsignfolderClose'] = $dtEzsignfolderClose;

        return $this;
    }

    /**
     * Gets fkiUserIDCreated
     *
     * @return int
     */
    public function getFkiUserIDCreated()
    {
        return $this->container['fkiUserIDCreated'];
    }

    /**
     * Sets fkiUserIDCreated
     *
     * @param int $fkiUserIDCreated The id of the User that created the object.
     *
     * @return $this
     */
    public function setFkiUserIDCreated($fkiUserIDCreated)
    {
        $this->container['fkiUserIDCreated'] = $fkiUserIDCreated;

        return $this;
    }

    /**
     * Gets fkiUserIDModified
     *
     * @return int
     */
    public function getFkiUserIDModified()
    {
        return $this->container['fkiUserIDModified'];
    }

    /**
     * Sets fkiUserIDModified
     *
     * @param int $fkiUserIDModified The id of the User that made the last modification on the object.
     *
     * @return $this
     */
    public function setFkiUserIDModified($fkiUserIDModified)
    {
        $this->container['fkiUserIDModified'] = $fkiUserIDModified;

        return $this;
    }

    /**
     * Gets fkiApikeyIDCreated
     *
     * @return int|null
     */
    public function getFkiApikeyIDCreated()
    {
        return $this->container['fkiApikeyIDCreated'];
    }

    /**
     * Sets fkiApikeyIDCreated
     *
     * @param int|null $fkiApikeyIDCreated The id of the API Key that created the object.
     *
     * @return $this
     */
    public function setFkiApikeyIDCreated($fkiApikeyIDCreated)
    {
        $this->container['fkiApikeyIDCreated'] = $fkiApikeyIDCreated;

        return $this;
    }

    /**
     * Gets fkiApikeyIDModified
     *
     * @return int|null
     */
    public function getFkiApikeyIDModified()
    {
        return $this->container['fkiApikeyIDModified'];
    }

    /**
     * Sets fkiApikeyIDModified
     *
     * @param int|null $fkiApikeyIDModified The id of the API Key that made the last modification on the object.
     *
     * @return $this
     */
    public function setFkiApikeyIDModified($fkiApikeyIDModified)
    {
        $this->container['fkiApikeyIDModified'] = $fkiApikeyIDModified;

        return $this;
    }

    /**
     * Gets dtCreatedDate
     *
     * @return string
     */
    public function getDtCreatedDate()
    {
        return $this->container['dtCreatedDate'];
    }

    /**
     * Sets dtCreatedDate
     *
     * @param string $dtCreatedDate Represent a Date Time. The timezone is the one configured in the User's profile.
     *
     * @return $this
     */
    public function setDtCreatedDate($dtCreatedDate)
    {
        $this->container['dtCreatedDate'] = $dtCreatedDate;

        return $this;
    }

    /**
     * Gets dtModifiedDate
     *
     * @return string
     */
    public function getDtModifiedDate()
    {
        return $this->container['dtModifiedDate'];
    }

    /**
     * Sets dtModifiedDate
     *
     * @param string $dtModifiedDate Represent a Date Time. The timezone is the one configured in the User's profile.
     *
     * @return $this
     */
    public function setDtModifiedDate($dtModifiedDate)
    {
        $this->container['dtModifiedDate'] = $dtModifiedDate;

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

