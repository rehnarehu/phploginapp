<html>
<body>
<?php
session_start();
echo"sucessfully logged in as ";
$sg=$_SESSION['username'];
echo  "$sg";
?>
</body>
</html>

