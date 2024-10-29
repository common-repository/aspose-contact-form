<?php
/**
 * PageBreakOperateParameter
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
 * PageBreakOperateParameter Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PageBreakOperateParameter extends OperateParameter 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PageBreakOperateParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'index' => 'int',
        'end_index' => 'int',
        'column' => 'int',
        'start_index' => 'int',
        'page_break_type' => 'string',
        'row' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'index' => 'int32',
        'end_index' => 'int32',
        'column' => 'int32',
        'start_index' => 'int32',
        'page_break_type' => null,
        'row' => 'int32'
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
        'index' => 'Index',
        'end_index' => 'EndIndex',
        'column' => 'Column',
        'start_index' => 'StartIndex',
        'page_break_type' => 'PageBreakType',
        'row' => 'Row'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'index' => 'setIndex',
        'end_index' => 'setEndIndex',
        'column' => 'setColumn',
        'start_index' => 'setStartIndex',
        'page_break_type' => 'setPageBreakType',
        'row' => 'setRow'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'index' => 'getIndex',
        'end_index' => 'getEndIndex',
        'column' => 'getColumn',
        'start_index' => 'getStartIndex',
        'page_break_type' => 'getPageBreakType',
        'row' => 'getRow'
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

        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['end_index'] = isset($data['end_index']) ? $data['end_index'] : null;
        $this->container['column'] = isset($data['column']) ? $data['column'] : null;
        $this->container['start_index'] = isset($data['start_index']) ? $data['start_index'] : null;
        $this->container['page_break_type'] = isset($data['page_break_type']) ? $data['page_break_type'] : null;
        $this->container['row'] = isset($data['row']) ? $data['row'] : null;
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
     * Gets index
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int $index index
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets end_index
     *
     * @return int
     */
    public function getEndIndex()
    {
        return $this->container['end_index'];
    }

    /**
     * Sets end_index
     *
     * @param int $end_index end_index
     *
     * @return $this
     */
    public function setEndIndex($end_index)
    {
        $this->container['end_index'] = $end_index;

        return $this;
    }

    /**
     * Gets column
     *
     * @return int
     */
    public function getColumn()
    {
        return $this->container['column'];
    }

    /**
     * Sets column
     *
     * @param int $column column
     *
     * @return $this
     */
    public function setColumn($column)
    {
        $this->container['column'] = $column;

        return $this;
    }

    /**
     * Gets start_index
     *
     * @return int
     */
    public function getStartIndex()
    {
        return $this->container['start_index'];
    }

    /**
     * Sets start_index
     *
     * @param int $start_index start_index
     *
     * @return $this
     */
    public function setStartIndex($start_index)
    {
        $this->container['start_index'] = $start_index;

        return $this;
    }

    /**
     * Gets page_break_type
     *
     * @return string
     */
    public function getPageBreakType()
    {
        return $this->container['page_break_type'];
    }

    /**
     * Sets page_break_type
     *
     * @param string $page_break_type page_break_type
     *
     * @return $this
     */
    public function setPageBreakType($page_break_type)
    {
        $this->container['page_break_type'] = $page_break_type;

        return $this;
    }

    /**
     * Gets row
     *
     * @return int
     */
    public function getRow()
    {
        return $this->container['row'];
    }

    /**
     * Sets row
     *
     * @param int $row row
     *
     * @return $this
     */
    public function setRow($row)
    {
        $this->container['row'] = $row;

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

