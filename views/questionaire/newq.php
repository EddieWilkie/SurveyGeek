<br><br>
<div class="container">
    <div class="row"><h2 class="qTitle">Question Creator</h2></div>
    <hr>

    <div id="questions">
        <form action="../questionaire/create" method="post" class="form"
              role="form" id="questionsForm" >
            <div class="row" style="margin-bottom: 1em;">
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Enter Survey Title here"
                       name='surveyTitle'/>
              </div>
              <div  class="col-md-2">
                <input type="button" class="btn btn-default btn-block" value="Add Question"
                id='addQuestion' />
              </div>
              <div  class="col-md-2">
              <input type="submit" class="btn btn-success btn-block" value ='Save Survey'
                     id='saveSurvey'/>
              </div>
            </div>
        </form>
    </div>
    <hr>

</div>
