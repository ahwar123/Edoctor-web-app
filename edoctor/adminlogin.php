<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<title>Login</title>

<script type="text/javascript">

function showHint(str) {
    if (str.length == 0) {
        document.getElementById("datalist").innerHTML = "";
        return;

    } 
    else
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data").innerHTML = this.responseText ;
            }
        };
        xmlhttp.open("GET", "phpFile.php?q=" + str, true);
        xmlhttp.send();
    }
}
  function valid_Admin_Username(){
    var regName = /^[A-Za-z0-9]{3,20}$/;
    var x=document.getElementById("User").value;

    if(!regName.test(x))
    {
      alert("Enter Valid UserName");
      document.getElementById("User").focus();
    }
  }

function valid_Admin_Pass(){
  var regName = /^[A-Za-z0-9]{3,20}$/;
  var x=document.getElementById("Pass").value;

  if(!regName.test(x))
  {
    alert("Enter password");
    document.getElementById("Pass").focus();
  }

}

</script>

<style type="text/css">
  
  button :hover
    {
      transform: translateY(1px);
      cursor: pointer;
    }
  #login
  {
    padding: 5px;
    margin: auto;
    text-align: center;
  }

  #user,#Pass,#loginSubmit
  {
    border-radius: 5px;
    padding: 10px;
    border-style: none;
    margin: auto;

  }
  #flog
  {
    text-align: center;
    margin-left:30%;
    float: left;
    margin: auto;
    box-shadow:10px 6px 20px grey;
  }
</style>
<body style="background-image:url(images/login_back.jpg);background-repeat: no-repeat;background-size: cover;">


<div id="login">

<fieldset id="flog">
<legend><h1><center>Login</center></h3></legend>
<form method="POST" action="adminCheck.php">
<table>

<tr><td>  <img src="images/login.png" height="35%" width="50%" ></td></tr>
<tr><td>  <input type="text" list="data" onkeyup="showHint(this.value)" autocomplete="on" id="User" name="User" placeholder="Enter Username" style="padding: 10px" onblur="valid_Admin_Username()"></td></tr>

<datalist id="data">

</datalist>
<tr><td>  <input type="password" id="Pass" name="Pass" placeholder="Enter Password" style="padding: 10px" onblur="valid_Admin_Pass()"></td></tr>

<tr><td> <button type="Submit" id="loginSubmit"> LOG IN</button></td></tr>
</table>
</form>
</fieldset>
        
      
</div>



</body>
</html>