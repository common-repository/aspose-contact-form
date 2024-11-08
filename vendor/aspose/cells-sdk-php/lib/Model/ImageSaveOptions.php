<?php
/**
 * ImageSaveOptions
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
 * ImageSaveOptions Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ImageSaveOptions extends SaveOptions 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImageSaveOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chart_image_type' => 'string',
        'embeded_image_name_in_svg' => 'string',
        'horizontal_resolution' => 'int',
        'image_format' => 'string',
        'is_cell_auto_fit' => 'bool',
        'one_page_per_sheet' => 'bool',
        'only_area' => 'bool',
        'printing_page' => 'string',
        'print_with_status_dialog' => 'int',
        'quality' => 'int',
        'tiff_compression' => 'string',
        'vertical_resolution' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chart_image_type' => null,
        'embeded_image_name_in_svg' => null,
        'horizontal_resolution' => 'int32',
        'image_format' => null,
        'is_cell_auto_fit' => null,
        'one_page_per_sheet' => null,
        'only_area' => null,
        'printing_page' => null,
        'print_with_status_dialog' => 'int32',
        'quality' => 'int32',
        'tiff_compression' => null,
        'vertical_resolution' => 'int32'
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
        'chart_image_type' => 'ChartImageType',
        'embeded_image_name_in_svg' => 'EmbededImageNameInSvg',
        'horizontal_resolution' => 'HorizontalResolution',
        'image_format' => 'ImageFormat',
        'is_cell_auto_fit' => 'IsCellAutoFit',
        'one_page_per_sheet' => 'OnePagePerSheet',
        'only_area' => 'OnlyArea',
        'printing_page' => 'PrintingPage',
        'print_with_status_dialog' => 'PrintWithStatusDialog',
        'quality' => 'Quality',
        'tiff_compression' => 'TiffCompression',
        'vertical_resolution' => 'VerticalResolution'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chart_image_type' => 'setChartImageType',
        'embeded_image_name_in_svg' => 'setEmbededImageNameInSvg',
        'horizontal_resolution' => 'setHorizontalResolution',
        'image_format' => 'setImageFormat',
        'is_cell_auto_fit' => 'setIsCellAutoFit',
        'one_page_per_sheet' => 'setOnePagePerSheet',
        'only_area' => 'setOnlyArea',
        'printing_page' => 'setPrintingPage',
        'print_with_status_dialog' => 'setPrintWithStatusDialog',
        'quality' => 'setQuality',
        'tiff_compression' => 'setTiffCompression',
        'vertical_resolution' => 'setVerticalResolution'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chart_image_type' => 'getChartImageType',
        'embeded_image_name_in_svg' => 'getEmbededImageNameInSvg',
        'horizontal_resolution' => 'getHorizontalResolution',
        'image_format' => 'getImageFormat',
        'is_cell_auto_fit' => 'getIsCellAutoFit',
        'one_page_per_sheet' => 'getOnePagePerSheet',
        'only_area' => 'getOnlyArea',
        'printing_page' => 'getPrintingPage',
        'print_with_status_dialog' => 'getPrintWithStatusDialog',
        'quality' => 'getQuality',
        'tiff_compression' => 'getTiffCompression',
        'vertical_resolution' => 'getVerticalResolution'
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

        $this->container['chart_image_type'] = isset($data['chart_image_type']) ? $data['chart_image_type'] : null;
        $this->container['embeded_image_name_in_svg'] = isset($data['embeded_image_name_in_svg']) ? $data['embeded_image_name_in_svg'] : null;
        $this->container['horizontal_resolution'] = isset($data['horizontal_resolution']) ? $data['horizontal_resolution'] : null;
        $this->container['image_format'] = isset($data['image_format']) ? $data['image_format'] : null;
        $this->container['is_cell_auto_fit'] = isset($data['is_cell_auto_fit']) ? $data['is_cell_auto_fit'] : null;
        $this->container['one_page_per_sheet'] = isset($data['one_page_per_sheet']) ? $data['one_page_per_sheet'] : null;
        $this->container['only_area'] = isset($data['only_area']) ? $data['only_area'] : null;
        $this->container['printing_page'] = isset($data['printing_page']) ? $data['printing_page'] : null;
        $this->container['print_with_status_dialog'] = isset($data['print_with_status_dialog']) ? $data['print_with_status_dialog'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['tiff_compression'] = isset($data['tiff_compression']) ? $data['tiff_compression'] : null;
        $this->container['vertical_resolution'] = isset($data['vertical_resolution']) ? $data['vertical_resolution'] : null;
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
     * Gets chart_image_type
     *
     * @return string
     */
    public function getChartImageType()
    {
        return $this->container['chart_image_type'];
    }

    /**
     * Sets chart_image_type
     *
     * @param string $chart_image_type chart_image_type
     *
     * @return $this
     */
    public function setChartImageType($chart_image_type)
    {
        $this->container['chart_image_type'] = $chart_image_type;

        return $this;
    }

    /**
     * Gets embeded_image_name_in_svg
     *
     * @return string
     */
    public function getEmbededImageNameInSvg()
    {
        return $this->container['embeded_image_name_in_svg'];
    }

    /**
     * Sets embeded_image_name_in_svg
     *
     * @param string $embeded_image_name_in_svg embeded_image_name_in_svg
     *
     * @return $this
     */
    public function setEmbededImageNameInSvg($embeded_image_name_in_svg)
    {
        $this->container['embeded_image_name_in_svg'] = $embeded_image_name_in_svg;

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
     * Gets image_format
     *
     * @return string
     */
    public function getImageFormat()
    {
        return $this->container['image_format'];
    }

    /**
     * Sets image_format
     *
     * @param string $image_format image_format
     *
     * @return $this
     */
    public function setImageFormat($image_format)
    {
        $this->container['image_format'] = $image_format;

        return $this;
    }

    /**
     * Gets is_cell_auto_fit
     *
     * @return bool
     */
    public function getIsCellAutoFit()
    {
        return $this->container['is_cell_auto_fit'];
    }

    /**
     * Sets is_cell_auto_fit
     *
     * @param bool $is_cell_auto_fit is_cell_auto_fit
     *
     * @return $this
     */
    public function setIsCellAutoFit($is_cell_auto_fit)
    {
        $this->container['is_cell_auto_fit'] = $is_cell_auto_fit;

        return $this;
    }

    /**
     * Gets one_page_per_sheet
     *
     * @return bool
     */
    public function getOnePagePerSheet()
    {
        return $this->container['one_page_per_sheet'];
    }

    /**
     * Sets one_page_per_sheet
     *
     * @param bool $one_page_per_sheet one_page_per_sheet
     *
     * @return $this
     */
    public function setOnePagePerSheet($one_page_per_sheet)
    {
        $this->container['one_page_per_sheet'] = $one_page_per_sheet;

        return $this;
    }

    /**
     * Gets only_area
     *
     * @return bool
     */
    public function getOnlyArea()
    {
        return $this->container['only_area'];
    }

    /**
     * Sets only_area
     *
     * @param bool $only_area only_area
     *
     * @return $this
     */
    public function setOnlyArea($only_area)
    {
        $this->container['only_area'] = $only_area;

        return $this;
    }

    /**
     * Gets printing_page
     *
     * @return string
     */
    public function getPrintingPage()
    {
        return $this->container['printing_page'];
    }

    /**
     * Sets printing_page
     *
     * @param string $printing_page printing_page
     *
     * @return $this
     */
    public function setPrintingPage($printing_page)
    {
        $this->container['printing_page'] = $printing_page;

        return $this;
    }

    /**
     * Gets print_with_status_dialog
     *
     * @return int
     */
    public function getPrintWithStatusDialog()
    {
        return $this->container['print_with_status_dialog'];
    }

    /**
     * Sets print_with_status_dialog
     *
     * @param int $print_with_status_dialog print_with_status_dialog
     *
     * @return $this
     */
    public function setPrintWithStatusDialog($print_with_status_dialog)
    {
        $this->container['print_with_status_dialog'] = $print_with_status_dialog;

        return $this;
    }

    /**
     * Gets quality
     *
     * @return int
     */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
     * Sets quality
     *
     * @param int $quality quality
     *
     * @return $this
     */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;

        return $this;
    }

    /**
     * Gets tiff_compression
     *
     * @return string
     */
    public function getTiffCompression()
    {
        return $this->container['tiff_compression'];
    }

    /**
     * Sets tiff_compression
     *
     * @param string $tiff_compression tiff_compression
     *
     * @return $this
     */
    public function setTiffCompression($tiff_compression)
    {
        $this->container['tiff_compression'] = $tiff_compression;

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


