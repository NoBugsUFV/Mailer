<?php
    namespace NBMailer\DB;

    class Sql{
        const HOST = '';
        const USER = '';
        const PASSWORD = '';
        const DBNAME =  '';

        private $conn;

        public function Sql(){
            $this->conn = new \PDO(
                "mysql:dbname=".Sql::DBNAME.";host=".Sql::HOSTNAME, 
                Sql::USERNAME,
                Sql::PASSWORD
            );
        }

        private function bindParams($statement, $key, $value){
            $statement->bindParam($key, $value);
        }

        private function setParams($statement, $parameters = []){
            foreach($parameters as $key => $value){
                $this->bindParam($statement, $key, $value);
            }
        }

        public function query($rawQuery, $params=[]){
            $statement = $this->conn->prepare($rawQuery);
            $this->setParams($statement, $params);
            $statement->execute();

        }


    }
?>
