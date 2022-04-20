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
        return new Database();
    }
    private function __construct(){

    }

    public function query($requete){
        $Query = self::$connection->prepare($requete);
        $Query->execute();
        return $Query;
    }

    /*virefy input */
    public static function Checkinput($data){
    $data= trim($data);
    $data= stripslashes($data);
    $data= htmlspecialchars($data);
    return $data;
}

    public  function __destruct()
    {
        self::$connection =NULL; 
   
    }
}