<?php

require_once "../backend/database/Db.php";

class Product extends DB
{
  /*Select produit*/

    // public function getAll()
    // {
    //
    //         $query = "SELECT * FROM `product`";
    //         $log = $this->connect()->prepare($query);
    //         if( $log->execute()){
    //
    //             $row = $log->fetchAll(PDO::FETCH_ASSOC);
    //             return $row ;
    //         }else{
    //             return false ;
    //         }
    //
    //
    // }
    public function getAll()
   {
       try{
       $stmt = $this->connect()->prepare("SELECT * FROM product");
       $stmt->execute();
       return $stmt->fetchAll();

   }
   catch (\PDOException$th) {
       throw $th;
   }

}
/*Ajouter un produit*/

public function create($data)
 {
         $query = "INSERT INTO `product`( `name`, `price`, `quantity`, `image`, `details`,`category`) VALUES ('$data[name]','$data[price]','$data[quantity]','$data[image]','$data[details]','$data[category]')";

         $log = $this->connect()->prepare($query);
         if( $log->execute()){

             return true ;
         }else{
             return false ;
         }
     }
     /*update produit*/
     public function update($id,$name,$price,$quantity,$image,$details,$category)
   {
       $query = "UPDATE `product` SET `name`='$name',`price`='$price',`quantity`='$quantity',`image`='$image',`details`='$details',`category`='$category' WHERE id = $id";
       $log = $this->connect()->prepare($query);
       if( $log->execute()){

           return true ;
       }else{
           return false ;
       }
   }

 /*Supprimer produit*/
 public function delete($id)
    {
        $sql = "DELETE FROM `product` WHERE id = ? ";

        $log = $this->connect()->prepare($sql);
        return $log->execute([$id]);
    }


  public static function searchProducts($search){
            $sql = "SELECT * FROM product WHERE name LIKE '%$search%'";
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


            $count = count($result);
            if ($count < 1) {
                $response = ["status" => "failed", "message" => "Oops! No results for '$search'."];
            } else {
               $response = ["status" => "success", "products" => $result, "count" => $count];
            }
            return $response;
        }


        // ******************************
        public function get_products_by_category(){
        $category = $_GET['category'];

        $sql = mysqli_query($conn,"SELECT * FROM products WHERE category = '$category'");
        $result = mysqli_fetch_all($sql,MYSQLI_ASSOC);

        $count = count($result);
        if ($count < 1) {
            $response = ["status" => "failed", "message" => "No products with category '$category' were found."];
        } else {
           $response = ["status" => "success", "products" => $result, "count" => $count];
        }
        return $response;
    }
   }
?>
