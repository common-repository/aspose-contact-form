<?php
/**
 * SplitWorkbookTaskParameter
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
use \Aspose\Cells\Cloud\ObjectSerializer;

/**
 * SplitWorkbookTaskParameter Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SplitWorkbookTaskParameter extends TaskParameter 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SplitWorkbookTaskParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'destination_file_format' => 'string',
        'destination_file_position' => '\Aspose\Cells\Cloud\Model\FileSource',
        'vertical_resolution' => 'int',
        'horizontal_resolution' => 'int',
        'split_name_rule' => 'string',
        'workbook' => '\Aspose\Cells\Cloud\Model\FileSource'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'destination_file_format' => null,
        'destination_file_position' => null,
        'vertical_resolution' => 'int32',
        'horizontal_resolution' => 'int32',
        'split_name_rule' => null,
        'workbook' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'destination_file_format' => 'DestinationFileFormat',
        'destination_file_position' => 'DestinationFilePosition',
        'vertical_resolution' => 'VerticalResolution',
        'horizontal_resolution' => 'HorizontalResolution',
        'split_name_rule' => 'SplitNameRule',
        'workbook' => 'Workbook'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'destination_file_format' => 'setDestinationFileFormat',
        'destination_file_position' => 'setDestinationFilePosition',
        'vertical_resolution' => 'setVerticalResolution',
        'horizontal_resolution' => 'setHorizontalResolution',
        'split_name_rule' => 'setSplitNameRule',
        'workbook' => 'setWorkbook'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'destination_file_format' => 'getDestinationFileFormat',
        'destination_file_position' => 'getDestinationFilePosition',
        'vertical_resolution' => 'getVerticalResolution',
        'horizontal_resolution' => 'getHorizontalResolution',
        'split_name_rule' => 'getSplitNameRule',
        'workbook' => 'getWorkbook'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['destination_file_format'] = isset($data['destination_file_format']) ? $data['destination_file_format'] : null;
        $this->container['destination_file_position'] = isset($data['destination_file_position']) ? $data['destination_file_position'] : null;
        $this->container['vertical_resolution'] = isset($data['vertical_resolution']) ? $data['vertical_resolution'] : null;
        $this->container['horizontal_resolution'] = isset($data['horizontal_resolution']) ? $data['horizontal_resolution'] : null;
        $this->container['split_name_rule'] = isset($data['split_name_rule']) ? $data['split_name_rule'] : null;
        $this->container['workbook'] = isset($data['workbook']) ? $data['workbook'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
        if (!parent::valid()) {
            return false;
        }

        return true;
    }


    /**
     * Gets destination_file_format
     *
     * @return string
     */
    public function getDestinationFileFormat()
    {
        return $this->container['destination_file_format'];
    }

    /**
     * Sets destination_file_format
     *
     * @param string $destination_file_format destination_file_format
     *
     * @return $this
     */
    public function setDestinationFileFormat($destination_file_format)
    {
        $this->container['destination_file_format'] = $destination_file_format;

        return $this;
    }

    /**
     * Gets destination_file_position
     *
     * @return \Aspose\Cells\Cloud\Model\FileSource
     */
    public function getDestinationFilePosition()
    {
        return $this->container['destination_file_position'];
    }

    /**
     * Sets destination_file_position
     *
     * @param \Aspose\Cells\Cloud\Model\FileSource $destination_file_position destination_file_position
     *
     * @return $this
     */
    public function setDestinationFilePosition($destination_file_position)
    {
        $this->container['destination_file_position'] = $destination_file_position;

        return $this;
    }

    /**
     * Gets vertical_resolution
     *
     * @return int
     */
    public function getVerticalResolution()
    {
        return $this->container['vertical_resolution'];
    }

    /**
     * Sets vertical_resolution
     *
     * @param int $vertical_resolution vertical_resolution
     *
     * @return $this
     */
    public function setVerticalResolution($vertical_resolution)
    {
        $this->container['vertical_resolution'] = $vertical_resolution;

        return $this;
    }

    /**
     * Gets horizontal_resolution
     *
     * @return int
     */
    public function getHorizontalResolution()
    {
        return $this->container['horizontal_resolution'];
    }

    /**
     * Sets horizontal_resolution
     *
     * @param int $horizontal_resolution horizontal_resolution
     *
     * @return $this
     */
    public function setHorizontalResolution($horizontal_resolution)
    {
        $this->container['horizontal_resolution'] = $horizontal_resolution;

        return $this;
    }

    /**
     * Gets split_name_rule
     *
     * @return string
     */
    public function getSplitNameRule()
    {
        return $this->container['split_name_rule'];
    }

    /**
     * Sets split_name_rule
     *
     * @param string $split_name_rule split_name_rule
     *
     * @return $this
     */
    public function setSplitNameRule($split_name_rule)
    {
        $this->container['split_name_rule'] = $split_name_rule;

        return $this;
    }

    /**
     * Gets workbook
     *
     * @return \Aspose\Cells\Cloud\Model\FileSource
     */
    public function getWorkbook()
    {
        return $this->container['workbook'];
    }

    /**
     * Sets workbook
     *
     * @param \Aspose\Cells\Cloud\Model\FileSource $workbook workbook
     *
     * @return $this
     */
    public function setWorkbook($workbook)
    {
        $this->container['workbook'] = $workbook;

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


