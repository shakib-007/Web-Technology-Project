<?php 

	require_once('../model/customerModel.php');
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
													$status=updateCustomer($users);
													if ($status) {
														header('location: ../view/displayCustomer.php');

													}
													else
													{
														echo "ERROR!";
													}
												}
	}


 ?>