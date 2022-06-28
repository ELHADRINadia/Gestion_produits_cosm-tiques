<?php

require_once "./dataBase/Db.php";

 class Panier extends DB{
    /***************************************************************************************/
    public function addToCart($data){

        $query = "INSERT INTO `panier` (`id_user`, `id_product`, `quantity`) VALUES (?, ?, ?)";
        $log = $this->Connect()->prepare($query);
        if($log->execute(array($data['id_user'],$data['id_product'],$data['quantity']))){
            return true;
        }else{
            return false;
        }

    }
    public function readCart($id_user)
    {

        $query = "SELECT c.id,p.name,p.price,p.quantity,p.image,p.details,c.quantity FROM product p,panier c where c.id_product=p.id and c.id_user=?";
        $log = $this->Connect()->prepare($query);
        $log->execute([$id_user]);
        $res = $log->fetchAll(PDO::FETCH_ASSOC);
        return $res;

    }
    public function getAll()
    {

        $query = "SELECT * FROM `panier`";
        $log = $this->Connect()->prepare($query);
        $res = $log->fetchAll(PDO::FETCH_ASSOC);
        return $res;

    }
    public function delete($id)
    {
        $query = "DELETE FROM `panier` WHERE `id` = ?";
        $log = $this->Connect()->prepare($query);
        $log->execute([$id]);
        if($log->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function calc($id_user)
    {
      $query = "SELECT * FROM panier WHERE id_user= :id_user";
      $res=$this->connect()->prepare($query);
      $res->bindParam(':id_user',$id_user);

      if($res->execute())
      {
        $temp=$res->fetchAll();
        return count($temp);
      }

    }

 }
