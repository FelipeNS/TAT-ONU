<?php
    // Exemplo de controller para chamar uma view desejada
    class RelatosController extends Controller{
        public function process($params){
            // Adicionar as variaveis title e description para serem mostradas na pagina
            $this->head['title'] = "Relatos";
            $this->head['description'] = "Pagina para relatos";
            // Chama o view para ser mostrado.
            $this->view = 'relatos';
        }
    }
?>