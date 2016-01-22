
<?php require 'partials/jumbotron.php'; ?>
 <!-- Using different containers to divide the site into sections-->
 <div class="container-fluid text-center">
   <div class="row pull-center">
     <div class="col-sm-2">

     </div>
     <div class="col-md-4">
       <img src="<?php echo URL; ?>public/images/Flat.jpg" height="400" width="400">
     </div>
<div class="err" id="add_err"></div>
     <div class="col-md-4">
       <div id="demo"><h3>Sign up and start making surveys in seconds.</h3>
       </div>

  <fieldset>
        <form id="form" method="post">
          <div id="add_err">
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name='login'>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name='password'>
          </div>
          <div class="one-third column">
            <p><input id ="button" type="submit" value="SIGN UP" class="turquoise-flat-button">
          </div>
        </form>
        </fieldset>
      </div>

    </div>
 <!--This portion of the site show's examples of what we offer-->
 <?php require 'partials/services.php'; ?>
</div>
