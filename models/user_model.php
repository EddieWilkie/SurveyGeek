<?php

  /**
  *
  */
  class User_Model extends Model
  {

    function __construct()
    {
      parent::__construct();
    }

    public function signup(){

      $login = $_POST['login'];
      $password = $_POST['password'];
      $hash = md5($password);
      $checkUser = mysql_query("SELECT * FROM users WHERE username = '$login'");
      $nRows = mysql_num_rows($checkUser);

      if($nRows > 0) {
        echo 'Username already exists';
      }
      else{
        $query = "INSERT INTO users (username, password) VALUES('$login', '$hash' )";
        $users = mysql_query($query) or die(mysql_error());

        $userID = "SELECT LAST_INSERT_ID()";
        Session::init();
        Session::set('loggedIn', true);
        Session::set('user', $userID);
        header('location: ./dashboard.php');
      }

    }

    public function logout(){
      session_start();
      Session::destroy();
    }

  }

?>
