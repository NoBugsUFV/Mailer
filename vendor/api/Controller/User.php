<?php

namespace Api\Controller;

use Api\DB\Sql;
use Api\Model;

class User extends Model{

    public static function login($email, $password){
        $sql = new Sql();

        // Confere email
        $results = $sql->select("Fazer a query que busca o email passado como parâmetro e fazer o bind");
        if(count($results) === 0){
            throw new \Exception("Email ou senha inválidos");
        }
        $data = $results[0];
        //Confere senha
        if(password_verify($password, $data["password"]) === true){
            $user = new User();
            $user->setData($data);
            $_SESSION[User::SESSION] = $user->getValues();
            return $user;
        }else{
            throw new \Exception ("Email ou senha inválidos");
        }
    }

    public static function verifyLogin(){
        if(
            !isset($_SESSION[User::SESSION]) ||
            !$_SESSION[User::SESSION] ||
            !(int)$_SESSION[User::SESSION]["iduser"] > 0
        ){
            header('location: /admin/login');
            exit;
        }
    }

    public static function logout(){
        $_SESSION[User::SESSION] = NULL;
    }

    public static function listAll(){
        $sql = new Sql();
        return $sql->select("Query que seleciona todos os usuários");
    }

    public function save(){
        $sql = new Sql();
        //Continua ...
    }

}

