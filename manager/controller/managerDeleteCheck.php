<?php 

	require_once('../model/userModel.php');
	if (isset($_POST['delete'])) {
		$id=$_POST['id'];

		$status=deleteUser($id);
		if ($status) {
				header('location: ../view/displayManager.php');

					}
			else
				{
					echo "ERROR!";
				}											
													
	}


 ?>