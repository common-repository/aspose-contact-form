<?php
/**
 * ListObject
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
 * ListObject Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListObject implements  ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'link' => '\Aspose\Cells\Cloud\Model\Link',
        'show_totals' => 'bool',
        'table_style_type' => 'string',
        'display_name' => 'string',
        'show_header_row' => 'bool',
        'start_column' => 'int',
        'show_table_style_last_column' => 'bool',
        'show_table_style_column_stripes' => 'bool',
        'show_table_style_first_column' => 'bool',
        'start_row' => 'int',
        'auto_filter' => '\Aspose\Cells\Cloud\Model\AutoFilter',
        'show_table_style_row_stripes' => 'bool',
        'end_column' => 'int',
        'table_style_name' => 'string',
        'list_columns' => '\Aspose\Cells\Cloud\Model\ListColumn[]',
        'end_row' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'link' => null,
        'show_totals' => null,
        'table_style_type' => null,
        'display_name' => null,
        'show_header_row' => null,
        'start_column' => 'int32',
        'show_table_style_last_column' => null,
        'show_table_style_column_stripes' => null,
        'show_table_style_first_column' => null,
        'start_row' => 'int32',
        'auto_filter' => null,
        'show_table_style_row_stripes' => null,
        'end_column' => 'int32',
        'table_style_name' => null,
        'list_columns' => null,
        'end_row' => 'int32'
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
        'show_totals' => 'ShowTotals',
        'table_style_type' => 'TableStyleType',
        'display_name' => 'DisplayName',
        'show_header_row' => 'ShowHeaderRow',
        'start_column' => 'StartColumn',
        'show_table_style_last_column' => 'ShowTableStyleLastColumn',
        'show_table_style_column_stripes' => 'ShowTableStyleColumnStripes',
        'show_table_style_first_column' => 'ShowTableStyleFirstColumn',
        'start_row' => 'StartRow',
        'auto_filter' => 'AutoFilter',
        'show_table_style_row_stripes' => 'ShowTableStyleRowStripes',
        'end_column' => 'EndColumn',
        'table_style_name' => 'TableStyleName',
        'list_columns' => 'ListColumns',
        'end_row' => 'EndRow'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'link' => 'setLink',
        'show_totals' => 'setShowTotals',
        'table_style_type' => 'setTableStyleType',
        'display_name' => 'setDisplayName',
        'show_header_row' => 'setShowHeaderRow',
        'start_column' => 'setStartColumn',
        'show_table_style_last_column' => 'setShowTableStyleLastColumn',
        'show_table_style_column_stripes' => 'setShowTableStyleColumnStripes',
        'show_table_style_first_column' => 'setShowTableStyleFirstColumn',
        'start_row' => 'setStartRow',
        'auto_filter' => 'setAutoFilter',
        'show_table_style_row_stripes' => 'setShowTableStyleRowStripes',
        'end_column' => 'setEndColumn',
        'table_style_name' => 'setTableStyleName',
        'list_columns' => 'setListColumns',
        'end_row' => 'setEndRow'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'link' => 'getLink',
        'show_totals' => 'getShowTotals',
        'table_style_type' => 'getTableStyleType',
        'display_name' => 'getDisplayName',
        'show_header_row' => 'getShowHeaderRow',
        'start_column' => 'getStartColumn',
        'show_table_style_last_column' => 'getShowTableStyleLastColumn',
        'show_table_style_column_stripes' => 'getShowTableStyleColumnStripes',
        'show_table_style_first_column' => 'getShowTableStyleFirstColumn',
        'start_row' => 'getStartRow',
        'auto_filter' => 'getAutoFilter',
        'show_table_style_row_stripes' => 'getShowTableStyleRowStripes',
        'end_column' => 'getEndColumn',
        'table_style_name' => 'getTableStyleName',
        'list_columns' => 'getListColumns',
        'end_row' => 'getEndRow'
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
        $this->container['show_totals'] = isset($data['show_totals']) ? $data['show_totals'] : null;
        $this->container['table_style_type'] = isset($data['table_style_type']) ? $data['table_style_type'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['show_header_row'] = isset($data['show_header_row']) ? $data['show_header_row'] : null;
        $this->container['start_column'] = isset($data['start_column']) ? $data['start_column'] : null;
        $this->container['show_table_style_last_column'] = isset($data['show_table_style_last_column']) ? $data['show_table_style_last_column'] : null;
        $this->container['show_table_style_column_stripes'] = isset($data['show_table_style_column_stripes']) ? $data['show_table_style_column_stripes'] : null;
        $this->container['show_table_style_first_column'] = isset($data['show_table_style_first_column']) ? $data['show_table_style_first_column'] : null;
        $this->container['start_row'] = isset($data['start_row']) ? $data['start_row'] : null;
        $this->container['auto_filter'] = isset($data['auto_filter']) ? $data['auto_filter'] : null;
        $this->container['show_table_style_row_stripes'] = isset($data['show_table_style_row_stripes']) ? $data['show_table_style_row_stripes'] : null;
        $this->container['end_column'] = isset($data['end_column']) ? $data['end_column'] : null;
        $this->container['table_style_name'] = isset($data['table_style_name']) ? $data['table_style_name'] : null;
        $this->container['list_columns'] = isset($data['list_columns']) ? $data['list_columns'] : null;
        $this->container['end_row'] = isset($data['end_row']) ? $data['end_row'] : null;
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
     * Gets show_totals
     *
     * @return bool
     */
    public function getShowTotals()
    {
        return $this->container['show_totals'];
    }

    /**
     * Sets show_totals
     *
     * @param bool $show_totals Gets and sets whether this ListObject show total row.
     *
     * @return $this
     */
    public function setShowTotals($show_totals)
    {
        $this->container['show_totals'] = $show_totals;

        return $this;
    }

    /**
     * Gets table_style_type
     *
     * @return string
     */
    public function getTableStyleType()
    {
        return $this->container['table_style_type'];
    }

    /**
     * Sets table_style_type
     *
     * @param string $table_style_type Gets and the built-in table style.
     *
     * @return $this
     */
    public function setTableStyleType($table_style_type)
    {
        $this->container['table_style_type'] = $table_style_type;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name Gets and sets the display name.Gets the data range of the ListObject.
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets show_header_row
     *
     * @return bool
     */
    public function getShowHeaderRow()
    {
        return $this->container['show_header_row'];
    }

    /**
     * Sets show_header_row
     *
     * @param bool $show_header_row Gets and sets whether this ListObject show header row.
     *
     * @return $this
     */
    public function setShowHeaderRow($show_header_row)
    {
        $this->container['show_header_row'] = $show_header_row;

        return $this;
    }

    /**
     * Gets start_column
     *
     * @return int
     */
    public function getStartColumn()
    {
        return $this->container['start_column'];
    }

    /**
     * Sets start_column
     *
     * @param int $start_column Gets the start column of the range.
     *
     * @return $this
     */
    public function setStartColumn($start_column)
    {
        $this->container['start_column'] = $start_column;

        return $this;
    }

    /**
     * Gets show_table_style_last_column
     *
     * @return bool
     */
    public function getShowTableStyleLastColumn()
    {
        return $this->container['show_table_style_last_column'];
    }

    /**
     * Sets show_table_style_last_column
     *
     * @param bool $show_table_style_last_column Indicates whether the last column in the table should have the style applied.
     *
     * @return $this
     */
    public function setShowTableStyleLastColumn($show_table_style_last_column)
    {
        $this->container['show_table_style_last_column'] = $show_table_style_last_column;

        return $this;
    }

    /**
     * Gets show_table_style_column_stripes
     *
     * @return bool
     */
    public function getShowTableStyleColumnStripes()
    {
        return $this->container['show_table_style_column_stripes'];
    }

    /**
     * Sets show_table_style_column_stripes
     *
     * @param bool $show_table_style_column_stripes Indicates whether column stripe formatting is applied.
     *
     * @return $this
     */
    public function setShowTableStyleColumnStripes($show_table_style_column_stripes)
    {
        $this->container['show_table_style_column_stripes'] = $show_table_style_column_stripes;

        return $this;
    }

    /**
     * Gets show_table_style_first_column
     *
     * @return bool
     */
    public function getShowTableStyleFirstColumn()
    {
        return $this->container['show_table_style_first_column'];
    }

    /**
     * Sets show_table_style_first_column
     *
     * @param bool $show_table_style_first_column Inidicates whether the first column in the table should have the style applied.
     *
     * @return $this
     */
    public function setShowTableStyleFirstColumn($show_table_style_first_column)
    {
        $this->container['show_table_style_first_column'] = $show_table_style_first_column;

        return $this;
    }

    /**
     * Gets start_row
     *
     * @return int
     */
    public function getStartRow()
    {
        return $this->container['start_row'];
    }

    /**
     * Sets start_row
     *
     * @param int $start_row Gets the start row of the range.
     *
     * @return $this
     */
    public function setStartRow($start_row)
    {
        $this->container['start_row'] = $start_row;

        return $this;
    }

    /**
     * Gets auto_filter
     *
     * @return \Aspose\Cells\Cloud\Model\AutoFilter
     */
    public function getAutoFilter()
    {
        return $this->container['auto_filter'];
    }

    /**
     * Sets auto_filter
     *
     * @param \Aspose\Cells\Cloud\Model\AutoFilter $auto_filter Gets auto filter.
     *
     * @return $this
     */
    public function setAutoFilter($auto_filter)
    {
        $this->container['auto_filter'] = $auto_filter;

        return $this;
    }

    /**
     * Gets show_table_style_row_stripes
     *
     * @return bool
     */
    public function getShowTableStyleRowStripes()
    {
        return $this->container['show_table_style_row_stripes'];
    }

    /**
     * Sets show_table_style_row_stripes
     *
     * @param bool $show_table_style_row_stripes Indicates whether row stripe formatting is applied.
     *
     * @return $this
     */
    public function setShowTableStyleRowStripes($show_table_style_row_stripes)
    {
        $this->container['show_table_style_row_stripes'] = $show_table_style_row_stripes;

        return $this;
    }

    /**
     * Gets end_column
     *
     * @return int
     */
    public function getEndColumn()
    {
        return $this->container['end_column'];
    }

    /**
     * Sets end_column
     *
     * @param int $end_column Gets the end column of the range.
     *
     * @return $this
     */
    public function setEndColumn($end_column)
    {
        $this->container['end_column'] = $end_column;

        return $this;
    }

    /**
     * Gets table_style_name
     *
     * @return string
     */
    public function getTableStyleName()
    {
        return $this->container['table_style_name'];
    }

    /**
     * Sets table_style_name
     *
     * @param string $table_style_name Gets and sets the table style name.
     *
     * @return $this
     */
    public function setTableStyleName($table_style_name)
    {
        $this->container['table_style_name'] = $table_style_name;

        return $this;
    }

    /**
     * Gets list_columns
     *
     * @return \Aspose\Cells\Cloud\Model\ListColumn[]
     */
    public function getListColumns()
    {
        return $this->container['list_columns'];
    }

    /**
     * Sets list_columns
     *
     * @param \Aspose\Cells\Cloud\Model\ListColumn[] $list_columns Gets ListColumns of the ListObject.
     *
     * @return $this
     */
    public function setListColumns($list_columns)
    {
        $this->container['list_columns'] = $list_columns;

        return $this;
    }

    /**
     * Gets end_row
     *
     * @return int
     */
    public function getEndRow()
    {
        return $this->container['end_row'];
    }

    /**
     * Sets end_row
     *
     * @param int $end_row Gets the end row of the range.
     *
     * @return $this
     */
    public function setEndRow($end_row)
    {
        $this->container['end_row'] = $end_row;

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


