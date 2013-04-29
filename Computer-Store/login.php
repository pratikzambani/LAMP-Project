<?php
session_start();
echo "Check0";
$username=$_POST['username'];
$password=$_POST['password'];

echo "Check1";
echo $username,$password;


echo "Check3";

echo "<br/>";
if(($username == "pratik" && $password == "pratik@123"))
{
	echo "Check4";
	$_SESSION['loggedin'] =1;
	$_SESSION['username']=$username;
	echo "successfully logged in as admin";
	header('Location: home.php');
}
else
{

include('config.php');

$query="select password from EMPLOYEE WHERE Ename='$username';";

$result=mysql_query($query);

if(mysql_num_rows($result) != 1)
{
	header('Location: login_form.php');
	die();
}
$userdata = mysql_fetch_array($result,MYSQL_ASSOC);
$hash = hash('sha256',$password);

if($hash != $userdata['password'])
{
	header('Location: login_form.php');
	die();
}
$_SESSION['loggedin'] =2;
$_SESSION['username'] = $username;



print_r($_SESSION);
header('Location: home.php');
}
?>
