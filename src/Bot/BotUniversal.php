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
      * 
      * @var string
      */
     private $char = "`´^~@#$%&*?!().¨:;";
        
     /**
      * check
      *
      * @param  mixed $data
      * @param  ResponseInterface $rl
      * @return array|false
      */
     public function check($data, ResponseInterface $rl)
     {
         $data = mb_strtoupper($data);
         $data = trim($data, $this->char);
         foreach($rl->show() as $key => $item){
             $key = mb_strtoupper($key);
             $key = trim($key, $this->char);     
             if($this->removeChar($data) === $this->removeChar($key))
                return $item[array_rand($item,1)]; 
         }
         return false;
     } 
  
}