<?php
	

	$name = $_REQUEST['name'];

	$con = mysqli_connect('localhost', 'root', '', 'managerdb');
	$sql = "select * from customer where cName like '%{$name}%'";
	$result = mysqli_query($con, $sql);

	$response = "<table border=1 width='70%' cellspacing = 0 >
					<tr align = 'center'>
				            				<td>ID</td>
											<td>Name</td>
											<td>Email</td>
											<td>Number</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr align = 'center'>
				              <td>{$row['id']}</td>
							  <td>{$row['cName']}</td>
				              <td>{$row['cEmail']}</td>
				              <td>{$row['cNumber']}</td>
				             
						</tr>";
	}

	$response .= "</table>";

	echo $response;

?>