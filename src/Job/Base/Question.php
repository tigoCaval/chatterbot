<?php
namespace Tigo\ChatterBot\Job\Base;

use Tigo\Crud\Abstracts\AbsCrud;

class Question extends AbsCrud 
{
       /**
       * Get Table
       */
      protected static function getTable()
      {
          return "questions";
      }

       /**
       * Get Primary key
       */
      protected static function getPrimaryKey()
      {
          return "id";
      }

}