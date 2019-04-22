<?php
class Procedimento{
    private $id;
    private $nome;
    private $sala;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function getSala() {
        return $this->sala;
    }

    function setSala($sala) {
        $this->sala = $sala;
    }
    
    
    
}

?>