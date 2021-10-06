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
   <script src = './script.js'></script>
   
   
   
 
   
   
   
 
</head>
<body>
 
<fieldset>


<?php include('function.php'); ?>




 


<?php include('top.php'); ?>
 
 
<?php include('left.php'); ?>
</div>
<fieldset>
<legend> Delete  SUB CATEGORY</legend>

<div>

<?php
if(isset($_POST["sbmt"])  && isset($_POST['t1']))
{
	
	      $t1 =  ($_POST['t1']);
                  if ($t1== "")
 {
	         echo  "   Nothing selected here";
 }
 else{
	 
	
	
	$cn=makeconnection();
	$s="delete from subcategory where Subcatid ='" . $_POST["t1"] . "'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Delete sub category has been succesfully');</script>";
    }
}
?>



 <form name="form" method="post"    onSubmit="return validatedeletesubcategory()">
<table>
 
<tr><td>Select  </td><td><select name="t1"  /><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from subcategory";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
 

while($data=mysqli_fetch_array($result))
{
		
			echo "<option value=$data[0]>$data[1]</option>";
		
	
}
mysqli_close($cn);
?>
</select>
</td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="Delete" name="sbmt" /></td></tr>

</table>
</form>

</div>


</div>
</fieldset>
<?php include('bottom.php'); ?>
</fieldset>
</body>
</html>


             