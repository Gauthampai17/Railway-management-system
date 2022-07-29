<html>
<body style=" background-image: url(adminlogin.jpeg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">

<?php

require "db.php";

$cdquery="SELECT emailid,mobileno,dob FROM user_view";
$cdresult=mysqli_query($conn,$cdquery);
echo "
<table>
<thead><td>Email_Id</td><td>Mobile_no</td><td>Date_Of_Birth</td><td></td><td></td></thead>
";

while ($cdrow=mysqli_fetch_array($cdresult)) 
{
	echo "
<tr><td>".$cdrow[0]."</td><td>".$cdrow[1]."</td><td>".$cdrow[2]."</td></tr>";
}
echo "</table>";

echo " <br><a href=\"http://localhost/railway/admin_login.php\">Go Back to Admin Menu!!!</a> ";
?>
</body>
</html>
