<?php
echo "check0";
session_start();
echo "check1";
if($_SESSION['loggedin'] != 1)
{
	if(isset($_SESSION['loggedin'])
	{
		header('Location: home.php');
		die();
	}
	header('Location: login_form.php');
	die();
}
echo "check2";
include('config.php');
$username = $_POST['username'];
$designation = $_POST['designation'];
$salary = $_POST['salary'];
$contactno = $_POST['contactno'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
if($pass1 != $pass2)
    header('Location: register_form.php');
if(strlen($username) > 30)
    header('Location: register_form.php');
echo "check3";
$hash=hash('sha256',$pass1);
$username=mysql_real_escape_string($username);
$query="insert into EMPLOYEE(Ename, Designation,Salary,Contactno,password) values('$username','$designation',$salary,'$contactno','$hash');";
echo "check4";
mysql_query($query) or die(mysql_error());
mysql_close();
echo "new user registered";
print "<a style='text-decoration:none' href='home.php' Back to Home Page </a>";
print "<br/><br/><a style='text-decoration:none' href='logout.php'><button>logout</button></a>";
?>

