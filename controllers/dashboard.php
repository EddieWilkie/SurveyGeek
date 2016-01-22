<?php

  /**
   *
   */
  class Dashboard extends Controller
  {

    function __construct()
    {
      parent::__construct();
      
      Session::init();
      $logged = Session::get('loggedIn');
      if($logged == false){
        // redirect to login page
        Session::destroy();
        header('location: ./login');
        exit;
      }

    }

    public function index(){
      $this->view->surveys = $this->model->getQuestionairesForUser();
      $this->view->render('dashboard/index');

      /*
      while($row = mysql_fetch_array($result)){
      	echo $row['name']. " - ". $row['age'];
      	echo "<br/>";
      }
      */
    }
  }
?>
