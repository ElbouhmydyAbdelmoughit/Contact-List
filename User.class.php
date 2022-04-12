<?php
class User{
    public $username;
    private $password_user;
    
    public function segtPassword($password_user)
    {
        $this->password_user=$password_user;
    }
    public function getPassword(){
        return $this->password_user;
    }
}