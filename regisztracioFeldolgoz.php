<?php
	
//Használjuk az adatbázist
include('adatbazis.php');

//Null értéket adok neki minden futtatáskor
$felhasznalo = $jelszo = $jelszo2 = "";


    $felhasznalo = htmlspecialchars($_POST['felhasznalo']);
	$jelszo = htmlspecialchars($_POST['jelszo']);
	$jelszo2 = htmlspecialchars($_POST['jelszo2']);
	
	if(empty($felhasznalo) || empty($jelszo) || empty($jelszo2))
	{
		echo'Töltse ki a mezőket!';
	}
	elseif($jelszo != $jelszo2){
		echo 'Nem azonosak a jelszavak!';
	}
	else
	{
		//Hogyha kell sha1 titkosítás
		//$jelszo = sha1($jelszo);
		$jog = "User";
		$query = "INSERT INTO felhasznalok (Felhasznalo, Jelszo, Jog) VALUES (:felhasznalo, :jelszo, :jog)";
        $parancs = $pdo->prepare($query);
        $parancs->execute([
            'felhasznalo'=>$felhasznalo,
            'jelszo'=>$jelszo,
            'jog'=>$jog
        ]);

        echo 'Sikeres regisztráció!';
        $felhasznalo = $jelszo = $jelszo2 = "";
	}

?>