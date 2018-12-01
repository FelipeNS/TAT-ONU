<?php
    // Exemplo de controller para chamar uma view desejada
    class AdicionarController extends Controller{
        public function process($params){
            // Adicionar as variaveis title e description para serem mostradas na pagina
            $this->head['title'] = "Blue Inovations - ONU";
            $this->head['description'] = "Pagina inicial";
            // Chama o view para ser mostrado.
            
            //if($_SESSION['id_user']){
                $this->view = 'adicionar';
            /*}else{
                $this->redirect('home');
            }*/
            
            
        }
    }
?>
