<?php
    // Exemplo de controller para chamar uma view desejada
    class LoginController extends Controller{
        public function process($params){
            // Adicionar as variaveis title e description para serem mostradas na pagina
            $this->head['title'] = "Login";
            $this->head['description'] = "Pagina para login";
            // Chama o view para ser mostrado.
            $this->view = 'login';
        }
    }
?>