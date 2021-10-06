<!DOCTYPE html>
<html>
<head>
	<title>Customer List</title>
    <script type="text/javascript" src="js/searchCustomer.js"></script>
    <link rel="stylesheet" type="text/css" href="../assests/style.css">
</head>
<body>
<table border="1" width="100%" cellspacing="0">
				
		<tr>
            <td align="right" colspan="2" class="hf">
                <h1 align="left" style="color: cornsilk">Tourism Management System</h1>
                
                <a href="../controller/logout.php" class="a1">Logout</a>
                <a href="customerDashboard.php" class="a1">Back</a>
            </td>
        </tr>
		<tr height ="500px">
			<td align="center">
				<h3 style="color: blue">Customer Information List</h3>
				<input size="152" type="text" name="name" id="name" onkeyup="search()">
				<input type="button" class="button" name="" value="Search">

				<br>

				<div id="result" class="table">
							<?php  
							 require_once('../model/customerModel.php');
							 $row=getAllCustomer();
								echo "<table border=1 cellspacing=0 width=70%> 
										<tr>
											<td>ID</td>
											<td>Name</td>
											
											<td>Username</td>
											
											<td>Email</td>
										</tr> ";
				
								for ($i=0; $i < count($row); $i++) { 
									echo 	"<tr>
											<td>{$row[$i]['id']}</td>
											<td>{$row[$i]['name']}</td>
											
											<td>{$row[$i]['username']}</td>
											
											
											<td>{$row[$i]['email']}</td>
										</tr>";
								}
								
				
								echo "</table>";

							?>
				</div>
				
			</td>
		</tr>
		<tr height = "30px" class="hf">
            <td colspan="2">
                <center> Copyright@2021 </center>
            </td>
        </tr>
		
	</table>
</body>
</html>