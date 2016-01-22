<?php

/**
*
*/
class Dashboard_Model extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  function getQuestionairesForUser(){
    $userid = $_SESSION["user"];
    $query = "SELECT id, name FROM Survey WHERE userid = '$userid' ";
    $result = mysql_query($query) or die(mysql_error());
  //  echo '<br><br><br><br><br>';
/*
    while($row = mysql_fetch_array($result)){
      echo $row['id']. " - ". $row['name'];
      echo "<br/>";
    }
*/
    return $result;
  }

}

?>
