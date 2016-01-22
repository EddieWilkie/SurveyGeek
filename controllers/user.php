<?php

/**
*
*/
class User extends Controller
{

  function __construct()
  {
    parent::__construct();
  }
  /* add methods for CRUD and maybe login as well in here? */


  public function signup(){
    $this->model->signup();
    //$this->view->render('user/newu');
  }

  public function login(){

  }

  public function logout(){
    header('location: '.URL);
    $this->model->logout();

  }


}

?>
