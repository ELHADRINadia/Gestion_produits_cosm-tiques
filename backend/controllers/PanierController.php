<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');


require_once "./models/Panier.php";

class PanierController
{

    public function addToCart()
    {
        $user = new Panier();

        $data =[
            "id_user" => $_POST["id_user"],
            "id_product" => $_POST["id_product"],
            "quantity" => 1
        ];
        if ($user->addToCart($data)) {
          echo json_encode(['message' => 'Product added to cart successfully']);
         }else{
             echo json_encode(['error' => 'Product failed to add to cart']);
         }


        // if($user->addToCart($data)){
        //     echo json_encode(['success' => 'Product added to cart successfully']);
        // }else{
        //     echo json_encode(['error' => 'Product failed to add to cart']);
        // }
    }
    public function read()
    {
      // header('Content-Type: application/json');
      $id = $_POST['id'];
        $user = new panier();
        $res = $user->readCart($id);
        echo json_encode($res);
    }

    public function getAll()
    {
        $cartItems = new panier();
        $cartItems = $cartItems->getAll();
        echo json_encode($cartItems);
    }

    public function delete(){
        $id = $_POST['id'];
        $cart = new panier();
        if($cart->delete($id)){
            echo json_encode(['success' => 'Product deleted successfully']);
        }else{
            echo json_encode(['error' => 'Product failed to delete']);
        }
    }
    public function coun()
    {
      $id_user = $_POST['id'];
      $pn=new Panier();
      $res=$pn->calc($id_user);
      if($res)
      {
        echo json_encode($res);
      }
    }

    public function deleteCategory($id)
    {
        // $id = $_POST['id'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $category = new Category();
            if ($category->delete($id)) {
                echo json_encode(['message' => 'Category deleted']);
            } else {
                echo json_encode(['message' => 'Category not deleted']);
            }
        }
    }

}
