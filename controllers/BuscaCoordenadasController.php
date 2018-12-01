<?php
    // Exemplo de controller para chamar uma view desejada
    class BuscaCoordenadasController extends Controller{
        public function process($params){
            $url = "http://dev.virtualearth.net/REST/v1/Locations/".$_POST['lat'].",".$_POST['lon']."?key=Aoq1PkOuQGT5XcbPg3uSKVtyLjdn5C3ErWV32mADFuqnrDCVfcr1L7oMYuHd9vU0";
            
            // Iniciando requisição em cURL par ao PagSeguro
            $curl = curl_init( $url );
            
            // Opcao para retorno do cURL como string
            curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
            
            // Opcao para remover header do retorno do cURL
            curl_setopt( $curl, CURLOPT_HEADER, 0 );
            
            // Executando cURL e guardando resposta da requisicao
            echo curl_exec( $curl );
            
            // Fechando a requisicao cURL
            curl_close( $curl );

        }
    }
?>