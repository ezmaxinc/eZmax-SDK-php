<?php
/**
 * AddressRequest
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
 * The version of the OpenAPI document: 1.0.31
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
 * AddressRequest Class Doc Comment
 *
 * @category Class
 * @description An Address Object
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AddressRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'address-Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fkiAddresstypeID' => 'int',
        'sAddressCivic' => 'string',
        'sAddressStreet' => 'string',
        'sAddressSuite' => 'string',
        'sAddressCity' => 'string',
        'fkiProvinceID' => 'int',
        'fkiCountryID' => 'int',
        'sAddressZip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fkiAddresstypeID' => null,
        'sAddressCivic' => null,
        'sAddressStreet' => null,
        'sAddressSuite' => null,
        'sAddressCity' => null,
        'fkiProvinceID' => null,
        'fkiCountryID' => null,
        'sAddressZip' => null
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
        'fkiAddresstypeID' => 'fkiAddresstypeID',
        'sAddressCivic' => 'sAddressCivic',
        'sAddressStreet' => 'sAddressStreet',
        'sAddressSuite' => 'sAddressSuite',
        'sAddressCity' => 'sAddressCity',
        'fkiProvinceID' => 'fkiProvinceID',
        'fkiCountryID' => 'fkiCountryID',
        'sAddressZip' => 'sAddressZip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fkiAddresstypeID' => 'setFkiAddresstypeID',
        'sAddressCivic' => 'setSAddressCivic',
        'sAddressStreet' => 'setSAddressStreet',
        'sAddressSuite' => 'setSAddressSuite',
        'sAddressCity' => 'setSAddressCity',
        'fkiProvinceID' => 'setFkiProvinceID',
        'fkiCountryID' => 'setFkiCountryID',
        'sAddressZip' => 'setSAddressZip'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fkiAddresstypeID' => 'getFkiAddresstypeID',
        'sAddressCivic' => 'getSAddressCivic',
        'sAddressStreet' => 'getSAddressStreet',
        'sAddressSuite' => 'getSAddressSuite',
        'sAddressCity' => 'getSAddressCity',
        'fkiProvinceID' => 'getFkiProvinceID',
        'fkiCountryID' => 'getFkiCountryID',
        'sAddressZip' => 'getSAddressZip'
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
        $this->container['fkiAddresstypeID'] = $data['fkiAddresstypeID'] ?? null;
        $this->container['sAddressCivic'] = $data['sAddressCivic'] ?? null;
        $this->container['sAddressStreet'] = $data['sAddressStreet'] ?? null;
        $this->container['sAddressSuite'] = $data['sAddressSuite'] ?? null;
        $this->container['sAddressCity'] = $data['sAddressCity'] ?? null;
        $this->container['fkiProvinceID'] = $data['fkiProvinceID'] ?? null;
        $this->container['fkiCountryID'] = $data['fkiCountryID'] ?? null;
        $this->container['sAddressZip'] = $data['sAddressZip'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fkiAddresstypeID'] === null) {
            $invalidProperties[] = "'fkiAddresstypeID' can't be null";
        }
        if ($this->container['sAddressCivic'] === null) {
            $invalidProperties[] = "'sAddressCivic' can't be null";
        }
        if ($this->container['sAddressStreet'] === null) {
            $invalidProperties[] = "'sAddressStreet' can't be null";
        }
        if ($this->container['sAddressSuite'] === null) {
            $invalidProperties[] = "'sAddressSuite' can't be null";
        }
        if ($this->container['sAddressCity'] === null) {
            $invalidProperties[] = "'sAddressCity' can't be null";
        }
        if ($this->container['fkiProvinceID'] === null) {
            $invalidProperties[] = "'fkiProvinceID' can't be null";
        }
        if ($this->container['fkiCountryID'] === null) {
            $invalidProperties[] = "'fkiCountryID' can't be null";
        }
        if ($this->container['sAddressZip'] === null) {
            $invalidProperties[] = "'sAddressZip' can't be null";
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
     * Gets fkiAddresstypeID
     *
     * @return int
     */
    public function getFkiAddresstypeID()
    {
        return $this->container['fkiAddresstypeID'];
    }

    /**
     * Sets fkiAddresstypeID
     *
     * @param int $fkiAddresstypeID The unique ID of the Addresstype.  Valid values:  |Value|Description| |-|-| |1|Office| |2|Home| |3|Real Estate Invoice| |4|Invoicing| |5|Shipping|
     *
     * @return self
     */
    public function setFkiAddresstypeID($fkiAddresstypeID)
    {
        $this->container['fkiAddresstypeID'] = $fkiAddresstypeID;

        return $this;
    }

    /**
     * Gets sAddressCivic
     *
     * @return string
     */
    public function getSAddressCivic()
    {
        return $this->container['sAddressCivic'];
    }

    /**
     * Sets sAddressCivic
     *
     * @param string $sAddressCivic The Civic number.
     *
     * @return self
     */
    public function setSAddressCivic($sAddressCivic)
    {
        $this->container['sAddressCivic'] = $sAddressCivic;

        return $this;
    }

    /**
     * Gets sAddressStreet
     *
     * @return string
     */
    public function getSAddressStreet()
    {
        return $this->container['sAddressStreet'];
    }

    /**
     * Sets sAddressStreet
     *
     * @param string $sAddressStreet The Street Name
     *
     * @return self
     */
    public function setSAddressStreet($sAddressStreet)
    {
        $this->container['sAddressStreet'] = $sAddressStreet;

        return $this;
    }

    /**
     * Gets sAddressSuite
     *
     * @return string
     */
    public function getSAddressSuite()
    {
        return $this->container['sAddressSuite'];
    }

    /**
     * Sets sAddressSuite
     *
     * @param string $sAddressSuite The Suite or appartment number
     *
     * @return self
     */
    public function setSAddressSuite($sAddressSuite)
    {
        $this->container['sAddressSuite'] = $sAddressSuite;

        return $this;
    }

    /**
     * Gets sAddressCity
     *
     * @return string
     */
    public function getSAddressCity()
    {
        return $this->container['sAddressCity'];
    }

    /**
     * Sets sAddressCity
     *
     * @param string $sAddressCity The City name
     *
     * @return self
     */
    public function setSAddressCity($sAddressCity)
    {
        $this->container['sAddressCity'] = $sAddressCity;

        return $this;
    }

    /**
     * Gets fkiProvinceID
     *
     * @return int
     */
    public function getFkiProvinceID()
    {
        return $this->container['fkiProvinceID'];
    }

    /**
     * Sets fkiProvinceID
     *
     * @param int $fkiProvinceID The unique ID of the Province.  Here are some common values (Complete list must be retrieved from API):  |Value|Description| |-|-| |1|(Canada) Alberta |2|(Canada) British Columbia| |3|(Canada) Manitoba| |3|(Canada) Manitoba| |4|(Canada) New Brunswick| |5|(Canada) Newfoundland| |6|(Canada) Northwest Territories| |7|(Canada) Nova Scotia| |8|(Canada) Nunavut| |9|(Canada) Ontario| |10|(Canada) Prince Edward Island| |11|(Canada) Quebec| |12|(Canada) Saskatchewan| |13|(Canada) Yukon| |14|(United-States) Alabama| |15|(United-States) Alaska| |16|(United-States) Arizona| |17|(United-States) Arkansas| |18|(United-States) California| |19|(United-States) Colorado| |20|(United-States) Connecticut| |21|(United-States) Delaware| |22|(United-States) District of Columbia| |23|(United-States) Florida| |24|(United-States) Georgia| |25|(United-States) Hawaii| |26|(United-States) Idaho| |27|(United-States) Illinois| |28|(United-States) Indiana| |29|(United-States) Iowa| |30|(United-States) Kansas| |31|(United-States) Kentucky| |32|(United-States) Louisiane| |33|(United-States) Maine| |34|(United-States) Maryland| |35|(United-States) Massachusetts| |36|(United-States) Michigan| |37|(United-States) Minnesota| |38|(United-States) Mississippi| |39|(United-States) Missouri| |40|(United-States) Montana| |41|(United-States) Nebraska| |42|(United-States) Nevada| |43|(United-States) New Hampshire| |44|(United-States) New Jersey| |45|(United-States) New Mexico| |46|(United-States) New York| |47|(United-States) North Carolina| |48|(United-States) North Dakota| |49|(United-States) Ohio| |50|(United-States) Oklahoma| |51|(United-States) Oregon| |52|(United-States) Pennsylvania| |53|(United-States) Rhode Island| |54|(United-States) South Carolina| |55|(United-States) South Dakota| |56|(United-States) Tennessee| |57|(United-States) Texas| |58|(United-States) Utah| |60|(United-States) Vermont| |59|(United-States) Virginia| |61|(United-States) Washington| |62|(United-States) West Virginia| |63|(United-States) Wisconsin| |64|(United-States) Wyoming|
     *
     * @return self
     */
    public function setFkiProvinceID($fkiProvinceID)
    {
        $this->container['fkiProvinceID'] = $fkiProvinceID;

        return $this;
    }

    /**
     * Gets fkiCountryID
     *
     * @return int
     */
    public function getFkiCountryID()
    {
        return $this->container['fkiCountryID'];
    }

    /**
     * Sets fkiCountryID
     *
     * @param int $fkiCountryID The unique ID of the Country.  Here are some common values (Complete list must be retrieved from API):  |Value|Description| |-|-| |1|Canada| |2|United-States|
     *
     * @return self
     */
    public function setFkiCountryID($fkiCountryID)
    {
        $this->container['fkiCountryID'] = $fkiCountryID;

        return $this;
    }

    /**
     * Gets sAddressZip
     *
     * @return string
     */
    public function getSAddressZip()
    {
        return $this->container['sAddressZip'];
    }

    /**
     * Sets sAddressZip
     *
     * @param string $sAddressZip The Postal/Zip Code  The value must be entered without spaces
     *
     * @return self
     */
    public function setSAddressZip($sAddressZip)
    {
        $this->container['sAddressZip'] = $sAddressZip;

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


