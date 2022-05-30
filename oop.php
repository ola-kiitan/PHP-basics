<?php
class User {
 public function __construct($name, $age, $email){
$this->name = $name;
$this->age = $age;
$this->email = $email;
 }
 function set_name($name){
$this->name = $name;
 }
function get_name(){
 return $this->name;
}
}
$user1 = new User("ola", 12, "ola@g.com" );
$user2 = new User("ncklla", 32, "kncola@g.com");

$user1->set_name("sola");
echo $user1->name;

// Inheritance
class Employee extends User{
  public function __construct($name, $age, $email,$title){
   parent::__construct($name, $age, $email);
   $this->title = $title;
  }

  function get_title(){
   return $this->title;
  }
}

?>