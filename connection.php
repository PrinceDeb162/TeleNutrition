<!DOCTYPE>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>connection</title>
	</head>

<body>
<?php 

$db = mysqli_connect('localhost','root','','cse499');
if (!$db){ 
       echo "connection failed";
}
error_reporting(0);

?>
</body>
</html>