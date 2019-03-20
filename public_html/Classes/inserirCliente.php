<?php
include_once 'Cliente.php';
include_once 'ClienteDAO.php';
include_once 'Conexao.php';

if( isset( $_REQUEST['inserir'] ) ){
    $cliente = new Cliente();
    $cliente->setNome( $_POST['txtNome'] );
    $cliente->setEmail($_POST['txtEmail']);
    $cliente->setCpf($_POST['txtCPF']);
    $cliente->setTelefone($_POST['txtTelefone']);
    $cliente->setSexo($_POST['cbSexo']);
    $cliente->setIdade($_POST['txtIdade']);
    $cliente->setSenha($_POST['txtSenha']);
    if(ClienteDAO::inserir( $cliente )){
        header("Location: ../Telas/login.php?inseriu");   
        }else{
            echo'<script> alert("Não foi possível cadastrar o usuário)</script>';
              }           
}
if( isset( $_REQUEST['excluir'] ) ){
    $idCidade = $_GET['idCidade'];
    $cidade = CidadeDAO::getCidadeById($idCidade);
    echo '<h3>VocÃª confirma a exclusÃ£o de '
            .$cidade->getNome().'?<br><br>';
    echo '<a href="?confirmaExcluir&idCidade='.$idCidade.'"><button>Sim</button></a>';
    echo '<a href="../cidades.php"><button>NÃ£o</button></a>';
}

if( isset( $_REQUEST['confirmaExcluir'] ) ){
    $idCidade = $_GET['idCidade'];
    $cidade = new Cidade();
    $cidade->setId($idCidade);
    CidadeDAO::excluir($cidade);
    header("Location: ../cidades.php");
}
?>