<?php
require_once('Database.class.php');

class User{

    public $username;
    public $password_user;

    /*---function insert new user----*/
    public function Insert($username,$password_user,$passwordverify){
        
        $db= Database::Connect();
        $result=$db->query("SELECT * FROM user WHERE  username='$username'");
        if ($result) {
            echo ("This account allready existe");
        }else{
            if ($password_user == $passwordverify) {
                /*verify input if empty or not*/
                if (!empty($username) && !empty($password_user)) {
                    $requete="INSERT INTO user VALUES(NULL,'$password_user','$username',sysdate())";
                    $db->query($requete);
                }
            }else echo("password error");
        }
    }

    public function info_user($id){
        $db=Database::Connect()->query("SELECT * FROM user WHERE id='$id'");
    }
}

$insert = new User();
?>