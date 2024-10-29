<?php
/**
 * PageSetup
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
 * PageSetup Class Doc Comment
 *
 * @category Class
 * @description excel print page setting
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PageSetup implements  ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PageSetup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'link' => '\Aspose\Cells\Cloud\Model\Link',
        'is_hf_diff_first' => 'bool',
        'fit_to_pages_wide' => 'int',
        'print_quality' => 'int',
        'print_draft' => 'bool',
        'first_page_number' => 'int',
        'paper_size' => 'string',
        'print_comments' => 'string',
        'print_errors' => 'string',
        'center_vertically' => 'bool',
        'is_percent_scale' => 'bool',
        'black_and_white' => 'bool',
        'print_title_columns' => 'string',
        'is_hf_align_margins' => 'bool',
        'print_area' => 'string',
        'footer_margin' => 'double',
        'left_margin' => 'double',
        'center_horizontally' => 'bool',
        'header_margin' => 'double',
        'top_margin' => 'double',
        'footer' => '\Aspose\Cells\Cloud\Model\PageSection[]',
        'fit_to_pages_tall' => 'int',
        'is_hf_scale_with_doc' => 'bool',
        'print_headings' => 'bool',
        'zoom' => 'int',
        'print_title_rows' => 'string',
        'order' => 'string',
        'print_copies' => 'int',
        'orientation' => 'string',
        'right_margin' => 'double',
        'print_gridlines' => 'bool',
        'is_auto_first_page_number' => 'bool',
        'header' => '\Aspose\Cells\Cloud\Model\PageSection[]',
        'is_hf_diff_odd_even' => 'bool',
        'bottom_margin' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'link' => null,
        'is_hf_diff_first' => null,
        'fit_to_pages_wide' => 'int32',
        'print_quality' => 'int32',
        'print_draft' => null,
        'first_page_number' => 'int32',
        'paper_size' => null,
        'print_comments' => null,
        'print_errors' => null,
        'center_vertically' => null,
        'is_percent_scale' => null,
        'black_and_white' => null,
        'print_title_columns' => null,
        'is_hf_align_margins' => null,
        'print_area' => null,
        'footer_margin' => 'double',
        'left_margin' => 'double',
        'center_horizontally' => null,
        'header_margin' => 'double',
        'top_margin' => 'double',
        'footer' => null,
        'fit_to_pages_tall' => 'int32',
        'is_hf_scale_with_doc' => null,
        'print_headings' => null,
        'zoom' => 'int32',
        'print_title_rows' => null,
        'order' => null,
        'print_copies' => 'int32',
        'orientation' => null,
        'right_margin' => 'double',
        'print_gridlines' => null,
        'is_auto_first_page_number' => null,
        'header' => null,
        'is_hf_diff_odd_even' => null,
        'bottom_margin' => 'double'
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
        'is_hf_diff_first' => 'IsHFDiffFirst',
        'fit_to_pages_wide' => 'FitToPagesWide',
        'print_quality' => 'PrintQuality',
        'print_draft' => 'PrintDraft',
        'first_page_number' => 'FirstPageNumber',
        'paper_size' => 'PaperSize',
        'print_comments' => 'PrintComments',
        'print_errors' => 'PrintErrors',
        'center_vertically' => 'CenterVertically',
        'is_percent_scale' => 'IsPercentScale',
        'black_and_white' => 'BlackAndWhite',
        'print_title_columns' => 'PrintTitleColumns',
        'is_hf_align_margins' => 'IsHFAlignMargins',
        'print_area' => 'PrintArea',
        'footer_margin' => 'FooterMargin',
        'left_margin' => 'LeftMargin',
        'center_horizontally' => 'CenterHorizontally',
        'header_margin' => 'HeaderMargin',
        'top_margin' => 'TopMargin',
        'footer' => 'Footer',
        'fit_to_pages_tall' => 'FitToPagesTall',
        'is_hf_scale_with_doc' => 'IsHFScaleWithDoc',
        'print_headings' => 'PrintHeadings',
        'zoom' => 'Zoom',
        'print_title_rows' => 'PrintTitleRows',
        'order' => 'Order',
        'print_copies' => 'PrintCopies',
        'orientation' => 'Orientation',
        'right_margin' => 'RightMargin',
        'print_gridlines' => 'PrintGridlines',
        'is_auto_first_page_number' => 'IsAutoFirstPageNumber',
        'header' => 'Header',
        'is_hf_diff_odd_even' => 'IsHFDiffOddEven',
        'bottom_margin' => 'BottomMargin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'link' => 'setLink',
        'is_hf_diff_first' => 'setIsHfDiffFirst',
        'fit_to_pages_wide' => 'setFitToPagesWide',
        'print_quality' => 'setPrintQuality',
        'print_draft' => 'setPrintDraft',
        'first_page_number' => 'setFirstPageNumber',
        'paper_size' => 'setPaperSize',
        'print_comments' => 'setPrintComments',
        'print_errors' => 'setPrintErrors',
        'center_vertically' => 'setCenterVertically',
        'is_percent_scale' => 'setIsPercentScale',
        'black_and_white' => 'setBlackAndWhite',
        'print_title_columns' => 'setPrintTitleColumns',
        'is_hf_align_margins' => 'setIsHfAlignMargins',
        'print_area' => 'setPrintArea',
        'footer_margin' => 'setFooterMargin',
        'left_margin' => 'setLeftMargin',
        'center_horizontally' => 'setCenterHorizontally',
        'header_margin' => 'setHeaderMargin',
        'top_margin' => 'setTopMargin',
        'footer' => 'setFooter',
        'fit_to_pages_tall' => 'setFitToPagesTall',
        'is_hf_scale_with_doc' => 'setIsHfScaleWithDoc',
        'print_headings' => 'setPrintHeadings',
        'zoom' => 'setZoom',
        'print_title_rows' => 'setPrintTitleRows',
        'order' => 'setOrder',
        'print_copies' => 'setPrintCopies',
        'orientation' => 'setOrientation',
        'right_margin' => 'setRightMargin',
        'print_gridlines' => 'setPrintGridlines',
        'is_auto_first_page_number' => 'setIsAutoFirstPageNumber',
        'header' => 'setHeader',
        'is_hf_diff_odd_even' => 'setIsHfDiffOddEven',
        'bottom_margin' => 'setBottomMargin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'link' => 'getLink',
        'is_hf_diff_first' => 'getIsHfDiffFirst',
        'fit_to_pages_wide' => 'getFitToPagesWide',
        'print_quality' => 'getPrintQuality',
        'print_draft' => 'getPrintDraft',
        'first_page_number' => 'getFirstPageNumber',
        'paper_size' => 'getPaperSize',
        'print_comments' => 'getPrintComments',
        'print_errors' => 'getPrintErrors',
        'center_vertically' => 'getCenterVertically',
        'is_percent_scale' => 'getIsPercentScale',
        'black_and_white' => 'getBlackAndWhite',
        'print_title_columns' => 'getPrintTitleColumns',
        'is_hf_align_margins' => 'getIsHfAlignMargins',
        'print_area' => 'getPrintArea',
        'footer_margin' => 'getFooterMargin',
        'left_margin' => 'getLeftMargin',
        'center_horizontally' => 'getCenterHorizontally',
        'header_margin' => 'getHeaderMargin',
        'top_margin' => 'getTopMargin',
        'footer' => 'getFooter',
        'fit_to_pages_tall' => 'getFitToPagesTall',
        'is_hf_scale_with_doc' => 'getIsHfScaleWithDoc',
        'print_headings' => 'getPrintHeadings',
        'zoom' => 'getZoom',
        'print_title_rows' => 'getPrintTitleRows',
        'order' => 'getOrder',
        'print_copies' => 'getPrintCopies',
        'orientation' => 'getOrientation',
        'right_margin' => 'getRightMargin',
        'print_gridlines' => 'getPrintGridlines',
        'is_auto_first_page_number' => 'getIsAutoFirstPageNumber',
        'header' => 'getHeader',
        'is_hf_diff_odd_even' => 'getIsHfDiffOddEven',
        'bottom_margin' => 'getBottomMargin'
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
        $this->container['is_hf_diff_first'] = isset($data['is_hf_diff_first']) ? $data['is_hf_diff_first'] : null;
        $this->container['fit_to_pages_wide'] = isset($data['fit_to_pages_wide']) ? $data['fit_to_pages_wide'] : null;
        $this->container['print_quality'] = isset($data['print_quality']) ? $data['print_quality'] : null;
        $this->container['print_draft'] = isset($data['print_draft']) ? $data['print_draft'] : null;
        $this->container['first_page_number'] = isset($data['first_page_number']) ? $data['first_page_number'] : null;
        $this->container['paper_size'] = isset($data['paper_size']) ? $data['paper_size'] : null;
        $this->container['print_comments'] = isset($data['print_comments']) ? $data['print_comments'] : null;
        $this->container['print_errors'] = isset($data['print_errors']) ? $data['print_errors'] : null;
        $this->container['center_vertically'] = isset($data['center_vertically']) ? $data['center_vertically'] : null;
        $this->container['is_percent_scale'] = isset($data['is_percent_scale']) ? $data['is_percent_scale'] : null;
        $this->container['black_and_white'] = isset($data['black_and_white']) ? $data['black_and_white'] : null;
        $this->container['print_title_columns'] = isset($data['print_title_columns']) ? $data['print_title_columns'] : null;
        $this->container['is_hf_align_margins'] = isset($data['is_hf_align_margins']) ? $data['is_hf_align_margins'] : null;
        $this->container['print_area'] = isset($data['print_area']) ? $data['print_area'] : null;
        $this->container['footer_margin'] = isset($data['footer_margin']) ? $data['footer_margin'] : null;
        $this->container['left_margin'] = isset($data['left_margin']) ? $data['left_margin'] : null;
        $this->container['center_horizontally'] = isset($data['center_horizontally']) ? $data['center_horizontally'] : null;
        $this->container['header_margin'] = isset($data['header_margin']) ? $data['header_margin'] : null;
        $this->container['top_margin'] = isset($data['top_margin']) ? $data['top_margin'] : null;
        $this->container['footer'] = isset($data['footer']) ? $data['footer'] : null;
        $this->container['fit_to_pages_tall'] = isset($data['fit_to_pages_tall']) ? $data['fit_to_pages_tall'] : null;
        $this->container['is_hf_scale_with_doc'] = isset($data['is_hf_scale_with_doc']) ? $data['is_hf_scale_with_doc'] : null;
        $this->container['print_headings'] = isset($data['print_headings']) ? $data['print_headings'] : null;
        $this->container['zoom'] = isset($data['zoom']) ? $data['zoom'] : null;
        $this->container['print_title_rows'] = isset($data['print_title_rows']) ? $data['print_title_rows'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['print_copies'] = isset($data['print_copies']) ? $data['print_copies'] : null;
        $this->container['orientation'] = isset($data['orientation']) ? $data['orientation'] : null;
        $this->container['right_margin'] = isset($data['right_margin']) ? $data['right_margin'] : null;
        $this->container['print_gridlines'] = isset($data['print_gridlines']) ? $data['print_gridlines'] : null;
        $this->container['is_auto_first_page_number'] = isset($data['is_auto_first_page_number']) ? $data['is_auto_first_page_number'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['is_hf_diff_odd_even'] = isset($data['is_hf_diff_odd_even']) ? $data['is_hf_diff_odd_even'] : null;
        $this->container['bottom_margin'] = isset($data['bottom_margin']) ? $data['bottom_margin'] : null;
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
     * Gets is_hf_diff_first
     *
     * @return bool
     */
    public function getIsHfDiffFirst()
    {
        return $this->container['is_hf_diff_first'];
    }

    /**
     * Sets is_hf_diff_first
     *
     * @param bool $is_hf_diff_first True means that the header/footer of the first page is different with other pages.
     *
     * @return $this
     */
    public function setIsHfDiffFirst($is_hf_diff_first)
    {
        $this->container['is_hf_diff_first'] = $is_hf_diff_first;

        return $this;
    }

    /**
     * Gets fit_to_pages_wide
     *
     * @return int
     */
    public function getFitToPagesWide()
    {
        return $this->container['fit_to_pages_wide'];
    }

    /**
     * Sets fit_to_pages_wide
     *
     * @param int $fit_to_pages_wide Represents the number of pages wide the worksheet will be scaled to when it's printed.
     *
     * @return $this
     */
    public function setFitToPagesWide($fit_to_pages_wide)
    {
        $this->container['fit_to_pages_wide'] = $fit_to_pages_wide;

        return $this;
    }

    /**
     * Gets print_quality
     *
     * @return int
     */
    public function getPrintQuality()
    {
        return $this->container['print_quality'];
    }

    /**
     * Sets print_quality
     *
     * @param int $print_quality Represents the print quality.
     *
     * @return $this
     */
    public function setPrintQuality($print_quality)
    {
        $this->container['print_quality'] = $print_quality;

        return $this;
    }

    /**
     * Gets print_draft
     *
     * @return bool
     */
    public function getPrintDraft()
    {
        return $this->container['print_draft'];
    }

    /**
     * Sets print_draft
     *
     * @param bool $print_draft Represents if the sheet will be printed without graphics.
     *
     * @return $this
     */
    public function setPrintDraft($print_draft)
    {
        $this->container['print_draft'] = $print_draft;

        return $this;
    }

    /**
     * Gets first_page_number
     *
     * @return int
     */
    public function getFirstPageNumber()
    {
        return $this->container['first_page_number'];
    }

    /**
     * Sets first_page_number
     *
     * @param int $first_page_number Represents the first page number that will be used when this sheet is printed.
     *
     * @return $this
     */
    public function setFirstPageNumber($first_page_number)
    {
        $this->container['first_page_number'] = $first_page_number;

        return $this;
    }

    /**
     * Gets paper_size
     *
     * @return string
     */
    public function getPaperSize()
    {
        return $this->container['paper_size'];
    }

    /**
     * Sets paper_size
     *
     * @param string $paper_size Represents the size of the paper.
     *
     * @return $this
     */
    public function setPaperSize($paper_size)
    {
        $this->container['paper_size'] = $paper_size;

        return $this;
    }

    /**
     * Gets print_comments
     *
     * @return string
     */
    public function getPrintComments()
    {
        return $this->container['print_comments'];
    }

    /**
     * Sets print_comments
     *
     * @param string $print_comments Represents the way comments are printed with the sheet.
     *
     * @return $this
     */
    public function setPrintComments($print_comments)
    {
        $this->container['print_comments'] = $print_comments;

        return $this;
    }

    /**
     * Gets print_errors
     *
     * @return string
     */
    public function getPrintErrors()
    {
        return $this->container['print_errors'];
    }

    /**
     * Sets print_errors
     *
     * @param string $print_errors Specifies the type of print error displayed.
     *
     * @return $this
     */
    public function setPrintErrors($print_errors)
    {
        $this->container['print_errors'] = $print_errors;

        return $this;
    }

    /**
     * Gets center_vertically
     *
     * @return bool
     */
    public function getCenterVertically()
    {
        return $this->container['center_vertically'];
    }

    /**
     * Sets center_vertically
     *
     * @param bool $center_vertically Represent if the sheet is printed centered vertically.
     *
     * @return $this
     */
    public function setCenterVertically($center_vertically)
    {
        $this->container['center_vertically'] = $center_vertically;

        return $this;
    }

    /**
     * Gets is_percent_scale
     *
     * @return bool
     */
    public function getIsPercentScale()
    {
        return $this->container['is_percent_scale'];
    }

    /**
     * Sets is_percent_scale
     *
     * @param bool $is_percent_scale If this property is False, the FitToPagesWide and FitToPagesTall properties control how the worksheet is scaled.
     *
     * @return $this
     */
    public function setIsPercentScale($is_percent_scale)
    {
        $this->container['is_percent_scale'] = $is_percent_scale;

        return $this;
    }

    /**
     * Gets black_and_white
     *
     * @return bool
     */
    public function getBlackAndWhite()
    {
        return $this->container['black_and_white'];
    }

    /**
     * Sets black_and_white
     *
     * @param bool $black_and_white Represents if elements of the document will be printed in black and white. True/False
     *
     * @return $this
     */
    public function setBlackAndWhite($black_and_white)
    {
        $this->container['black_and_white'] = $black_and_white;

        return $this;
    }

    /**
     * Gets print_title_columns
     *
     * @return string
     */
    public function getPrintTitleColumns()
    {
        return $this->container['print_title_columns'];
    }

    /**
     * Sets print_title_columns
     *
     * @param string $print_title_columns Represents the columns that contain the cells to be repeated on the left side of each page.
     *
     * @return $this
     */
    public function setPrintTitleColumns($print_title_columns)
    {
        $this->container['print_title_columns'] = $print_title_columns;

        return $this;
    }

    /**
     * Gets is_hf_align_margins
     *
     * @return bool
     */
    public function getIsHfAlignMargins()
    {
        return $this->container['is_hf_align_margins'];
    }

    /**
     * Sets is_hf_align_margins
     *
     * @param bool $is_hf_align_margins Indicates whether header and footer margins are aligned with the page margins.Only applies for Excel 2007.
     *
     * @return $this
     */
    public function setIsHfAlignMargins($is_hf_align_margins)
    {
        $this->container['is_hf_align_margins'] = $is_hf_align_margins;

        return $this;
    }

    /**
     * Gets print_area
     *
     * @return string
     */
    public function getPrintArea()
    {
        return $this->container['print_area'];
    }

    /**
     * Sets print_area
     *
     * @param string $print_area Represents the range to be printed.
     *
     * @return $this
     */
    public function setPrintArea($print_area)
    {
        $this->container['print_area'] = $print_area;

        return $this;
    }

    /**
     * Gets footer_margin
     *
     * @return double
     */
    public function getFooterMargin()
    {
        return $this->container['footer_margin'];
    }

    /**
     * Sets footer_margin
     *
     * @param double $footer_margin Represents the distance from the bottom of the page to the footer, in unit of centimeters.
     *
     * @return $this
     */
    public function setFooterMargin($footer_margin)
    {
        $this->container['footer_margin'] = $footer_margin;

        return $this;
    }

    /**
     * Gets left_margin
     *
     * @return double
     */
    public function getLeftMargin()
    {
        return $this->container['left_margin'];
    }

    /**
     * Sets left_margin
     *
     * @param double $left_margin Represents the size of the left margin, in unit of centimeters.
     *
     * @return $this
     */
    public function setLeftMargin($left_margin)
    {
        $this->container['left_margin'] = $left_margin;

        return $this;
    }

    /**
     * Gets center_horizontally
     *
     * @return bool
     */
    public function getCenterHorizontally()
    {
        return $this->container['center_horizontally'];
    }

    /**
     * Sets center_horizontally
     *
     * @param bool $center_horizontally Represent if the sheet is printed centered horizontally.
     *
     * @return $this
     */
    public function setCenterHorizontally($center_horizontally)
    {
        $this->container['center_horizontally'] = $center_horizontally;

        return $this;
    }

    /**
     * Gets header_margin
     *
     * @return double
     */
    public function getHeaderMargin()
    {
        return $this->container['header_margin'];
    }

    /**
     * Sets header_margin
     *
     * @param double $header_margin Represents the distance from the top of the page to the header, in unit of centimeters.
     *
     * @return $this
     */
    public function setHeaderMargin($header_margin)
    {
        $this->container['header_margin'] = $header_margin;

        return $this;
    }

    /**
     * Gets top_margin
     *
     * @return double
     */
    public function getTopMargin()
    {
        return $this->container['top_margin'];
    }

    /**
     * Sets top_margin
     *
     * @param double $top_margin Represents the size of the top margin, in unit of centimeters.
     *
     * @return $this
     */
    public function setTopMargin($top_margin)
    {
        $this->container['top_margin'] = $top_margin;

        return $this;
    }

    /**
     * Gets footer
     *
     * @return \Aspose\Cells\Cloud\Model\PageSection[]
     */
    public function getFooter()
    {
        return $this->container['footer'];
    }

    /**
     * Sets footer
     *
     * @param \Aspose\Cells\Cloud\Model\PageSection[] $footer Represents the page footor.
     *
     * @return $this
     */
    public function setFooter($footer)
    {
        $this->container['footer'] = $footer;

        return $this;
    }

    /**
     * Gets fit_to_pages_tall
     *
     * @return int
     */
    public function getFitToPagesTall()
    {
        return $this->container['fit_to_pages_tall'];
    }

    /**
     * Sets fit_to_pages_tall
     *
     * @param int $fit_to_pages_tall Represents the number of pages tall the worksheet will be scaled to when it's printed.
     *
     * @return $this
     */
    public function setFitToPagesTall($fit_to_pages_tall)
    {
        $this->container['fit_to_pages_tall'] = $fit_to_pages_tall;

        return $this;
    }

    /**
     * Gets is_hf_scale_with_doc
     *
     * @return bool
     */
    public function getIsHfScaleWithDoc()
    {
        return $this->container['is_hf_scale_with_doc'];
    }

    /**
     * Sets is_hf_scale_with_doc
     *
     * @param bool $is_hf_scale_with_doc Indicates whether header and footer are scaled with document scaling.Only applies for Excel 2007.
     *
     * @return $this
     */
    public function setIsHfScaleWithDoc($is_hf_scale_with_doc)
    {
        $this->container['is_hf_scale_with_doc'] = $is_hf_scale_with_doc;

        return $this;
    }

    /**
     * Gets print_headings
     *
     * @return bool
     */
    public function getPrintHeadings()
    {
        return $this->container['print_headings'];
    }

    /**
     * Sets print_headings
     *
     * @param bool $print_headings Represents if row and column headings are printed with this page.
     *
     * @return $this
     */
    public function setPrintHeadings($print_headings)
    {
        $this->container['print_headings'] = $print_headings;

        return $this;
    }

    /**
     * Gets zoom
     *
     * @return int
     */
    public function getZoom()
    {
        return $this->container['zoom'];
    }

    /**
     * Sets zoom
     *
     * @param int $zoom Represents the scaling factor in percent. It should be between 10 and 400.
     *
     * @return $this
     */
    public function setZoom($zoom)
    {
        $this->container['zoom'] = $zoom;

        return $this;
    }

    /**
     * Gets print_title_rows
     *
     * @return string
     */
    public function getPrintTitleRows()
    {
        return $this->container['print_title_rows'];
    }

    /**
     * Sets print_title_rows
     *
     * @param string $print_title_rows Represents the rows that contain the cells to be repeated at the top of each page.
     *
     * @return $this
     */
    public function setPrintTitleRows($print_title_rows)
    {
        $this->container['print_title_rows'] = $print_title_rows;

        return $this;
    }

    /**
     * Gets order
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string $order Represents the order that Microsoft Excel uses to number pages when printing a large worksheet.
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets print_copies
     *
     * @return int
     */
    public function getPrintCopies()
    {
        return $this->container['print_copies'];
    }

    /**
     * Sets print_copies
     *
     * @param int $print_copies Get and sets number of copies to print.
     *
     * @return $this
     */
    public function setPrintCopies($print_copies)
    {
        $this->container['print_copies'] = $print_copies;

        return $this;
    }

    /**
     * Gets orientation
     *
     * @return string
     */
    public function getOrientation()
    {
        return $this->container['orientation'];
    }

    /**
     * Sets orientation
     *
     * @param string $orientation Represents page print orientation.
     *
     * @return $this
     */
    public function setOrientation($orientation)
    {
        $this->container['orientation'] = $orientation;

        return $this;
    }

    /**
     * Gets right_margin
     *
     * @return double
     */
    public function getRightMargin()
    {
        return $this->container['right_margin'];
    }

    /**
     * Sets right_margin
     *
     * @param double $right_margin Represents the size of the right margin, in unit of centimeters.
     *
     * @return $this
     */
    public function setRightMargin($right_margin)
    {
        $this->container['right_margin'] = $right_margin;

        return $this;
    }

    /**
     * Gets print_gridlines
     *
     * @return bool
     */
    public function getPrintGridlines()
    {
        return $this->container['print_gridlines'];
    }

    /**
     * Sets print_gridlines
     *
     * @param bool $print_gridlines Represents if cell gridlines are printed on the page.
     *
     * @return $this
     */
    public function setPrintGridlines($print_gridlines)
    {
        $this->container['print_gridlines'] = $print_gridlines;

        return $this;
    }

    /**
     * Gets is_auto_first_page_number
     *
     * @return bool
     */
    public function getIsAutoFirstPageNumber()
    {
        return $this->container['is_auto_first_page_number'];
    }

    /**
     * Sets is_auto_first_page_number
     *
     * @param bool $is_auto_first_page_number Indicates whether the first the page number is automatically assigned.
     *
     * @return $this
     */
    public function setIsAutoFirstPageNumber($is_auto_first_page_number)
    {
        $this->container['is_auto_first_page_number'] = $is_auto_first_page_number;

        return $this;
    }

    /**
     * Gets header
     *
     * @return \Aspose\Cells\Cloud\Model\PageSection[]
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     *
     * @param \Aspose\Cells\Cloud\Model\PageSection[] $header Represents the page header.
     *
     * @return $this
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets is_hf_diff_odd_even
     *
     * @return bool
     */
    public function getIsHfDiffOddEven()
    {
        return $this->container['is_hf_diff_odd_even'];
    }

    /**
     * Sets is_hf_diff_odd_even
     *
     * @param bool $is_hf_diff_odd_even True means that the header/footer of the odd pages is different with odd pages.
     *
     * @return $this
     */
    public function setIsHfDiffOddEven($is_hf_diff_odd_even)
    {
        $this->container['is_hf_diff_odd_even'] = $is_hf_diff_odd_even;

        return $this;
    }

    /**
     * Gets bottom_margin
     *
     * @return double
     */
    public function getBottomMargin()
    {
        return $this->container['bottom_margin'];
    }

    /**
     * Sets bottom_margin
     *
     * @param double $bottom_margin Represents the size of the bottom margin, in unit of centimeters.
     *
     * @return $this
     */
    public function setBottomMargin($bottom_margin)
    {
        $this->container['bottom_margin'] = $bottom_margin;

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

