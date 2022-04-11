<?php

class Connection{
    /*---Properties---*/
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "contacts";
    private $con;
    /*----Methods---*/
    public function __construct(){
        $this->con= mysqli_connect($this->servername,$this->username,$this->password,$this->db_name);
    }
}

class User extends Connection{
    public function signup($name,$password,$replay_password){
        $query= "SELECT * FROM user WHERE name=$name OR password=$password";
        $sql= mysqli_query($this->con,$query);
        if (mysqli_num_rows($sql) > 0) {
            die("Username OR Email has already token");
        }else{
            if($password == $replay_password){
                $requete = "INSERT INTO user VALUES(NULL,'$name','$password')";
                $result=mysqli_query($this->con,$requete);
                if($result){
                    header('location:contact.php');
                }
            }else{
                die("Password OR Password verify incorecte!");
            }
        }
    }
}
