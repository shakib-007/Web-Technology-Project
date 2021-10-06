<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Room List</title>
    <script type="text/javascript" src="js/searchRoom.js"></script>
    <link rel="stylesheet" type="text/css" href="../assests/style.css">
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
        <tr>
            <td align="right" colspan="2" class="hf">
                <h1 align="left" style="color: cornsilk">Tourism Management System</h1>
                <a href="index.html" class="a1">Home</a>
                <a href="../controller/logout.php" class="a1">Logout</a>
                <a href="managerDashboard.php" class="a1">Back</a>
            </td>
        </tr>
        
        <tr height="500px">
            <td align="center">
            
               
                <h3 style="color: blue">Room List</h3>
                <input size="152" type="text" name="name" id="name" onkeyup="search()">
                <input type="button" class="button" name="" value="Search">
                <br>
                <div id="result" class="table">
                            <?php  
                             require_once('../model/roomModel.php');
                             $row=getAllRoom();
                                echo "<table border=1 cellspacing=0 width=70%> 
                                        <tr>
                                            <td>ID</td>
                                            <td>Type</td>
                                            <td>Price</td>
                                            <td>Status</td>
                                            
                                        </tr> ";
                
                                for ($i=0; $i < count($row); $i++) { 
                                    echo    "<tr>
                                            <td>{$row[$i]['id']}</td>
                                            <td>{$row[$i]['type']}</td>
                                            <td>{$row[$i]['price']}</td>
                                            <td>{$row[$i]['status']}</td>
                                            
                                            
                                        </tr>";
                                }
                                
                
                                echo "</table>";

                            ?>
                </div>
                
           
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
<?php
	}else{
		echo "you didnot register";
		header('location: managerRegistration.html');
	}
?>