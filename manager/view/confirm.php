<?php
	if (isset($_POST['submit'])) 
	{
		if($_POST['number'] == "" ||$_POST['id'] == "" || $_POST['email']=="" || $_POST['name'] == "" ){
            echo "Null submission!";
            
        }
        elseif (strlen($_POST['name'])<3) {
            echo "name must be 3 characters!";
        }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Recipt</title>
    <link rel="stylesheet" type="text/css" href="../assests/style.css">
</head>
<body>
    <table border="1" width="50%" cellspacing="0" class="table">
        <tr>
            <td align="right" colspan="2" class="hf">
                <h1 align="left" style="color: cornsilk">Tourism Management System</h1>
                <a href="index.html" class="a1">Home</a>
                <a href="../controller/logout.php" class="a1">Logout</a>
                <a href="bookroom.php" class="a1">Back</a>
            </td>
        </tr>
        <tr>
        	<td colspan="2">
        		<p>Here is Customer Information Who book room</p>
        	</td>
        </tr>
        <tr>
        	<td>Name</td>
        	<td><?php echo $_POST['name'] ?></td>
        </tr>
        <tr>
        	<td>Room Id</td>
        	<td><?php echo $_POST['id'] ?></td>
        </tr>
        <tr>
        	<td>Email</td>
        	<td><?php echo $_POST['email'] ?></td>
        </tr>
        <tr>
        	<td>Phone Number</td>
        	<td><?php echo $_POST['number'] ?></td>

        </tr>
        <tr>
            <td>Room Type</td>
            <td><?php echo $_POST['choose'] ?></td>

        </tr>
        <tr>
        	<td colspan="2" align="center">
        		<p style="color: blue">Thank You!</p>
        	</td>
        </tr>
        <tr height = "30px" class="hf">
            <td colspan="2">
                <center> Copyright@2017 </center>
            </td>
        </tr>
    </table>
</body>
</html>