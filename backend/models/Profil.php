<?php

require_once "../backend/database/Db.php";

class Profil extends DB
{

    public function displayUsers()
    {
          try{
          $stmt = $this->connect()->prepare("SELECT * FROM users WHERE role like 'user'");
          $stmt->execute();
          return $stmt->fetchAll();

      }
      catch (\PDOException$th) {
          throw $th;
      }

   }
    public function delete($id)
       {
           $sql = "DELETE FROM `users` WHERE id = ? ";

           $log = $this->connect()->prepare($sql);
           return $log->execute([$id]);
       }

}


?>
