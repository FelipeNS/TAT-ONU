<?php
    // Exemplo de controller para chamar uma view desejada
    class CadastrarRelatoController extends Controller{
        public function process($params){
            if( isset($_POST['finalidade']) ){
                $cadastro = new CadastrarRelato();
                
                $dataExp = explode( "/", $_POST['data'] );
                
                $data = $dataExp[2] . "-" . $dataExp[1] . "-" . $dataExp[0];
                
                $sucesso = $cadastro->cadastrar( $_POST['finalidade'], $_POST['envolvidos'], $_POST['relato'], $data, $_POST['faixa'], $_POST['pais'], $_POST['estado'], $_POST['cidade'] );
                
                // if( $sucesso != 0 ){
                //     echo "cadastrou";
                // }else{
                //     echo "nao";
                // }
            }else{
                echo "sem post";
            }
            
        }
    }
?>