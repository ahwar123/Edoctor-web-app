<?php require('connect.php');
?>

<?php  
  if(!isset($_SESSION['userid']))
  {
    header("Location: home.php");    
  }
  else{
      if(isset($_SESSION['userid']))
      {
        if($_SESSION['userid']==2)
        {
          header("Location: user.php");
        }
        else if($_SESSION['userid']==1)
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
<head>

  <title>Welcome Admin</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script type="text/javascript">
  
$(document).ready(function(){ 
 $("#medicinebtn").click(function(){
  $("#adminRights").show();
  $("#med").show();
  $("#dis").hide();
  $("#footer1").hide();
  $("#footer").show();
    });

  $("#diseasebtn").click(function(){
  $("#adminRights").show();
  $("#med").hide();
  $("#dis").show();
  $("#footer1").hide();
  $("#footer").show();
  });


});

</script>
<script type="text/javascript">



//Function To Display Popup
function div_show_M() 
{
    document.getElementById('add').style.display = "block";
}
//Function to Hide Popup
function div_hide_M()
{
    document.getElementById('add').style.display = "none";
}

function div_show_D() 
{
    document.getElementById('addDisease').style.display = "block";
}
//Function to Hide Popup
function div_hide_D()
{
    document.getElementById('addDisease').style.display = "none";
}

function div_show_MU() 
{
    document.getElementById('medi_update').style.display = "block";
}
//Function to Hide Popup
function div_hide_MU()
{
    document.getElementById('medi_update').style.display = "none";
}

function div_show_DU() 
{
    document.getElementById('disease_update').style.display = "block";
}
//Function to Hide Popup
function div_hide_DU()
{
    document.getElementById('disease_update').style.display = "none";
}

</script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  function loaddata()
  {        
        var dummy=document.getElementById("find");
        $("#loadH").hide();
        // $("#").hide();
        // $("#").hide();
        if(dummy)
        {
          $.ajax(
          {
            type: 'post',
            url: 'location.php',
            data: 
            {
             case:dummy.value,
            },
            

              success: function (response) 
              {
               // We get the element having id of display_info and put the response inside it
               $( '#load' ).html(response);
              }

          });
        }
        else
        {
          $("#loadH").show();
        }
      };
</script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  function loaddataa()
  {        
        var dummy=document.getElementById("finnd");
        $("#lol").hide();
        // $("#").hide();
        // $("#").hide();
        if(dummy)
        {
          $.ajax(
          {
            type: 'post',
            url: 'locat.php',
            data: 
            {
             case:dummy.value,
            },
              success: function (response) 
              {
               // We get the element having id of display_info and put the response inside it
               $( '#loaad' ).html(response);
              }
          });
        }
        else
        {
          $("#lol").show();
        }
      };
</script>




<style type=  "text/css">

#adminRights td button
{
border:1px solid black;
margin: auto;
text-align: center;
padding: 20px;
background: #af8a5f;
color: white;
width: 100%;
outline: none;
border-style: none;
}

#adminRights td button:hover{
transform: translateY(4px);
background: lightgrey;
color: black;
cursor: pointer;

}
#butt
{
margin-bottom: 5%;
}
#adbtn,#upbtn,#dbtn,#medicinebtn,#diseasebtn,#updatebtn{
outline: none;
padding: 10px;
border-radius: 10px;
border-style: none;

}

#abcd tr,
#abcd td,
#abcd th,
#abcd 
{
border: 2px solid;
margin:auto;
text-align: center;
padding: 15px;
width: 60%;
border-collapse: collapse;

}


#medit,#dedit,#mdelete,#ddelete,#mrev,#addbtn
{
padding: 15px;
border-radius: 6px;
background-color:#af8a5f;
color: white;
border-style: none;
}


#medit:hover,#dedit:hover,#mdelete:hover,#ddelete:hover,#mrev:hover,#addbtn:hover
{
padding: 15px;
border-radius: 6px;
transform: translateY(3px);
background-color:grey;
color: black;
border-style: none;
}
#add {
width:100%;
height:100%;
opacity:.95;
top:0;
left:0;
display:none;
position:fixed;
background-color:#313131;
overflow:auto
}

#addDisease {
width:100%;
height:100%;
opacity:.95;
top:0;
left:0;
display:none;
position:fixed;
background-color:#313131;
overflow:auto
}

#medi_update {
  width:100%;
  height:100%;
  opacity:.97;
  top:0;
  left:0;
  display:none;
  position:fixed;
  background-color:#313131;
  overflow:auto
}
#disease_update {
width:100%;
height:100%;
opacity:.97;
top:0;
left:0;
display:none;
position:fixed;
background-color:#313131;
overflow:auto
}

img#close {
position:absolute;
right: -12px;
top: 67px;
cursor: pointer;
width: 7%;
}
#popupform {
  display: inline-block;
position:absolute;
left:50%;
top:10%;
margin-left:-202px;
width: 30%;
text-align: center;
}
form {
/*max-width:300px;
min-width:250px;
padding:10px 50px;
border:2px solid gray;
border-radius:10px;*/
font-family:raleway;
background-color:#fff
}
p {
margin-top:30px
}
h2 {
background-color:#FEFFED;
padding:20px 35px;
margin:-10px -50px;
text-align:center;
border-radius:10px 10px 0 0
}
hr {
margin:10px -50px;
border:0;
border-top:1px solid #ccc
}
input[type=text] {
width:82%;
padding:10px;
margin-top:30px;
border:1px solid #ccc;
padding-left:40px;
font-size:16px;
font-family:raleway
}
#name {
background-image:url(../images/name.jpg);
background-repeat:no-repeat;
background-position:5px 7px
}
#formula {
background-image:url(../images/email.png);
background-repeat:no-repeat;
background-position:5px 7px
}

#weight {
background-image:url(../images/email.png);
background-repeat:no-repeat;
background-position:5px 7px
}

#description {
background-image:url(../images/email.png);
background-repeat:no-repeat;
background-position:5px 7px
}
textarea {
background-image:url(../images/msg.png);
background-repeat:no-repeat;
background-position:5px 7px;
width:82%;
height:95px;
padding:10px;
resize:none;
margin-top:30px;
border:1px solid #ccc;
padding-left:40px;
font-size:16px;
font-family:raleway;
margin-bottom:30px
}
#submit {
text-decoration:none;
width:100%;
text-align:center;
display:block;
background-color:#FFBC00;
color:#fff;
border:1px solid #FFCB00;
padding:10px 0;
font-size:20px;
cursor:pointer;
border-radius:5px
}
span {
color:red;
font-weight:700
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


<div id="adminRights">
<table id="butt" style="width: 100%;">
  <tr><td><button id="medicinebtn" name="medicinebtn">Medicine</button></td>
  <td><button id="diseasebtn" name="diseasebtn" >Disease</button></td>
</tr>
</table>

</table>
</div>

<div id="med" hidden>
<?php
if(isset($_POST['submit'])) 
  {
      $medicine = $_POST['medicine'];

      if ($medicine=="") 
      {
        $q="select * from medicine;";
      }
      else
      {
        $q="select * from medicine where m_name='$medicine' order by m_id;";

      }
 }
 else {
  $q="select * from medicine order by m_id;";

 }
    $result= $conn->query($q);

?>
    
  <input type="text" id="find" name="find" placeholder="Type any word to find medicine" onkeyup="loaddata()"/>
  <div id="load">
    
  </div>

   <div id="loadH"> <center><h1>Medicines Available</h1></center>

    <table id="abcd">
      <tr>
        <!--<th>
          Medicine id
        </th>-->
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
        <th>
            Edit
          </th>
          <th>
            Delete
          </th>
        <th >
          Reviews
        </th> 
      </tr>

      <?php 
    $count=0;

    $result= $conn->query($q);
 
    if ($result->num_rows > 0) 
    {
       
    while ($row = $result->fetch_assoc()) 
    {
?>

      <tr>
       <!--  <td>
          <?php //echo $row['m_id']; ?>
        </td> -->
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
              <form method="post" action="update_medicine.php">
               <input type="hidden" name="ids" value="<?php echo $row['m_id']; ?>" >
           
              <button type="submit" id="medit">Edit</button>
            
            </form>
            </td>
            <td>
            <form method="post" action="delete_medicine.php">
            <input type="hidden" name="mid" value="<?php echo $row['m_id']; ?>">
            
              <button type="submit" id="mdelete" >Delete</button>
            
            </form>
        </td>

          <td>
           <form method="post" action="review.php">
            <input type="hidden" name="mid" value="<?php echo $row['m_id']; ?>">
            
              <button type="submit" name="mrev" id="mrev">Review</button>
           </form> 
           </td>

        <?php 
        }
         ?> 
        
      </tr>




<?php 
    }
  
?>
    </table>

      <button type="button" id="addbtn" name="addbtn" onclick="div_show_M()" >ADD Medicine</button>
    </div>
      </div>
<div id="dis" hidden>
<?php
  if(isset($_POST['submit'])) 
  { 

      $disease = $_POST['disease'];

      if ($medicine=="") 
      {
        $q2="select * from disease;";
      }
      else
      {
        $q2="select * from disease where d_name='$disease' order by d_id;";

      }
  }
  else
  {
    $q2="select * from disease order by d_id;";
  }

    $result= $conn->query($q2);

?>

<input type="text" id="finnd" name="finnd" placeholder="Type any word to find medicine" onkeyup="loaddataa()"/>
  <div id="loaad">
    
  </div>
   <div id="lol"> <center><h1>Disease Available</h1></center>

    <table id="abcd">
      <tr>
        <th>
          Disease name
        </th>
        <th>
          Disease Symptoms
        </th>
          <th>
            Edit
          </th>
          <th>
            Delete
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
          <?php echo $row['d_name']; ?> 
        </td>
        <td>
          <?php echo $row['d_symptoms']; ?> 
        </td>
         
            
        <td>
            
             <form method="post" action="update_disease.php">
               <input type="hidden" name="d_ids" value="<?php echo $row['d_id']; ?>" >

              <button type="submit" id="medit">Edit</button>
            </form>
        </td>
            
            <td>
                <form method="post" action="delete.php">
                <input type="hidden" name="idds" value="<?php echo $row['d_id']; ?>">
                <button type="submit" id="mdelete" >Delete</button>
                </form>
            </td>
        <?php 
        }
         ?> 
        
      </tr>

<?php 
    }
  
?>
    </table>
 <button type="button" id="addbtn" name="addbtn" onclick="div_show_D()" >ADD Disease</button>
      
    

</div>
</div>


 <div id="add">
 <div id="popupform">
  <h1>Add Medicine</h1>

  <form action="add.php" id="addform" name="addform" method="POST">
  <img id="close" src="images/cross.png" onclick ="div_hide_M()">
    <table>
      <tr>
        <td>
          Medicine Name:
        </td>
        <td>
          <input type="text" id="name" name="name" placeholder="Name" required>
        </td>
      </tr>
      <tr>
        <td>
          Formula:
        </td>
        <td>
          <input type="text" id="formula" name="formula" placeholder="Formula" required>
        </td>
      </tr>
      <tr>
        <td>
          Weight in mg:
        </td>
        <td>
          <input type="number" id="weight" name="weight" placeholder="Weight" required>
        </td>
      </tr>
      <tr>
        <td>
          Description:
        </td>
        <td>
          <textarea type="text" rows="5" cols="40" name="description" id="description" placeholder="Enter Medicine description" required style="border-radius: 10px;"></textarea>
        </td>
      </tr>
      <tr>
        <td>
           <button type="submit" id="submit">Add</button>
        </td>
      </tr>
    </table>
  </form>
  </div>
 </div>


<div id="addDisease">
 <div id="popupform">
  <h1>Add Disease</h1>

  <form action="disease.php" method="POST">
    <img id="close" src="images/cross.png" onclick ="div_hide_D()">

    <table>
      <tr>
        <td>
          Disease Name:
        </td>
        <td>
          <input type="text" id="d_name" name="d_name" placeholder="Enter disease name" required>
        </td>
      </tr>
      <tr>
        <td>
          Symptoms:
        </td>
        <td>
          <input type="text" id="symptoms" name="symptoms" placeholder="Enter disease symptoms" required>
        </td>
      </tr>
      
      <tr>
        <td>
           <button type="submit" id="submit" >ADD</button>
        </td>
      </tr>
    </table>
  </form>
  </div>
 </div>


<div id="footer" hidden>
  
  <div id="writing" >
    <h1 style="font-weight: bold;">
      EDOCTOR<br>
    </h1>
    <h4 style="font-size: medium;">
    This is the system in which people can self medicate.<br>


    </h4>
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




<div id="footer1">
  
  <div id="writing" >
    <h1 style="font-weight: bold;">
      EDOCTOR<br>
    </h1>
    <h4 style="font-size: medium;">
    This is the system in which people can self medicate.<br>


    </h4>
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