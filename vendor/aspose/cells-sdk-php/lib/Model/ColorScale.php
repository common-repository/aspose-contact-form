<?php
/**
 * ColorScale
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
 * ColorScale Class Doc Comment
 *
 * @category Class
 * @description Describe the ColorScale conditional formatting rule. This conditional formatting    rule creates a gradated color scale on the cells.
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ColorScale implements  ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ColorScale';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max_cfvo' => '\Aspose\Cells\Cloud\Model\ConditionalFormattingValue',
        'mid_color' => '\Aspose\Cells\Cloud\Model\Color',
        'min_color' => '\Aspose\Cells\Cloud\Model\Color',
        'mid_cfvo' => '\Aspose\Cells\Cloud\Model\ConditionalFormattingValue',
        'min_cfvo' => '\Aspose\Cells\Cloud\Model\ConditionalFormattingValue',
        'max_color' => '\Aspose\Cells\Cloud\Model\Color'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'max_cfvo' => null,
        'mid_color' => null,
        'min_color' => null,
        'mid_cfvo' => null,
        'min_cfvo' => null,
        'max_color' => null
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
        'max_cfvo' => 'MaxCfvo',
        'mid_color' => 'MidColor',
        'min_color' => 'MinColor',
        'mid_cfvo' => 'MidCfvo',
        'min_cfvo' => 'MinCfvo',
        'max_color' => 'MaxColor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_cfvo' => 'setMaxCfvo',
        'mid_color' => 'setMidColor',
        'min_color' => 'setMinColor',
        'mid_cfvo' => 'setMidCfvo',
        'min_cfvo' => 'setMinCfvo',
        'max_color' => 'setMaxColor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_cfvo' => 'getMaxCfvo',
        'mid_color' => 'getMidColor',
        'min_color' => 'getMinColor',
        'mid_cfvo' => 'getMidCfvo',
        'min_cfvo' => 'getMinCfvo',
        'max_color' => 'getMaxColor'
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
        $this->container['max_cfvo'] = isset($data['max_cfvo']) ? $data['max_cfvo'] : null;
        $this->container['mid_color'] = isset($data['mid_color']) ? $data['mid_color'] : null;
        $this->container['min_color'] = isset($data['min_color']) ? $data['min_color'] : null;
        $this->container['mid_cfvo'] = isset($data['mid_cfvo']) ? $data['mid_cfvo'] : null;
        $this->container['min_cfvo'] = isset($data['min_cfvo']) ? $data['min_cfvo'] : null;
        $this->container['max_color'] = isset($data['max_color']) ? $data['max_color'] : null;
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
     * Gets max_cfvo
     *
     * @return \Aspose\Cells\Cloud\Model\ConditionalFormattingValue
     */
    public function getMaxCfvo()
    {
        return $this->container['max_cfvo'];
    }

    /**
     * Sets max_cfvo
     *
     * @param \Aspose\Cells\Cloud\Model\ConditionalFormattingValue $max_cfvo Get or set this ColorScale's max value object.  Cannot set null or CFValueObject     with type FormatConditionValueType.Min to it.
     *
     * @return $this
     */
    public function setMaxCfvo($max_cfvo)
    {
        $this->container['max_cfvo'] = $max_cfvo;

        return $this;
    }

    /**
     * Gets mid_color
     *
     * @return \Aspose\Cells\Cloud\Model\Color
     */
    public function getMidColor()
    {
        return $this->container['mid_color'];
    }

    /**
     * Sets mid_color
     *
     * @param \Aspose\Cells\Cloud\Model\Color $mid_color Get or set the mid value object's corresponding color.
     *
     * @return $this
     */
    public function setMidColor($mid_color)
    {
        $this->container['mid_color'] = $mid_color;

        return $this;
    }

    /**
     * Gets min_color
     *
     * @return \Aspose\Cells\Cloud\Model\Color
     */
    public function getMinColor()
    {
        return $this->container['min_color'];
    }

    /**
     * Sets min_color
     *
     * @param \Aspose\Cells\Cloud\Model\Color $min_color Get or set the min value object's corresponding color.
     *
     * @return $this
     */
    public function setMinColor($min_color)
    {
        $this->container['min_color'] = $min_color;

        return $this;
    }

    /**
     * Gets mid_cfvo
     *
     * @return \Aspose\Cells\Cloud\Model\ConditionalFormattingValue
     */
    public function getMidCfvo()
    {
        return $this->container['mid_cfvo'];
    }

    /**
     * Sets mid_cfvo
     *
     * @param \Aspose\Cells\Cloud\Model\ConditionalFormattingValue $mid_cfvo Get or set this ColorScale's mid value object.  Cannot set CFValueObject    with type FormatConditionValueType.Max or FormatConditionValueType.Min to    it.
     *
     * @return $this
     */
    public function setMidCfvo($mid_cfvo)
    {
        $this->container['mid_cfvo'] = $mid_cfvo;

        return $this;
    }

    /**
     * Gets min_cfvo
     *
     * @return \Aspose\Cells\Cloud\Model\ConditionalFormattingValue
     */
    public function getMinCfvo()
    {
        return $this->container['min_cfvo'];
    }

    /**
     * Sets min_cfvo
     *
     * @param \Aspose\Cells\Cloud\Model\ConditionalFormattingValue $min_cfvo Get or set this ColorScale's min value object.  Cannot set null or CFValueObject    with type FormatConditionValueType.Max to it.
     *
     * @return $this
     */
    public function setMinCfvo($min_cfvo)
    {
        $this->container['min_cfvo'] = $min_cfvo;

        return $this;
    }

    /**
     * Gets max_color
     *
     * @return \Aspose\Cells\Cloud\Model\Color
     */
    public function getMaxColor()
    {
        return $this->container['max_color'];
    }

    /**
     * Sets max_color
     *
     * @param \Aspose\Cells\Cloud\Model\Color $max_color Get or set the max value object's corresponding color.
     *
     * @return $this
     */
    public function setMaxColor($max_color)
    {
        $this->container['max_color'] = $max_color;

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


