<header>
    <a href="index.php">
        <div class="dropdown" id="Inicio">&nbsp;</div>
    </a>
    <div class="dropdown textos2" id="Exames" >Exames
        <div class="dropdown-content textos2">
            <ul id="menuexames" class="lista textos2">
                <li><a href="acuidadevisual.php">Acuidade Visual</a></li>
                <li><a href="ishihara.php">Teste de Ishihara</a></li>
                <li><a href="wavefront.php">Aberrometria Wavefront</a></li>            
                <li><a href="fundo.php">Fundo de Olho</a></li>
                <li><a href="intraocular.php">Curva de Pressão Intraocular</a></li>
                <li><a href="ceratometria.php">Ceratometria</a></li>                       
                <li><a href="ecobiometria.php">Ecobiometria Ocular</a></li>
                <li><a href="gonioscopia.php">Gonioscopia</a></li>     
                <li><a href="paquimetria.php">Paquimetria Ultrassônica</a></li>     
                <li><a href="topografia.php">Topografia de Córnea</a></li>     
                <li><a href="retinoscopia.php">Retinoscopia</a></li>             
            </ul>
        </div>
    </div>
    <div class="dropdown textos2" id="Cirurgias">Cirurgias
        <div class="dropdown-content textos2" id="divcontent">
            <ul id="menucirurgias" class="lista textos2">
                <li><a href="Catarata.php">Cirurgia de Catarata</a></li>       
                <li><a href="Refrativa.php">Cirurgia Refrativa</a></li>  
            </ul>  
        </div>
    </div>
    <a href="agendar.php"><div class="dropdown textos2" id="Agendar">Agendar</div>
    </a>
    <?php
    if (session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    }

    if (isset($_SESSION['logado']) && $_SESSION['logado']) {
        ?>
    <div class="dropdown textos2" id="Login"><a href="usuario.php">Seja bem-vindo, <?php echo $_SESSION['nomeCliente']; ?></a>
            <div class="dropdown-content" id="divcontent2">
                <ul class="lista textos2">
                    <li><a href="sair.php">Sair</a></li>
                </ul>
            </div>
        </div>
     
    <?php
} else {
    ?>
        <a href="login.php"><div class="dropdown textos2" id="Login">Login</div>
        <?php
    }
    ?>
    </a>
    <a href="Cadastro.php"><div class="dropdown textos2" id="Cadastro">Cadastro</div></a>
</header>
<div style="clear: both;"></div>