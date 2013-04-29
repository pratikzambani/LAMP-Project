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

?>



<html>
<body>
<h1> User Registration Page </h1>
<form name="register" action="register.php" method="post">
    UserName:         <input type="text" name="username" maxlength="30" /><br />
    Designation:      <input type="text" name="designation" /> <br />
    Salary:           <input type="text" name="salary" /> <br />
    Contact no:       <input type="text" name="contactno" /> <br />
    Password:         <input type="password" name="pass1" /> <br />
    Confirm Password: <input type="password" name="pass2" /> <br />
    <input type="submit" value="Register" />
</form>
</body>
</html>


<?php
session_start();
print "<a style='text-decoration:none' href='home.php'<button>Back to Home Page</button> </a>";

?>

