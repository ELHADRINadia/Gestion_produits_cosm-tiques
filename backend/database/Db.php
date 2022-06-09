<?php

class DB{
    public function connect(){

        try{

            $conn=new PDO("mysql:host=localhost;dbname=fill_rouge","root","");
            return $conn;
           }
           catch (PDOException $e){
            echo $e->getMessage();
            }

    }
}
?>
