<?php
/**
 * Description of Conexao
 *
 * @author assparremberger
 */
class Conexao {
    private function abrir(){
        $local = "senacinfo-db";
        $usuario = "inf_t171";
        $senha = "senacrs";
        $banco = "sitepi";
        $conn = mysqli_connect($local, $usuario, $senha, $banco);
        return $conn;
    } 
        public static function executar($query){
        $conn = self::abrir();
        if( $conn ){
            mysqli_query($conn, $query);
            mysqli_close($conn);
            return true;
        }
    }
        public static function consultar($query){
        $conn = self::abrir();
        if( $conn ){
            $result = mysqli_query($conn, $query);
            mysqli_close($conn);
            return $result;
        } else {
            return NULL;
        }
    }
}
