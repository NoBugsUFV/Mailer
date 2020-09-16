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

        $path = $this->getPath();
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
            ':path'=> $this->getpathTemplate(),
            ':type'=> $this->gettypeTemplate(),
            ':id'=> $id
        ]);
        $this->setData();
    }

    public function delete(){
        $sql = new Sql();
        $dir_uploads = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "res" . DIRECTORY_SEPARATOR . "templates";
        
        \unlink($dir_uploads . DIRECTORY_SEPARATOR . $this->getnameTemplate() . ".html");

        $sql->query("DELETE FROM templates WHERE idTemplate = :id", [
            ":id"=>$this->getidTemplate()
        ]);
    }

    public function upload($file){
        if($file["error"]){
            throw new \Exception("Error: " . $file["error"]);
        }

        $dir_uploads = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "res" . DIRECTORY_SEPARATOR . "templates";

        $extension = \getExtension($file);

        if($extension == "html"){
            if(!\move_uploaded_file($file["tmp_name"], $dir_uploads . DIRECTORY_SEPARATOR . $this->getnameTemplate() . "." . $extension)){
                throw new \Exception("Não foi possível realizar o upload"); 
            }
            
            $this->setpathTemplate($dir_uploads . DIRECTORY_SEPARATOR . $this->getnameTemplate() . "." . $extension);
            $this->settypeTemplate($extension);
        }else{
            throw new \Exception("O tipo do arquivo precisa ser HTML");
        }       
    }

    private function getPath(){
        $dir_uploads = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "res" . DIRECTORY_SEPARATOR . "templates";
        if(\file_exists($dir_uploads . DIRECTORY_SEPARATOR . $this->getnameTemplate() . ".html")){
            return "/res/templates/" . $this->getnameTemplate() . ".html";
        }else{
            return "Caminho não encontrado";
        }
    }
}