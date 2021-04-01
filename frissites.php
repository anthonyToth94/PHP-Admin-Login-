<?php

include('adatbazis.php');

$id = $felhasznalo = $jelszo = $jog = "";

	if(isset($_POST['id'])){
		$id = $_POST['id'];

		$query = "SELECT * FROM felhasznalok WHERE id =:id";
		$parancs = $pdo->prepare($query);
		$parancs->execute([
					'id'=>$id
		]);

		$sor = $parancs->fetch(PDO::FETCH_ASSOC);
	    if($sor > 0){
	    $id = $sor['id'];
		$felhasznalo =  $sor['Felhasznalo'];
		$jelszo =  $sor['Jelszo'];
		$jog = $sor['Jog'];

		echo $id.':'.$felhasznalo.':'.$jelszo.':'.$jog;
		}
	}
	
?>