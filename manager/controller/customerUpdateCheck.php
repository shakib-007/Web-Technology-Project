<?php 

	require_once('../model/customerModel.php');
	if (isset($_POST['update'])) {
		if($_POST['id'] == "" ||$_POST['name'] == "" ||$_POST['email'] == "" || $_POST['number']=="" ){
			echo "Null submission!";
		}
		elseif (strlen($_POST['name'])<=2) {
			echo "name must be 2 characters!";
		}
		elseif (strlen($_POST['number'])<11 && strlen($_POST['number'])>11) {
			echo "number must be 11 digits!";
		}
		else{
													$customers=[
														'id'=>$_POST['id'],
														
														'name'=>$_POST['name'],
														'email'=>$_POST['email'],
														'number'=>$_POST['number'],
														
													];
													$status=updateCustomer($customers);
													if ($status) {
														header('location: ../view/customerList.php');

													}
													else
													{
														echo "ERROR!";
													}
		}

													
	}


 ?>