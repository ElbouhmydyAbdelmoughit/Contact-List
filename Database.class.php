<?php
class D_base{
    private static $user="root";
    private static $password="";
    private static $dbname="contacts";
    private static $host= "localhost";
    private static $connection= NULL;
        
    public static function Connect(){
        try {
            self::$connection = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname."",self::$user,self::$password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return self::$connection;
    }
    public static function deconnect(){
        self::$connection =NULL; 
    }
}