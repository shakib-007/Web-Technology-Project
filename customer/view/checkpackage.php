<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




 
</head>
<body>
 

<?php include('function.php'); ?>
 
<tr>
            <td align="right" colspan="2" class="hf">
                <h1 align="left" style="color: cornsilk">Tourism Management System</h1>
                
                <a href="../controller/logout.php" class="a1">Logout</a>
                <a href="customerDashboard.php" class="a1">Back</a>
            </td>
        </tr>
		 


 
 
  
 
 
 

 
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


 





 
 
</fieldset>
</body>
</html>