<?php
include("connection.php")
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("Location:index1.php");
?>
<html>
<head>
	<title>student</title>
	</head>
<body background-color="orange">
	<div align="right"><button type="submit">LOG OUT</button></div>

	<div>
		<button type="submit"><img src=""/>LIVE CLASS</button>
		
	</div>
</body>
</html>