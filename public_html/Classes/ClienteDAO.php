<?php

/**
 * Description of CidadeDAO
 *
 * @author assparremberger
 */
class ClienteDAO {

    public static function inserir($cliente) {
        $sql = "INSERT INTO cliente "
                . " ( nome, email, cpf, telefone, sexo, idade, "
                . " senha) VALUES "
                . " ( '" . $cliente->getNome() . "' , "
                . "   '" . $cliente->getEmail() . "' , "
                . "   '" . $cliente->getCpf() . "' , "
                . "   '" . $cliente->getTelefone() . "' , "
                . "   '" . $cliente->getSexo() . "' , "
                . "   '" . $cliente->getIdade() . "' , "
                . "   '" . $cliente->getSenha(). "' "
                . " )";
            return (Conexao::executar($sql));
    }

    public static function editar($cliente) {
        $sql = "UPDATE cliente SET "
                . "  nome =      '" . $cliente->getNome() . "' , "
                . "  email =       '" . $cliente->getEmail() . "' , "
                . "  cpf =     '" . $cliente->getCpf() . "' , "
                . "  telefone =  '" . $cliente->getTelefone() . "' , "
                . "  sexo =      '" . $cliente->getSexo() . "' , "
                . "  idade =        '" .$cliente->getIdade()."',"
                . "  WHERE id =   " . $cliente->getId();
        Conexao::executar($sql);
    }

    public static function excluir($cliente) {
        $sql = "DELETE FROM cliente "
                . "  WHERE id = " . $cliente->getId();
        Conexao::executar($sql);
    }

    public static function getClientes() {
        $sql = "SELECT d.id, d.nome, d.email, d.cpf, "
                . " d.telefone, d.sexo, d.idade "
                . " FROM cliente d ";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if ($result) {
            while (list($id, $nome, $email, $cpf,
            $telefone, $sexo) = mysqli_fetch_row($result)) {
                $cliente = new Cliente();
                $cliente->setId($id);
                $cliente->setNome($nome);
                $cliente->setEmail($email);
                $cliente->setCpf($cpf);
                $cliente->setTelefone($telefone);
                $cliente->setSexo($sexo);
                $cliente->setIdade($idade);
                $lista->append($cliente);
            }
        }
        return $lista;
    }

    public static function getClienteById($idCliente) {
        $sql = "SELECT d.id, d.nome, d.email, d.cpf, "
                . " d.telefone, d.sexo, d.idade"
                . " FROM cliente d "
                . " WHERE d.id = " . $idCliente;

        $result = Conexao::consultar($sql);

        if ($result) {

            list($id, $nome, $email, $cpf,$telefone, $sexo, $idade ) = mysqli_fetch_row($result);
            $cliente = new Cliente();
            $cliente->setId($id);
            $cliente->setNome($nome);
            $cliente->setCpf($cpf);
            $cliente->setEmail($email);
            $cliente->setTelefone($telefone);
            $cliente->setSexo($sexo);
            $cliente->setIdade($idade);
            return $cliente;
        } else {
            return NULL;
        }
    } 
    public static function getClienteByLogin($login, $senha){  
        $sql = "SELECT id, nome, email "
             . " FROM cliente "
             . " WHERE senha = '".$senha."' AND "
             . " ( email = '$login' OR cpf = '$login' )";
        $result = Conexao::consultar($sql);
        if( mysqli_num_rows($result) == 0 ){
            return NULL;
        } else {
            $dados = mysqli_fetch_assoc($result);
            $cliente = new Cliente();
            $cliente->setId( $dados['id'] );
            $cliente->setNome( $dados['nome'] );
            $cliente->setEmail( $dados['email'] );
            return $cliente;
        }
   }
}