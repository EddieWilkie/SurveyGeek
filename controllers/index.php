<?php

  /**
   *
   */
  class Index extends Controller
  {

    function __construct()
    {
      parent::__construct();
    }

    public function index(){
      session_start();
      $this->view->render('index/index');
    }
  }
?>
