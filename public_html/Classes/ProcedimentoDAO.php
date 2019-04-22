<?php
class ProcedimentoDAO{       
   public static function getSalaById($id){
 $url = "SELECT Sala FROM procedimento WHERE id=".$id;

 $result =  Conexao::consultar(url);
       $sala = $result['sala'];
       return $sala;      
}
    
    
}






?>