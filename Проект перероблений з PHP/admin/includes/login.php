<?php

$login="root";
$password="1";

if ($login === $_POST['login'] && $password === $_POST['password']){

	session_start();

	$_SESSION["login"] =$_POST['login'];
	$_SESSION["password"] =$_POST['password'];
	
	header("Location: /admin/AdminPanel.php");

}else{
	echo "error";
}

?>