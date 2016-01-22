
<br><br><br><br>
<div class="container">

<?php
  $surveyTitle = $this->title;

  echo '<div class="row"><h2 class="qTitle">'.$surveyTitle.'</h2></div><hr><form role="form" action="../../answer/submit">';

  while($row = mysql_fetch_array($this->questions)){

    $questionText = $row["question"];
    $questionType = $row["type"];
    $qid = $row["id"];

    $questionTextHTML = '<div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control questionTextDisplay" style="background-color: white;" disabled="true" value="'.$questionText.'">
                          </div>
                         </div>';


    switch ($questionType) {
    case 'text':
        $questionTypeHTML = '<div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="answerText">
                                </div>
                              </div>';
        break;
    case 'yesNo':
        $questionTypeHTML = '<div class="col-md-6">
                                <label class="radio-inline">
                                  <input type="radio" name="yesNo'.$qid.'">Yes
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="yesNo'.$qid.'">No
                                </label>
                              </div>';
        break;
    case 'scale':
        $questionTypeHTML = '<div class="col-md-6">
                                <label class="radio-inline">
                                  <input type="radio" name="scale'.$qid.'">Strongly Agree
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="scale'.$qid.'">Agree
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="scale'.$qid.'">Neutral
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="scale'.$qid.'">Disagree
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="scale'.$qid.'">Strongly Disagree
                                </label>
                              </div>';
        break;
      }

      echo '<div class="row">'.$questionTextHTML.$questionTypeHTML.'</div>';
}
  echo '<button type="submit" class="btn btn-success">Submit</button></form>'
?>
</div>
