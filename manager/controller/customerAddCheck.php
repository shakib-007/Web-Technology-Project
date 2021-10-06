<?php
	require_once('../model/customerModel.php');
	if(isset($_POST['insert']))
	{
		
		
		

		if($_POST['name'] == "" ||$_POST['email'] == "" || $_POST['number']=="" ){
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
					
					'name'=>$_POST['name'],
					'email'=>$_POST['email'],
					'number'=>$_POST['number'],
				];
				$status=insertCustomer($customers);
				if ($status) {
					header('location: ../view/customerList.php');
					
				}
				else{
					echo "ERROR!";
				}
				
			
		}
		
		
		/*$myfile = fopen('../model/manager.json', 'r');
		$data = fread($myfile, filesize('../model/manager.json'));
		$userinfo = json_decode($data, true);*/
	}
?>