<?php
class document{
  private $firstname;
  private $lastname;
  private $email;
}

public function __construct($firstname, $lastname, $email){
  this->$firstname = $firstname;
  this->$lastname = $lastname;
  this->$email = $email;
}

public function get_first_name(){
  return $firstname
}

public function get_last_name(){
  return $lastname
}

public function get_email(){
  return $email
}

public function set_first_name($firstname){
  this->$firstname = $firstname
}

public function set_last_name($lastname){
  this->$lastname = $lastname;
}

public function set_email($email){
  this->$email = $email;
}

?>
