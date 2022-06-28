<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
require_once dirname(__DIR__)."/models/product.php";
class ProductController
{
  public function getOneProduct($id)
   {
       $data = array(
           'id' => $id
       );
       $product = Product::getProduct($data);
         echo json_encode($product);
   }
    public function getAll()
    {

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $category = new Product();
            $result = $category->getAll();
            if ($result) {

                echo json_encode($result);
            } else {
                echo json_encode(['message' => 'no product exist']);
            }
        } else {
            echo json_encode(['message' => 'change the method']);
        }
    }

    /***************************************************************************************/

    public function addproduct()
    {
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $category = new Product();
        $image = $_FILES['image'];
        $extention = pathinfo($image["name"], PATHINFO_EXTENSION);
        $new_name = uniqid('', true) . '.' . $extention;
        $target = "../backend/images/" . $new_name;
        move_uploaded_file($image['tmp_name'], $target);

        $data = array(
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'quantity' => $_POST['quantity'],
            'image' => $new_name,
            'category' => $_POST['category'],
            'details' => $_POST['details'],

        );

        if ($category->create($data)) {
            echo json_encode(['message' => 'Create product succeful']);
        } else {
            echo json_encode(['message' => 'Product not created']);
        }
    }
  }

  // **********************update product*******************
  public function update()
    {

        $product = new Product();
        $new_name = null;
        if(array_key_exists('image', $_FILES)){
        $image = $_FILES['image'];
        $extention = pathinfo($image["name"], PATHINFO_EXTENSION);
        $new_name = uniqid('', true) . '.' . $extention;
        $target = "../Backend/images/" . $new_name;
        move_uploaded_file($image['tmp_name'], $target);
}
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $image = $new_name;
        $details = $_POST['details'];
        $category = $_POST['category'];
        $id = $_POST['id'];

        if ($product->update($id,$name,$price,$quantity,$image,$details,$category)) {
            echo json_encode(['message' => 'Product updated']);
        } else {
            echo json_encode(['message' => 'Product not updated']);
        }
    }
// **********************delete product**********************
public function delete()
   {
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $category = new Product();
           $id = $_POST['id'];
           if ($category->delete($id)) {
               echo json_encode(['message' => 'Product deleted']);
           } else {
               echo json_encode(['message' => 'Product not deleted']);
           }
       }
   }

   public function search(){
              $search = $_POST['search'];
          $stmt =Product::searchProducts($search);
          echo json_encode($stmt);
      }
         public function getProduct_by_category()
         {

             if ($_SERVER["REQUEST_METHOD"] == "GET") {
                 $category = new Product();
                 $result = $category->getProductbycategory();
                 if ($result){

                     echo json_encode($result);
                 } else {
                     echo json_encode(['message' => 'no Product exist']);
                 }
             } else {
                 echo json_encode(['message' => 'change the method']);
             }
         }
  }
