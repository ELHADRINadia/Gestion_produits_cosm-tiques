<?php

require_once "../backend/dataBase/Db.php";

class Category extends DB
{
    public function getAll()
    {

        $query = "SELECT * FROM `category`";
        $log = $this->connect()->prepare($query);
        if ($log->execute()) {

            $row = $log->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        } else {
            return false;
        }
    }
    /***************************************************************************************/
    public function getOneCategory($id)
    {
        $query = "SELECT * FROM `category` WHERE id = ? ";
        $log = $this->connect()->prepare($query);
        $log->bindParam(1, $id);
        if ($log->execute()) {

            $row = $log->fetch(PDO::FETCH_OBJ);
            return $row;
        } else {
            return false;
        }
    }

    /***************************************************************************************/
    // public function countCategory()
    // {
    //
    //     $query = "SELECT COUNT(*) AS total FROM `category`";
    //     $log = $this->connect()->prepare($query);
    //     if ($log->execute()) {
    //
    //         $row = $log->fetch(PDO::FETCH_ASSOC);
    //         return $row;
    //     } else {
    //         return false;
    //     }
    // }
    /***************************************************************************************/

    public function create($name)
    {

        $query = "INSERT INTO `category` (name) VALUES (?)";
        $log = $this->connect()->prepare($query);
        if ($log->execute([$name])) {

            return true;
        } else {
            return false;
        }
    }
    /***************************************************************************************/
    public function update($name, $id)
    {

        $query = "UPDATE `category` SET name=? WHERE id=? ";
        $log = $this->connect()->prepare($query);
        if ($log->execute([$name, $id])) {

            return true;
        } else {
            return false;
        }
        // return $log->execute();
    }

    /***************************************************************************************/

    public function delete($id)
    {
        $sql = "DELETE FROM `category` WHERE id = :id";

        $log = $this->connect()->prepare($sql);
        $log->bindParam(':id', $id);
        if ($log->execute()) {

            return true;
        } else {
            return false;
        }
    }
}
