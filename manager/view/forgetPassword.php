<?php
    $myfile = fopen('../model/manager.json', 'r');
    $data = fread($myfile, filesize('../model/manager.json'));
    $userinfo = json_decode($data, true);

    if(isset($_POST['submit'])){

        $email = $_POST['confirmEmail'];
       

        if($email == ""){
            echo "Enter your email!";
        }
        elseif ($email==$userinfo['email']) {
           echo "you will get a message!";
        }

    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forget Password</title>
</head>
<body>
    <table border="1" width="100%" cellspacing="0">
        <tr>
            <td align="right" colspan="2">
                <h1 align="left">Tourism Management System</h1>
                <a href="index.html">Home</a>|
                <a href="managerLogin.html">Back</a>|
                <a href="../controller/logout.php">Logout</a>
            </td>
        </tr>
        <tr height = "400px">
            <td align="center">
                <form method="POST" action="">
                    <fieldset style="width: 20% " >
                        <legend>FORGET PASSWORD</legend>
                        <table >
                            <tr>
                                <td>Enter Email</td>
                                <td>:<input type="email" name="confirmEmail"></td>
                            </tr>
                            
                        </table>
                        <hr>
                        
                        <input type="submit" name="submit" value="Submit">
                        
                    </fieldset>
                </form>
                
            </td>
        </tr>
        <tr height = "30px">
            <td >
                <center> Copyright@2017 </center>
            </td>
        </tr>
    </table>
</body>
</html>