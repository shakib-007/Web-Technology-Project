<?php
	
	require_once('db.php');

	
	function getAllRoom(){
		$conn = getConnection();
		$sql = "select * from room";
		$result = mysqli_query($conn, $sql);
		$rooms =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($rooms, $row); 
		}

		return $rooms;
	}

	function insertRoom($rooms){

		$conn = getConnection();
		$sql = "insert into room values('{$rooms['id']}', '{$rooms['type']}', '{$rooms['price']}', '{$rooms['status']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateRoom($rooms){

		$conn = getConnection();
		$sql = "update room set type='{$rooms['type']}',price='{$rooms['price']}', status='{$rooms['status']}' where id='{$rooms['id']}' ";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteRoom($id){
		$conn = getConnection();
		$sql = "delete from room where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>