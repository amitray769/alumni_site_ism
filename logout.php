<?php
include_once("config.php");
require_once("includes/functions.php");
if(array_key_exists('logout',$_GET))
{
	$facebook->destroySession();
	session_start();
	unset($_SESSION['userdata']);
	session_destroy();
	header("Location:index.php");
}
//redirect_to("index.php");
?>