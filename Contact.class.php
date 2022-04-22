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

    public function update($id){

        $db = Database::Connect();
        /*----Get id Contact and select information of this contact---*/
        $id=$_GET['idupdate'];
        $select=$db->query("SELECT * FROM contact WHERE id='$id'");
        $row = $select->fetch(PDO::FETCH_ASSOC);
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $address=$row['address'];
        $phone=$row['phone'];
        /*---Upadate data of this contact----*/
        if(isset($_POST['submit_edit'])){
            $name = $_POST['name_edit'];
            $email = $_POST['email_edit'];
            $address = $_POST['address_edit'];
            $phone = $_POST['phone_edit'];
            $statement=$db->query("UPDATE contact set name='$name',email='$email',address='$address',phone='$phone' WHERE id='$id'");
            if($statement){
                header('location:contact.php');
                echo "<script>alert('updated successfully !')</script>";
            }else{die("This Contact not Updated");}
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