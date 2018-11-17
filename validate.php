<?php
session_start();

$uemail = $_POST["inputEmail"];
$upwd = $_POST["inputPassword"];

if($uemail == "admin@example.com" && $upwd=="admin123")
{
	$_SESSION['user'] = "admin";
	$response_array['status'] = "success";
}
else
{
	$response_array['status'] = "incorrect";
}


echo json_encode($response_array);
?>