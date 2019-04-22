<?php

include_once '../Classes/Agenda.php';
include_once '../Classes/AgendaDAO.php';
include_once '../Classes/Conexao.php';


if (isset($_REQUEST['inserir'])) {

    $agenda = new Agenda();
    $agenda->setCodServico($_POST['servico']);
    $agenda->setData($_POST['data']);
    $agenda->setHorario($_POST['horario']);
    
    if(AgendaDAO::inserir( $agenda )){
        header("Location: ../Telas/usuario.php");
        }else{
            echo'<script> alert("Não foi possível agendar a consulta)</script>';
              }   
    AgendaDAO::inserir($agenda);
}
?>