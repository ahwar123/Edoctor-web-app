<?php require('connect.php'); ?>

<style type="text/css">


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

img#close {
position:absolute;
right:-6px;
top:69px;
cursor:pointer
}
#popupform {
display: inline-block;
position:absolute;
left:50%;
top:10%;
margin-left:-202px;
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



</style>

<script type="text/javascript">
function div_show_M() 
{
    document.getElementById('add').style.display = "block";
}
//Function to Hide Popup
function div_hide_M()
{
    document.getElementById('add').style.display = "none";
}




</script>

<style type="text/css">
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
</style>
<?php

if( isset( $_POST['case'] ) )
{

$name = $_POST['case'];

}
$q="select * from medicine WHERE m_name LIKE '$name%' or m_name LIKE '%$name%' or m_name LIKE '$name' ";

  // $q2="select * from medicine order by m_id;";
  // $res=$conn->query($q2);

?>  
<center><h1>Medicines Available</h1></center>

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
                  <button formaction="update_medicine.php" type="submit" id="medit">Edit</button>
              </form>
            </td>
            


            <td>
              <form method="post" action="delete_medicine.php">
                <input type="hidden" name="m_name" value="<?php echo $row['m_name']; ?>">
                <button formaction="delete_medicine.php" type="submit" id="mdelete" >Delete</button>
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




 <!-- <div id="add">
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

 -->