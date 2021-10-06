<?php 

	require_once('../model/customerModel.php');
	if (isset($_POST['delete'])) {
		if ($_POST['id']=="") {
			echo "Null Submission!";
		}
		else{
			$id=$_POST['id'];

			$status=deleteCustomer($id);
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