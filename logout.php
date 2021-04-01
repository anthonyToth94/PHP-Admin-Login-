<?php 
if(isset($_POST['kijelentkezes']))
{
	if(isset($_SESSION['felhasznalo']))
	{
		session_unset($felhasznalo);
		session_destroy();
	}
	header('location:index.php');
}

?>