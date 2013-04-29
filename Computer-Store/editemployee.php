<html>
<body>

<?php

session_start();
#if($_SESSION['username'] != 'pratik')
#{
#	if(isset
#} 



include('config.php');
$name=$_GET['name'];
$query="select Ename,Designation,Salary,Contactno from EMPLOYEE where Ename = '$name';";

$result=mysql_query($query);
$row=mysql_fetch_array($result);


?>

<form name="update" action="updateemployee.php" method="post">
UserName:  <input type="text" name="username" value='<?php echo $row['Ename'] ?>' /> <br/>
Designation : <input type="text" name="designation" value='<?php echo $row['Designation'] ?>' /> <br/>
Salary: <input type="text" name="salary" value='<?php echo $row['Salary'] ?>' /> <br/>
Contactno: <input type="text" name="contactno" value='<?php echo $row['Contactno'] ?>' /><br/>

<input type="submit" value="update" />
</form>

<?php print "<a style='text-decoration:none' href='home.php' <button>Back to Home Page</button></a>"; ?>
<?php print "<br/><br/><br/><a style='text-decoration:none' href='logout.php'><button>Logout</button></a>"; ?>

</body>
</html>
