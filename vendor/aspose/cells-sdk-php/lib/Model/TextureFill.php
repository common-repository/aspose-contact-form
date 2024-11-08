<?php
/**
 * TextureFill
 *
 * PHP version 5
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/* 
 * <summary>
 *  Copyright (c) 2020 Aspose.Cells Cloud
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all 
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Aspose\Cells\Cloud\Model;

use \ArrayAccess;
use \Aspose\Cells\Cloud\ObjectSerializer;

/**
 * TextureFill Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TextureFill implements  ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TextureFill';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'scale' => 'double',
        'image' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'pic_format_option' => '\Aspose\Cells\Cloud\Model\PicFormatOption',
        'tile_pic_option' => '\Aspose\Cells\Cloud\Model\TilePicOption',
        'transparency' => 'double',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'scale' => 'double',
        'image' => null,
        'pic_format_option' => null,
        'tile_pic_option' => null,
        'transparency' => 'double',
        'type' => null
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
        'scale' => 'Scale',
        'image' => 'Image',
        'pic_format_option' => 'PicFormatOption',
        'tile_pic_option' => 'TilePicOption',
        'transparency' => 'Transparency',
        'type' => 'Type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'scale' => 'setScale',
        'image' => 'setImage',
        'pic_format_option' => 'setPicFormatOption',
        'tile_pic_option' => 'setTilePicOption',
        'transparency' => 'setTransparency',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scale' => 'getScale',
        'image' => 'getImage',
        'pic_format_option' => 'getPicFormatOption',
        'tile_pic_option' => 'getTilePicOption',
        'transparency' => 'getTransparency',
        'type' => 'getType'
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
        $this->container['scale'] = isset($data['scale']) ? $data['scale'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['pic_format_option'] = isset($data['pic_format_option']) ? $data['pic_format_option'] : null;
        $this->container['tile_pic_option'] = isset($data['tile_pic_option']) ? $data['tile_pic_option'] : null;
        $this->container['transparency'] = isset($data['transparency']) ? $data['transparency'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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

        return true;
    }


    /**
     * Gets scale
     *
     * @return double
     */
    public function getScale()
    {
        return $this->container['scale'];
    }

    /**
     * Sets scale
     *
     * @param double $scale scale
     *
     * @return $this
     */
    public function setScale($scale)
    {
        $this->container['scale'] = $scale;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets pic_format_option
     *
     * @return \Aspose\Cells\Cloud\Model\PicFormatOption
     */
    public function getPicFormatOption()
    {
        return $this->container['pic_format_option'];
    }

    /**
     * Sets pic_format_option
     *
     * @param \Aspose\Cells\Cloud\Model\PicFormatOption $pic_format_option pic_format_option
     *
     * @return $this
     */
    public function setPicFormatOption($pic_format_option)
    {
        $this->container['pic_format_option'] = $pic_format_option;

        return $this;
    }

    /**
     * Gets tile_pic_option
     *
     * @return \Aspose\Cells\Cloud\Model\TilePicOption
     */
    public function getTilePicOption()
    {
        return $this->container['tile_pic_option'];
    }

    /**
     * Sets tile_pic_option
     *
     * @param \Aspose\Cells\Cloud\Model\TilePicOption $tile_pic_option tile_pic_option
     *
     * @return $this
     */
    public function setTilePicOption($tile_pic_option)
    {
        $this->container['tile_pic_option'] = $tile_pic_option;

        return $this;
    }

    /**
     * Gets transparency
     *
     * @return double
     */
    public function getTransparency()
    {
        return $this->container['transparency'];
    }

    /**
     * Sets transparency
     *
     * @param double $transparency transparency
     *
     * @return $this
     */
    public function setTransparency($transparency)
    {
        $this->container['transparency'] = $transparency;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


