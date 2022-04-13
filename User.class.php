<?php
require 'Database.class.php';

class User{
    public $username;
    public $password_user;
    /*---function insert new user----*/
    public function Insert($submit,$username,$password_user,$passwordverify){
        if(isset($submit)){
            $requete="INSERT INTO user VALUES(NULL,'$password_user','$username')";
            $db= Db::Connect();
            $statement=$db->query($requete);
            Db::deconnect();
        }
    }
    /*---function delete user----*/
    // public function delete($id){

    // }
    /*---function update user----*/
    // public function update(){
    //     if (isset($_POST['id'])) {
    //         $id= $_POST['id'];
    //         $requete="ALTER TABLE user DROP COLUMN WHERE id = .'$id'";
    //         $db= Db::Connect();
    //         $statement=$db->query($requete);
    //         Db::deconnect();
    //     }
    // }
}

$insert = new User();
?>