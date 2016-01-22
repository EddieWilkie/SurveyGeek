$(document).ready(function(){
   var counter = 1;
   var multCount = 0;

   $("#addQuestion").click(function() {
   if(counter>50){
           alert("Maximum of 50 questions allowed");
           return false;
   }

   var newQ = $(document.createElement('div'))
        .attr("id", 'question' + counter);

   newQ.after().html('<label>Question #'+ counter + ' : </label>' +
         '<input type="text" name="question' + counter +
         '" id="question' + counter + '" size="35" >');
   newQ.appendTo("#questions");

   var newT = $(document.createElement('select'))
        .attr("id", 'type' + counter);

    newT.after().html(
    '<option value="yesno">Yes/No</option>'+
    '<option value="mult">Multiple Choice</option>'+
    '<option value="scale">Scale</option>'+
    '<option value="open">Open Answer</option>')

        newT.appendTo("#questions");

  $("select#type" +counter).change(function(){
     var typeV =  $("select#type" +counter+" option:selected").attr('id');
    // if (typeV == "-1"){
     for (var i = 0; i < 4; i++){
       multCount++;
     var newMult = $(document.createElement('div'))
          .attr("id", 'multAns' + multCount);
          newMult.after().html('<label>'+i+'</label>' +
                '<input type="text" name="multA" id="A" size="35">');
          newMult.appendTo("#questions");
        }

        var hui = $(document.createElement('div'))
             .attr("id", 'hui' + counter);

        hui.after().html('<label>'+ typeV + ' : </label>' +
              '<input type="text" name="question' + counter +
              '" id="question' + counter + '" size="35" >');
        hui.appendTo("#questions");

    //  }

    });

counter++;

    });

    $("#removeQuestion").click(function () {
   if(counter==1){
         alert("You have no entries to delete!");
         return false;
      }
   counter--;
       $("#question" + counter).remove();
       $("#type" + counter).remove();
        for (var i = 0; i < 4; i++){
          $("#multAns"+multCount).remove();
          multCount--;

        }
    });


 });
