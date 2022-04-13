<?php
require 'Database.class.php';

class User{
    public $username;
    public $password_user;

    public function Insert($submit,$username,$password_user,$passwordverify){
        if(isset($submit)){
            $requete="INSERT INTO user VALUES(NULL,'$password_user','$username')";
            $db= Db::Connect();
            $statement=$db->query($requete);
            Db::deconnect();
        }
    }
}

$insert = new User();
?>