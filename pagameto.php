<?php
class Usuario{
    public $nome;
    public $cpf;
    public $endereço;
    //construtor da classe
    function Usuario();{
    $this - >preparaUsuario();
}

function prepararUsuario(){
    $this - >nome = "Filipe"
    $this - >cpf = "99999999999"
    $this - >endereco = "Rua fulano de Tal numero 0 apt 999";
}

} ?>
