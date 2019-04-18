<?php
include_once 'Cliente.php';
include_once 'ClienteDAO.php';
include_once 'Conexao.php';
if( isset( $_REQUEST['logar'] ) ) {
    $login = $_POST['txtUsuario'];
    $senha = $_POST['txtSenha'];
    $cliente = ClienteDAO::getClienteByLogin($login, $senha);
    if($cliente == null){
        echo ('<script> alert=("Usuário não logado");</script>');
    }else {
        session_start();
        $_SESSION['logado'] = TRUE;
        $_SESSION['idCliente'] = $cliente->getId();
        $_SESSION['nomeCliente'] = $cliente->getNome();
         header("Location: ../Telas/usuario.php");
    
    }
}
?>