<?php
/**
 * PivotTableOperateParameter
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
 * PivotTableOperateParameter Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PivotTableOperateParameter extends OperateParameter 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PivotTableOperateParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pivot_field_columns' => 'int[]',
        'pivot_table_index' => 'int',
        'table_name' => 'string',
        'use_same_source' => 'bool',
        'pivot_field_data' => 'int[]',
        'pivot_field_rows' => 'int[]',
        'dest_cell_name' => 'string',
        'source_data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pivot_field_columns' => 'int32',
        'pivot_table_index' => 'int32',
        'table_name' => null,
        'use_same_source' => null,
        'pivot_field_data' => 'int32',
        'pivot_field_rows' => 'int32',
        'dest_cell_name' => null,
        'source_data' => null
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
        'pivot_field_columns' => 'PivotFieldColumns',
        'pivot_table_index' => 'PivotTableIndex',
        'table_name' => 'TableName',
        'use_same_source' => 'UseSameSource',
        'pivot_field_data' => 'PivotFieldData',
        'pivot_field_rows' => 'PivotFieldRows',
        'dest_cell_name' => 'DestCellName',
        'source_data' => 'SourceData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pivot_field_columns' => 'setPivotFieldColumns',
        'pivot_table_index' => 'setPivotTableIndex',
        'table_name' => 'setTableName',
        'use_same_source' => 'setUseSameSource',
        'pivot_field_data' => 'setPivotFieldData',
        'pivot_field_rows' => 'setPivotFieldRows',
        'dest_cell_name' => 'setDestCellName',
        'source_data' => 'setSourceData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pivot_field_columns' => 'getPivotFieldColumns',
        'pivot_table_index' => 'getPivotTableIndex',
        'table_name' => 'getTableName',
        'use_same_source' => 'getUseSameSource',
        'pivot_field_data' => 'getPivotFieldData',
        'pivot_field_rows' => 'getPivotFieldRows',
        'dest_cell_name' => 'getDestCellName',
        'source_data' => 'getSourceData'
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

        $this->container['pivot_field_columns'] = isset($data['pivot_field_columns']) ? $data['pivot_field_columns'] : null;
        $this->container['pivot_table_index'] = isset($data['pivot_table_index']) ? $data['pivot_table_index'] : null;
        $this->container['table_name'] = isset($data['table_name']) ? $data['table_name'] : null;
        $this->container['use_same_source'] = isset($data['use_same_source']) ? $data['use_same_source'] : null;
        $this->container['pivot_field_data'] = isset($data['pivot_field_data']) ? $data['pivot_field_data'] : null;
        $this->container['pivot_field_rows'] = isset($data['pivot_field_rows']) ? $data['pivot_field_rows'] : null;
        $this->container['dest_cell_name'] = isset($data['dest_cell_name']) ? $data['dest_cell_name'] : null;
        $this->container['source_data'] = isset($data['source_data']) ? $data['source_data'] : null;
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
     * Gets pivot_field_columns
     *
     * @return int[]
     */
    public function getPivotFieldColumns()
    {
        return $this->container['pivot_field_columns'];
    }

    /**
     * Sets pivot_field_columns
     *
     * @param int[] $pivot_field_columns pivot_field_columns
     *
     * @return $this
     */
    public function setPivotFieldColumns($pivot_field_columns)
    {
        $this->container['pivot_field_columns'] = $pivot_field_columns;

        return $this;
    }

    /**
     * Gets pivot_table_index
     *
     * @return int
     */
    public function getPivotTableIndex()
    {
        return $this->container['pivot_table_index'];
    }

    /**
     * Sets pivot_table_index
     *
     * @param int $pivot_table_index pivot_table_index
     *
     * @return $this
     */
    public function setPivotTableIndex($pivot_table_index)
    {
        $this->container['pivot_table_index'] = $pivot_table_index;

        return $this;
    }

    /**
     * Gets table_name
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->container['table_name'];
    }

    /**
     * Sets table_name
     *
     * @param string $table_name table_name
     *
     * @return $this
     */
    public function setTableName($table_name)
    {
        $this->container['table_name'] = $table_name;

        return $this;
    }

    /**
     * Gets use_same_source
     *
     * @return bool
     */
    public function getUseSameSource()
    {
        return $this->container['use_same_source'];
    }

    /**
     * Sets use_same_source
     *
     * @param bool $use_same_source use_same_source
     *
     * @return $this
     */
    public function setUseSameSource($use_same_source)
    {
        $this->container['use_same_source'] = $use_same_source;

        return $this;
    }

    /**
     * Gets pivot_field_data
     *
     * @return int[]
     */
    public function getPivotFieldData()
    {
        return $this->container['pivot_field_data'];
    }

    /**
     * Sets pivot_field_data
     *
     * @param int[] $pivot_field_data pivot_field_data
     *
     * @return $this
     */
    public function setPivotFieldData($pivot_field_data)
    {
        $this->container['pivot_field_data'] = $pivot_field_data;

        return $this;
    }

    /**
     * Gets pivot_field_rows
     *
     * @return int[]
     */
    public function getPivotFieldRows()
    {
        return $this->container['pivot_field_rows'];
    }

    /**
     * Sets pivot_field_rows
     *
     * @param int[] $pivot_field_rows pivot_field_rows
     *
     * @return $this
     */
    public function setPivotFieldRows($pivot_field_rows)
    {
        $this->container['pivot_field_rows'] = $pivot_field_rows;

        return $this;
    }

    /**
     * Gets dest_cell_name
     *
     * @return string
     */
    public function getDestCellName()
    {
        return $this->container['dest_cell_name'];
    }

    /**
     * Sets dest_cell_name
     *
     * @param string $dest_cell_name dest_cell_name
     *
     * @return $this
     */
    public function setDestCellName($dest_cell_name)
    {
        $this->container['dest_cell_name'] = $dest_cell_name;

        return $this;
    }

    /**
     * Gets source_data
     *
     * @return string
     */
    public function getSourceData()
    {
        return $this->container['source_data'];
    }

    /**
     * Sets source_data
     *
     * @param string $source_data source_data
     *
     * @return $this
     */
    public function setSourceData($source_data)
    {
        $this->container['source_data'] = $source_data;

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


