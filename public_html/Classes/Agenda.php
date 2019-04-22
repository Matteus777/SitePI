<?php
class Agenda{
    private $id;
    private $codDoutor;
    private $codServico;
    private $codPaciente;
    private $data;
    private $horario;
    
    function getHorario() {
        return $this->horario;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }

        function __construct($codServico = null, $data = null, $horario = null) {
        $this->codServico = $codServico;
        $this->data = $data;
        $this->horario = $horario;
       
    }
    function getId() {
        return $this->id;
    }

    function getCodDoutor() {
        return $this->codDoutor;
    }

    function getCodServico() {
        return $this->codServico;
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

    function setCodServico($codServico) {
        $this->codProcedimento = $codServico;
    }

    function setCodPaciente($codPaciente) {
        $this->codPaciente = $codPaciente;
    }

    function setData($data) {
        $this->data = $data;
    }
}
?>