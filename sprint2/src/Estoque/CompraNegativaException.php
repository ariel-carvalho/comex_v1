<?php

namespace Ariel\Comex\Estoque;

class CompraNegativaException extends \InvalidArgumentException
{
    public function __construct()
    {     
        $mensagem = "A quantidade comprada deve ser um número positivo";
        parent::__construct($mensagem);
    }
}