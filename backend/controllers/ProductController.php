<?php
require_once dirname(__DIR__)."/models/product.php";

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

class ProductController
{
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
  }
