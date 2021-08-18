<?php
class Login_model extends CI_Model{

  function __construct()
  {
    parent::__construct();
  }

  public function cklogin($username, $password)
  {
    $query = $this 
    ->db
    ->query ("SELECT * FROM user where email = '$username' and password = PASSWORD('$password') ");

    $data = $query->num_rows();

    return $data;
  }
}