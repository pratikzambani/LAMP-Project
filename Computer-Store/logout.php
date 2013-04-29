<?php
session_start(); 
session_destroy();
#print"<h4>Successfully logged out</h4>";
#print "<a href='login.php'>back to login page</a>";
header('Location: login_form.php');
?>
