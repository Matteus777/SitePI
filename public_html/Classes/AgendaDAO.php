<?php
class AgendaDAO{
public static function inserir($agenda) {
        $sql = "INSERT INTO agenda "
                . " ( id, codServico, data, horario, "
                . " ) VALUES "
                . " ( '" . $agenda->getId() . "' , "
                . "   '" . $agenda->getCodServico() . "' , "
                . "   '" . $agenda->getData() . "' , "
                . "   '" . $agenda->getHorario() . "' , "
                . " )";
        return (Conexao::executar($sql));
    }

    public static function editar($agenda) {
        $sql = "UPDATE agenda SET "
                . "  codServico =      '" . $agenda->getCodServico() . "' , "
                . "  codData =       '" . $agenda->getData() . "' , "
                . "  codHorario =     '" . $agenda->getHorario() . "' , "
                . "  WHERE id =   " . $agenda->getId();
        Conexao::executar($sql);
    }

    public static function excluir($agenda) {
        $sql = "DELETE FROM agenda "
                . "  WHERE id = " . $agenda->getId();
        Conexao::executar($sql);
    }

    public static function getAgenda() {
        $sql = "SELECT d.id, d.codServico, d.data, d.horario, "
                . " FROM agenda d ";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if ($result) {
            while (list($id, $codServico, $data, $horario,
            $data) = mysqli_fetch_row($result)) {
                $agenda = new Agenda();
                $agenda->setId($id);
                $agenda->setCodServico($codServico);
                $agenda->setData($data);
                $agenda->setHorario($horario);
                $lista->append($agenda);
            }
        }
        return $lista;
    }
}
    ?>