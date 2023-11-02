<?php

namespace Ariel\Comex\Estoque;

class EstoqueNegativoException extends \InvalidArgumentException
{
    public function __construct()
    {     
        $mensagem = "A quantidade em estoque é insuficiente";
        parent::__construct($mensagem);
    }
}