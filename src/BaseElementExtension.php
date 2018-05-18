<?php
namespace Ucenna\ElementalBlockGridifier;

use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\DropdownField;


class BaseElementExtension extends DataExtension
{
  /**
  * @var array db entries
  */
  private static $db = [
    'Columns' => 'Int'
  ];

  /**
  * @param FieldList $fields
  */
  public function updateCMSFields(FieldList $fields)
    {
        $fields->unshift(new DropdownField('Columns', "Element Size", [
          "12" => '12/12 - 100%',
          "11" => '11/12 - 92%',
          "10" => '10/12 - 83%',
          "9" => '9/12 - 75%',
          "8" => '8/12 - 67%',
          "7" => '7/12 - 58%',
          "6" => '6/12 - 50%',
          "5" => '5/12 - 42%',
          "4" => '4/12 - 33%',
          "3" => '3/12 - 25%',
          "2" => '2/12 - 16%',
          "1" => '1/12 - 8%',
        ]));
    }
}
