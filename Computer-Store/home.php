<?php

session_start();

if($_SESSION['username'] == 'pratik' || $_SESSION['loggedin'] == 1)
{
$_SESSION['current_viewing_page']="homeadmin";
print "<a style='text-decoration:none' href='register_form.php'<button>Register New Employee</button></a> <br/><br/>
<a style ='text-decoration:none' href='listofemployees.php'<button>List of Employees </button></a> <br/><br/>
<a style ='text-decoration:none' href='listofproducts.php'<button>List of Products </button></a> <br/><br/>";

print "<br/><br/><br/><a style='text-decoration:none' href='logout.php'><button>Logout</button></a>";
}

elseif($_SESSION['loggedin'] == 2)
{
echo "AA MADARCHOD !";
print "<a style ='text-decoration:none' href='listofproducts.php'<button>List of Products </button></a> <br/><br/>";

print "<br/><br/><br/><a style='text-decoration:none' href='logout.php'><button>Logout</button></a>";

}

else
{
	header('Location: login_form.php');
	die();
}
?>
