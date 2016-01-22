function loadDoc(url, cfunc,id) {
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      cfunc(url,xhttp,id);
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}
function myFunction(url,xhttp,id) {
  document.getElementById(id).innerHTML = xhttp.responseText;
  if(url == "views/signup.txt"){
    $("#button").attr('value', 'SIGN UP');
    $("#email").attr('placeholder', 'Email');
    $("#form").attr('action', 'user/signup');
    //  $("#form").html('<form id="myform" action="login/dologin" method="post"><div class="form-group"><input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="login"></div><div class="form-group"><input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password"></div><div class="one-third column"><p><input id ="button" type="submit" value="SIGN UP" class="turquoise-flat-button"></div></form>');
  }else {
    $("#button").attr('value', 'LOG IN');
    $("#email").attr('placeholder', 'Email or Username');
    $("#form").attr('action', 'login/dologin');
  //  $("#form").html('<form id="myform" action="user/signup" method="post"><div class="form-group"><input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="login"></div><div class="form-group"><input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password"></div><div class="one-third column"><p><input id ="button" type="submit" value="SIGN UP" class="turquoise-flat-button"></div></form>');
  }
}
