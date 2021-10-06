 
<html>
<head>
 
<title></title>
</head>

<body>

<?php include('function.php'); ?>
<?php

	$cn=makeconnection();
	$s="update enquiry set statusfield='Confirm' where enquiryid='" . $_GET["eid"] . "'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
header("location:viewenquiry.php");
?>
</body>
</html>