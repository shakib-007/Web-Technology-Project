<?php
	

	$name = $_REQUEST['name'];

	$con = mysqli_connect('localhost', 'root', '', 'managerdb');
	$sql = "select * from user where name like '%{$name}%'";
	$result = mysqli_query($con, $sql);

	$response = "<table border=1 width='70%' cellspacing = 0 >
					<tr align = 'center'>
				            <td>ID</td>
				            <td>Name</td>
				            <td>Email</td>
				            <td>Username</td>
				            
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr align = 'center'>
				              <td>{$row['id']}</td>
							  <td>{$row['name']}</td>
				              <td>{$row['email']}</td>
				              <td>{$row['username']}</td>
				              
						</tr>";
	}

	$response .= "</table>";

	echo $response;

?>