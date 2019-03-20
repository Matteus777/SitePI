<?php
class FuncionarioDAO {
    public static function inserir($funcionario) {
        $sql = "INSERT INTO funcionario "
                . " ( nome, email, cpf, telefone, sala, "
                . " senha) VALUES "
                . " ( '" . $funcionario->getNome() . "' , "
                . "   '" . $funcionario->getEmail() . "' , "
                . "   '" . $funcionario->getCpf() . "' , "
                . "   '" . $funcionario->getTelefone() . "' , "
                . "   '" .$funcionario->getSala()."',"
                . "   '" . $funcionario->getSenha(). "' "
                . " )";
        Conexao::executar($sql);
    }

    public static function editar($funcionario) {
        $sql = "UPDATE clientes SET "
                . "  nome =      '" . $funcionario->getNome() . "' , "
                . "  email =       '" . $funcionario->getEmail() . "' , "
                . "  cpf =     '" . $funcionario->getCpf() . "' , "
                . "  telefone =  '" . $funcionario->getTelefone() . "' , "
                ."   sala     =  '".$sala->getSala()."',"
                . "  WHERE id =   " . $funcionario->getId();
        Conexao::executar($sql);
    }
    public static function excluir($funcionario) {
        $sql = "DELETE FROM funcionario "
                . "  WHERE id = " . $funcionario->getId();
        Conexao::executar($sql);
    }

    public static function getFuncionarios() {
        $sql = "SELECT d.id, d.nome, d.email, d.cpf, "
                . " d.telefone,d.sala "
                . " FROM funcionario d ";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if ($result) {
            while (list($id, $nome, $email, $cpf,$telefone,$sala
           ) = mysqli_fetch_row($result)) {
                $funcionario = new Cliente();
                $funcionario->setId($id);
                $funcionario->setNome($nome);
                $funcionario->setEmail($email);
                $funcionario->setCpf($cpf);
                $funcionario->setTelefone($telefone);
                $funcionario->setSala($sala);
                $lista->append($funcionario);
            }
        }
        return $lista;
    }

    public static function getFuncionarioById($idFuncionario) {
        $sql = "SELECT d.id, d.nome, d.email, d.cpf, "
                . " d.telefone,d.sala"
                . " FROM funcionario d "
                . " WHERE d.id = " . $idFuncionario;

        $result = Conexao::consultar($sql);

        if ($result) {

            list($id, $nome, $email, $cpf,$telefone, $sala) = mysqli_fetch_row($result);
            $funcionario = new Cliente();
            $funcionario->setId($id);
            $funcionario->setNome($nome);
            $funcionario->setCpf($cpf);
            $funcionario->setEmail($email);
            $funcionario->setTelefone($telefone);
            $funcionario->setSala($sala);           
            return $funcionario;
        } else {
            return NULL;
        }
    } 
    public static function getFuncionarioByLogin($login, $senha){  
        $sql = "SELECT id, nome, email "
             . " FROM funcionario "
             . " WHERE senha = '".$senha."' AND "
             . " ( email = '$login' OR cpf = '$login' )";
        $result = Conexao::consultar($sql);
        if( mysqli_num_rows($result) == 0 ){
            return NULL;
        } else {
            $dados = mysqli_fetch_assoc($result);
            $funcionario = new Cliente();
            $funcionario->setId( $dados['id'] );
            $funcionario->setNome( $dados['nome'] );
            $funcionario->setEmail( $dados['sala'] );
            return $funcionario;
        }
   }
}