<?php
    // Exemplo de controller para chamar uma view desejada
    class HomeController extends Controller{
        public function process($params){
            // Adicionar as variaveis title e description para serem mostradas na pagina
            $this->head['title'] = "Blue Inovations - ONU";
            $this->head['description'] = "Pagina inicial";
            // Chama o view para ser mostrado.
            $this->view = 'home';
        }
    }
?>
