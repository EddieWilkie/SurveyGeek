<?php

/**
*
*/
class Questionaire extends Controller
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
    $this->view->render('questionaire/index');
  }

  public function show($arg = true){
    //$this->view->name = $model->getQuestionairesName();
    $this->view->questions = $this->model->getQuestions($arg);
    $this->view->title = $this->model->getQuestionairesName($arg);
    $this->view->render('questionaire/show');
  }

  public function newq(){
    $this->view->render('questionaire/newq');
  }

  public function newqForm(){

    $this->view->render('questionaire/newqForm');
  }

  public function create(){
    $this->model->createQuestionaire();
    $path = URL.'dashboard';
    header('location: '.$path);
  }

  public function destroy($arg = true){
    $this->model->destroy($arg);
    $path = URL.'dashboard';
    header('location: '.$path);
  }

}
?>
