<?php

class CadastrarRelato{
    public function cadastrar( $finalidade, $envolvidos, $relato, $data, $faixa, $pais, $estado, $cidade ){
        var_dump($pais,$estado,$cidade);
       $result = Db::queryCount( "INSERT INTO depoimentos (dep_finalidade,dep_envolvidos,dep_depoimento,dep_data,dep_faixa_etaria,dep_pais,dep_est_prov,dep_cidade) VALUES (?,?,?,?,?,?,?,?)", array($finalidade, $envolvidos, $relato, $data, $faixa, $pais, $estado, $cidade) );
        
       return $result;
        
    }
    
    public function buscarDepoimento(){
        
    }
}

?>