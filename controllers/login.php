<?php

/**
*
*/
class Login extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function index(){
    $this->view->render('login/index');
  }

  public function dologin(){

    if($this->model->dologin()){
    //$this->model->dologin();
    $this->view->render('dashboard/index');
  }
}
}

?>
