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

    
}
?>