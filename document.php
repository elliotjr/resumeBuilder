<?php
class document{
  public $firstname;
  public $lastname;
  public $email;

  function __construct($firstname, $lastname, $email){
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->email = $email;
  }

  function get_first_name(){
    return $this->firstname;
  }

  function get_last_name(){
    return $this->lastname;
  }

  function get_email(){
    return $this->email;
  }

  function set_first_name($firstname){
    $this->firstname = $firstname;
  }

  function set_last_name($lastname){
    $this->lastname = $lastname;
  }

  function set_email($email){
    $this->email = $email;
  }
}

?>
