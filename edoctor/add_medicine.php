<?php require('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>add medicine</title>
	<style type="text/css">
		body
		{
			margin: 0;
		}
		header > div
		{
			display: inline-block;
			padding: 10px;
			width: calc(30% - 22px);
		}
		header
		{
			padding: 10px;
			background: green;

		}
		header p
		{
			margin: 0;
			color: white;
			font-size: 22px;
		}
		header > div:last-child
		{
			width: calc(70% - 22px);
			direction: rtl;
		}
		button
		{
			padding: 20px;
			border-radius: 2px;
			border-style: none;
			background-color:#4F9E4D;
			color: white;
			outline: none;
		}
		button:hover
		{
			transform: translateY(1px);
			cursor: pointer;
		}
		section
		{
			text-align: center;
			padding: 20px;
		}
		div
		{
			border: solid #424242;
			padding: 10px;
			border-radius: 4px;
		}

		table
		{
			text-align: left;
			border-collapse: collapse;
			margin: auto;
			width: 30%;
			margin-bottom: 30px;
		}
		#abcd td,
		#abcd tr,
		#abcd th,
		#abcd 
		{
			border:solid red;
		}
		th,
		td{
			border-collapse: collapse;
			padding: 5px;

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
		
	</style>
</head>




<body>


 <section>
 <div>
 	<h1>Add Medicine</h1>

 	<form action="add.php" method="POST">
 		<table>
 			<tr>
 				<td>
 					Medicine Name:
 				</td>
 				<td>
 					<input type="text" name="name" placeholder="Name" required>
 				</td>
 			</tr>
 			<tr>
 				<td>
 					Formula:
 				</td>
 				<td>
 					<input type="text" name="formula" placeholder="Formula" required>
 				</td>
 			</tr>
 			<tr>
 				<td>
 					Weight in mg:
 				</td>
 				<td>
 					<input type="number" name="weight" placeholder="Weight" required>
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
	 				<button type="submit">Add</button>
	 			</td>
 			</tr>
 		</table>
 	</form>
 </div>


 </section>

</body>
</html>