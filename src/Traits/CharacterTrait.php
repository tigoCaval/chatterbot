<?php
namespace Tigo\ChatterBot\Traits;

/**
 * Remove expression.
**/
trait CharacterTrait
{

    private $trans = [
       "Á"=>"A","À"=>"A","Â"=>"A","Ã"=>"A","Ä"=>"A", 
       "É"=>"E","È"=>"E","Ê"=>"E","Ë"=>"E",
       "Í"=>"I","Ì"=>"I","Î"=>"I","Ï"=>"I","Î"=>"I",
       "Ó"=>"O","Ò"=>"O","Ô"=>"O","Õ"=>"O","Ö"=>"O",
       "Ú"=>"U","Ù"=>"U","Û"=>"U","Ü"=>"U",
       "Ý"=>"Y",
       "Ñ"=>"N" 
    ];

    public function removeChar($str)
    {
       return strtr($str, $this->trans);
    }

}