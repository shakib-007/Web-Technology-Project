 <?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: login.php');
	}
?>
 
<html>
<head>
<title></title>
 
</head>
<body>
 
<fieldset>


<?php include('function.php'); ?>



<?php include('top.php'); ?>
 
<?php include('left.php'); ?>
</div>
<fieldset>
<div>




<form method="post">
 
<table>

<tr><td> Package Name</td>
<td> Package Id</td>
<td> Name</td>
<td> Gender</td>
<td> Mobile No.</td>
<td> Email</td>
<td> No. of Days</td>
 
<td> Status Field</td></tr>


<?php

$s="select * from enquiry,package where enquiry.Packageid=package.Packid";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
 

while($data=mysqli_fetch_array($result))
{

	
		echo "<td >$data[12]</td>
		<td> $data[1]</td>
	<td> $data[2]</td>
		<td> $data[3]</td>
		<td> $data[4]</td>
		<td> $data[5]</td>
		<td> $data[6]</td>
	<td> $data[7]</td>
		 
		<td>        </td>
		</tr>";

}




?>

</table>
</td></tr></table>

</form>



</div>
</fieldset>

</div>
<?php include('bottom.php'); ?>
</fieldset>
</body>
</html>