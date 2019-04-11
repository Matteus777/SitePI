<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link href="estilo.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
        
        if( isset($_SESSION['logado'])&& $_SESSION['logado']){
            
        
    ?>
        <?php require_once'menu.php' ?>
        <div id="dados">
            <div id="imagem" class="textos">

            </div>
            <div id="sopronome" class="textos">
                Seja bem-vindo, <?php echo $_SESSION['nomeCliente']; ?>
            </div>
            <?php
        }
    ?>
        </div>
        <div class="limpafloat"></div>
        <?php require_once'rodape.php' ?>
    </body>
</html>
