<?php
/**
 * Range
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
 * Range Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Range implements  ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Range';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'column_count' => 'int',
        'row_height' => 'double',
        'name' => 'string',
        'first_column' => 'int',
        'column_width' => 'double',
        'refers_to' => 'string',
        'row_count' => 'int',
        'first_row' => 'int',
        'worksheet' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'column_count' => 'int32',
        'row_height' => 'double',
        'name' => null,
        'first_column' => 'int32',
        'column_width' => 'double',
        'refers_to' => null,
        'row_count' => 'int32',
        'first_row' => 'int32',
        'worksheet' => null
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
        'column_count' => 'ColumnCount',
        'row_height' => 'RowHeight',
        'name' => 'Name',
        'first_column' => 'FirstColumn',
        'column_width' => 'ColumnWidth',
        'refers_to' => 'RefersTo',
        'row_count' => 'RowCount',
        'first_row' => 'FirstRow',
        'worksheet' => 'Worksheet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'column_count' => 'setColumnCount',
        'row_height' => 'setRowHeight',
        'name' => 'setName',
        'first_column' => 'setFirstColumn',
        'column_width' => 'setColumnWidth',
        'refers_to' => 'setRefersTo',
        'row_count' => 'setRowCount',
        'first_row' => 'setFirstRow',
        'worksheet' => 'setWorksheet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'column_count' => 'getColumnCount',
        'row_height' => 'getRowHeight',
        'name' => 'getName',
        'first_column' => 'getFirstColumn',
        'column_width' => 'getColumnWidth',
        'refers_to' => 'getRefersTo',
        'row_count' => 'getRowCount',
        'first_row' => 'getFirstRow',
        'worksheet' => 'getWorksheet'
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
        $this->container['column_count'] = isset($data['column_count']) ? $data['column_count'] : null;
        $this->container['row_height'] = isset($data['row_height']) ? $data['row_height'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['first_column'] = isset($data['first_column']) ? $data['first_column'] : null;
        $this->container['column_width'] = isset($data['column_width']) ? $data['column_width'] : null;
        $this->container['refers_to'] = isset($data['refers_to']) ? $data['refers_to'] : null;
        $this->container['row_count'] = isset($data['row_count']) ? $data['row_count'] : null;
        $this->container['first_row'] = isset($data['first_row']) ? $data['first_row'] : null;
        $this->container['worksheet'] = isset($data['worksheet']) ? $data['worksheet'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['column_count'] === null) {
            $invalidProperties[] = "'column_count' can't be null";
        }
        if ($this->container['row_height'] === null) {
            $invalidProperties[] = "'row_height' can't be null";
        }
        if ($this->container['first_column'] === null) {
            $invalidProperties[] = "'first_column' can't be null";
        }
        if ($this->container['column_width'] === null) {
            $invalidProperties[] = "'column_width' can't be null";
        }
        if ($this->container['row_count'] === null) {
            $invalidProperties[] = "'row_count' can't be null";
        }
        if ($this->container['first_row'] === null) {
            $invalidProperties[] = "'first_row' can't be null";
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

        if ($this->container['column_count'] === null) {
            return false;
        }
        if ($this->container['row_height'] === null) {
            return false;
        }
        if ($this->container['first_column'] === null) {
            return false;
        }
        if ($this->container['column_width'] === null) {
            return false;
        }
        if ($this->container['row_count'] === null) {
            return false;
        }
        if ($this->container['first_row'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets column_count
     *
     * @return int
     */
    public function getColumnCount()
    {
        return $this->container['column_count'];
    }

    /**
     * Sets column_count
     *
     * @param int $column_count Gets the count of columns in the range.
     *
     * @return $this
     */
    public function setColumnCount($column_count)
    {
        $this->container['column_count'] = $column_count;

        return $this;
    }

    /**
     * Gets row_height
     *
     * @return double
     */
    public function getRowHeight()
    {
        return $this->container['row_height'];
    }

    /**
     * Sets row_height
     *
     * @param double $row_height Sets or gets the height of rows in this range
     *
     * @return $this
     */
    public function setRowHeight($row_height)
    {
        $this->container['row_height'] = $row_height;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Gets or sets the name of the range.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets first_column
     *
     * @return int
     */
    public function getFirstColumn()
    {
        return $this->container['first_column'];
    }

    /**
     * Sets first_column
     *
     * @param int $first_column Gets the index of the first column of the range.
     *
     * @return $this
     */
    public function setFirstColumn($first_column)
    {
        $this->container['first_column'] = $first_column;

        return $this;
    }

    /**
     * Gets column_width
     *
     * @return double
     */
    public function getColumnWidth()
    {
        return $this->container['column_width'];
    }

    /**
     * Sets column_width
     *
     * @param double $column_width Sets or gets the column width of this range
     *
     * @return $this
     */
    public function setColumnWidth($column_width)
    {
        $this->container['column_width'] = $column_width;

        return $this;
    }

    /**
     * Gets refers_to
     *
     * @return string
     */
    public function getRefersTo()
    {
        return $this->container['refers_to'];
    }

    /**
     * Sets refers_to
     *
     * @param string $refers_to Gets the range's refers to.
     *
     * @return $this
     */
    public function setRefersTo($refers_to)
    {
        $this->container['refers_to'] = $refers_to;

        return $this;
    }

    /**
     * Gets row_count
     *
     * @return int
     */
    public function getRowCount()
    {
        return $this->container['row_count'];
    }

    /**
     * Sets row_count
     *
     * @param int $row_count Gets the count of rows in the range.
     *
     * @return $this
     */
    public function setRowCount($row_count)
    {
        $this->container['row_count'] = $row_count;

        return $this;
    }

    /**
     * Gets first_row
     *
     * @return int
     */
    public function getFirstRow()
    {
        return $this->container['first_row'];
    }

    /**
     * Sets first_row
     *
     * @param int $first_row Gets the index of the first row of the range.
     *
     * @return $this
     */
    public function setFirstRow($first_row)
    {
        $this->container['first_row'] = $first_row;

        return $this;
    }

    /**
     * Gets worksheet
     *
     * @return string
     */
    public function getWorksheet()
    {
        return $this->container['worksheet'];
    }

    /**
     * Sets worksheet
     *
     * @param string $worksheet Gets the Aspose.Cells.Range.Worksheetobject which contains this range.
     *
     * @return $this
     */
    public function setWorksheet($worksheet)
    {
        $this->container['worksheet'] = $worksheet;

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


