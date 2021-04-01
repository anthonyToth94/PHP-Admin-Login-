<?php 
include('adatbazis.php');

if(isset($_GET['torles']))
{
	$id =  htmlentities($_GET['torles']); 

	$query = "DELETE FROM felhasznalok WHERE id = :id";
	$parancs=  $pdo->prepare($query);
	$parancs->execute([
	 	'id'=>$id
	 ]);	
}

?>