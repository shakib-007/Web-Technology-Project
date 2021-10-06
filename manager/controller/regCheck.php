<?php
	require_once('../model/userModel.php');
	session_start();
	if(isset($_POST['submit']))
	{
		$_SESSION['name']=$_POST['name'];
		$_SESSION['email']=$_POST['email'];
		$_SESSION['gender']=$_POST['gender'];
		$_SESSION['date']=$_POST['dd'];
		$_SESSION['month']=$_POST['mm'];
		$_SESSION['year']=$_POST['yyy'];
		
		$i=0;
		
        
		if($_POST['username'] == "" ||$_POST['password'] == "" || $_POST['email']=="" || $_POST['name'] == "" || $_POST['conpass'] == ""){
			echo "Null submission!";
			
		}
		elseif (strlen($_POST['username'])<2) {
			echo "Username must be 2 characters";
			
		}
		elseif (strlen($_POST['password'])<5) {
			echo "Password must be 5 characters";
		
		}
		elseif ($_POST['username'][$i]>=0 && $_POST['username'][$i]<=9) {
				echo "1st letter in username must be in character!";
				
		}
		
		elseif (!isset($_POST['gender'])) {
			echo "please select Gender!";
		}
		 else{
			if($_POST['password']==$_POST['conpass'])
			{
				       
				            if(strlen($_POST['password']) >= 5)
				            {
				              for($j=0; $j<strlen($_POST['password']); $j++)
				              {
				                if(($_POST['password'][$j] == '@') || ($_POST['password'][$j] == '#') || ($_POST['password'][$j] == '$') || ($_POST['password'][$j] == '%') || ($_POST['password'][$j] == '!'))
				                	{
				                  
													$users=[
														'username'=>$_POST['username'],
														'password'=>$_POST['password'],
														'name'=>$_POST['name'],
														'email'=>$_POST['email'],
														
													];
													$status=insertUser($users);
													if ($status) {
														header('location: ../view/managerLogin.html');
													}
													else
													{
														echo "ERROR!";
													}
													
				                      }
				                      else 
				                      {
				                  		echo "Password must contain a special character";

				                	  }
				              }
				            }
				            
				        
			}
			else{
				echo "password & confirm password mismatch..";
			}
		}
		/*else{
			if($_POST['password']==$_POST['conpass'])
			{
				$data=[
					'user'=>$_POST['username'],
					'pass'=>$_POST['password'],
					'name'=>$_POST['name'],
					'email'=>$_POST['email'],
					'gender'=>$_POST['gender'],
					'date'=>$_POST['dd'],
					'month'=>$_POST['mm'],
					'year'=>$_POST['yyy'],
				];
				$user = json_encode($data);
				$myfile = fopen('../model/manager.json', 'w');
				$dataa = fwrite($myfile, $user);
				
				header('location: ../view/managerLogin.html');
			}else{
				echo "password & confirm password mismatch..";
			}
		}*/
		

	}
		

		
		
		/*$myfile = fopen('../model/manager.json', 'r');
		$data = fread($myfile, filesize('../model/manager.json'));
		$userinfo = json_decode($data, true);*/
		
	
?>