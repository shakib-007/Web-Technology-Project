<?php 

	require_once('../model/roomModel.php');
	if (isset($_POST['delete'])) {
		if ($_POST['id']=="") {
			echo "Null Submission!";
		}
		elseif (!is_numeric($_POST['id'])) {
			echo "string must be numeric!";
		}

		else{
			$id=$_POST['id'];

			$status=deleteRoom($id);
			if ($status) {
					header('location: ../view/roomList.php');

						}
				else
					{
						echo "ERROR!";
					}
		}
													
													
	}


 ?>