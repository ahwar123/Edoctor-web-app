
<!DOCTYPE html>
<html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript">


$(document).ready(function(){
  $("#signinbtn").click(function(){
  $("#signIn").hide();
  $("#signUp").hide();
  $("#signinLogin").show();
  });

  $("#signupbtn").click(function(){
  $("#signIn").hide();
  $("#signUp").hide();
  $("#signupLogin").show();
  });

  $("#signupback").click(function(){
  $("#signIn").show();
  $("#signUp").show();
  $("#signupLogin").hide();
  });


  $("#signinback").click(function(){
  $("#signIn").show();
  $("#signUp").show();
  $("#signinLogin").hide();
  });

});

function valid_Cus_Username(){
var regName = /^[A-Za-z0-9]{3,20}$/;
  var x=document.getElementById("uname").value;

  if(!regName.test(x))
  {
    alert("Enter Valid UserName");
    document.getElementById("uname").focus();
  }
}

function valid_Cus_Pass(){
var regName = /^[A-Za-z0-9]{3,20}$/;
var x=document.getElementById("CPass").value;

  if(!regName.test(x))
  {
    alert("Enter password");
    document.getElementById("CPass").focus();
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
  var x=document.getElementById("pass").value;

  if(!regName.test(x))
  {
    alert("Enter password");
    document.getElementById("pass").focus();
  }
}

function myfun3(){
  var x = document.getElementById("passs").value;
  var y = document.getElementById("cPass").value;
  if(x != y)
  {
    alert("Passwords don't Match:");
    
    document.getElementById("passs").value="";
    document.getElementById("cPass").value="";
    document.getElementById("passs").focus();

  }
  
  }

function validName(){
  var regName = /^[A-Za-z]{3,20}$/;
  var x=document.getElementById("fname").value;

  if(!regName.test(x))
  {
    alert("Enter Valid First Name");
    document.getElementById("fname").focus();
  }
}

function validName1(){
  var regName = /^[A-Za-z]{3,20}$/;
  var x=document.getElementById("lname").value;

  if(!regName.test(x))
  {
    alert("Enter Valid Last Name");
    document.getElementById("lname").focus();
  }
}

function validNumber()
{
  var regCell=/^[\+]\d{2}[\-]\d{3}[\-]\d{7}$/;
  var ce = document.getElementById("phone").value;
  if(!regCell.test(ce))
  {
    alert("Enter Valid Number");
    document.getElementById("phone").focus();
  }
}

function validEmail()
{
  var regEmail = /^[A-Za-z0-9._]*@[A-Za-z]{5,10}.com$/;
  var e = document.getElementById("email").value;
  if(!regEmail.test(e))
  {
    alert("Enter Valid Email");
    document.getElementById("email").focus();
  }
}

$(document).ready(function(){
  $("#prov").click(function(){
  if($("#prov option:selected").val() == "Ameri"){
    $("#Ameri").show();
    $("#Eng").hide();
    $("#Ger").hide();
  }
  else if($("#prov option:selected").val() == "Eng"){
    $("#Ameri").hide();
    $("#Eng").show();
    $("#Ger").hide();
  }
  else if($("#prov option:selected").val() == "Ger"){
    $("#Ameri").hide();
    $("#Eng").hide();
    $("#Ger").show();
  }

  });
});


</script>

<head>

	<title>Login</title>


<style type="text/css">
  

  #signUp,#signIn
  {

    margin-top: 20%;
    margin: auto;
    padding-left: 5%;
    display: inline-block;
  }
  

  #alogo,#ulogo
  {
    margin: auto;
    height: 30%;
    width: 40%;
  }
  
  #signinbtn:hover,#signupbtn:hover,#Next2:hover,#signupback:hover,#signinback:hover
  {
    transform: translateY(3px);
    cursor: pointer;
    background: black;
    color: white;
  } 
  #signinbtn,#signupbtn,#Next2,#signupback,#signinback
  {
    outline: none;
    border-style: none;
    border-radius: 10px;
    background-color: red;
    padding: 20px;
    color: white;
    margin: auto;
  }

  #signinLogin,#signupLogin
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
  #flog2
  {
    text-align: center;
    margin-left:30%;
    float: left;
    margin: auto;
    box-shadow:10px 6px 20px grey;
  }

</style>
</head>


<body  style="background-image:url(images/login_back.jpg);background-repeat: no-repeat;background-size: cover;">

<div id="signIn">

  <img src="images/signin.png" id="alogo" name="alogo" alt="admin">
  <button id="signinbtn" name="signinbtn">Sign in</button>
</div>
  
<div id="signUp">

  <img src="images/signup.png" id="ulogo" name="ulogo" alt="user">
  <button id="signupbtn" name="signupbtn">Sign up</button>

</div>  



<div id="signupLogin" hidden>

  <fieldset id="flog2">
  <legend><h2 style="color: red">Sign UP</h2></legend>
  <table>

  <form method="POST" action="user_add.php">
  <h2 style="color: red">Personal Data</h2>
  
  <tr><td>*First Name: </td> <td> <input type="text" id="fname" name="fname" placeholder = "Enter First Name" onblur="validName()" required> </td></tr>
  
  <tr><td>*Last Name : </td> <td> <input type="text" name="lname" id="lname" placeholder = "Enter Last Name" onblur="validName1()" required> </td></tr>
  
  <tr><td>Phone #   : </td> <td> <input type="text" name="phone" id="phone" placeholder = "03xx-xxxxxxx" onblur="validNumber()" required> </td></tr>
  
  <tr><td>Email     : </td> <td> <input type="email" name="email" id="email" placeholder = "example@example.com" onblur="validEmail()"  required> </td></tr> 

  <tr><td>*User Name: </td> <td> <input type="text" name="uname" id="uname" placeholder = "Enter Username" onblur="valid_Cus_Username()" required> </td></tr>

  <tr><td>*Password   : </td> <td> <input type="Password" name="passs" id="passs" placeholder = "Password" required> </td></tr>

  <tr><td>*Confirm Password   : </td> <td> <input type="Password" name="cPass" id="cPass" placeholder = "Confirm Password" onblur="myfun3()" required> </td></tr>

  <tr>
  <td>
  <div id="CCon">
  <b>country :<b></td>
  
  <td><p id="dropdown">
  <select id="prov" name="prov" required>
  <option value="Ameri">America</option>
  <option value="Eng">England</option>
  <option value="Ger">Germany</option>
  </select>
  </td>
  </tr>

<tr>
<td>
  <b>Cities :</b>
  </td>
  
<td><select id ="Ameri" name="Ameri">
  <option value ="Cali">California</option>
  <option value ="Flo">Florida</option>
  <option value ="Tex">Texas</option>
  <option value ="Messi">Massachusetts</option>
  </select>

  <select id ="Eng" hidden>
  <option value ="Lon">London</option>
  <option value ="North">North East</option>
  <option value ="South">South East</option>
  <option value ="West">West Midlands</option>
  </select>

  <select id ="Ger" hidden>
  <option value ="Bay">Bayern</option>
  <option value ="Hes">Hesse</option>
  <option value ="Ham">Hamburg</option>
  <option value ="LS">Lower Saxony</option>
  </select>
  </td>
</tr>
  </p>
  </div>
  </table>
  
<tr><td><button type="submit" id="Next2" style="background-color: red;color: white  ;padding: 10px;width:200">Submit</button>
</td><td><input type="Button" id="signupback" value="Back" style="background-color: red;color: white  ;padding: 10px;width:200">
 </td></tr>
</form>

  </fieldset>

</div>


 


<!-- SIGN In Work -->

<div id="signinLogin" hidden>

<fieldset id="flog">
<legend><h1><center>Sign in</center></h3></legend>
<form method="POST" action="userCheck.php">
<table>

<tr><td>  <img src="images/login.png" height="35%" width="50%" ></td></tr>
<tr><td>  <input type="text" id="user" name="user" placeholder="Enter Username" style="padding: 10px" onblur="valid_Admin_Username()" required></td></tr>
<tr><td>  <input type="password" id="pass" name="pass" placeholder="Enter Password" style="padding: 10px" onblur="valid_Admin_Pass()" required></td></tr>

<tr><td> <button type="submit" id="loginSubmit">LOG IN</button></td>
<td><input type="Button" id="signinback" value="Back" style="background-color: red;color: white  ;padding: 10px;width:200"></a>
 </td></tr>
</table>
</form>
</fieldset>


</div>




</body>
</html>