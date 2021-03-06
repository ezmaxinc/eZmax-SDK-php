<?php
/**
 * WebhookResponse
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
 * WebhookResponse Class Doc Comment
 *
 * @category Class
 * @description A webhook object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class WebhookResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'webhook-Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pkiWebhookID' => 'int',
        'eWebhookModule' => 'string',
        'eWebhookEzsignevent' => 'string',
        'pksCustomerCode' => 'string',
        'sWebhookUrl' => 'string',
        'sWebhookEmailfailed' => 'string',
        'eWebhookManagementevent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pkiWebhookID' => null,
        'eWebhookModule' => null,
        'eWebhookEzsignevent' => null,
        'pksCustomerCode' => null,
        'sWebhookUrl' => null,
        'sWebhookEmailfailed' => null,
        'eWebhookManagementevent' => null
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
        'pkiWebhookID' => 'pkiWebhookID',
        'eWebhookModule' => 'eWebhookModule',
        'eWebhookEzsignevent' => 'eWebhookEzsignevent',
        'pksCustomerCode' => 'pksCustomerCode',
        'sWebhookUrl' => 'sWebhookUrl',
        'sWebhookEmailfailed' => 'sWebhookEmailfailed',
        'eWebhookManagementevent' => 'eWebhookManagementevent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pkiWebhookID' => 'setPkiWebhookID',
        'eWebhookModule' => 'setEWebhookModule',
        'eWebhookEzsignevent' => 'setEWebhookEzsignevent',
        'pksCustomerCode' => 'setPksCustomerCode',
        'sWebhookUrl' => 'setSWebhookUrl',
        'sWebhookEmailfailed' => 'setSWebhookEmailfailed',
        'eWebhookManagementevent' => 'setEWebhookManagementevent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pkiWebhookID' => 'getPkiWebhookID',
        'eWebhookModule' => 'getEWebhookModule',
        'eWebhookEzsignevent' => 'getEWebhookEzsignevent',
        'pksCustomerCode' => 'getPksCustomerCode',
        'sWebhookUrl' => 'getSWebhookUrl',
        'sWebhookEmailfailed' => 'getSWebhookEmailfailed',
        'eWebhookManagementevent' => 'getEWebhookManagementevent'
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

    const E_WEBHOOK_MODULE_EZSIGN = 'Ezsign';
    const E_WEBHOOK_MODULE_MANAGEMENT = 'Management';
    const E_WEBHOOK_EZSIGNEVENT_DOCUMENT_COMPLETED = 'DocumentCompleted';
    const E_WEBHOOK_EZSIGNEVENT_FOLDER_COMPLETED = 'FolderCompleted';
    const E_WEBHOOK_MANAGEMENTEVENT_USER_CREATED = 'UserCreated';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEWebhookModuleAllowableValues()
    {
        return [
            self::E_WEBHOOK_MODULE_EZSIGN,
            self::E_WEBHOOK_MODULE_MANAGEMENT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEWebhookEzsigneventAllowableValues()
    {
        return [
            self::E_WEBHOOK_EZSIGNEVENT_DOCUMENT_COMPLETED,
            self::E_WEBHOOK_EZSIGNEVENT_FOLDER_COMPLETED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEWebhookManagementeventAllowableValues()
    {
        return [
            self::E_WEBHOOK_MANAGEMENTEVENT_USER_CREATED,
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
        $this->container['pkiWebhookID'] = $data['pkiWebhookID'] ?? null;
        $this->container['eWebhookModule'] = $data['eWebhookModule'] ?? null;
        $this->container['eWebhookEzsignevent'] = $data['eWebhookEzsignevent'] ?? null;
        $this->container['pksCustomerCode'] = $data['pksCustomerCode'] ?? null;
        $this->container['sWebhookUrl'] = $data['sWebhookUrl'] ?? null;
        $this->container['sWebhookEmailfailed'] = $data['sWebhookEmailfailed'] ?? null;
        $this->container['eWebhookManagementevent'] = $data['eWebhookManagementevent'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pkiWebhookID'] === null) {
            $invalidProperties[] = "'pkiWebhookID' can't be null";
        }
        if ($this->container['eWebhookModule'] === null) {
            $invalidProperties[] = "'eWebhookModule' can't be null";
        }
        $allowedValues = $this->getEWebhookModuleAllowableValues();
        if (!is_null($this->container['eWebhookModule']) && !in_array($this->container['eWebhookModule'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eWebhookModule', must be one of '%s'",
                $this->container['eWebhookModule'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEWebhookEzsigneventAllowableValues();
        if (!is_null($this->container['eWebhookEzsignevent']) && !in_array($this->container['eWebhookEzsignevent'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eWebhookEzsignevent', must be one of '%s'",
                $this->container['eWebhookEzsignevent'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['pksCustomerCode'] === null) {
            $invalidProperties[] = "'pksCustomerCode' can't be null";
        }
        if ((mb_strlen($this->container['pksCustomerCode']) > 6)) {
            $invalidProperties[] = "invalid value for 'pksCustomerCode', the character length must be smaller than or equal to 6.";
        }

        if ((mb_strlen($this->container['pksCustomerCode']) < 2)) {
            $invalidProperties[] = "invalid value for 'pksCustomerCode', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['sWebhookUrl'] === null) {
            $invalidProperties[] = "'sWebhookUrl' can't be null";
        }
        if ($this->container['sWebhookEmailfailed'] === null) {
            $invalidProperties[] = "'sWebhookEmailfailed' can't be null";
        }
        $allowedValues = $this->getEWebhookManagementeventAllowableValues();
        if (!is_null($this->container['eWebhookManagementevent']) && !in_array($this->container['eWebhookManagementevent'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eWebhookManagementevent', must be one of '%s'",
                $this->container['eWebhookManagementevent'],
                implode("', '", $allowedValues)
            );
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
     * Gets pkiWebhookID
     *
     * @return int
     */
    public function getPkiWebhookID()
    {
        return $this->container['pkiWebhookID'];
    }

    /**
     * Sets pkiWebhookID
     *
     * @param int $pkiWebhookID The Webhook ID. This value is visible in the admin interface.
     *
     * @return self
     */
    public function setPkiWebhookID($pkiWebhookID)
    {
        $this->container['pkiWebhookID'] = $pkiWebhookID;

        return $this;
    }

    /**
     * Gets eWebhookModule
     *
     * @return string
     */
    public function getEWebhookModule()
    {
        return $this->container['eWebhookModule'];
    }

    /**
     * Sets eWebhookModule
     *
     * @param string $eWebhookModule The Module generating the Event.
     *
     * @return self
     */
    public function setEWebhookModule($eWebhookModule)
    {
        $allowedValues = $this->getEWebhookModuleAllowableValues();
        if (!in_array($eWebhookModule, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eWebhookModule', must be one of '%s'",
                    $eWebhookModule,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['eWebhookModule'] = $eWebhookModule;

        return $this;
    }

    /**
     * Gets eWebhookEzsignevent
     *
     * @return string|null
     */
    public function getEWebhookEzsignevent()
    {
        return $this->container['eWebhookEzsignevent'];
    }

    /**
     * Sets eWebhookEzsignevent
     *
     * @param string|null $eWebhookEzsignevent This Ezsign Event. This property will be set only if the Module is \"Ezsign\".
     *
     * @return self
     */
    public function setEWebhookEzsignevent($eWebhookEzsignevent)
    {
        $allowedValues = $this->getEWebhookEzsigneventAllowableValues();
        if (!is_null($eWebhookEzsignevent) && !in_array($eWebhookEzsignevent, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eWebhookEzsignevent', must be one of '%s'",
                    $eWebhookEzsignevent,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['eWebhookEzsignevent'] = $eWebhookEzsignevent;

        return $this;
    }

    /**
     * Gets pksCustomerCode
     *
     * @return string
     */
    public function getPksCustomerCode()
    {
        return $this->container['pksCustomerCode'];
    }

    /**
     * Sets pksCustomerCode
     *
     * @param string $pksCustomerCode The customer code assigned to your account
     *
     * @return self
     */
    public function setPksCustomerCode($pksCustomerCode)
    {
        if ((mb_strlen($pksCustomerCode) > 6)) {
            throw new \InvalidArgumentException('invalid length for $pksCustomerCode when calling WebhookResponse., must be smaller than or equal to 6.');
        }
        if ((mb_strlen($pksCustomerCode) < 2)) {
            throw new \InvalidArgumentException('invalid length for $pksCustomerCode when calling WebhookResponse., must be bigger than or equal to 2.');
        }

        $this->container['pksCustomerCode'] = $pksCustomerCode;

        return $this;
    }

    /**
     * Gets sWebhookUrl
     *
     * @return string
     */
    public function getSWebhookUrl()
    {
        return $this->container['sWebhookUrl'];
    }

    /**
     * Sets sWebhookUrl
     *
     * @param string $sWebhookUrl The url being called
     *
     * @return self
     */
    public function setSWebhookUrl($sWebhookUrl)
    {
        $this->container['sWebhookUrl'] = $sWebhookUrl;

        return $this;
    }

    /**
     * Gets sWebhookEmailfailed
     *
     * @return string
     */
    public function getSWebhookEmailfailed()
    {
        return $this->container['sWebhookEmailfailed'];
    }

    /**
     * Sets sWebhookEmailfailed
     *
     * @param string $sWebhookEmailfailed The email that will receive the webhook in case all attempts fail.
     *
     * @return self
     */
    public function setSWebhookEmailfailed($sWebhookEmailfailed)
    {
        $this->container['sWebhookEmailfailed'] = $sWebhookEmailfailed;

        return $this;
    }

    /**
     * Gets eWebhookManagementevent
     *
     * @return string|null
     */
    public function getEWebhookManagementevent()
    {
        return $this->container['eWebhookManagementevent'];
    }

    /**
     * Sets eWebhookManagementevent
     *
     * @param string|null $eWebhookManagementevent This Management Event. This property will be set only if the Module is \"Management\".
     *
     * @return self
     */
    public function setEWebhookManagementevent($eWebhookManagementevent)
    {
        $allowedValues = $this->getEWebhookManagementeventAllowableValues();
        if (!is_null($eWebhookManagementevent) && !in_array($eWebhookManagementevent, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eWebhookManagementevent', must be one of '%s'",
                    $eWebhookManagementevent,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['eWebhookManagementevent'] = $eWebhookManagementevent;

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


