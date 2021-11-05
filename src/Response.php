<?php
namespace Tigo\ChatterBot;
   
use Tigo\ChatterBot\Job\Base\Question;
use Tigo\ChatterBot\Job\En\ResponseEn;
use Tigo\ChatterBot\Interfaces\BotInterface;
use Tigo\ChatterBot\Job\Base\ResponseDataBase;
  
/**
 * Response: get dialog responses.
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>.
 */
class Response 
{
    
    /**
     * get ResponseInterface (ResponseDataBase). 
     *
     */
    protected $rdb;
        
    /**
     * get ResponseInterface (ResponseEn). 
     * 
     */
    protected $response;
        
    /**
     * get BotInterface.
     *
     * @var BotInterface
     */
    protected $bot;
    
    public function __construct(BotInterface $bot)
    {
        $this->rdb = new ResponseDataBase();
        $this->response = new ResponseEn();
        $this->bot = $bot;   
    }
    
    /**
     * get check.
     *
     * @param  mixed $data
     * @return string|false
     */
    public function check($data)
    {
        return $this->bot->check($data, $this->response); 
    }
    
    /**
     * checkDataBase | get information through the database.
     *
     * @param  mixed $data
     * @return string|false
     */
    public function checkDataBase($data)
    {
        $this->rdb->collector($data, new Question());  
        return $this->bot->check($data, $this->rdb);
    }

}
