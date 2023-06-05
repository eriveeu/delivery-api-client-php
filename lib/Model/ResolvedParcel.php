<?php
/**
 * ResolvedParcel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Erive\Delivery
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ERIVE.delivery API
 *
 * ERIVE.delivery (formerly GREEN TO HOME) API
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: developers@erive.eu
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Erive\Delivery\Model;

use \ArrayAccess;
use \Erive\Delivery\ObjectSerializer;

/**
 * ResolvedParcel Class Doc Comment
 *
 * @category Class
 * @package  Erive\Delivery
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResolvedParcel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResolvedParcel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'external_reference' => 'string',
        'comment' => 'string',
        'weight' => 'float',
        'width' => 'float',
        'length' => 'float',
        'height' => 'float',
        'packaging_units' => 'float',
        'status' => 'string',
        'status_history' => '\Erive\Delivery\Model\ParcelHistory[]',
        'to' => '\Erive\Delivery\Model\ResolvedAddress',
        'from' => '\Erive\Delivery\Model\ResolvedAddress',
        'label_url' => 'string'
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
        'external_reference' => null,
        'comment' => null,
        'weight' => 'double',
        'width' => 'double',
        'length' => 'double',
        'height' => 'double',
        'packaging_units' => 'integer',
        'status' => null,
        'status_history' => null,
        'to' => null,
        'from' => null,
        'label_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'external_reference' => true,
		'comment' => true,
		'weight' => true,
		'width' => true,
		'length' => true,
		'height' => true,
		'packaging_units' => true,
		'status' => false,
		'status_history' => false,
		'to' => false,
		'from' => false,
		'label_url' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'external_reference' => 'externalReference',
        'comment' => 'comment',
        'weight' => 'weight',
        'width' => 'width',
        'length' => 'length',
        'height' => 'height',
        'packaging_units' => 'packagingUnits',
        'status' => 'status',
        'status_history' => 'statusHistory',
        'to' => 'to',
        'from' => 'from',
        'label_url' => 'labelUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'external_reference' => 'setExternalReference',
        'comment' => 'setComment',
        'weight' => 'setWeight',
        'width' => 'setWidth',
        'length' => 'setLength',
        'height' => 'setHeight',
        'packaging_units' => 'setPackagingUnits',
        'status' => 'setStatus',
        'status_history' => 'setStatusHistory',
        'to' => 'setTo',
        'from' => 'setFrom',
        'label_url' => 'setLabelUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'external_reference' => 'getExternalReference',
        'comment' => 'getComment',
        'weight' => 'getWeight',
        'width' => 'getWidth',
        'length' => 'getLength',
        'height' => 'getHeight',
        'packaging_units' => 'getPackagingUnits',
        'status' => 'getStatus',
        'status_history' => 'getStatusHistory',
        'to' => 'getTo',
        'from' => 'getFrom',
        'label_url' => 'getLabelUrl'
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

    public const STATUS_PREPARED_BY_SENDER = 'PreparedBySender';
    public const STATUS_ANNOUNCED = 'Announced';
    public const STATUS_DELIVERED = 'Delivered';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PREPARED_BY_SENDER,
            self::STATUS_ANNOUNCED,
            self::STATUS_DELIVERED,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('external_reference', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('length', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('packaging_units', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('status_history', $data ?? [], null);
        $this->setIfExists('to', $data ?? [], null);
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('label_url', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets external_reference
     *
     * @return string|null
     */
    public function getExternalReference()
    {
        return $this->container['external_reference'];
    }

    /**
     * Sets external_reference
     *
     * @param string|null $external_reference external_reference
     *
     * @return self
     */
    public function setExternalReference($external_reference)
    {
        if (is_null($external_reference)) {
            array_push($this->openAPINullablesSetToNull, 'external_reference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('external_reference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['external_reference'] = $external_reference;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (is_null($comment)) {
            array_push($this->openAPINullablesSetToNull, 'comment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('comment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float|null $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            array_push($this->openAPINullablesSetToNull, 'weight');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('weight', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets width
     *
     * @return float|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param float|null $width width
     *
     * @return self
     */
    public function setWidth($width)
    {
        if (is_null($width)) {
            array_push($this->openAPINullablesSetToNull, 'width');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('width', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets length
     *
     * @return float|null
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param float|null $length length
     *
     * @return self
     */
    public function setLength($length)
    {
        if (is_null($length)) {
            array_push($this->openAPINullablesSetToNull, 'length');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('length', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets height
     *
     * @return float|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param float|null $height height
     *
     * @return self
     */
    public function setHeight($height)
    {
        if (is_null($height)) {
            array_push($this->openAPINullablesSetToNull, 'height');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('height', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets packaging_units
     *
     * @return float|null
     */
    public function getPackagingUnits()
    {
        return $this->container['packaging_units'];
    }

    /**
     * Sets packaging_units
     *
     * @param float|null $packaging_units packaging_units
     *
     * @return self
     */
    public function setPackagingUnits($packaging_units)
    {
        if (is_null($packaging_units)) {
            array_push($this->openAPINullablesSetToNull, 'packaging_units');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('packaging_units', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['packaging_units'] = $packaging_units;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_history
     *
     * @return \Erive\Delivery\Model\ParcelHistory[]|null
     */
    public function getStatusHistory()
    {
        return $this->container['status_history'];
    }

    /**
     * Sets status_history
     *
     * @param \Erive\Delivery\Model\ParcelHistory[]|null $status_history status_history
     *
     * @return self
     */
    public function setStatusHistory($status_history)
    {
        if (is_null($status_history)) {
            throw new \InvalidArgumentException('non-nullable status_history cannot be null');
        }
        $this->container['status_history'] = $status_history;

        return $this;
    }

    /**
     * Gets to
     *
     * @return \Erive\Delivery\Model\ResolvedAddress|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \Erive\Delivery\Model\ResolvedAddress|null $to to
     *
     * @return self
     */
    public function setTo($to)
    {
        if (is_null($to)) {
            throw new \InvalidArgumentException('non-nullable to cannot be null');
        }
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets from
     *
     * @return \Erive\Delivery\Model\ResolvedAddress|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \Erive\Delivery\Model\ResolvedAddress|null $from from
     *
     * @return self
     */
    public function setFrom($from)
    {
        if (is_null($from)) {
            throw new \InvalidArgumentException('non-nullable from cannot be null');
        }
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets label_url
     *
     * @return string|null
     */
    public function getLabelUrl()
    {
        return $this->container['label_url'];
    }

    /**
     * Sets label_url
     *
     * @param string|null $label_url label_url
     *
     * @return self
     */
    public function setLabelUrl($label_url)
    {
        if (is_null($label_url)) {
            throw new \InvalidArgumentException('non-nullable label_url cannot be null');
        }
        $this->container['label_url'] = $label_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


