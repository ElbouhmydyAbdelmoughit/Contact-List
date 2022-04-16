<?php
class Db{
    private $user="root";
    private $password="";
    private $dbname="contacts";
    private $host= "localhost";
    private $connection= NULL;
        
    public static function Connect(){
        try {
            self::$connection = new PDO('mysql:host=".self::$host.";dbname=".self::$dbname"',self::$user,self::$password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return self::$connection;
    }

    public static function query($requete){
         $db = self::Connect();
        $sql=$db->query($requete);
    }

    public static function deconnect(){
        self::$connection =NULL; 
    }
}