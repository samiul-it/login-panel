
<?php

$conn = mysqli_connect("localhost","root","","logindb");

if(!$conn)
{
	echo "Database connection faild...";
}
$email = $password = $pwd = '';

$email = $_POST['email'];
$pwd = $_POST['password'];
$password = ($pwd);
$sql = "SELECT * FROM users WHERE Email='$email' AND Password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		
		
	}
	echo "<center><h1>Log in Success!</h1></center>";
}
else
{
	echo "Log in Unsuccessfull";
    echo "Invelid Credentials...";
}
?>