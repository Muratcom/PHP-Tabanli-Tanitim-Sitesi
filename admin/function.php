<?php 

ob_start();
session_start();

function giriskontrol(){

	$adminkadi=$_SESSION['admin_kadi'];

	$adminsor=mysql_query("select * from admin where admin_kadi='$adminkadi'");
	$adminsay=mysql_num_rows($adminsor);

	if ($adminsay==0) {
		header("Location:login.php");
	}
}

function yetkikontrol(){

	$adminkadi=$_SESSION['admin_kadi'];

	$adminsor=mysql_query("select * from admin where admin_kadi='$adminkadi' and admin_yetki='0'");
	$adminsay=mysql_num_rows($adminsor);

	if ($adminsay==0) {
		header("Location:yetkiyok.php");
	}
}
