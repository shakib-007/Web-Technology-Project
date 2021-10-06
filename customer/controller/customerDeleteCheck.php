<?php 

	require_once('../model/customerModel.php');
	if (isset($_POST['delete'])) {
		$id=$_POST['id'];

		$status=deleteCustomer($id);
		if ($status) {
				header('location: ../view/displayCustomer.php');

					}
			else
				{
					echo "ERROR!";
				}											
													
	}


 ?>