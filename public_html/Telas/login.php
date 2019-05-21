<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
         <link href="estilo.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php require_once 'menu.php'?>
        <div id="loginverdadeiro">
            <div id="logologin">&nbsp;</div>
            <form action="../Classes/logarCliente.php?logar" method="POST">
            <div id="login1" class="textos2">Usuario:<input type="text" name="txtUsuario"></div>
            <div id="senha" class="textos2">Senha:<input type="password" name="txtSenha"></div>
            <div id="botaologin" class="textos2" onclick= "javascript:this.parentNode.submit();">Login</div>
            </form>
               
        </div>    
        
        </body>
</html>
