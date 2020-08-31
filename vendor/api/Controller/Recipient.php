<?php

namespace Api\Controller;

use Api\DB\Sql;
use Api\Model;

class Recipient extends Model{

    public static function listAll(){
        $sql = new Sql();
        return $sql->select("SELECT * FROM recipients ORDER BY idRecipient");
    }

    public function getById($id){
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM recipients WHERE idRecipient = :id", [
            ':id'=>$id
        ]);
        $this->setData($results[0]);
    }

    public function save(){
        $sql = new Sql();

        $sql->query("INSERT INTO recipients (nameRecipient, emailRecipient, tagRecipient) values ( :nome, :email, :tag)", [
            ':nome'=>$this->getnameRecipient(),
            ':email'=> $this->getemailRecipient(),
            ':tag'=> $this->gettagRecipient()
        ]);
        $this->setData();
    }

    
}