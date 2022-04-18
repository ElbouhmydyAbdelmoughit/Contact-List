<?php
class Database{
    private static $host="localhost";
    private static $dbname="contacts";
    private static $user="root";
    private static $password="";
    private static $connection= NULL;

    public static function Connect(){
        try {
            self::$connection = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname."",self::$user,self::$password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return self::$connection;
    }

    public static function query($requete){
        $db = self::Connect();
        $Query = $db->prepare($requete);
        $Query->execute();
        if (str_contains($requete,"SELECT")==true) {
            return $Query->fetch();
        }
    }

    public static function deconnect(){
        self::$connection =NULL; 
    }
}