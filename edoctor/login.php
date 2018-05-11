<?php require('connect.php');

?>
<!DOCTYPE html>
<html>

<script type= "text/javascript" src = "countries.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<head>

	<title>Login</title>

<script type="text/javascript">


$(document).ready(function(){
  $("#loginbtn").click(function(){
  $("#login").show();
  $("#signup").hide();
  });

  $("#signupbtn").click(function(){
  $("#login").hide();
  $("#signup").show();

  });

  $("#backbtn").click(function(){
  $("#login").show();
  $("#signup").hide();
  });

});
  function valid_username(){
    var regName = /^[A-Za-z]{5,20}$/;
    var x=document.getElementById("uname").value;

    if(!regName.test(x))
    {
      alert("Enter Valid UserName");
      document.getElementById("uname").focus();
    }
  }

function valid_pass(){
  var regName = /^[A-Za-z0-9]{3,20}$/;
  var x=document.getElementById("passs").value;

  if(!regName.test(x))
  {
    alert("Enter password");
    document.getElementById("passs").focus();
  }

}
 function valid_in_username(){
    var regName = /^[A-Za-z]{5,20}$/;
    var x=document.getElementById("User").value;

    if(!regName.test(x))
    {
      alert("Enter Valid UserName");
      document.getElementById("User").focus();
    }
  }

function valid_in_pass(){
  var regName = /^[A-Za-z0-9]{3,20}$/;
  var x=document.getElementById("Pass").value;

  if(!regName.test(x))
  {
    alert("Enter password");
    document.getElementById("Pass").focus();
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

function PassCheck()
{
  var x = document.getElementById("passs").value;
  var y = document.getElementById("cPass").value;
  if(x != y)
  {
    alert("Passwords don't Match:");
    document.getElementById("passs").value="";
    document.getElementById("cPass").value="";
    document.getElementById("passs").focus();

    return false;
    }
    else
    {
      return true;
    }
}
</script>

<style type="text/css">
  
 #login 
{
  text-align: -moz-center;
  
}

  #User,#Pass
  {
     border-radius: 33px;
padding: 11px;
border-style: none;
border: 2px solid;
margin: auto;

width: 150%;

background-color: white;
color: black;
border-color: black;
  }
  #fname,#lname,#phone,#email,#uname,#passs,#cPass
  {
    border-radius: 33px;
padding: 11px;
border-style: none;
border: 2px solid;
margin: auto;

width: 100%;
background-color: white;
color:black;
border-color: black;


  }
  #flog2 
  {
    width: 35%;
    text-align: center;

  }

   #footer
  {
    background-color: #af8a5f;
    margin: -1%;
  }

   #writing
  {
    margin: 10px;
  }
  
  #content
  {
    margin-left: 80%;
  }
  

</style>
</head>
<body style="background-image: url(images/wall.jpg);">

<div id="header1"  >
 <a href="home.php"> <img src="images/logo1.png" style="margin-left: 2%;width: 15%;">
  </a>

</div>

<?php  
  if(!isset($_SESSION['userid']))
  {
    if(isset($_SESSION['a']))
    {
      ?>
<script type="text/javascript">alert("Invalid Login")</script>
      <?php
    }
  }
  else
  {
        header("Location: welcome.php");
    echo "<p>set</p>";
  }
  ?>

<div id="login" style="margin-top: 5%;">

<h1 style="color: white"><center >Login</center></h3>
<form method="POST" action="check.php">

<div id="mid" style="margin-left: -7%"> 
  <table>

<tr><td> <input type="text" id="User" name="username" placeholder="Enter Username" onblur="valid_in_username()"></td></tr>

<tr><td> <input type="password" id="Pass" name="password" placeholder="Enter Password" onblur="valid_in_pass()"></td></tr>


</td></tr>
        
</table>
</div>

  <input style="padding: 1% ;width: 10%;margin-top: 1%;background-color:#af8a5f ;border: burlywood;border-radius: 12px; color: white" type="submit" id="loginSubmit" value="LOG IN" > 



</form>

<h4 style="color: white;">Don't have any account?</h4>
<button id="signupbtn" style="padding: 1%;
border-radius: 12px;
border: cornflowerblue;
color: white;
background-color:#af8a5f ">Create New Acount</button>

</div>


<div id="signup" style="margin-left: 40%; margin-top: 10%;"  hidden>

  <div id="flog2">
  <legend><h2 style="color: white">Sign UP</h2></legend>
  <table>

  <form method="POST" action="user_add.php">
  <h2 style="color: white">Personal Data</h2>

  
    <tr> <td> <input type="text" id="fname" name="fname" placeholder = "Enter First Name" onblur="validName()" required> </td></tr>
  
  <tr> <td> <input type="text" name="lname" id="lname" placeholder = "Enter Last Name" onblur="validName1()" required> </td></tr>
  
  <tr> <td> <input type="text" name="phone" id="phone" placeholder = "03xx-xxxxxxx" onblur="validNumber()" required> </td></tr>
  
  <tr> <td> <input type="email" name="email" id="email" placeholder = "example@example.com" onblur="validEmail()"  required> </td></tr> 

  <tr> <td> <input type="text" name="uname" id="uname" placeholder = "Enter Username" onblur="valid_Cus_Username()" required> </td></tr>

  <tr> <td> <input type="Password" name="passs" id="passs" placeholder = "Password" required> </td></tr>

  <tr> <td> <input type="Password" name="cPass" id="cPass" placeholder = "Confirm Password" onblur="myfun3()" required> </td></tr>
  
  
  

<!-- <tr>
    <td>
      <div id="CCon" style="margin: 10px">
      <td><p id="dropdown">
      <select id="prov" name="prov" required>
      <option value="Cou">Country</option>
      <option value="Pak">Pakistan</option>
      <option value="Eng">England</option>
      <option value="Ger">Germany</option>
      </select>
    </td>
      



  <td>

    <select id="Cou" name="Cou">
      <option value="Cit">Cities</option>
    </select>
      
    <select id ="Pak" name="Pak" hidden>
        <option value ="Lahore">Lahore</option>
        <option value ="Faslabaad">Faslabaad</option>
        <option value ="Islamabad">Islamabad</option>
        <option value ="karachi">karachi</option>
        <option value ="Pashawar">karachi</option> 
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
</tr> -->
<tr>
  <td>
    <div style='text-align:center;'>
      <select id="country" name ="country" style="border-radius: 37px;padding: 4%;border: black;"></select> </br></br>
      <select id ="state" name ="state" style="border-radius: 37px;padding: 4%;border: black;"></select>  </br> </br> 
    </div>


    <script language="javascript">
      populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
    
    </script>
  </td>
</tr>




  </p>
  </div>
  </table>
  
<tr><td><button type="submit" id="signupSubmit" style="background-color: #af8a5f;color: white  ;padding: 10px;width: 46%;border-radius: 12px;border: violet;">Submit</button>

</td><td><button type="button" id="backbtn" style="padding: 2%;border: violet;color: white;
border-radius: 8px;
margin: 10px;background-color: #af8a5f">already have an account?</button>
 </td></tr>
</form>

</div>


</div>

<div id="footer">
  
  <div id="writing" >
    <h1 style="font-weight: bold">
      EDOCTOR<br>
    </h1>
    <h2 style="font-size: medium;">
    This is the system in which people can self medicate.<br>


    </h2>
  </div>

  <div id="content" >
    <h3 >
      Contact Us:
    </h3>
    <table>
      <tr>
        <td>
          <a href="https://www.facebook.com">
            <img src="images/facebook.png"  style="width:42px;height:42px;border:0;">
          </a>
        </td>
        <td rowspan="2">
          <a href="https://twitter.com">
            <img src="images/twitter.png"  style="width:42px;height:42px;border:0;">
          </a>
        </td>
        <td>
              <a href="https://web.whatsapp.com">
                <img src="images/whatsapp.png"  style="width:42px;height:42px;border:0;">
              </a>
            </td>
        
          
            <td>
              <a href="https://mail.google.com">
                <img src="images/google.png"  style="width:42px;height:42px;border:0;">
              </a>
            </td>
          
        
      </tr>
    </table>
  </div>
</div>

</body>
</html>