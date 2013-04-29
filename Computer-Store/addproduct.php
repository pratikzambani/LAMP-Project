<?php

session_start();

if(!isset($_SESSION['loggedin']))
{
	header('Location: login_form.php');
	die();
}

