<?php
class AcessoController extends Controller{
    public function process($params){

        if( isset( $_POST['email'] ) && isset( $_POST['senha'] ) ){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
        }elseif( isset( $_SESSION['email'] ) && isset( $_SESSION['senha'] ) ){
            $email = $_SESSION['email'];
            $senha = $_SESSION['senha'];
        }elseif( isset( $_GET['email'] ) && isset( $_GET['senha'] ) ){
            $email = $_GET['email'];
            $senha = $_GET['senha'];
        }

        if( isset( $email ) ){
            $login = new UsuarioLogin();
            if( isset( $email ) && isset( $senha ) ){
                $result = $login->login($email, $senha);
                if($result == true){
                    $this->redirect("home");
                }else{
                    $this->redirect("login?e=2");
                }
            }else{
                $this->redirect("login?c=2");
            }
        }else{
            $this->redirect('login?c=1');
        }
    }
}
?>