<?php
class User{
    public $username;
    private $password_user;
    
    public function __construct($username,$password_user)
    {
        $this->username=$username;
        $this->password_user=$password_user;
    }
}