<?php
require_once __DIR__ . "/../Models/Category.php";

class CategoryController
{

    /***************************************************************************************/

    public function getAll()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $category = new Category();
            $result = $category->getAll();
            if ($result) {

                echo json_encode($result);
            } else {
                echo json_encode(['message' => 'no category exist']);
            }
        } else {
            echo json_encode(['message' => 'change the method']);
        }
    }
    /***************************************************************************************/
    public function getOneCategory($id)
    {

        $category = new Category();
        $result = $category->getOneCategory($id);
        if ($result) {

            echo json_encode($result);
        } else {
            echo json_encode(['message' => 'no category exist']);
        }
    }


    /***************************************************************************************/
    // public function countCategory()
    // {
    //     if ($_SERVER["REQUEST_METHOD"] == "GET") {
    //         $category = new Category();
    //         $result = $category->countCategory();
    //         if ($result) {
    //
    //             echo json_encode($result);
    //         } else {
    //             echo json_encode(['message' => 'no category exist']);
    //         }
    //     } else {
    //         echo json_encode(['message' => 'change the method']);
    //     }
    // }
    /***************************************************************************************/

    public function addcategory()
    {

        $category = new Category();
        $data = $_POST['name'];

        if ($category->create($data)) {
            echo json_encode(['message' => 'Category created']);
        } else {
            echo json_encode(['message' => 'Category not created']);
        }
    }

    /***************************************************************************************/
    public function update()
    {
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $category = new Category();
        $id = $_POST['id'];
        $name = $_POST["name"];


        if ($category->update($name, $id)) {
            echo json_encode(['message' => 'Category updated']);
        } else {
            echo json_encode(['message' => 'Category not updated']);
        }}
    }
    /***************************************************************************************/
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
