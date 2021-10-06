<?php
	
	require_once('db.php');

	
	function getAllCustomer(){
		$conn = getConnection();
		$sql = "select * from customer";
		$result = mysqli_query($conn, $sql);
		$customers =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($customers, $row); 
		}

		return $customers;
	}

	function insertCustomer($customers){

		$conn = getConnection();
		$sql = "insert into customer values('', '{$customers['name']}', '{$customers['email']}', '{$customers['number']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateCustomer($customers){

		$conn = getConnection();
		$sql = "update customer set cName='{$customers['name']}',cEmail='{$customers['email']}', cNumber='{$customers['number']}' where id='{$customers['id']}' ";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteCustomer($id){
		$conn = getConnection();
		$sql = "delete from customer where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>