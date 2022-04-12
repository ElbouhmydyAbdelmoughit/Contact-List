<?php
require 'Database.class.php';

class User{
    public $username;
    public $password_user;

    public function insert(){
        // $username= $_POST['username'];
        // $password= $_POST['password'];
        // $passwordverify= $_POST['passwordverify'];
        // $submit= $_POST['submit'];

        if(isset($submit)){
            $requete='INSERT INTO user VALUES(NULL,"admin","admin")'; 
            $db= Db::Connect();
            $statement=$db->query($requete);
            Db::deconnect();
        }
    }
}

?>