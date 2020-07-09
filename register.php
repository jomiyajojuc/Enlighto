<?php
include("connection.php");
if(isset($_POST['submit'])){

	$name=			$_POST['name'];
	$email=			$_POST['email'];
	$password=		$_POST['password'];
	$con_password=	$_POST['confirm_password'];

	
	$sql="INSERT INTO register(name,email,password) VALUES('$name','$email','$password')";

	if($conn->query($sql)==TRUE){

			header('location:profile.php');
		
		}
		else{
		echo "Error".$sql."<br>".$conn->connect_error;
	}


	
}

?>
