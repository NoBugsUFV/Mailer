<?php

namespace Api\Controller;

use Api\DB\Sql;
use Api\Model;

class Template extends Model{
    
    public static function listAll(){
        $sql = new Sql();
        return $sql->select("SELECT * FROM templates ORDER BY idTemplate");
    }

    public static function checkList($templates){
		foreach ($templates as &$template) {	
			$t = new Template();
			$t->setData($template);
			$template = $t->getValues();
		}
		return $templates;
    }
    
    public function getById($id){
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM templates WHERE idTemplate = :id", [
            ':id'=>$id
        ]);
        $this->setData($results[0]);
    }

    public function save(){
        $sql = new Sql();

        $path = "teste/teste";
        $type = "html";

        $sql->query("INSERT INTO templates (nameTemplate, pathTemplate, typeTemplate) values ( :nome, :caminho, :tipo)", [
            ':nome'=>$this->getnameTemplate(),
            ':caminho'=> $path,
            ':tipo'=> $type
        ]); 
        $this->setData();
    }

    public function update($id){
        $sql = new Sql();

        $sql->query("UPDATE templates SET nameTemplate = :name, pathTemplate =  :path, typeTemplate = :type WHERE idRecipient = :id", [
            ':name'=>$this->getnameTemplate(),
            ':path'=> $this->getemailTemplate(),
            ':type'=> $this->gettagTemplate(),
            ':id'=> $id
        ]);
        $this->setData();
    }

    public function delete(){
        $sql = new Sql();
        $sql->query("DELETE FROM templates WHERE idTemplate = :id", [
            ":id"=>$this->getidTemplate()
        ]);
    }
}