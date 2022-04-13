<?php
class Contact{
    /*properties*/
   public $name;
   private $email;
   private $address;
   private $phone;
   /*Methods*/

   public function __construct($name,$email,$address,$phone){
       $this->name = $name; 
       $this->email = $email; 
       $this->address = $address; 
       $this->phone = $phone; 
   }
   public function setName($name){
       $this->name=$name;
   }
   public function getName($name){
    return $name;
}
}