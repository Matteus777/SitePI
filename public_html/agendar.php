
<html>
    <head>
        <title>Agendar Consulta - Clínica Bom Olhar</title>
        <meta charset="UTF-8">
        <link href="estilo.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php require_once 'menu.php' ?>

        <h1 style="text-align:center; font-family: tahoma;">Agendar Consulta</h1>


        <form>
            <div id="forms">
                <div class="forms2">
                <label for="servico">Serviço:</label>
                 <select id="servico" name="serviço">
                    <option value="">Cirurgia de Catarata</option>
                    <option value="">Cirurgia Refrativa</option>
                    <option value="">Acuidade Visual</option>
                    <option value="">Teste de Ishihara</option>
                    <option value="">Aberrometria Wavefront</option>
                    <option value="">Fundo de Olho</option>
                    <option value="">Curva de Pressão Intraocular</option>
                    <option value="">Ceratometria</option>
                    <option value="">Ecobiometria Ocular</option>
                    <option value="">Gonioscopia</option>
                    <option value="">Paquimetria Ultrassônica</option>
                    <option value="">Topografia de Córnea</option>
                    <option value="">Retinoscopia</option>
                    <option value="">Exame de Visão</option>
                </select>
                </div>
                <div class="forms2">
                Data:
                <input type="date" name="data" class="inputs" id="">
                </div>
                <div class="forms2">
                Horário:
                <input type="time" name="hora" class="inputs">
                </div>
                <input type="submit">
            </div>
        </form>
    </body>
</html>
