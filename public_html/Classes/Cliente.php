<?php
class Cliente{
    private $id;
    private $nome;
    private $email;
    private $cpf;
    private $telefone;
    private $sexo;
    private $idade;
    private $senha;
    private $logado;
    
    function __construct($nome = null, $email=null, $cpf=null, $telefone=null, $sexo=null, $idade=null, $senha=null) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->sexo = $sexo;
        $this->idade = $idade;
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

    function getSexo() {
        return $this->sexo;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSenha() {
        return $this->senha;
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

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }


}

?>