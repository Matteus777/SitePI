<html>
  <head>
    <title>Cadastro</title>
             <link href="estilo.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
         
  </head>
<body>
<?php require_once 'menu.php'?>
    <h2>Preencha os campos para realizar o cadastro.</h2>
         <div class="cadastros">Nome:<input  type="text"></div>         
         <div class="cadastros">Email:<input type="text"></div>         
         <div class="cadastros">CPF:<input type="text"></div>         
         <div class="cadastros">Telefone:<input type="text"></div>
         <div class="cadastros"> Sexo: 
                <select>             
             <option  value="Selecione"> Selecione </option>
             <option value="Masculino"> Masculino </option>
             <option value="Feminino"> Feminino </option>
         </select>
         </div>
         <div class="cadastros" >Idade:<input type="number" min="0" max="100"></div>
         <div class="cadastros" >senha:<input type="password"></div>
    <?php require_once 'rodape.php'?>
</body>
</html>