<?php
class Pessoa
{
    // Atributo
    public $nome;

    public function falar()
    {
        return "O meu nome é " . $this->nome;
    }
}

$robson = new Pessoa();
$robson->nome = "Robson Matheose";
echo $robson->falar();