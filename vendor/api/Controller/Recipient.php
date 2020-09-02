<?php

namespace Api\Controller;

use Api\DB\Sql;
use Api\Model;

class Recipient extends Model{

    public static function listAll(){
        $sql = new Sql();
        return $sql->select("SELECT * FROM recipients ORDER BY idRecipient");
    }

    public static function checkList($recipients){
		foreach ($recipients as &$recipient) {	
			$r = new Recipient();
			$r->setData($recipient);
			$recipient = $r->getValues();
		}
		return $recipients;
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

    public function update($id){
        $sql = new Sql();

        $sql->query("UPDATE recipients SET nameRecipient = :nome, emailRecipient =  :email, tagRecipient = :tag WHERE idRecipient = :id", [
            ':nome'=>$this->getnameRecipient(),
            ':email'=> $this->getemailRecipient(),
            ':tag'=> $this->gettagRecipient(),
            ':id'=> $id
        ]);
        $this->setData();
    }

    public function delete(){
        $sql = new Sql();
        $sql->query("DELETE FROM recipients WHERE idRecipient = :id", [
            ":id"=>$this->getidRecipient()
        ]);
    }
}