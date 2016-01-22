<?php

class Questionaire_Model extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function createQuestionaire(){
    session_start();
    $userid = $_SESSION["user"];
    $name = $_POST["surveyTitle"];
    echo $name;

    $query = "INSERT INTO Survey (userid, name) VALUES ('$userid', '$name')";
    $result = mysql_query($query) or die(mysql_error());
    $id = mysql_insert_id();

    for($i=0;$i<(sizeof($_POST)-1)/2;$i++){
      $field = "question".$i;
      $question = $_POST["$field"];
      $field = "type".$i;
      $type = $_POST["$field"];
      $query = "INSERT INTO Question (surveyid, question, type) VALUES('$id', '$question', '$type')";
      $result = mysql_query($query) or die(mysql_error());
    }

  }

  public function getQuestionairesName($sid){
    $query = "SELECT name FROM Survey WHERE id = '$sid'";
    $result = mysql_query($query) or die(mysql_error());
    $name = mysql_fetch_array($result);
    return $name['name'];
  }

  public function getQuestions($sid){
    $query = "SELECT * FROM Question WHERE surveyid = '$sid'";
    $result = mysql_query($query) or die(mysql_error());

    return $result;
  }

  public function destroy($sid){
    $query = "DELETE FROM Question WHERE surveyid= '$sid'";
    $result = mysql_query($query) or die(mysql_error());
    $query= "DELETE FROM Survey WHERE id = '$sid'";
    $result = mysql_query($query) or die(mysql_error());
  }
}

?>
