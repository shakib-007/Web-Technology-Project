<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
    <script src="js/customerDelete.js"></script>
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
        <tr height = "500px">
            				<td align="left" width="300px" >
               
                            		<h3 style="color: blue">Logged in as Customer</h3>
                                    <hr size="1" style="color: cyan">
                                    <ul>
                                            <li><a href="customerDashboard.php">Dashboard</a></li>
                                            <li><a href="viewprofile.php">View Profile</a></li>
                                            <li><a href="editprofile.php">Edit Profile</a></li>
                                            <li><a href="deleteCustomer.php">Delete Customer</a></li>
                                            <li><a href="displayCustomer.php">Customer Information</a></li>                 
                                            <li><a href="roomdetails.php">Room Details</a></li>                 
                                            <li><a href="../controller/logout.php">Logout</a></li>
                                    </ul>
                            	
                                                                                                    
           					 </td>
            					<td height="300px"  align="center">
                                    <br>
                            <form method="POST" action="../controller/customerDeleteCheck.php" onsubmit="return customerDeleteValidation()">
                                    <fieldset style="width: 30%" class="table">
                                        <legend> DELETE CUSTOMER</legend>
                                        <table>
                                            <tr>
                                                <td>
                                                    Id:
                                                </td>
                                                <td>
                                                    <input type="text" id="id" name="id"  >
                                                </td>
                                              </tr>
                                              <tr>
                                                  <td colspan="2"><hr></td>
                                              </tr> 
                                                
                                           
                                            
                                            <tr>
                                                <td colspan="2"> 
                                                    <input type="submit" class="button" name="delete" value="Delete">
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </form>
                                    <br> 
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
		header('location: customerRegistration.html');
	}
?>