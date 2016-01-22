<?php

/**
*
*/
class Login_Model extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function dologin(){

    $login = $_POST['login'];
    $password = $_POST['password'];
    $hash = md5($password);
    // QUERY DB FOR USER
    // error, users doesnt exist?
    $query = "SELECT * FROM users WHERE username = '$login' and password = '$hash'; ";

    $users = mysql_query($query) or die(mysql_error());
    $count = mysql_num_rows($users);
    if($count > 0){
      echo 'true';
      $user = mysql_fetch_array($users);
      Session::init();
      Session::set('loggedIn', true);
      Session::set('user', $user['id']);
      //return true;
      return true;

      header('location: ../dashboard');
    } else {
      echo 'false';
      return false;
    }

  }
}

?>
