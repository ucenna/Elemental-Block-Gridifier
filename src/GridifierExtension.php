<?php
namespace Ucenna\ElementalBlockGridifier;

use SilverStripe\ORM\DataExtension;
use SilverStripe\View\Requirements;


class GridifierExtension extends DataExtension
{
  /**
  * @param var $name
  * @param var $title
  * @param var $dataList
  * @param var $config
  */
  public function __construct($name = null, $title = null, $dataList = null, $config = null)
  {
    parent::__construct($name, $title, $dataList, $config);
    Requirements::css("vendor/ucenna/elemental-block-gridifier/css/custom.css");
  }

  /**
  * @param var $classes
  * @param var $total
  * @param var $index
  * @param var $record
  */
  public function updateNewRowClasses(&$classes, $total, $index, $record)
  {
    $columns = $record->Columns;
    if ($columns) {
      $classes[] = "col-".$columns;
    }
  }
}
