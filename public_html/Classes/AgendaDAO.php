<?php
class AgendaDAO{
public static function inserir($agenda) {
        $sql = "INSERT INTO agenda "
                . " ( id, codDoutor, codPaciente, codProcedimento,Data"
                . " ) VALUES "
                . " ( '" . $agenda->getId() . "' , "
                . "   '" . $agenda->getCodDoutor() . "' , "
                . "   '" . $agenda->getCodPaciente() . "' , "
                . "   '" . $agenda->getCodProcedimento() . "' , "
                . "   '" . $agenda->getData() . "' , "
                . " )";

        Conexao::executar($sql);
    }

    public static function editar($agenda) {
        $sql = "UPDATE agenda SET "
                . "  codDoutor =      '" . $agenda->getCodDoutor() . "' , "
                . "  codPaciente =       '" . $agenda->getCodPaciente() . "' , "
                . "  codProcedimento =     '" . $agenda->getCodProcedimento() . "' , "
                . "  data =  '" . $agenda->getData() . "' , "
                . "  WHERE id =   " . $agenda->getId();
        Conexao::executar($sql);
    }

    public static function excluir($agenda) {
        $sql = "DELETE FROM agenda "
                . "  WHERE id = " . $agenda->getId();
        Conexao::executar($sql);
    }

    public static function getAgenda() {
        $sql = "SELECT d.id, d.codDoutor, d.codProcedimento, d.codPaciente, "
                . " d.data"
                . " FROM agenda d ";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if ($result) {
            while (list($id, $codDoutor, $codProcedimento, $codPaciente,
            $data) = mysqli_fetch_row($result)) {
                $agenda = new Agenda();
                $agenda->setId($id);
                $agenda->setCodDoutor($codDoutor);
                $agenda->setCodProcedimento($codProcedimento);
                $agenda->setCodPaciente($codPaciente);
                $agenda->setData($data);
                $lista->append($agenda);
            }
        }
        return $lista;
    }
}
    ?>