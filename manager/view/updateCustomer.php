<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Customer</title>
  <script type="text/javascript" src="js/customerUpdate.js"></script>
   <link rel="stylesheet" type="text/css" href="../assests/style.css">
</head>
<body>

	<table border="1" width="100%" cellspacing="0">
        <tr>
             <td align="right" colspan="2" class="hf">
                <h1 align="left" style="color: cornsilk">Tourism Management System</h1>
                
                <a href="../controller/logout.php" class="a1">Logout</a>
                <a href="managerDashboard.php" class="a1">Back</a>
            </td>
        </tr>
        <tr height = "500px">
            				<td align="left" width="300px" >
               
                            		 <h3 style="color: blue">Logged in as Manager</h3>
                                    <hr size="1" style="color: cyan">
                                    <ul>
                                        <li><a href="managerDashboard.php">Dashboard</a></li>
                                        <li><a href="viewprofile.php">View Profile</a></li>
                                        <li><a href="editprofile.php">Edit Profile</a></li>
                                        <li><a href="deleteManager.php">Delete Manager</a></li>
                                        <li><a href="displayManager.php">Manager Information</a></li>
                                        <li><a href="addCustomer.php">Insert Customer</a></li>
                                        <li><a href="updateCustomer.php">Update Customer</a></li>
                                        <li><a href="deleteCustomer.php">Delete Customer</a></li>
                                        <li><a href="roomdetails.php">Room Details</a></li>
                                        <li><a href="roomList.php">Room List</a></li>
                                        <li><a href="addRoom.php">Add Room</a></li>
                                        <li><a href="updateRoom.php">Update Room</a></li>
                                        <li><a href="deleteRoom.php">Delete Room</a></li>
                                        <li><a href="customerList.php">View Customer List</a></li>
                                        <li><a href="../controller/logout.php">Logout</a></li>
                                    </ul>
                            	
                                                                                                    
           					 </td>
            					<td height="300px"  align="center">
                                    <br>
                            <form method="POST" action="../controller/customerUpdateCheck.php" onsubmit="return updateCustomerValidation()">
                                    <fieldset style="width: 30%" class="table">
                                        <legend> UPDATE CUSTOMER</legend>
                                        <table>
                                                <tr>
                                                  <td>Id</td>
                                                  <td>:<input type="text" id="id" name="id" value="">  </td>
                                                  <td><span id="error1"></span></td>
                                                </tr>
                                               <tr>
                                                <td colspan="2"><hr></td>
                                               </tr>
                                                <tr>
                                                  <td>Name</td>
                                                  <td>:<input type="text" id="name" name="name" value="">  </td>
                                                  <td><span id="error2"></span></td>
                                                </tr>
                                               <tr>
                                                <td colspan="2"><hr></td>
                                               </tr>
                                                <tr>
                                                  <td>Email</td>
                                                  <td>:<input type="email" id="email" name="email" value="">  </td>
                                                  <td><span id="error3"></span></td>
                                                </tr>
                                               <tr>
                                                <td colspan="2"><hr></td>
                                               </tr>
                                                <tr>
                                                  <td>Phone Number</td>     
                                                  <td>:<input type="text" id="number" name="number" value="">  </td>
                                                  <td><span id="error4"></span></td>
                                                </tr>
                                                <tr>
                                                <td colspan="2"><hr></td>
                                               </tr>
                                               <tr>
                                                <td colspan="2">
                                                    <input type="submit" class="button" name="update" value="Update">
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
                <center> Copyright@2021 </center>
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