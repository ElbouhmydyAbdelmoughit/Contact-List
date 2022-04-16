<?php
require_once("Database.class.php");

class Contact {
    public $name;
    public $emai;
    public $address;
    public $phone;

    public function select(){
        $db=Db::Connect();
        $statement = $db->query('SELECT * FROM contact');
        while ($row = $statement->fetch()) {
            echo'<div class="d-flex">
                    <div>'.$row['name'].'</div>
                    <div>'.$row['email'].'</div>
                    <div>'.$row['address'].'</div>
                    <div>'.$row['phone'].'</div>
                </div>';
        }
    }
}

