<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Room</title>
    <link rel="stylesheet" type="text/css" href="../assests/style.css">
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
        <tr>
           
            <td align="right" colspan="2" class="hf">
                <h1 align="left" style="color: cornsilk">Tourism Management System</h1>
                <a href="index.html" class="a1">Home</a>
                <a href="../controller/logout.php" class="a1">Logout</a>
                <a href="roomdetails.php" class="a1">Back</a>
            </td>
           
        </tr>
        
        <tr height="500px">
            <td align="center">
             <form method="POST" action="confirm.php">
                <fieldset style="width: 50%" class="table">
                    <legend>Book Room</legend>
                    <table>
                        <tr>
                            <td>Customer Name:</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="email" name="email"></td>
                        </tr>
                        <tr>
                            <td>Phone Number:</td>
                            <td><input type="text" name="number"></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><textarea rows="5" cols="15"></textarea></td>
                        </tr>
                        <tr>
                            <td>Room Id:</td>
                            <td><input type="text" name="id"></td>
                        </tr>
                    <tr>
                        <td>Choose Room Type:</td>
                        <td>
                        <select name="choose">
                                        <option value="Single Room">Single Room</option>
                                        <option value="Double Room">Double Room</option>
                                        <option value="Triple Room">Triple Room</option>
                                        <option value="Quad">Quad</option>
                                        <option value="Deluxe Room">Deluxe Room</option>
                                        <option value="Twin">Twin</option>
                            
                        </select> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" class="button" name="submit" value="Confirm">
                            
                        </td>
                    </tr>
                     </table>
                </fieldset>
           </form>
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
<?php
	}else{
		echo "you didnot register";
		header('location: managerLogin.html');
	}
?>