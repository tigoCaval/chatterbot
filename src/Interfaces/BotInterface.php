<?php
namespace Tigo\ChatterBot\Interfaces;

interface BotInterface
{
    public function check($data, ResponseInterface $response);
}