<?php
/**
 * Cells
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
 * Cells Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Cells implements  ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Cells';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'link' => '\Aspose\Cells\Cloud\Model\Link',
        'rows' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'cell_count' => 'int',
        'max_row' => 'int',
        'cell_list' => '\Aspose\Cells\Cloud\Model\LinkElement[]',
        'max_column' => 'int',
        'columns' => '\Aspose\Cells\Cloud\Model\LinkElement'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'link' => null,
        'rows' => null,
        'cell_count' => 'int32',
        'max_row' => 'int32',
        'cell_list' => null,
        'max_column' => 'int32',
        'columns' => null
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
        'link' => 'link',
        'rows' => 'Rows',
        'cell_count' => 'CellCount',
        'max_row' => 'MaxRow',
        'cell_list' => 'CellList',
        'max_column' => 'MaxColumn',
        'columns' => 'Columns'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'link' => 'setLink',
        'rows' => 'setRows',
        'cell_count' => 'setCellCount',
        'max_row' => 'setMaxRow',
        'cell_list' => 'setCellList',
        'max_column' => 'setMaxColumn',
        'columns' => 'setColumns'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'link' => 'getLink',
        'rows' => 'getRows',
        'cell_count' => 'getCellCount',
        'max_row' => 'getMaxRow',
        'cell_list' => 'getCellList',
        'max_column' => 'getMaxColumn',
        'columns' => 'getColumns'
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
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['cell_count'] = isset($data['cell_count']) ? $data['cell_count'] : null;
        $this->container['max_row'] = isset($data['max_row']) ? $data['max_row'] : null;
        $this->container['cell_list'] = isset($data['cell_list']) ? $data['cell_list'] : null;
        $this->container['max_column'] = isset($data['max_column']) ? $data['max_column'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cell_count'] === null) {
            $invalidProperties[] = "'cell_count' can't be null";
        }
        if ($this->container['max_row'] === null) {
            $invalidProperties[] = "'max_row' can't be null";
        }
        if ($this->container['max_column'] === null) {
            $invalidProperties[] = "'max_column' can't be null";
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

        if ($this->container['cell_count'] === null) {
            return false;
        }
        if ($this->container['max_row'] === null) {
            return false;
        }
        if ($this->container['max_column'] === null) {
            return false;
        }
        return true;
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
     * Gets rows
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement $rows rows
     *
     * @return $this
     */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;

        return $this;
    }

    /**
     * Gets cell_count
     *
     * @return int
     */
    public function getCellCount()
    {
        return $this->container['cell_count'];
    }

    /**
     * Sets cell_count
     *
     * @param int $cell_count cell_count
     *
     * @return $this
     */
    public function setCellCount($cell_count)
    {
        $this->container['cell_count'] = $cell_count;

        return $this;
    }

    /**
     * Gets max_row
     *
     * @return int
     */
    public function getMaxRow()
    {
        return $this->container['max_row'];
    }

    /**
     * Sets max_row
     *
     * @param int $max_row max_row
     *
     * @return $this
     */
    public function setMaxRow($max_row)
    {
        $this->container['max_row'] = $max_row;

        return $this;
    }

    /**
     * Gets cell_list
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement[]
     */
    public function getCellList()
    {
        return $this->container['cell_list'];
    }

    /**
     * Sets cell_list
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement[] $cell_list cell_list
     *
     * @return $this
     */
    public function setCellList($cell_list)
    {
        $this->container['cell_list'] = $cell_list;

        return $this;
    }

    /**
     * Gets max_column
     *
     * @return int
     */
    public function getMaxColumn()
    {
        return $this->container['max_column'];
    }

    /**
     * Sets max_column
     *
     * @param int $max_column Maximum column index of cell which contains data.
     *
     * @return $this
     */
    public function setMaxColumn($max_column)
    {
        $this->container['max_column'] = $max_column;

        return $this;
    }

    /**
     * Gets columns
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
     * Sets columns
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement $columns columns
     *
     * @return $this
     */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;

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


