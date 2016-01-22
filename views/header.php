<!DOCTYPE html>
<html lang="en">

<head>
  <title>SurveyGeek</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <script src="<?php echo URL; ?>public/js/button.js"></script>

  <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.css">
  <script src="<?php echo URL; ?>public/js/jquery-1.11.3.min.js"></script>
  <script src="<?php echo URL; ?>public/js/bootstrap.js"></script>
  <script src="<?php echo URL; ?>public/js/ajax.js"></script>
  <script src="<?php echo URL; ?>public/js/login.js"></script>
  <link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css">
  <script src="<?php echo URL; ?>public/js/surveyajax.js"></script>

</head>

<body>
  <nav class="navbar navbar-turquoise navbar-fixed-top">
   <div class="container">
     <div class="navbar-header">
       <?php
        if(empty($_SESSION)){
        ?>
       <a class="navbar-brand" href="<?php echo URL; ?>"><span class="glyphicon glyphicon-list-alt"></span> SurveyGeek</a>
       <?php } else { ?>
         <a class="navbar-brand" href="<?php echo URL; ?>dashboard"><span class="glyphicon glyphicon-list-alt"></span> SurveyGeek</a>
      <?php } ?>
     </div>
     <div class="collapse navbar-collapse" id="myNavbar">
       <?php
        if(!empty($_SESSION)){
        ?>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="user/logout"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
        </ul>
       <?php } else { ?>
         <ul class="nav navbar-nav navbar-right">
           <li><a href="javaScript:"onclick="loadDoc('views/signup.txt', myFunction, 'demo')"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
           <li><a href="javaScript:"onclick="loadDoc('views/login.txt', myFunction,'demo') "><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
         </ul>
        <?php } ?>
     </div>
   </div>
 </nav>

  <div id="content">
