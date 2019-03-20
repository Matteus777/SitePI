<html>
  <head>
    <title>Cadastro</title>
             <link href="estilo.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
         
  </head>
<body>
<?php require_once 'menu.php'?>
    <h2>Preencha os campos para realizar o cadastro.</h2>
    <form action="../Classes/inserirCliente.php?inserir" method="POST">
         <div class="cadastros">Nome:<input  type="text" name="txtNome"></div>         
         <div class="cadastros">Email:<input type="text" name="txtEmail"></div>         
         <div class="cadastros">CPF:<input type="text" name="txtCPF"></div>         
         <div class="cadastros">Telefone:<input type="text" name="txtTelefone"></div>
         <div class="cadastros">Sexo: 
                <select name="cbSexo">             
             <option  value="0"> Selecione </option>
             <option value="m"> Masculino </option>
             <option value="f"> Feminino </option>
         </select>
         </div>
         <div class="cadastros" >Idade:<input type="number" min="0" max="100" name="txtIdade"></div>
         <div class="cadastros" >Senha:<input type="password" name="txtSenha"></div>
         <div id="submit" onclick= "javascript:this.parentNode.submit();">Cadastrar</div>

         </form>
    <?php require_once 'rodape.php'?>
</body>
</html>