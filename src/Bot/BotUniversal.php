<?php
namespace Tigo\ChatterBot\Bot;
 
use Tigo\ChatterBot\Interfaces\BotInterface;
use Tigo\ChatterBot\Interfaces\ResponseInterface;
use Tigo\ChatterBot\Traits\CharacterTrait;

/**
 * This class is responsible for generating the chatterbot results.
 */
class BotUniversal implements BotInterface
{
     use CharacterTrait;
     
     /**
      * remove characters.
      *
      * @var string
      */
     private $char = ["#", "@", "%", "&","$","(",")","^","~",":",";",".","?","!"];
        
     /**
      * check
      *
      * @param  mixed $data
      * @param  ResponseInterface $rl
      * @return string|false
      */
     public function check($data, ResponseInterface $rl)
     {
         $data = mb_strtoupper($data);
         $data = str_replace($this->char,"",$data);
         foreach($rl->show() as $key => $item){
             $key = mb_strtoupper($key);
             $key = str_replace($this->char,"",$key);     
             $dataNs = str_replace(" ","",$data);
             $keyNs = str_replace(" ","",$key);  
             if($this->removeChar($dataNs) === $this->removeChar($keyNs))
                return $item[array_rand($item,1)];
         }
         return false;
     }
}
