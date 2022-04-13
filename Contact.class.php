<?php

use Contact as GlobalContact;

class Contact {
    public $name;
    public $emai;
    public $address;
    public $phone;

    public function select(){
        $db=Db::Connect();
        $statement = $db->query('SELECT * FROM contact');
        while ($row = $statement->fetchAll()) {
            var_dump($row);
        }
    }
}

