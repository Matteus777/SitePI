<?php
    include_once '../Classes/Agenda.php';
    include_once '../Classes/AgendaDAO.php';
    include_once '../Classes/Conexao.php';
    
?>
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
        
        if( isset($_SESSION['logado']) && $_SESSION['logado']){
            
        
    ?>
        <?php require_once'menu.php' ?>
        <div id="dados">
            <?php
            $lista = AgendaDAO::getAgenda($_SESSION['nomeCliente']);
            if (count($lista) == 0) {
                echo '<h2>Nenhuma consulta cadastrada!</h2>';
            } else {
                ?>

                <table>
                    <tr>
                        <th>Código</th>
                        <th>Serviço</th>
                        <th>Data</th>
                        <th>Horário</th>
                    </tr>
                    <?php
                    foreach ($lista as $ped) {
                        ?>
                        <tr>
                            <td><?php echo $ped->getId(); ?></td>
                            <td><?php echo $ped->getCodServico(); ?></td>
                            <td><?php echo $ped->getData(); ?></td>
                            <td><?php echo $ped->getHorario(); ?></td>
                           <td><a href="usuario.php?editar&idAgenda=<?php echo $ped->getId(); ?>"><button class="btnVerProdutos"></button></a></td>
                            
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <?php
            }
            ?>
            <?php
        }
    ?>
        </div>
        <div class="limpafloat"></div>
        <?php require_once'rodape.php' ?>
    </body>
</html>
