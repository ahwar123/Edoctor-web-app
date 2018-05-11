<?php require('connect.php');?>
<style type="text/css">
    
   #abcd tr,
    #abcd td,
    #abcd th,
    #abcd 
    {
      border: 2px solid black;
      margin:auto;
      
      text-align: center;
      padding: 15px;
      width: 60%;
      border-collapse: collapse;

    }
</style>

<?php



$name = $_POST['med'];


$q="select * from medicine join disease_medicine on medicine.m_id=disease_medicine.d_id join disease on disease_medicine.d_id=disease.d_id where d_symptoms='$name'";
?>

<center><h1>Medicines Available</h1></center>
<table id="abcd" >
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
        <!--<td>
          <?php //echo $row['m_id']; ?>
        </td>-->
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
        
         
        <?php 
        }
         ?> 
           </tr>

<?php 
    }
  
?>

  </table>