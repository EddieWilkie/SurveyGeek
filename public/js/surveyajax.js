/**
 * Created by mjan on 07/12/15.
 */
$(document).ready(function(){


    $("#addQuestion").click(function() {

        var qText = $("#questionText").val();
        var qTypeValue = $("#questionType").val();
        var qTypeHTML;
        var qTypeBox;

        var qTextHTML = '' +
            '<div class="col-md-8">' +
            '<input type="text" class="form-control questionText" placeholder="Enter question text">' +
            '</div>';


        var qOptions = ''+
        '<div class="col-md-3 form-group">' +
        '<select class="form-control questionType">'+
            '<option value="yesNo">Yes/No</option>'+
            '<option value="text">Text</option>'+
            '<option value="scale">Answer scale</option>'+
        '</select>' +
        '</div>';

        var qDelete = '' +
            '<input type="button" value="Delete"' +
            ' class="delQuestion btn btn-danger"/>' ;

        $("#questionsForm").append("<div class='questionBox row'>" + qTextHTML + qOptions + qDelete +"</div>");

        $(".delQuestion").click(function(){
            $(this).parent().remove();
        });

        $($("#questionText").val(""));
    });

    $("#saveSurvey").click(function(){
      $(".questionText").each(function(index){
          $(this).attr("name", "question"+index);
        });

      $(".questionType").each(function(index){
        $(this).attr("name", "type"+index);
      })
    });


});
