<?php
	session_start();
	require_once('../model/customerModel.php');
	if(isset($_POST['submit'])){

		
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{
			$status=validateUser($username,$password);

			if($status){
				$_SESSION['flag'] = true;
				header('location: ../view/customerDashboard.php');
			}else{
				echo "invalid user";
			}
		}

	}
?>