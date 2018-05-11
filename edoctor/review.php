<?php require('connect.php');?>



<?php

if(!isset($_SESSION['userid']))
{
  header("location:home.php");
}
else
{

}
?>
<style type="text/css">
  

    #abcd tr,
    #abcd td,
    #abcd th,
    #abcd 
    {
      border: 2px solid;
      margin:auto;
      text-align: center;
      padding: 5px;
      /*width: 40%;*/
      border-collapse: collapse;
    }
    #abcd {
      width: 70%;
    }
/*    #abcd tr:first-child,
    #abcd td:first-child,
    #abcd th:first-child
*/    
  #abcd tr:not(:last-child),
    #abcd td:not(:last-child),
    #abcd th:not(:last-child)
    {
      width: 18%;
    }

    /*#abcd tr:nth-child(3),*/
    #abcd td:nth-child(3),
    #abcd th:nth-child(3){
      width: 8%;
      /*background: grey;*/
    }
    #abcd tr:last-child,
    #abcd td:last-child,
    #abcd th:last-child{
      width: 100%;
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
    #backbtn
  {
    border-radius: 7px;
    border-style: none;
    background: #e1e1e1;
    color: black;
    float: right;
    padding: 25px;
    transform: translateY(5px);
  

  }
  #backbtn:hover
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

<?php

if(isset($_POST['mid'])){
  
  $_SESSION['mid'] = $_POST['mid']; 

}
$id=$_SESSION['mid'];

$q="select * from medicine where m_id='$id'";


$res=$conn->query($q);

$row1=$res->fetch_assoc();
// $q2="select * from Review order by rv_id;";
$q2 = "SELECT * from review where rv_id in( SELECT rv_id from med_review where m_id = '$id');";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Review</title>
</head>
<body>

<div id="header1">
<a href="home.php"><img src="images/logo1.png" style="margin-left: 2%"></a>  
 <a href="user.php" ><button id="backbtn">BACK</button></a>
</div>




<h1> Medicine: <?php echo $row1['m_name']; ?>
</h1>
<div id="loadH"> <center><h1>Reviews Available</h1></center>


    <table id="abcd">
      <tr>
        <!--<th>
          Medicine id
        </th>-->
        <th>
          Medicine name
        </th>
        <th>
          User name
        </th>
        <th>
          user Age
        </th>
        <th >
          Comment
        </th> 
     
         </tr>   

      <?php 
    $count=0;

    $result= $conn->query($q2);
 
    if ($result->num_rows > 0) 
    {
       
    while ($row = $result->fetch_assoc()) 
    {
?>

      <tr>
       <td>
          <?php echo $row1['m_name']; ?>
        </td> 
        <td>
          <?php echo $row['ur_name']; ?> 
        </td>
        <td>
          <?php echo $row['ur_age']; ?>
        </td>
        <td>
          <?php echo $row['ur_comment']; ?>
        </td>
        
        <td>
        <?php 
        if($_SESSION['userid']==1){ ?>
          <form method="post">
            <input type="hidden" name="rid" value="<?php echo $row['rv_id']; ?>">
            <td>
              <button type="submit" id="submit" formaction="delete_review.php">Delete</button>
            </td>
          </form>
        </td>


        <?php 
        }
         ?> 
        
      </tr>

<?php 
    }
  }
?>
    </table>

</div>




<form method="post" action="add_review.php">
	<table>
<tr><td><h2>ADD YOUR MEDICINE EXPERIENCE</h2></td></tr>
<tr><td>  <input type="text" id="name" name="name" placeholder="Name" /></td></tr>
<tr><td>  <input type="number" id="age" name="age" placeholder="Age" /></td></tr>
<tr><td> <textarea type="text" rows="5" cols="30" id="comment" name="comment" placeholder="Enter your experiance"></textarea></td></tr>

<input type="number" id="id" value="<?php echo $row1['m_id']; ?>" name="rid" hidden/>
<tr><td><button type="submit" id="submit">Submit</button>
</td></tr>
</table>

</form>


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