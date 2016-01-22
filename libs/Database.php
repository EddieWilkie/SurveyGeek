<?php

  /* connect to the database */
/**
 *
 */
class Database
{

  function __construct()
  {
    # code...
  }

  public function connect(){
    mysql_connect("devweb2015.cis.strath.ac.uk", "kfb13150", "Eiv4tuaceegh");
    mysql_select_db("kfb13150") or die(mysql_error());
  }
}

?>
