<?php
include("connection.php");
session_start(); 
	if(isset($_POST['login']))
	{

	$name=			$_POST['username'];
	$password=		$_POST['password'];

		$sql="SELECT * FROM sturegister WHERE  name='$name' and password = '$password'";
	

	
		$result = mysqli_query($conn,$sql);
		
		$row  = mysqli_fetch_array($result);

	
	if(is_array($row)) {

		$_SESSION["id"] = $row['id'];
		$_SESSION["name"] = $row['name'];

		//if(!empty($_POST["remember"])){
		//	setcookie("member_username",$_POST["username"],time()+(10*365*24*60*60));
		//	setcookie("member_password",$_POST["password"],time()+(10*365*24*60*60));
		//}
		//else{
		//	if(isset($_COOKIE['member_username'])){
		//		setcookie("member_username","");
		//	}
		//	if(isset($_COOKIE['member_password'])){
		//		setcookie("member_password","");
		//	}
		//}
		header("Location:login.php");
	} 

	else {
			$message = "Invalid Username or Password!";
	}
}

if(isset($_SESSION["id"])) {
	

	if($row['status']=='Approved'){

		header("Location:mainpage.php");

		}
		else{
			header("Location:loginerror.php");
		}
	}
else{
	header("Location:error.php");
}
?>