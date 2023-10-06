<?php
/**
 * AccessCodeFormat
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * AccessCodeFormat Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccessCodeFormat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'accessCodeFormat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'format_required' => '?string',
        'format_required_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'letter_required' => '?string',
        'letter_required_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'minimum_length' => '?string',
        'minimum_length_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'number_required' => '?string',
        'number_required_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'special_character_required' => '?string',
        'special_character_required_metadata' => '\DocuSign\eSign\Model\SettingsMetadata'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'format_required' => null,
        'format_required_metadata' => null,
        'letter_required' => null,
        'letter_required_metadata' => null,
        'minimum_length' => null,
        'minimum_length_metadata' => null,
        'number_required' => null,
        'number_required_metadata' => null,
        'special_character_required' => null,
        'special_character_required_metadata' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'format_required' => 'formatRequired',
        'format_required_metadata' => 'formatRequiredMetadata',
        'letter_required' => 'letterRequired',
        'letter_required_metadata' => 'letterRequiredMetadata',
        'minimum_length' => 'minimumLength',
        'minimum_length_metadata' => 'minimumLengthMetadata',
        'number_required' => 'numberRequired',
        'number_required_metadata' => 'numberRequiredMetadata',
        'special_character_required' => 'specialCharacterRequired',
        'special_character_required_metadata' => 'specialCharacterRequiredMetadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'format_required' => 'setFormatRequired',
        'format_required_metadata' => 'setFormatRequiredMetadata',
        'letter_required' => 'setLetterRequired',
        'letter_required_metadata' => 'setLetterRequiredMetadata',
        'minimum_length' => 'setMinimumLength',
        'minimum_length_metadata' => 'setMinimumLengthMetadata',
        'number_required' => 'setNumberRequired',
        'number_required_metadata' => 'setNumberRequiredMetadata',
        'special_character_required' => 'setSpecialCharacterRequired',
        'special_character_required_metadata' => 'setSpecialCharacterRequiredMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'format_required' => 'getFormatRequired',
        'format_required_metadata' => 'getFormatRequiredMetadata',
        'letter_required' => 'getLetterRequired',
        'letter_required_metadata' => 'getLetterRequiredMetadata',
        'minimum_length' => 'getMinimumLength',
        'minimum_length_metadata' => 'getMinimumLengthMetadata',
        'number_required' => 'getNumberRequired',
        'number_required_metadata' => 'getNumberRequiredMetadata',
        'special_character_required' => 'getSpecialCharacterRequired',
        'special_character_required_metadata' => 'getSpecialCharacterRequiredMetadata'
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
        return self::$swaggerModelName;
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
        $this->container['format_required'] = isset($data['format_required']) ? $data['format_required'] : null;
        $this->container['format_required_metadata'] = isset($data['format_required_metadata']) ? $data['format_required_metadata'] : null;
        $this->container['letter_required'] = isset($data['letter_required']) ? $data['letter_required'] : null;
        $this->container['letter_required_metadata'] = isset($data['letter_required_metadata']) ? $data['letter_required_metadata'] : null;
        $this->container['minimum_length'] = isset($data['minimum_length']) ? $data['minimum_length'] : null;
        $this->container['minimum_length_metadata'] = isset($data['minimum_length_metadata']) ? $data['minimum_length_metadata'] : null;
        $this->container['number_required'] = isset($data['number_required']) ? $data['number_required'] : null;
        $this->container['number_required_metadata'] = isset($data['number_required_metadata']) ? $data['number_required_metadata'] : null;
        $this->container['special_character_required'] = isset($data['special_character_required']) ? $data['special_character_required'] : null;
        $this->container['special_character_required_metadata'] = isset($data['special_character_required_metadata']) ? $data['special_character_required_metadata'] : null;
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
     * Gets format_required
     *
     * @return ?string
     */
    public function getFormatRequired()
    {
        return $this->container['format_required'];
    }

    /**
     * Sets format_required
     *
     * @param ?string $format_required 
     *
     * @return $this
     */
    public function setFormatRequired($format_required)
    {
        $this->container['format_required'] = $format_required;

        return $this;
    }

    /**
     * Gets format_required_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getFormatRequiredMetadata()
    {
        return $this->container['format_required_metadata'];
    }

    /**
     * Sets format_required_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $format_required_metadata format_required_metadata
     *
     * @return $this
     */
    public function setFormatRequiredMetadata($format_required_metadata)
    {
        $this->container['format_required_metadata'] = $format_required_metadata;

        return $this;
    }

    /**
     * Gets letter_required
     *
     * @return ?string
     */
    public function getLetterRequired()
    {
        return $this->container['letter_required'];
    }

    /**
     * Sets letter_required
     *
     * @param ?string $letter_required 
     *
     * @return $this
     */
    public function setLetterRequired($letter_required)
    {
        $this->container['letter_required'] = $letter_required;

        return $this;
    }

    /**
     * Gets letter_required_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getLetterRequiredMetadata()
    {
        return $this->container['letter_required_metadata'];
    }

    /**
     * Sets letter_required_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $letter_required_metadata letter_required_metadata
     *
     * @return $this
     */
    public function setLetterRequiredMetadata($letter_required_metadata)
    {
        $this->container['letter_required_metadata'] = $letter_required_metadata;

        return $this;
    }

    /**
     * Gets minimum_length
     *
     * @return ?string
     */
    public function getMinimumLength()
    {
        return $this->container['minimum_length'];
    }

    /**
     * Sets minimum_length
     *
     * @param ?string $minimum_length 
     *
     * @return $this
     */
    public function setMinimumLength($minimum_length)
    {
        $this->container['minimum_length'] = $minimum_length;

        return $this;
    }

    /**
     * Gets minimum_length_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getMinimumLengthMetadata()
    {
        return $this->container['minimum_length_metadata'];
    }

    /**
     * Sets minimum_length_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $minimum_length_metadata minimum_length_metadata
     *
     * @return $this
     */
    public function setMinimumLengthMetadata($minimum_length_metadata)
    {
        $this->container['minimum_length_metadata'] = $minimum_length_metadata;

        return $this;
    }

    /**
     * Gets number_required
     *
     * @return ?string
     */
    public function getNumberRequired()
    {
        return $this->container['number_required'];
    }

    /**
     * Sets number_required
     *
     * @param ?string $number_required 
     *
     * @return $this
     */
    public function setNumberRequired($number_required)
    {
        $this->container['number_required'] = $number_required;

        return $this;
    }

    /**
     * Gets number_required_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getNumberRequiredMetadata()
    {
        return $this->container['number_required_metadata'];
    }

    /**
     * Sets number_required_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $number_required_metadata number_required_metadata
     *
     * @return $this
     */
    public function setNumberRequiredMetadata($number_required_metadata)
    {
        $this->container['number_required_metadata'] = $number_required_metadata;

        return $this;
    }

    /**
     * Gets special_character_required
     *
     * @return ?string
     */
    public function getSpecialCharacterRequired()
    {
        return $this->container['special_character_required'];
    }

    /**
     * Sets special_character_required
     *
     * @param ?string $special_character_required 
     *
     * @return $this
     */
    public function setSpecialCharacterRequired($special_character_required)
    {
        $this->container['special_character_required'] = $special_character_required;

        return $this;
    }

    /**
     * Gets special_character_required_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getSpecialCharacterRequiredMetadata()
    {
        return $this->container['special_character_required_metadata'];
    }

    /**
     * Sets special_character_required_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $special_character_required_metadata special_character_required_metadata
     *
     * @return $this
     */
    public function setSpecialCharacterRequiredMetadata($special_character_required_metadata)
    {
        $this->container['special_character_required_metadata'] = $special_character_required_metadata;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

