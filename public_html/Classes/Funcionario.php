<?php
class Funcionario{
    private $id;
    private $nome;
    private $email;
    private $cpf;
    private $telefone;
    private $sala;
    private $senha;
   
    
    function __construct($nome = null, $email = null, $cpf = null, $telefone = null, $sala = null,$senha = null) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->sala = $sala;
        $this->senha = $senha;
    }
    function getSenha() {
        return $this->senha;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

        function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getSala() {
        return $this->sala;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setSala($sala) {
        $this->sala = $sala;
    }


}
?>