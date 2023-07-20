<?php 

echo 'stop';
$_GET['stop']='stop';
 $te= $_GET['stop'];

$host = "localhost";
$dbname="remoter";
$username="root";
$password="";

$conn = mysqli_connect($host, $username , $password , $dbname);

if(mysqli_connect_errno()){
	die("connection error:".mysqli_connect_error());
}

$sql = " INSERT INTO robotdirection (direction)
		values (?);";
		
$stmt = mysqli_stmt_init($conn);

if (! mysqli_stmt_prepare($stmt,$sql)){
	die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt , "s",
						$te );

mysqli_stmt_execute($stmt);

?>
