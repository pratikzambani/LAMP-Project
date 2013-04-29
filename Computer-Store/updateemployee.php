<html>
<body>

<?php
session_start();
//include('config.php');
$mysql_hostname="localhost";
$mysql_user="root";
$mysql_password="pratik@123";
$mysql_database="KeshwaniComputers";
$con=mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Oops connection not established");
$mysql_select_db($mysql_database) or die("Oops something went wrong");

#$id=$_GET['id'];
$username=$_POST['username'];
$designation=$_POST['designation'];
$salary=$_POST['salary'];
$contactno=$_POST['contactno'];
echo $salary;
echo $contactno;
echo $username;
#$query="update EMPLOYEE SET Designation='$designation',Salary='$salary',Contactno='$contactno' where Ename='$username';";
$query="UPDATE EMPLOYEE SET Designation={$designation}, Salary={$salary},Contactno={$contactno} where Ename={$username};";
echo "testbefore";
$result=$mysql_query($query,$con);
echo "testafter";
echo "Record updated";

print "<a style=text-decoration:none href='homeadmin'<button>Back to Home Page</button></a>";

?>



</body>
</html>
