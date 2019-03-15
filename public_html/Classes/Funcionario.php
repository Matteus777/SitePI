<?php
class Funcionario{
    private $id;
    private $nome;
    private $email;
    private $cpf;
    private $telefone;
    private $sala;
    function __construct($nome, $email, $cpf, $telefone, $sala) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->sala = $sala;
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