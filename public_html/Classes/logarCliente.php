<?php

include_once 'Cliente.php';
include_once 'ClienteDAO.php';
include_once 'Conexao.php';
if (isset($_REQUEST['logar'])) {
    $login = $_POST['txtUsuario'];
    $senha = $_POST['txtSenha'];

    $pessoa = FuncionarioDAO::getFuncionarioByLogin($login, $senha);
    if ($pessoa == null) {
        $pessoa = ClienteDAO::getClienteByLogin($login, $senha);
        if ($pessoa == null) {
                      
                       }
        } else {
            session_start();
            $_SESSION['logado'] = TRUE;
            $_SESSION['funcionario'] = FALSE;
            $_SESSION['idCliente'] = $cliente->getId();
            $_SESSION['nomeCliente'] = $cliente->getNome();
            header("Location: ../Telas/usuario.php");
        }
    } else {
        session_start();
        $_SESSION['logado'] = TRUE;
        $_SESSION['funcionario'] = TRUE;
        $_SESSION['idFuncionario'] = $cliente->getId();
        $_SESSION['nomeFuncionario'] = $cliente->getNome();
        header("Location: ../Telas/usuario.php");
    }

    if ($pessoa instanceof Funcionario) {
        
    }




    if ($cliente == null) {
        
    }

?>