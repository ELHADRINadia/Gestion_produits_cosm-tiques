<?php
require_once __DIR__ . "/../Models/Orders.php";

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
class OrderController
{

    /***************************************************************************************/

    public function read()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $category = new Orders();
            $result = $category->read();
            if ($result) {

                echo json_encode($result);
            } else {
                echo json_encode(['message' => 'no Orders exist']);
            }
        } else {
            echo json_encode(['message' => 'change the method']);
        }
    }
    /***************************************************************************************/

    public function delete()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $category = new Orders();
            $id = $_POST['id'];
            if ($category->delete($id)) {
                echo json_encode(['message' => 'order deleted']);
            } else {
                echo json_encode(['message' => 'order not deleted']);
            }
        }
    }
}
