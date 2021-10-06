<?php

	session_start();
	unset($_SESSION['flag']);
	header('location: ../view/customerRegistration.html');

?>