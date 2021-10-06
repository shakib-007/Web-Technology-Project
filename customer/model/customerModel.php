<?php
	
	require_once('db.php');

    function validateUser($username, $password){

		$conn = getConnection();

		$sql = "select * from customer where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}
	
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
		$sql = "insert into customer values('', '{$customers['name']}', '{$customers['username']}', '{$customers['password']}', '{$customers['email']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateCustomer($customers){

		$conn = getConnection();
		$sql = "update customer set name='{$customers['name']}',username='{$customers['username']}', password='{$customers['password']}',email='{$customers['email']}' where id='{$customers['id']}' ";
		
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