<?php
class Db{
    private $user="root";
    private $password="";
    public $conn;
    
    public function __construct(){
        $conn = new PDO("host:localhost;dbname=contacts",$this->user,$this->password);
        if ($conn) {
            return $conn;
        }else die(mysqli_error($conn));
    }
}