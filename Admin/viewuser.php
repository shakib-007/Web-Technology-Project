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

<legend>VIEW USER  </legend>

 

   <form name="form" method="post">
     <input type="text" name="name" id="name" onkeyup="viewuser()"/>
      

<input type="submit" value="Search" name="sbmt" /></td></tr>
 
	
	
	
	
	<?php
  if(isset($_POST["sbmt"]))
 {
		
	$name = $_REQUEST['name'];

	$con = mysqli_connect('localhost', 'root', '', 'travel');
	$sql = "select * from users where name like '%{$name}%'";
	$result = mysqli_query($con, $sql);

	$display = "<table border=1>
					<tr>
						<tr><td>ID</td>
                 <td>  Name</td>
                   <td> User Name</td>
                  
						 
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		
		
		$display .= 	"<tr>
							<td>{$row['id']}</td>
							<td>{$row['name']}</td>
							<td>{$row['user_name']}</td>
							 
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