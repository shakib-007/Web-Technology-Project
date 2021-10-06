<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	      

	        $uname =  ($_POST['uname']);
	$pass =  ($_POST['password']);

	$re_pass =  ($_POST['re_password']);
	$name =  ($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	              
	
	    for($i=0;$i<strlen($uname);$i++)
        {
            if(!((ord($uname[$i]) >= 97 && ord($uname[$i]) <= 122)) && !((ord($uname[$i]) >= 65 && ord($uname[$i]) <= 90))  && !((ord($uname[$i]) >= 48 && ord($uname[$i]) <= 57)))
            {
                header("Location: adduser.php ?success= username is required &$user_data");
                return;
            }
        }
	
	
	
	
	       if( $pass == "" ){
        header("Location: adduser.php?success=Password is required&$user_data");
	    exit();
	}
	            else if( $re_pass == ""){
        header("Location: adduser.php?success=Re Password is required&$user_data");
	    exit();
	}

	      else if($name == ""){
        header("Location:adduser.php?success=Name is required&$user_data");
	    exit();
	}
	
	     else  if($pass < 6){
		
        header("Location: adduser.php ?success=The  password   must be atleast 6 character &$user_data");
	    exit();
	                                               }
	

	              else  if($pass != $re_pass){
		
                  header("Location: adduser.php");
	    exit();
	}
	 
	                     

	else{

		 
       

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location:adduser.php ?success=The username is already taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
			   
			   
    
 
			   
			   
           	 header("Location: adduser.php ");
	         exit();
           }else {
	           	header("Location: adduser.php?success=unknown success occurred&$user_data");
		        exit();
           }
		   
		   
	        $_SESSION['name'] = $name;
			$_SESSION['uname'] = $uname;
           $_SESSION['password'] = $password;
		     $_SESSION['flag'] = true;
			 header("Location: index.php");
		}
	}
	
}else{
	header("Location: signup.php");
	
	
	 
	exit();
}