<?php
    // Exemplo de controller para chamar uma view desejada
    class CadastroController extends Controller{
        public function process($params){
            // Adicionar as variaveis title e description para serem mostradas na pagina
            $this->head['title'] = "Cadastro";
            $this->head['description'] = "Pagina para cadastro";
            // Chama o view para ser mostrado.
            $this->view = 'cadastro';
            
        }
    }
?>