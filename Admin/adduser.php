<?php if(!isset($_SESSION)) { session_start(); } ?>
 
<html>
<head>
<title></title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <script src = './javascript/script.js'></script>

 
</head>
<body>
 

<?php include('function.php'); ?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into users values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["s1"] . "')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
?>



<?php include('top.php'); ?>
 
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">


 <form name="myForm"action="addcheck.php" method="post" onsubmit="return validateadduser()">
 
 
<table border="0" width="400px" height="300px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Add User

<?php if (isset($_GET['error'])) { ?>
     		  <p class="error"> <?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>





</td></tr>

<tr>
<td class="lefttxt">  Name</td>
<td>
 
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" name='name' id='name'   value="<?php echo $_GET['name']; ?>"> 
          <?php }else{ ?>
               <input type="text"  name="name">
                       
                     
          <?php }?>
</td>
</tr>



<tr>
<td class="lefttxt"> User  Name</td>
<td>
 
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" name='uname' id='uname'   value="<?php echo $_GET['uname']; ?>"> 
          <?php }else{ ?>
               <input type="text"  name="uname">
                       
                     
          <?php }?>
</td>
</tr>









<tr>
<td class="lefttxt">Password</td>
<td>
 <input type="password" name="password"  id = "pswd" value = "">
              <span id = "message" style="color:red"> </span>    

</td>
</tr>


<tr><td class="lefttxt">Confirm Password</td>
<td>
 <input type="password"name="re_password" id = "pswd1" value = "">
		  <span id = "message" style="color:red"> </span>  

</td>
</tr>


 <tr><td>&nbsp;</td><td ><button type="submit"> ADD USER </button></td></tr>
	 




</table>
</form>



</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>