<?php require('connect.php');
?>
<?php  
  if(!isset($_SESSION['username']))
  {
    header("Location: home.php");    
  }
?>
<?php
$id=$_POST['d_ids'];

$q="select *from disease where d_id='$id'";
$result = $conn->query($q);


?>
<!DOCTYPE html>
<html>

<script type="text/javascript">
  
//   $(document).ready(function(){ 
//  $("#amd").click(function(){
  
//   $("#bar").show();
//     });

// });

function showbar(){
document.getElementById('bar').style.display="block";
}

</script>

<head>
  <title>Update Medincine</title>




  <style type="text/css">
    
/*#uptable,
#uptable td,
#uptable tr
{
  width: 40%;
  margin: auto;
  border-radius: 10px;
  background-color: #af1111;
}
*/
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
    #backbtn,#amd,#btn
  {
    border-radius: 7px;
    border-style: none;
    background: #e1e1e1;
    color: black;
    float: right;
    padding: 25px;
    transform: translateY(5px);
  

  }
  #backbtn:hover,#amd:hover,#btn:hover
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

 <div id="disease_update">





<center><h1>Update Disease</h1></center>

  <form method="post" action="update.php" style="margin-bottom: 16%;
margin-top: 6%;">
   
<table>
        <?php   
          while ($row = $result->fetch_assoc()){ 
        ?>  

        <tr>
        <td>
          Disease Name:
        </td>
        <td>
          <input type="text" name="d_name" id="name" value="<?php echo $row['d_name']; ?>" placeholder="Name" required>
        </td>
      <input type="number" name="d_ids" id="idss" value="<?php echo $row['d_id']; ?>" hidden>
      </tr>
      <tr>
        <td>
          Symptoms:
        </td>
        <td>
          <input type="text" name="symptoms" id="symptoms" value="<?php echo $row['d_symptoms']; ?>" placeholder="Symptoms" required>
        </td>
      </tr>

      

  <tr>



    
      <td>
          <button type="submit" id="btn">Update</button>
        </td>
        
<td>
<div id="bar" hidden>
     <?php 
      $qury="select m_name from medicine;";
      $res= $conn->query($qury);
      ?>
      
      <div class="search">
      
        <input list="medicine" id="med" name="med" placeholder="add medicine" autocomplete="off">
        

        <datalist id="medicine">
          <?php while ($row1 = $res->fetch_assoc()){ ?>
          <option>  
            <?php echo $row1['m_name']; ?> 
          </option>
              <?php } ?>
          </datalist>
      
      </div>

    </div>
      

</td>

        <td><button type="button" id="amd" name="amd" onclick="showbar()">ADD Medicine for the Disease</button></td>
      </tr>



<?php } ?>
    </table>

  </form>
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