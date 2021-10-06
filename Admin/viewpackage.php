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
 
  <script src = './javascript/script.js'></script>
 
</head>
<body>
 
 


<?php include('function.php'); ?>

<?php include('top.php'); ?>
 
<?php include('left.php'); ?>
</div>
 

<div>
<fieldset>

<legend>VEIW  Package </legend>

 

   <form Packname="form" method="post">
     <input type="text" name="Packname" id="Packname" onkeyup="viewpack()"/>
      

 <input type="submit" value="Search" name="sbmt" /></td></tr>
 
	
	
	
	
	<?php
  if(isset($_POST["sbmt"]))
 {
		
	$Packname = $_REQUEST['Packname'];

	$con = mysqli_connect('localhost', 'root', '', 'travel');
	$sql = "select * from package where Packname like '%{$Packname}%'";
	$result = mysqli_query($con, $sql);

	$display = "<table border=1>
					<tr>
						<tr><td>ID</td>
                      <td>Package Packname</td>
                   <td>Category</td>
                 <td>Subcategory</td>
                 <td>Price</td>
				  <td>Details</td>
						 
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		
		
		     $display .= 	"<tr>
							<td>{$row['Packid']}</td>
							<td>{$row['Packname']}</td>
							<td>{$row['Category']}</td>
							<td>{$row['Subcategory']}</td>
							 <td>{$row['Packprice']}</td>
							<td>{$row['Detail']}</td>
						</tr>";
	}

	$display .= "</table>";

	echo $display;
 }
?>
 
	
	
	
	
</div>
	</div>


 





<?php include('bottom.php'); ?>
 
</fieldset>
</body>
</html>