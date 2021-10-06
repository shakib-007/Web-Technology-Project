<?php
	

	$name = $_REQUEST['name'];

	$con = mysqli_connect('localhost', 'root', '', 'customerdb');
	$sql = "select * from customer where name like '%{$name}%'";
	$result = mysqli_query($con, $sql);

	$response = "<table border=1 width='70%' cellspacing = 0 >
					<tr align = 'center'>
				            				<td>ID</td>
											<td>Name</td>
											<td>Username</td>
											
											<td>Email</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr align = 'center'>
				              <td>{$row['id']}</td>
							  <td>{$row['name']}</td>
							  <td>{$row['username']}</td>
							  
				              <td>{$row['email']}</td>
				              
				             
						</tr>";
	}

	$response .= "</table>";

	echo $response;

?>