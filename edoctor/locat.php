<?php require('connect.php'); ?>
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
$q="select * from disease WHERE d_name LIKE '$name%' or d_name LIKE '%$name%' or d_name LIKE '$name'";
?>

<center><h1>Disease Available</h1></center>
<table id=abcd >
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

    $result= $conn->query($q);
 
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