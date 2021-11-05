<?php
namespace Tigo\ChatterBot\Job\Base;

use Tigo\Crud\Abstracts\AbsCrud;

class Answer extends AbsCrud 
{
       /**
       * Get Table
       */
      protected static function getTable()
      {
          return "answers";
      }

       /**
       * Get Primary key
       */
      protected static function getPrimaryKey()
      {
          return "id";
      }

}