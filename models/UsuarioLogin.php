<?php
class UsuarioLogin{

    public function login($email, $senha){
        $result = Db::queryOne("SELECT log_usr_id, log_email, log_senha FROM logins WHERE log_email = ?", array($email));
        if($result != null){
            if($result['log_senha'] == $senha){
                $_SESSION['id_user'] = $result['log_usr_id'];
                $_SESSION['email'] = $result['log_email'];
                $_SESSION['senha'] = $result['log_senha'];
                return true;
            }else{
                return false;
            }
        }else{
            $this->redirect("login?e=1");
        }
    }

    public function sair(){
        session_start();
        session_destroy();
    }

    public function redirect($url){
        $url = $this->baseUrl . $url;
        header("Location: /$url");
        header("Connection: close");
        exit;
    }
}
?>