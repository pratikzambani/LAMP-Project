<html>
<body>
<?php
session_start();

$username=$_POST['username'];
$password=$_POST['password'];
echo $username,$password;
if(($username == 'pratik' && $password == 'pratik@123') || $_SESSION['loggedin'] == 1)
{
	//session_regenerate_id();
	$_SESSION['loggedin']=1;
	$_SESSION['username']=$username;
	echo "Successfully logged in admin <br /> <br />";
#	header('Location: home.php');	

}
else
{
	echo "Check";
//	include('config.php');
        $mysql_hostname="localhost";
	$mysql_user="root";
	$mysql_password="pratik@123";
	$mysql_database="KeshwaniComputers";
	$con=mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Oops connection not established");
	$mysql_select_db($mysql_database) or die("Oops something went wrong");
	echo $username,$password
	$username=mysql_real_escape_string($username);
	$query="select password from EMPLOYEE where username={$username};";
	$result=mysql_query($query,$con);
	echo "check2";
	function validateUser()
	{
//		session_regenerate_id();
		$_SESSION['loggedin']=2;
		$_SESSION['username']=$username;
	}
	if(mysql_num_rows($result) != 1)
	{
		header('Location: login_form.php');
		die();
	}

	$userData=mysql_fetch_array($result,MYSQL_ASSOC);
	$hash=hash('sha256',$password);
#	$hash=hash('sha256',$userData['salt'].hash('sha256',$password));

	if($hash != $userData['password'])

	{
		header('Location: login_form.php');
		die();
	}

		validateUser();
		echo "Successfully logged In employee";
	header('Location: home.php');
}
#print "<br/><br/><br/><a style='text-decoration:none' href='logout.php'><button>Logout</button></a>";

?>
</body>
</html>

