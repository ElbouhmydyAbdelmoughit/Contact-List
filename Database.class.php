<?php
class Db{
    private $user="root";
    private $password="";
    private $connection= NULL;

    public static function Connect(){
        try {
            self::$connection = new PDO("mysql:host=localhost;dbname=contacts",self::$user,self::$password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return self::$connection;
    }

    public static function query($requete){
        $db = self::Connect();
        $sql=$db->query($requete);
        if (0) {
            
        }
    }

    public static function deconnect(){
        self::$connection =NULL; 
    }
}