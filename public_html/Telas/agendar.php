
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
                <select id="horario">
                    <option value="8:00">8:00</option>
                    <option value="8:30">8:30</option>
                    <option value="9:00">9:00</option>
                    <option value="9:30">9:30</option>
                    <option value="10:00">10:00</option>
                    <option value="10:30">10:30</option>
                    <option value="11:00">11:00</option>
                    <option value="11:30">11:30</option>
                    <option value="13:00">13:00</option>
                    <option value="13:30">13:30</option>
                    <option value="14:00">14:00</option>
                    <option value="14:30">14:30</option>
                    <option value="15:00">15:00</option>
                    <option value="15:30">15:30</option>
                    <option value="16:00">16:00</option>
                    <option value="16:30">16:30</option>
                    <option value="17:00">17:00</option>
                    <option value="17:30">17:30</option>
                    <option value="18:00">18:00</option>
                </select>
                </div>
                <input type="submit">
            </div>
        </form>
    </body>
</html>
