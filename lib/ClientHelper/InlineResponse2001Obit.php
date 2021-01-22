<?php
/**
 * InlineResponse2001Obit
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
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
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
 * InlineResponse2001Obit Class Doc Comment
 *
 * @category Class
 * @package  Obada
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InlineResponse2001Obit implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_1_obit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'obitDid' => 'string',
        'usn' => 'string',
        'ownerDid' => 'string',
        'obitStatus' => 'string',
        'manufacturer' => 'string',
        'partNumber' => 'string',
        'serialNumberHash' => 'string',
        'modifiedAt' => '\DateTime',
        'rootHash' => 'string',
        'metadata' => '\Obada\ClientHelper\InlineResponse2001ObitMetadata[]',
        'documents' => '\Obada\ClientHelper\InlineResponse2001ObitDocuments[]',
        'structuredData' => '\Obada\ClientHelper\InlineResponse2001ObitStructuredData[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'obitDid' => null,
        'usn' => null,
        'ownerDid' => null,
        'obitStatus' => null,
        'manufacturer' => null,
        'partNumber' => null,
        'serialNumberHash' => null,
        'modifiedAt' => 'date-time',
        'rootHash' => null,
        'metadata' => null,
        'documents' => null,
        'structuredData' => null
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
        'id' => 'id',
        'obitDid' => 'obit_did',
        'usn' => 'usn',
        'ownerDid' => 'owner_did',
        'obitStatus' => 'obit_status',
        'manufacturer' => 'manufacturer',
        'partNumber' => 'part_number',
        'serialNumberHash' => 'serial_number_hash',
        'modifiedAt' => 'modified_at',
        'rootHash' => 'root_hash',
        'metadata' => 'metadata',
        'documents' => 'documents',
        'structuredData' => 'structured_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'obitDid' => 'setObitDid',
        'usn' => 'setUsn',
        'ownerDid' => 'setOwnerDid',
        'obitStatus' => 'setObitStatus',
        'manufacturer' => 'setManufacturer',
        'partNumber' => 'setPartNumber',
        'serialNumberHash' => 'setSerialNumberHash',
        'modifiedAt' => 'setModifiedAt',
        'rootHash' => 'setRootHash',
        'metadata' => 'setMetadata',
        'documents' => 'setDocuments',
        'structuredData' => 'setStructuredData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'obitDid' => 'getObitDid',
        'usn' => 'getUsn',
        'ownerDid' => 'getOwnerDid',
        'obitStatus' => 'getObitStatus',
        'manufacturer' => 'getManufacturer',
        'partNumber' => 'getPartNumber',
        'serialNumberHash' => 'getSerialNumberHash',
        'modifiedAt' => 'getModifiedAt',
        'rootHash' => 'getRootHash',
        'metadata' => 'getMetadata',
        'documents' => 'getDocuments',
        'structuredData' => 'getStructuredData'
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

    const OBIT_STATUS_FUNCTIONAL = 'FUNCTIONAL';
    const OBIT_STATUS_NON_FUNCTIONAL = 'NON_FUNCTIONAL';
    const OBIT_STATUS_DISPOSED = 'DISPOSED';
    const OBIT_STATUS_STOLEN = 'STOLEN';
    const OBIT_STATUS_DISABLED_BY_OWNER = 'DISABLED_BY_OWNER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObitStatusAllowableValues()
    {
        return [
            self::OBIT_STATUS_FUNCTIONAL,
            self::OBIT_STATUS_NON_FUNCTIONAL,
            self::OBIT_STATUS_DISPOSED,
            self::OBIT_STATUS_STOLEN,
            self::OBIT_STATUS_DISABLED_BY_OWNER,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['obitDid'] = $data['obitDid'] ?? null;
        $this->container['usn'] = $data['usn'] ?? null;
        $this->container['ownerDid'] = $data['ownerDid'] ?? null;
        $this->container['obitStatus'] = $data['obitStatus'] ?? null;
        $this->container['manufacturer'] = $data['manufacturer'] ?? null;
        $this->container['partNumber'] = $data['partNumber'] ?? null;
        $this->container['serialNumberHash'] = $data['serialNumberHash'] ?? null;
        $this->container['modifiedAt'] = $data['modifiedAt'] ?? null;
        $this->container['rootHash'] = $data['rootHash'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['documents'] = $data['documents'] ?? null;
        $this->container['structuredData'] = $data['structuredData'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getObitStatusAllowableValues();
        if (!is_null($this->container['obitStatus']) && !in_array($this->container['obitStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'obitStatus', must be one of '%s'",
                $this->container['obitStatus'],
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets ownerDid
     *
     * @return string|null
     */
    public function getOwnerDid()
    {
        return $this->container['ownerDid'];
    }

    /**
     * Sets ownerDid
     *
     * @param string|null $ownerDid ownerDid
     *
     * @return self
     */
    public function setOwnerDid($ownerDid)
    {
        $this->container['ownerDid'] = $ownerDid;

        return $this;
    }

    /**
     * Gets obitStatus
     *
     * @return string|null
     */
    public function getObitStatus()
    {
        return $this->container['obitStatus'];
    }

    /**
     * Sets obitStatus
     *
     * @param string|null $obitStatus Represent available Obit statuses:   - FUNCTIONAL   - NON_FUNCTIONAL   - DISPOSED   - STOLEN   - DISABLED_BY_OWNER
     *
     * @return self
     */
    public function setObitStatus($obitStatus)
    {
        $allowedValues = $this->getObitStatusAllowableValues();
        if (!is_null($obitStatus) && !in_array($obitStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'obitStatus', must be one of '%s'",
                    $obitStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['obitStatus'] = $obitStatus;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string|null
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string|null $manufacturer manufacturer
     *
     * @return self
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets partNumber
     *
     * @return string|null
     */
    public function getPartNumber()
    {
        return $this->container['partNumber'];
    }

    /**
     * Sets partNumber
     *
     * @param string|null $partNumber partNumber
     *
     * @return self
     */
    public function setPartNumber($partNumber)
    {
        $this->container['partNumber'] = $partNumber;

        return $this;
    }

    /**
     * Gets serialNumberHash
     *
     * @return string|null
     */
    public function getSerialNumberHash()
    {
        return $this->container['serialNumberHash'];
    }

    /**
     * Sets serialNumberHash
     *
     * @param string|null $serialNumberHash serialNumberHash
     *
     * @return self
     */
    public function setSerialNumberHash($serialNumberHash)
    {
        $this->container['serialNumberHash'] = $serialNumberHash;

        return $this;
    }

    /**
     * Gets modifiedAt
     *
     * @return \DateTime|null
     */
    public function getModifiedAt()
    {
        return $this->container['modifiedAt'];
    }

    /**
     * Sets modifiedAt
     *
     * @param \DateTime|null $modifiedAt modifiedAt
     *
     * @return self
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->container['modifiedAt'] = $modifiedAt;

        return $this;
    }

    /**
     * Gets rootHash
     *
     * @return string|null
     */
    public function getRootHash()
    {
        return $this->container['rootHash'];
    }

    /**
     * Sets rootHash
     *
     * @param string|null $rootHash rootHash
     *
     * @return self
     */
    public function setRootHash($rootHash)
    {
        $this->container['rootHash'] = $rootHash;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \Obada\ClientHelper\InlineResponse2001ObitMetadata[]|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \Obada\ClientHelper\InlineResponse2001ObitMetadata[]|null $metadata Get description from Rohi
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \Obada\ClientHelper\InlineResponse2001ObitDocuments[]|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \Obada\ClientHelper\InlineResponse2001ObitDocuments[]|null $documents To generate this link, take an SHA-256 hash of the document, and link to it as https://www.some-website.com?h1=hash-of-document. Note this does not yet adhere to the hashlink standard.
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets structuredData
     *
     * @return \Obada\ClientHelper\InlineResponse2001ObitStructuredData[]|null
     */
    public function getStructuredData()
    {
        return $this->container['structuredData'];
    }

    /**
     * Sets structuredData
     *
     * @param \Obada\ClientHelper\InlineResponse2001ObitStructuredData[]|null $structuredData Same as metadata but bigger. Key (string) => Value (string) (hash per line sha256(key + value))
     *
     * @return self
     */
    public function setStructuredData($structuredData)
    {
        $this->container['structuredData'] = $structuredData;

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


