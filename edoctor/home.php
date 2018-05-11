<?php require('connect.php');
?>


<?php  
  if(isset($_SESSION['userid']))
  {
  	if($_SESSION['userid']==1)
    {
    	header("Location: admin.php");
    }
    else if($_SESSION['userid']==2)
    {
    	header("Location: user.php");

    }    
  }
  else
  {
  	
  }
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="/images/">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">



<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css">
		
	header .head_class
	{
		background-image: url("images/logo_back.png");
		width: 100%;
		height: 3%;

	}
	#customerbtn:hover,#adminbtn:hover
	{
		transform: translateY(3px);
		cursor: pointer;
		background: black;
		color: white;
	}	
	#admin
	{

		padding-top: 20%;
		margin: auto;
		padding-left: 10%;
		display: inline-block;
	}
	#user
	{
		padding-top: 20%;
		margin: auto;
		padding-left: 10%;
		display: inline-block;

	}

	#adminbtn,#customerbtn
	{
		outline: none;
		border-style: none;
	}
	#customerbtn:hover
	{
		background-color: black;
		color: white;
	}

	#logo
	{
		width: 30%;
		height: 50%;

	}
	#mySlides{
		width: 100%;
		height: 50%;
		display:none;


	}

	#footer
	{
		background-color: #af8a5f;
	}

	#writing
	{
		margin: 10px;
	}
	#header1
	{
		background-color: lightgray;
		margin: 0px;
	}
	#header1 img
	{
		width: 10%;
		height: 10%;
	} 
	#content
	{
		margin-left: 80%;
	}
	#loginbtn
	{
		border-radius: 7px;
		border-style: none;
		background: #e1e1e1;
		color: black;
		float: right;
		padding: 25px;
		transform: translateY(5px);
	

	}
	#loginbtn:hover
	{
		border-radius: 7px;
		border-style: none;
		background: #af8a5f;
		color: white;
		float: right;
		padding: 25px;
		transform: translateY(5px);
	}

	.slider1
	{
		width: 70%;
		height: 10%;
		margin: auto;
	}
	.slider1 img
	{
		max-height: 30%;

	}
	</style>
</head>


<body style="margin: 0%;">

<link rel="stylesheet" type="text/css" href="bootstrap.js">
<link rel="stylesheet" type="text/css" href="jquery.js">


<?php  
  if(!isset($_SESSION['userid']))
  {
  }
  else
  {
        header("Location: welcome.php");    

    echo "<p>set</p>";
  }
  ?>


	<div id="header1">
	<img src="images/logo1.png" style="margin-left: 2%">
	

	<a href="login.php">
		<button type="button" id="loginbtn" name="loginbtn" ">Login</button>
		</a>


</div>

<div  style="background-image: url(images/img.jpg);margin-top: 10px; ">
	<div class="slider1"  >
	  <img class="slider" src="images/slider1.png" style="width:100% ">
	  <img class="slider" src="images/slider2.jpg" style="width:100% ">
	  <img class="slider" src="images/slider3.jpg" style="width:100% ">
	</div>


<script>
	var myIndex = 0;
	carousel();

	function carousel() {
	    var i;
	    var x = document.getElementsByClassName("slider");
	    for (i = 0; i < x.length; i++) {
	       x[i].style.display = "none";  
	    }
	    myIndex++;
	    if (myIndex > x.length) {myIndex = 1}    
	    x[myIndex-1].style.display = "block";  
	    setTimeout(carousel, 5000); 
}
</script>	

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