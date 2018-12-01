<?php
    // Exemplo de controller para chamar uma view desejada
    class CadastrarController extends Controller{
        public function process($params){
            $cadastro = new Cadastro();
            
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            
            $emailBool = $cadastro->buscaEmail($email);
            
            if($emailBool != 0){
                $this->redirect('cadastro?c=1');
            }else{
                $cadastro->cadastrarUsuario($nome,$telefone);
                $usuario = $cadastro->buscaUsuario($nome,$telefone);
                if( $usuario != 0 ){
                    $idUser =  $usuario['usr_id'];
                    $sucesso = $cadastro->cadastrarLogin($email,$senha,$idUser);
                    
                    if($sucesso != 0){
                        $this->redirect("acesso?email=$email&senha=$senha");
                    }
                }else{
                    $this-redirect('cadastro?c=2');
                }
            }
            
        }
    }
?>