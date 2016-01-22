


<div class="container-fluid">
  <div class="row">

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h2 class="qTitle">User dashboard</h1>
        <hr>

      <div class="row placeholders" id="surveyList">
        <?php
          $url = URL."public/images/forms-icon.png";

        while($row = mysql_fetch_array($this->surveys)){
          $title = $row["name"];
          $id = $row["id"];
        echo  '<div class="survey col-xs-6 col-sm-2 placeholder">
                <h4 class="text-center">'.$title.'</h4>
                <a href="questionaire/show/'.$id.'"><img src="'.$url.'" width="250" height="250" class="img-responsive center-block" alt="Generic placeholder thumbnail"></a>
                  <div class="btn-group btn-group-xs" role="group" aria-label="...">
                    <button type="button" class="btn btn-default">Results</button>
                    <form action="questionaire/destroy/'.$id.'" id="deletebutton">
                      <button type="submit" class="btn btn-danger" id="deletebutton">Delete</button>
                    </form>
                  </div>
                </div>';

        }
        ?>

        <?php
          $count = mysql_num_rows($this->surveys);
          if($count<3){
        ?>
        <div class="col-xs-6 col-sm-2 placeholder"  id="createNew">

          <form action="questionaire/newq">
            <button type="submit" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-plus-sign addNew" aria-hidden="true"></span>
            </button>
          </form>
        <?php } ?>

        </div>
      </div>
    </div>

  </div>
</div>
