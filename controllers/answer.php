<?php

/**
 *
 */
class Answer extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function submit(){
    $this->view->render('answer/submit');
  }

}



 ?>
