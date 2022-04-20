<?php
require_once("Database.class.php");

class Contact{
    public $name;
    public $email;
    public $address;
    public $phone;


    public function Add($name,$email,$address,$phone){
            $db= Database::Connect();    
            /*verify input if empty or not*/
            if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['address'])) {
                $db->query("INSERT INTO contact VALUES(NULL,'$name','$email','$address','$phone')");
            }
    }

   

    public  function logout(){
        session_start();
        session_unset();
        session_destroy();
        header('location:index.php');
    }
}

$contact = new Contact();

?>