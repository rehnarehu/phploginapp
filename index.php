<html>
<body>
<font color="blue">
<center><h1>ADMIN LOGIN</h1></center></font>
<form action='index.php' method='POST'><center>
Username: <input type='text' name='username'><br /></center>
<center>Password: <input type='password' name='password'><br /></center>
<center><input type='submit' value='log in' /></center>
</form>
<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
if($username && $password)
{
$servername = "localhost";
$name = "root";
$word = "freeware";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $name, $word, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
       }

$query= mysqli_query($conn,"SELECT * From login WHERE username='$username'");
$numrows = mysqli_num_rows($query);

	if ($numrows!=0)
	{
	 while ($row = mysqli_fetch_assoc($query))
	 	{
			$dbusername = $row['username'];
			$dbpassword = $row['password'];

		}

		if($username==$dbusername&&$password==$dbpassword)
		{
		
                     header('location:home.php');
			$_SESSION['username']=$username;
		}
		else
		 echo "Incorrect password!";
		
	}




}
else

 echo "enter password and username";
?>
</html>
