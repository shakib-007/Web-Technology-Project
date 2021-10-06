<?php
	require_once('../model/roomModel.php');
	if(isset($_POST['insert']))
	{
		
		
		

		if($_POST['id'] == "" ||$_POST['price'] == ""){
			echo "Null submission!";
		}
		
		else{

			
				$rooms=[
					
					'id'=>$_POST['id'],
					'type'=>$_POST['type'],
					'price'=>$_POST['price'],
					'status'=>$_POST['status'],

				];
				$status=insertRoom($rooms);
				if ($status) {
					header('location: ../view/roomList.php');
					
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