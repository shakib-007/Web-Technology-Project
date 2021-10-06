<?php 

	require_once('../model/userModel.php');
	if (isset($_POST['update'])) {
		if($_POST['id'] == "" ||$_POST['username'] == ""||$_POST['password']=="" ||$_POST['name']=="" ||$_POST['email'] == "" ){
			echo "Null submission!";
		}
		else{

													$users=[
														'id'=>$_POST['id'],
														'username'=>$_POST['username'],
														'password'=>$_POST['password'],
														'name'=>$_POST['name'],
														'email'=>$_POST['email'],
														
													];
													$status=updateUser($users);
													if ($status) {
														header('location: ../view/displayManager.php');

													}
													else
													{
														echo "ERROR!";
													}
												}
	}


 ?>