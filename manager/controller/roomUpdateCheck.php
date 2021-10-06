<?php 

	require_once('../model/roomModel.php');
	if (isset($_POST['update'])) {
		
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
				$status=updateRoom($rooms);
				if ($status) {
					header('location: ../view/roomList.php');
					
				}
				else{
					echo "ERROR!";
				}
				
			

													
	}
}

 ?>