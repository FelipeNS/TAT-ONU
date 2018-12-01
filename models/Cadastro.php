<?php

class Cadastro{
    
    public function cadastrarUsuario( $nome, $telefone ){
        $result = Db::queryOne( "INSERT INTO usuarios (usr_nome,usr_telefone) VALUES (?,?)", array($nome,$telefone) );
        
        return result;
    }
    
    
    public function cadastrarLogin( $email, $senha, $idUsuario ){
        $result = Db::queryCount( "INSERT INTO logins (log_email,log_senha,log_usr_id) VALUES (?,?,?)", array($email, $senha, $idUsuario) );
        
        return $result;
    }
    
    public function buscaUsuario( $nome, $telefone ){
        $result = Db::queryOne( "SELECT * FROM usuarios WHERE usr_nome=? AND usr_telefone=?", array($nome,$telefone) );
        
        if( $result != null ){
            return $result;
        }else{
            return 0;
        }   
    }
    
    public function buscaEmail( $email ){
        $result = Db::queryOne( "SELECT * FROM logins WHERE log_email=?", array($email) );
        
        if( $result != null ){
            return $result;
        }else{
            return 0;
        }
    }
}
?>