<?php
namespace Tigo\ChatterBot\Job\Base;
 
use Tigo\ChatterBot\Interfaces\ResponseInterface;
use Tigo\ChatterBot\Traits\CharacterTrait;

/**
 * Here contains the logic of the dialog using the database.
 */
class ResponseDataBase implements ResponseInterface
{
     use CharacterTrait;
     
     /**
      * get sql.
      *
      * @var string
      */
     private $sql = "select * from answers where question_id = ";
     
     /**
      * get matrix.
      *
      * @var array
      */
     private $matrix = [];
     
     /**
      * char.
      *
      * @var string
      */
     private $char = "`´^~@#$%&*?!().¨:;";
     

     /**
      * get show.
      *
      * @return array
      */
     public function show()
     {  
        return $this->matrix;  
     }

          
     /**
      * get collector.
      *
      * @param  mixed $data
      * @param  Question $question
      * @return array
      */
     public function collector($data, Question $question)
     {
          $id = 0;
          $fk = 0;
          $data = mb_strtoupper($data);
          $data = trim($data, $this->char);
          $data = $this->removeChar($data);

          foreach($question::all() as $key => $item){
              $id = $item->id; 
              $fk = $item->description;
              $items = mb_strtoupper($item->description);
              $items = trim($items, $this->char);
              $items = $this->removeChar($items);
              if($data === $items){  
                 return $this->collectForeignKey($id, $fk, new Answer);
              }   
          }

          return $this->collectForeignKey($id, $fk, new Answer);
     }
     
         
     /**
      * get collectForeignKey | fill matrix.
      *
      * @param  mixed $id
      * @param  mixed $fk
      * @param  Answer $answer
      * @return array
      */
     public function collectForeignKey($id, $fk, Answer $answer)
     {
          $this->sql .= $id;
          foreach($answer::execute($this->sql) as $key => $item){ 
              $this->matrix[$fk][] = $item['description'];
          }
          return $this->matrix;
     }
    
}