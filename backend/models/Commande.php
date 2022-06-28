<?php

require_once "../backend/dataBase/DB.php";

class Commande extends DB
{
    public function read()
    {

            $query = "SELECT * FROM `commande`";
            $log = $this->connect()->prepare($query);
           $log->execute();
           if( $log->rowCount() > 0){

                $row = $log->fetchAll(PDO::FETCH_ASSOC);
                return $row ;
            }else{
                return false ;
            }
            }



            /***************************************************************************************/

    public function delete($id)
    {
        $sql = "DELETE FROM `commande` WHERE id = ? ";

        $log = $this->connect()->prepare($sql);
        return $log->execute([$id]);
    }












}







?>
