<?php
require('Database.class.php');

class User{
    public $username;
    public $password_user;
    /*---function insert new user----*/
    public function Insert($submit,$username,$password_user,$passwordverify){
        if(isset($submit)){
            if ($password_user == $passwordverify) {
                $db= Database::Connect();
                $requete=Database::query("INSERT INTO user VALUES(NULL,'$password_user','$username')");
                $statement=$db->query($requete);
                Database::deconnect();
            // }else{
            //     echo ("
            //     Swal.fire({
            //         icon: 'error',
            //         title: 'Oops...',
            //         text: 'Password or Password verify incorrect',
            //       })
            //     ");
            //     die();
            // }

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
    //         $db= Database::Connect();
    //         $statement=$db->query($requete);
    //         Database::deconnect();
    //     }
    }
}

$insert = new User();
?>