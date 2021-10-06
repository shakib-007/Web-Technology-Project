<?php
	$title= "View Cutomer";
	include('header.php');
?>
<table border="1" width="100%" cellspacing="0">
				<?php
					$myfile = fopen('../model/customer.json', 'r');
					$data = fread($myfile, filesize('../model/customer.json'));
					$userinfo = json_decode($data, true);
				?>
		<tr>
            <td align="right">
                <h1 align="left">Tourism Management System</h1>
                <a href="../controller/logout.php">Logout</a>|
                <a href="customerDetails.php">Back</a>
            </td>
        </tr>
		<tr height ="500px">
			<td align="center">
				<table border="1" width="100%">
					<tr>
						<td>Name</td>
						<td>Email</td>
						<td>Phone Number</td>
					</tr>
					<tr>
						<td><?php echo $userinfo['name'] ?></td>
						<td><?php echo $userinfo['email'] ?></td>
						<td><?php echo $userinfo['number'] ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr height = "30px">
            <td colspan="2">
                <center> Copyright@2021 </center>
            </td>
        </tr>
		
	</table>
</body>
</html>