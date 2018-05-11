<?php require('connect.php');
?>
<?php  
  if(!isset($_SESSION['username']))
  {
    header("Location: home.php");    
  }
?>
<?php
$id=$_POST['ids'];

$q="select *from medicine where m_id='$id'";
$result = $conn->query($q);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Medincine</title>

	<style type="text/css">
		
button
		{
			padding: 20px;
			border-radius: 2px;
			border-style: none;
			background-color:#4F9E4D;
			color: white;
			outline: none;
		}
table
		{
			text-align: left;
			border-collapse: collapse;
			margin: auto;
			width: 30%;
			margin-bottom: 30px;
		}

	form input
		{
			padding: 5px;
			border-style: none;
			border:2px solid #424242;
			border-radius: 3px;
			width: calc(100% - 10px);
			outline: none;
		}
		td button,
		form button
		{
			padding: 7px 20px 7px 20px;
			border-radius: 2px;
			border-style: none;
			background-color:#424242;
			color: white;
			outline: none;
		}
		  #footer
  {
    background-color: #af8a5f;
    margin: -1%;
margin-bottom: -3%;
  }

   #writing
  {
    margin: 10px;
  }
  
  #content
  {
    margin-left: 80%;
  }
  #header1
  {
    background-color: lightgray;
    margin: -8px;
    margin-bottom: 2%;
  }
  #header1 img
  {
    width: 10%;
    height: 10%;
}
    #backbtn,#upbtn
  {
    border-radius: 7px;
    border-style: none;
    background: #e1e1e1;
    color: black;
    float: right;
    padding: 25px;
    transform: translateY(5px);
  

  }
  #backbtn:hover,#upbtn:hover
  {
    border-radius: 7px;
    border-style: none;
    background: #af8a5f;
    color: white;
    float: right;
    padding: 25px;
    transform: translateY(5px);
  }
	</style>
</head>
<body>

<div id="header1">
<a href="home.php"><img src="images/logo1.png" style="margin-left: 2%"></a>  
 <a href="admin.php" ><button id="backbtn">BACK</button></a>
</div>


<div>


<center><h1>Update Medicine</h1></center>
 	<form method="post" action="update_query.php">
 		<table id="uptable">
		 		<?php		
					while ($row = $result->fetch_assoc()){ 
		 		?>	

		 		<tr>
 				<td>
 					Medicine Name:
 				</td>
 				<td>
 					<input type="text" name="name" id="name" value="<?php echo $row['m_name']; ?>" placeholder="Name" required>
 				</td>
 			</tr>
 			<tr>
 				<td>
 					Formula:
 				</td>
 				<td>
 					<input type="text" name="formula" id="formula" value="<?php echo $row['m_formula']; ?>" placeholder="Formula" required>
 				</td>
 			</tr>
 			<tr>
 				<td>
 					Weight in mg:
 				</td>
 				<td>
 					<input type="number" name="weight" id="weight" value="<?php echo $row['m_weight']; ?>" placeholder="Weight" required>
 				</td>
 			</tr>
 			<tr>
 			<input type="number" name="idss" id="idss" value="<?php echo $row['m_id']; ?>" hidden>
 				
 			<tr>
 				<td>
 					Description:
 				</td>
 				<td>
 					<textarea type="text" rows="5" cols="40" name="description" id="description" placeholder="Enter Medicine description" style="border-color: #424242;" required><?php echo $row['m_description']; ?></textarea>
 				</td>
 			</tr>
 			<tr>
	 			<td>
	 				<button type="submit" id="upbtn" >Update</button>
	 			</td>
 			</tr>


<?php } ?>
 		</table>
 	</form>
</fieldset>
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