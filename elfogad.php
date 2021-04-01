<?php

if(isset($_POST['elfogad']))
{ 
	$id = htmlentities($_POST['idFrissites']); 
	$felhasznalo = htmlspecialchars($_POST['felhasznaloFrissites']);
	$jelszo = htmlspecialchars($_POST['jelszoFrissites']);
	$jog = htmlspecialchars($_POST['jogFrissites']);

	$query = "UPDATE felhasznalok SET Felhasznalo = :felhasznalo, Jelszo = :jelszo, Jog =:jog WHERE id = :id";
	$parancs=  $pdo->prepare($query);
	$parancs->execute([
	 	'id'=>$id,
	 	'felhasznalo'=>$felhasznalo,
	 	'jelszo'=>$jelszo,
	 	'jog'=>$jog
	 ]);	

	$id = $felhasznalo = $jelszo = $jog = "";
}
?>