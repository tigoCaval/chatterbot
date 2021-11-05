<?php
namespace Tigo\ChatterBot\Job\En;

use Tigo\ChatterBot\Interfaces\ResponseInterface;

/**
 * Fill matrix for the English language. 
 */
class ResponseEn implements ResponseInterface
{

    /**
     * answer matrix.
     *
     * @var array
     */
    protected $items = [
        "Hi"=> ["Hi","Hello"],
        "Hello"=> ["Hi","Hello"], 
        "Good Morning"=> ["Good Morning", "Hi", "Hello"],
        "Good Night"=>["Good Night","Hi","Hello"],
        "Good Afternoon"=>["Good Afternoon","Hi","Hello"]
    ];
    
    /**
     * get matrix.
     *
     * @return array
     */
    public function show()
    {
        return $this->items;
    }
    
}