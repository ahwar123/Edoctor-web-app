
<?php require('connect.php');?>


<?php  
  if(!isset($_SESSION['userid']))
  {
    header("Location: home.php");    
  }
  else{
      if(isset($_SESSION['userid']))
      {
        if($_SESSION['userid']==1)
        {
          header("Location: admin.php");
        }
        else if($_SESSION['userid']==2)
        {
        }    
      }
      else
      {
        
      }
  }
?>
<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script>

$(document).ready(function(){ 
 $("#submit").click(function(){
  
  $("#bar").show();
  $("#detail").show();
    });

});

</script>
<head>
	<style type="text/css">
		body
		{
			margin: 0;
		}
		.search
		{
			padding: 20px;
		}

	#abcd tr,
    #abcd td,
    #abcd th,
    #abcd 
    {
      border: 2px solid;
      margin:auto;
      text-align: center;
      padding: 5px;
      width: 60%;
            border-collapse: collapse;

    }
		form input
		{
			padding: 5px;
			border-style: none;
			border:2px solid #4F9E4D;
			border-radius: 3px;
			width: 30%;
      padding: 0.5%;
      border-radius: 19px;
			outline: none;
		  margin: auto;
      margin-top: 5%;
      margin-left: 3%;
    }
		td button,
		form button
		{
			padding: 7px 20px 7px 20px;
			border-radius: 2px;
			border-style: none;
			background-color:#af8a5f;
			color: white;
			outline: none;
		}
#dawai,#searc
{
	border-radius: 5px;
	width: 100%;
	padding: 5px;
	border:2px ;
	margin: auto;
	border-style: outset;
}


#symptom_table
{
	float: left;
	width: 30%;
	max-width: 30%;
	padding: 5px;
	border-collapse: collapse;
	border: 2px solid black;
	margin: 0;
}
#header1
  {
    background-color: lightgray;
    margin: 0px;
    margin-bottom: 2%;
  }
  #header1 img
  {
    width: 10%;
    height: 10%;
  } 

  #logout
  {
    border-radius: 7px;
    border-style: none;
    background: #e1e1e1;
    color: black;
    float: right;
    padding: 25px;
    transform: translateY(5px);
  

  }
  #logout:hover
  {
    border-radius: 7px;
    border-style: none;
    background: #af8a5f;
    color: white;
    float: right;
    padding: 25px;
    transform: translateY(5px);
  }

  #footer
  {
    background-color: #af8a5f;

   
   left:0px;
   bottom:0px;
   
   width:100%;
   margin-top: 10%;
  }

  #footer1
  {
    background-color: #af8a5f;
   

    position: absolute;
   
   left:0px;
   bottom:0px;
   
   width:100%;
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
<body>
<div id="header1">
<a href="home.php"><img src="images/logo1.png" style="margin-left: 2%"></a>  
 <a href="log-out.php"><button id="logout">Log-out</button></a>
</div>


<div id="bar" style="width: 3000px;">
	<?php 
			$qury="select d_symptoms from disease;";
			$result= $conn->query($qury);
		?>
		<div class="search">
			<form method="post">

				<input list="medicine" formmethod="post" id="med" name="med" autocomplete="off">
				

				<datalist id="medicine">
				<?php while ($row = $result->fetch_assoc()){ ?>
					<option>	
						<?php echo $row['d_symptoms']; ?>	
					</option>
					<?php } ?>
				</datalist>
				<button type="submit" formaction="user.php" id="submit" name="submit">Search</button>
			</form>
		</div>

</div>


<div id="detail">

<?php
	# code...
if(isset($_POST['med'])){
$name = $_POST['med'];


$q="select * from medicine join disease_medicine on medicine.m_id=disease_medicine.d_id join disease on disease_medicine.d_id=disease.d_id where d_symptoms='$name'";

    $result= $conn->query($q);
//}

?>

<center><h1>Medicines Available</h1></center>
<table id="abcd" >
      <tr>
        <th>
          Medicine name
        </th>
        <th>
          Formula
        </th>
        <th>
          Medicine weight (mg)
        </th>
        <th >
          Description
        </th>
           <th >
          Reviews
        </th>  
      </tr>

      <?php 
    $count=0;



    $res= $conn->query($q);
 
    if ($res->num_rows > 0) 
    {
       
    while ($row = $result->fetch_assoc()) 
    {
?>

      <tr>
        <td>
          <?php echo $row['m_name']; ?> 
        </td>
        <td>
          <?php echo $row['m_formula']; ?>
        </td>
        <td>
          <?php echo $row['m_weight']; ?>
        </td>
        <td>
          <?php echo $row['m_description']; ?>  
        </td>

        	<td>
        	 <form method="post" action="review.php">
            <input type="hidden" name="mid" value="<?php echo $row['m_id']; ?>">
            
              <button type="submit">Review</button>
           </form> 
           </td>
            
      </tr>
		<?php 
        }
         ?> 
<?php 
    }
  
?>
	</table>
	<?php 
   }
  
?>

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