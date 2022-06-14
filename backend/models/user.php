<?php

class User
{

    public static function createUser($data)
    {
        $statement = DB::connect()->prepare('INSERT INTO users (role,Last_name,First_name,phone,email,password) VALUES ("user", :Last_name,:First_name,:phone,:email,:password)');
        $statement->bindParam(':Last_name', $data['Last_name']);
        $statement->bindParam(':First_name', $data['First_name']);
        $statement->bindParam(':email', $data['email']);
        $statement->bindParam(':phone', $data['phone']);
        $statement->bindParam(':password', $data['password']);

        if ($statement->execute()) {
            return 'good';
        } else {
            return 'error';
        }

        $statement = null;
    }

    public static function login($data)
    {
        try {
            $query = "SELECT * FROM users WHERE email = :email AND password = :password";
            $statement = DB::connect()->prepare($query);
            $statement->bindParam(':password', $data['password']);
            $statement->bindParam(':email', $data['email']);
            $statement->execute();
            // array(":username" => $username)
            $user = $statement->fetch(PDO::FETCH_OBJ);
            return $user;

        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }

    }

    public static function getUser($data)
    {
        $id = $data['id'];
        try {
            $query = 'SELECT * FROM user WHERE id=:id';
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $vol = $statement->fetch(PDO::FETCH_OBJ);
            // var_dump($vol);
            return $vol;
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
        //catch return le type d error
    }

}
