<?php

class UserController
{


    public function auth()
    {
        $data["email"] = $_POST['email'];
        $data["password"] = $_POST['password'];

        // $usename =$_POST['username'];
        // $password = $_POST['password'];

        $result = User::login($data);
        if (!$result) {
            echo json_encode([
              "success"=>false,
              "message"=>'incorrect',
            ]);
            return;
        }
        // var_dump($result);
        if ($result->email == $_POST['email'] && $_POST['password'] == $result->password) {
            $_SESSION['logged'] = true;
            $_SESSION['email'] = $result->email;
            $_SESSION['role'] = $result->role;
            $_SESSION['id'] = $result->id;
            echo json_encode([
              "success"=>true,
              "user"=>$result,
            ]);
            return;
        }

    }

    public function getOneUser($id)
    {
        $data = array(
            'id' => $id
        );
        $user = User::getUser($data);
        return $user;
    }
    public function register()
    {
        var_dump($_POST);
            $data = array(
                'Last_name' =>   $_POST['lastname'],
                'First_name' =>  $_POST['firstname'],
                'phone' =>  $_POST['phone'],
                'email'    =>   $_POST['email'],
                'password' =>   $_POST['password']
            );
            $resultat = User::createUser($data);
            if ($resultat === 'good') {
                Session::set('success', 'User ajouter');
            } else {
                echo $resultat;
            }
    }


    public static function logout()
    {
        unset($_SESSION);
        session_destroy();
    }
}
