<?php
require_once("Database.class.php");

class Contact{
    public $name;
    public $email;
    public $address;
    public $phone;


    public function Add($name,$email,$address,$phone,$idUser){
            $db= Database::Connect();    
            /*verify input if empty or not*/
            if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['address'])) {
                $db->query("INSERT INTO contact(name,email,address,phone,id_user) VALUES('$name','$email','$address','$phone','$idUser')");
            }
    }

    public function delete($id,$table){
        $db = Database::Connect();        
        $res = $db->query("DELETE FROM $table WHERE id='$id'");
        return $res;
    }

    public function select($id){
        $statement = Database::Connect()->query("SELECT * FROM contact WHERE id='$id'");
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function update($id,$name,$email,$address,$phone){
        $sql = Database::Connect()->query("UPDATE contact SET name = '$name', email = '$email', address = '$address', phone = '$phone' WHERE id = '$id'");
        return $sql; 
    }

    public  function logout(){
        session_start();
        session_unset();
        session_destroy();
        header('location:index.php');
    }
}

$contact = new Contact();
$contact->select(10);
?>