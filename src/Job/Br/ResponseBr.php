<?php
namespace Tigo\ChatterBot\Job\Br;

use Tigo\ChatterBot\Interfaces\ResponseInterface;

/**
 * Filling matrix for the Portuguese language of Brazil.
 */
class ResponseBr implements ResponseInterface
{
    
    /**
     * answer matrix.
     *
     * @var array
     */
    protected $items = [
        "Oi"=> ["Oi","Olá","Oi, eu posso ajudar você?","Oi, eu sou um robô"],
        "Olá"=> ["Oi","Olá","Oi, em que posso ajudar?","Oi! eu sou um robô"],
        "Bom Dia"=> ["Bom dia", "Olá", "Oi, em que posso ajudar?"],
        "Boa noite"=>["Boa noite","Olá, boa noite","Olá, em que posso ajudar?"],
        "Boa tarde"=>["Boa tarde","Boa tarde! o que você faz de bom?"]
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