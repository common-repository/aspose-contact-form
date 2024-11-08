<?php
/**
 * Title
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
 * Title Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Title implements  ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Title';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_inner_mode' => 'bool',
        'shape_properties' => '\Aspose\Cells\Cloud\Model\LinkElement[]',
        'auto_scale_font' => 'bool',
        'area' => '\Aspose\Cells\Cloud\Model\Area',
        'height' => 'int',
        'width' => 'int',
        'background_mode' => 'string',
        'is_automatic_size' => 'bool',
        'y' => 'int',
        'x' => 'int',
        'shadow' => 'bool',
        'font' => '\Aspose\Cells\Cloud\Model\Font',
        'border' => '\Aspose\Cells\Cloud\Model\Line',
        'link' => '\Aspose\Cells\Cloud\Model\Link',
        'linked_source' => 'string',
        'text' => 'string',
        'is_visible' => 'bool',
        'text_direction' => 'string',
        'rotation_angle' => 'int',
        'text_vertical_alignment' => 'string',
        'text_horizontal_alignment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_inner_mode' => null,
        'shape_properties' => null,
        'auto_scale_font' => null,
        'area' => null,
        'height' => 'int32',
        'width' => 'int32',
        'background_mode' => null,
        'is_automatic_size' => null,
        'y' => 'int32',
        'x' => 'int32',
        'shadow' => null,
        'font' => null,
        'border' => null,
        'link' => null,
        'linked_source' => null,
        'text' => null,
        'is_visible' => null,
        'text_direction' => null,
        'rotation_angle' => 'int32',
        'text_vertical_alignment' => null,
        'text_horizontal_alignment' => null
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
        'is_inner_mode' => 'IsInnerMode',
        'shape_properties' => 'ShapeProperties',
        'auto_scale_font' => 'AutoScaleFont',
        'area' => 'Area',
        'height' => 'Height',
        'width' => 'Width',
        'background_mode' => 'BackgroundMode',
        'is_automatic_size' => 'IsAutomaticSize',
        'y' => 'Y',
        'x' => 'X',
        'shadow' => 'Shadow',
        'font' => 'Font',
        'border' => 'Border',
        'link' => 'link',
        'linked_source' => 'LinkedSource',
        'text' => 'Text',
        'is_visible' => 'IsVisible',
        'text_direction' => 'TextDirection',
        'rotation_angle' => 'RotationAngle',
        'text_vertical_alignment' => 'TextVerticalAlignment',
        'text_horizontal_alignment' => 'TextHorizontalAlignment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_inner_mode' => 'setIsInnerMode',
        'shape_properties' => 'setShapeProperties',
        'auto_scale_font' => 'setAutoScaleFont',
        'area' => 'setArea',
        'height' => 'setHeight',
        'width' => 'setWidth',
        'background_mode' => 'setBackgroundMode',
        'is_automatic_size' => 'setIsAutomaticSize',
        'y' => 'setY',
        'x' => 'setX',
        'shadow' => 'setShadow',
        'font' => 'setFont',
        'border' => 'setBorder',
        'link' => 'setLink',
        'linked_source' => 'setLinkedSource',
        'text' => 'setText',
        'is_visible' => 'setIsVisible',
        'text_direction' => 'setTextDirection',
        'rotation_angle' => 'setRotationAngle',
        'text_vertical_alignment' => 'setTextVerticalAlignment',
        'text_horizontal_alignment' => 'setTextHorizontalAlignment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_inner_mode' => 'getIsInnerMode',
        'shape_properties' => 'getShapeProperties',
        'auto_scale_font' => 'getAutoScaleFont',
        'area' => 'getArea',
        'height' => 'getHeight',
        'width' => 'getWidth',
        'background_mode' => 'getBackgroundMode',
        'is_automatic_size' => 'getIsAutomaticSize',
        'y' => 'getY',
        'x' => 'getX',
        'shadow' => 'getShadow',
        'font' => 'getFont',
        'border' => 'getBorder',
        'link' => 'getLink',
        'linked_source' => 'getLinkedSource',
        'text' => 'getText',
        'is_visible' => 'getIsVisible',
        'text_direction' => 'getTextDirection',
        'rotation_angle' => 'getRotationAngle',
        'text_vertical_alignment' => 'getTextVerticalAlignment',
        'text_horizontal_alignment' => 'getTextHorizontalAlignment'
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
        $this->container['is_inner_mode'] = isset($data['is_inner_mode']) ? $data['is_inner_mode'] : null;
        $this->container['shape_properties'] = isset($data['shape_properties']) ? $data['shape_properties'] : null;
        $this->container['auto_scale_font'] = isset($data['auto_scale_font']) ? $data['auto_scale_font'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['background_mode'] = isset($data['background_mode']) ? $data['background_mode'] : null;
        $this->container['is_automatic_size'] = isset($data['is_automatic_size']) ? $data['is_automatic_size'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['shadow'] = isset($data['shadow']) ? $data['shadow'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['linked_source'] = isset($data['linked_source']) ? $data['linked_source'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['is_visible'] = isset($data['is_visible']) ? $data['is_visible'] : null;
        $this->container['text_direction'] = isset($data['text_direction']) ? $data['text_direction'] : null;
        $this->container['rotation_angle'] = isset($data['rotation_angle']) ? $data['rotation_angle'] : null;
        $this->container['text_vertical_alignment'] = isset($data['text_vertical_alignment']) ? $data['text_vertical_alignment'] : null;
        $this->container['text_horizontal_alignment'] = isset($data['text_horizontal_alignment']) ? $data['text_horizontal_alignment'] : null;
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
     * Gets is_inner_mode
     *
     * @return bool
     */
    public function getIsInnerMode()
    {
        return $this->container['is_inner_mode'];
    }

    /**
     * Sets is_inner_mode
     *
     * @param bool $is_inner_mode is_inner_mode
     *
     * @return $this
     */
    public function setIsInnerMode($is_inner_mode)
    {
        $this->container['is_inner_mode'] = $is_inner_mode;

        return $this;
    }

    /**
     * Gets shape_properties
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement[]
     */
    public function getShapeProperties()
    {
        return $this->container['shape_properties'];
    }

    /**
     * Sets shape_properties
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement[] $shape_properties shape_properties
     *
     * @return $this
     */
    public function setShapeProperties($shape_properties)
    {
        $this->container['shape_properties'] = $shape_properties;

        return $this;
    }

    /**
     * Gets auto_scale_font
     *
     * @return bool
     */
    public function getAutoScaleFont()
    {
        return $this->container['auto_scale_font'];
    }

    /**
     * Sets auto_scale_font
     *
     * @param bool $auto_scale_font auto_scale_font
     *
     * @return $this
     */
    public function setAutoScaleFont($auto_scale_font)
    {
        $this->container['auto_scale_font'] = $auto_scale_font;

        return $this;
    }

    /**
     * Gets area
     *
     * @return \Aspose\Cells\Cloud\Model\Area
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param \Aspose\Cells\Cloud\Model\Area $area area
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets background_mode
     *
     * @return string
     */
    public function getBackgroundMode()
    {
        return $this->container['background_mode'];
    }

    /**
     * Sets background_mode
     *
     * @param string $background_mode background_mode
     *
     * @return $this
     */
    public function setBackgroundMode($background_mode)
    {
        $this->container['background_mode'] = $background_mode;

        return $this;
    }

    /**
     * Gets is_automatic_size
     *
     * @return bool
     */
    public function getIsAutomaticSize()
    {
        return $this->container['is_automatic_size'];
    }

    /**
     * Sets is_automatic_size
     *
     * @param bool $is_automatic_size is_automatic_size
     *
     * @return $this
     */
    public function setIsAutomaticSize($is_automatic_size)
    {
        $this->container['is_automatic_size'] = $is_automatic_size;

        return $this;
    }

    /**
     * Gets y
     *
     * @return int
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     * @param int $y y
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->container['y'] = $y;

        return $this;
    }

    /**
     * Gets x
     *
     * @return int
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param int $x x
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets shadow
     *
     * @return bool
     */
    public function getShadow()
    {
        return $this->container['shadow'];
    }

    /**
     * Sets shadow
     *
     * @param bool $shadow shadow
     *
     * @return $this
     */
    public function setShadow($shadow)
    {
        $this->container['shadow'] = $shadow;

        return $this;
    }

    /**
     * Gets font
     *
     * @return \Aspose\Cells\Cloud\Model\Font
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
     * Sets font
     *
     * @param \Aspose\Cells\Cloud\Model\Font $font font
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

        return $this;
    }

    /**
     * Gets border
     *
     * @return \Aspose\Cells\Cloud\Model\Line
     */
    public function getBorder()
    {
        return $this->container['border'];
    }

    /**
     * Sets border
     *
     * @param \Aspose\Cells\Cloud\Model\Line $border border
     *
     * @return $this
     */
    public function setBorder($border)
    {
        $this->container['border'] = $border;

        return $this;
    }

    /**
     * Gets link
     *
     * @return \Aspose\Cells\Cloud\Model\Link
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param \Aspose\Cells\Cloud\Model\Link $link link
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets linked_source
     *
     * @return string
     */
    public function getLinkedSource()
    {
        return $this->container['linked_source'];
    }

    /**
     * Sets linked_source
     *
     * @param string $linked_source linked_source
     *
     * @return $this
     */
    public function setLinkedSource($linked_source)
    {
        $this->container['linked_source'] = $linked_source;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets is_visible
     *
     * @return bool
     */
    public function getIsVisible()
    {
        return $this->container['is_visible'];
    }

    /**
     * Sets is_visible
     *
     * @param bool $is_visible is_visible
     *
     * @return $this
     */
    public function setIsVisible($is_visible)
    {
        $this->container['is_visible'] = $is_visible;

        return $this;
    }

    /**
     * Gets text_direction
     *
     * @return string
     */
    public function getTextDirection()
    {
        return $this->container['text_direction'];
    }

    /**
     * Sets text_direction
     *
     * @param string $text_direction text_direction
     *
     * @return $this
     */
    public function setTextDirection($text_direction)
    {
        $this->container['text_direction'] = $text_direction;

        return $this;
    }

    /**
     * Gets rotation_angle
     *
     * @return int
     */
    public function getRotationAngle()
    {
        return $this->container['rotation_angle'];
    }

    /**
     * Sets rotation_angle
     *
     * @param int $rotation_angle rotation_angle
     *
     * @return $this
     */
    public function setRotationAngle($rotation_angle)
    {
        $this->container['rotation_angle'] = $rotation_angle;

        return $this;
    }

    /**
     * Gets text_vertical_alignment
     *
     * @return string
     */
    public function getTextVerticalAlignment()
    {
        return $this->container['text_vertical_alignment'];
    }

    /**
     * Sets text_vertical_alignment
     *
     * @param string $text_vertical_alignment text_vertical_alignment
     *
     * @return $this
     */
    public function setTextVerticalAlignment($text_vertical_alignment)
    {
        $this->container['text_vertical_alignment'] = $text_vertical_alignment;

        return $this;
    }

    /**
     * Gets text_horizontal_alignment
     *
     * @return string
     */
    public function getTextHorizontalAlignment()
    {
        return $this->container['text_horizontal_alignment'];
    }

    /**
     * Sets text_horizontal_alignment
     *
     * @param string $text_horizontal_alignment text_horizontal_alignment
     *
     * @return $this
     */
    public function setTextHorizontalAlignment($text_horizontal_alignment)
    {
        $this->container['text_horizontal_alignment'] = $text_horizontal_alignment;

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


