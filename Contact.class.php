<?php
class Contact {
    public $name;
    public $email;
    public $address;
    public $phone;

    public function __construct($name,$email,$address,$phone)
    {
        $this->name=$name;
        $this->email=$email;
        $this->address=$address;
        $this->phone=$phone;
    }
}