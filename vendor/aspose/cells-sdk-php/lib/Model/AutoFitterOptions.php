<?php
/**
 * AutoFitterOptions
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
 * AutoFitterOptions Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AutoFitterOptions implements  ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AutoFitterOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ignore_hidden' => 'bool',
        'only_auto' => 'bool',
        'auto_fit_merged_cells' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ignore_hidden' => null,
        'only_auto' => null,
        'auto_fit_merged_cells' => null
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
        'ignore_hidden' => 'IgnoreHidden',
        'only_auto' => 'OnlyAuto',
        'auto_fit_merged_cells' => 'AutoFitMergedCells'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ignore_hidden' => 'setIgnoreHidden',
        'only_auto' => 'setOnlyAuto',
        'auto_fit_merged_cells' => 'setAutoFitMergedCells'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ignore_hidden' => 'getIgnoreHidden',
        'only_auto' => 'getOnlyAuto',
        'auto_fit_merged_cells' => 'getAutoFitMergedCells'
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
        $this->container['ignore_hidden'] = isset($data['ignore_hidden']) ? $data['ignore_hidden'] : null;
        $this->container['only_auto'] = isset($data['only_auto']) ? $data['only_auto'] : null;
        $this->container['auto_fit_merged_cells'] = isset($data['auto_fit_merged_cells']) ? $data['auto_fit_merged_cells'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ignore_hidden'] === null) {
            $invalidProperties[] = "'ignore_hidden' can't be null";
        }
        if ($this->container['only_auto'] === null) {
            $invalidProperties[] = "'only_auto' can't be null";
        }
        if ($this->container['auto_fit_merged_cells'] === null) {
            $invalidProperties[] = "'auto_fit_merged_cells' can't be null";
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

        if ($this->container['ignore_hidden'] === null) {
            return false;
        }
        if ($this->container['only_auto'] === null) {
            return false;
        }
        if ($this->container['auto_fit_merged_cells'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets ignore_hidden
     *
     * @return bool
     */
    public function getIgnoreHidden()
    {
        return $this->container['ignore_hidden'];
    }

    /**
     * Sets ignore_hidden
     *
     * @param bool $ignore_hidden ignore_hidden
     *
     * @return $this
     */
    public function setIgnoreHidden($ignore_hidden)
    {
        $this->container['ignore_hidden'] = $ignore_hidden;

        return $this;
    }

    /**
     * Gets only_auto
     *
     * @return bool
     */
    public function getOnlyAuto()
    {
        return $this->container['only_auto'];
    }

    /**
     * Sets only_auto
     *
     * @param bool $only_auto only_auto
     *
     * @return $this
     */
    public function setOnlyAuto($only_auto)
    {
        $this->container['only_auto'] = $only_auto;

        return $this;
    }

    /**
     * Gets auto_fit_merged_cells
     *
     * @return bool
     */
    public function getAutoFitMergedCells()
    {
        return $this->container['auto_fit_merged_cells'];
    }

    /**
     * Sets auto_fit_merged_cells
     *
     * @param bool $auto_fit_merged_cells auto_fit_merged_cells
     *
     * @return $this
     */
    public function setAutoFitMergedCells($auto_fit_merged_cells)
    {
        $this->container['auto_fit_merged_cells'] = $auto_fit_merged_cells;

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


