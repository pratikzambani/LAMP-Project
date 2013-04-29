<html>
<body>
<?php
session_start();
if($_SESSION['username'] != 'pratik')
{
	if(isset($_SESSION['loggedin']))
	{
		header('Location: home.php');
		die();
	}
	header('Location: login_form.php');
	die();
}
$_SESSION['current_viewing_page']= "listofemployees";
include("config.php");

$query="select Ename,Designation,Salary,Contactno from EMPLOYEE;";

$result=mysql_query($query);
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Designation</th>
<th>Salary</th>
<th>Contactno</th>
<th></th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Ename'] . "</td>";
  echo "<td>" . $row['Designation'] . "</td>";
  echo "<td>" . $row['Salary'] . "</td>";
  echo "<td>" . $row['Contactno'] . "</td>";
  echo "<td> <a href='editemployee.php?name=".$row['Ename']."'<button> EDIT </button></a></td>";
  echo "</tr>";
  }
echo "</table><br/><br/>";

print "<a style='text-decoration:none' href='home.php'<button>Back to Home Page</button> </a>";

 

?>
</body>
</html>
