<?php
class Agenda{
    private $id;
    private $codDoutor;
    private $codProcedimento;
    private $codPaciente;
    private $data;
    function __construct($codDoutor, $codProcedimento, $codPaciente, $data) {
        $this->codDoutor = $codDoutor;
        $this->codProcedimento = $codProcedimento;
        $this->codPaciente = $codPaciente;
        $this->data = $data;
    }
    function getId() {
        return $this->id;
    }

    function getCodDoutor() {
        return $this->codDoutor;
    }

    function getCodProcedimento() {
        return $this->codProcedimento;
    }

    function getCodPaciente() {
        return $this->codPaciente;
    }

    function getData() {
        return $this->data;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCodDoutor($codDoutor) {
        $this->codDoutor = $codDoutor;
    }

    function setCodProcedimento($codProcedimento) {
        $this->codProcedimento = $codProcedimento;
    }

    function setCodPaciente($codPaciente) {
        $this->codPaciente = $codPaciente;
    }

    function setData($data) {
        $this->data = $data;
    }


    
}
?>