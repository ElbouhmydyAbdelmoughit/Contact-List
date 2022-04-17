<?php
require_once('Database.class.php');

class User{
    public $username;
    public $password_user;
    /*---function insert new user----*/
    public function Insert($submit,$username,$password_user,$passwordverify){
        if(isset($submit)){
            if ($password_user == $passwordverify) {
                $db= Db::Connect();
                $requete=Db::query("INSERT INTO user VALUES(NULL,'$password_user','$username')");
                $statement=$db->query($requete);
                Db::deconnect();
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
    //         $db= Db::Connect();
    //         $statement=$db->query($requete);
    //         Db::deconnect();
    //     }
    }

    public function Checkinput($data){
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }
}

$insert = new User();
?>