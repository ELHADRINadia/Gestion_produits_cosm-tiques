
<?php
require_once __DIR__ . "/../models/Profil.php";

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

class ProfilController
{
    public function getAllProfil()
    {

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $category = new Profil();
            $result = $category->displayUsers();
            if ($result) {

                echo json_encode($result);
            } else {
                echo json_encode(['message' => 'no profil exist']);
            }
        } else {
            echo json_encode(['message' => 'change the method']);
        }
    }
    public function delete()
       {
           if ($_SERVER["REQUEST_METHOD"] == "POST") {
               $category = new Profil();
               $id = $_POST['id'];
               if ($category->delete($id)) {
                   echo json_encode(['message' => 'user deleted']);
               } else {
                   echo json_encode(['message' => 'user not deleted']);
               }
           }
       }


}
