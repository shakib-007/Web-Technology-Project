<?php
	

	$name = $_REQUEST['name'];

	$con = mysqli_connect('localhost', 'root', '', 'managerdb');
	$sql = "select * from room where id like '%{$name}%'";
	$result = mysqli_query($con, $sql);

	$response = "<table border=1 width='70%' cellspacing = 0 >
					<tr align = 'center'>
				            				<td>ID</td>
                                            <td>Type</td>
                                            <td>Price</td>
                                            <td>Status</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr align = 'center'>
				              <td>{$row['id']}</td>
							  <td>{$row['type']}</td>
				              <td>{$row['price']}</td>
				              <td>{$row['status']}</td>
				             
						</tr>";
	}

	$response .= "</table>";

	echo $response;

?>