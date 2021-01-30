<?php
/**
 * ObitDefinition
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Obada
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OBADA Client Helper API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.0.1
 * Contact: techops@obada.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Obada\ClientHelper;

use \ArrayAccess;
use \Obada\ObjectSerializer;

/**
 * ObitDefinition Class Doc Comment
 *
 * @category Class
 * @package  Obada
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ObitDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ObitDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'serialHash' => 'string',
        'usn' => 'string',
        'obitDid' => 'string',
        'usnBase58' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'serialHash' => null,
        'usn' => null,
        'obitDid' => null,
        'usnBase58' => null
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
        'serialHash' => 'serial_hash',
        'usn' => 'usn',
        'obitDid' => 'obit_did',
        'usnBase58' => 'usn_base58'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'serialHash' => 'setSerialHash',
        'usn' => 'setUsn',
        'obitDid' => 'setObitDid',
        'usnBase58' => 'setUsnBase58'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'serialHash' => 'getSerialHash',
        'usn' => 'getUsn',
        'obitDid' => 'getObitDid',
        'usnBase58' => 'getUsnBase58'
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
        $this->container['serialHash'] = $data['serialHash'] ?? null;
        $this->container['usn'] = $data['usn'] ?? null;
        $this->container['obitDid'] = $data['obitDid'] ?? null;
        $this->container['usnBase58'] = $data['usnBase58'] ?? null;
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
     * Gets serialHash
     *
     * @return string|null
     */
    public function getSerialHash()
    {
        return $this->container['serialHash'];
    }

    /**
     * Sets serialHash
     *
     * @param string|null $serialHash serialHash
     *
     * @return self
     */
    public function setSerialHash($serialHash)
    {
        $this->container['serialHash'] = $serialHash;

        return $this;
    }

    /**
     * Gets usn
     *
     * @return string|null
     */
    public function getUsn()
    {
        return $this->container['usn'];
    }

    /**
     * Sets usn
     *
     * @param string|null $usn usn
     *
     * @return self
     */
    public function setUsn($usn)
    {
        $this->container['usn'] = $usn;

        return $this;
    }

    /**
     * Gets obitDid
     *
     * @return string|null
     */
    public function getObitDid()
    {
        return $this->container['obitDid'];
    }

    /**
     * Sets obitDid
     *
     * @param string|null $obitDid obitDid
     *
     * @return self
     */
    public function setObitDid($obitDid)
    {
        $this->container['obitDid'] = $obitDid;

        return $this;
    }

    /**
     * Gets usnBase58
     *
     * @return string|null
     */
    public function getUsnBase58()
    {
        return $this->container['usnBase58'];
    }

    /**
     * Sets usnBase58
     *
     * @param string|null $usnBase58 usnBase58
     *
     * @return self
     */
    public function setUsnBase58($usnBase58)
    {
        $this->container['usnBase58'] = $usnBase58;

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


