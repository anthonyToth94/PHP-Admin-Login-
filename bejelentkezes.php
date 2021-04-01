<?php

//Használjuk az adatbázist
include('adatbazis.php');

//Null értéket adok neki minden futtatáskor
$felhasznalo = $jelszo = "";


    $felhasznalo = htmlspecialchars($_POST['felhasznalo']);
	$jelszo = htmlspecialchars($_POST['jelszo']);
	
	if(empty($felhasznalo) || empty($jelszo))
	{
		echo'Töltse ki a mezőket!';
	}
	else
	{
		//Hogyha kell sha1 titkosítás
		//$jelszo = sha1($jelszo);
		$query = "SELECT Felhasznalo, Jelszo, Jog FROM felhasznalok WHERE Felhasznalo = :felhasznalo AND Jelszo = :jelszo ";
        $parancs = $pdo->prepare($query);
        $parancs->execute([
            'felhasznalo'=>$felhasznalo,
            'jelszo'=>$jelszo
        ]);

        $sor = $parancs->fetch(PDO::FETCH_ASSOC);
        if($sor > 0)
        {
           session_start();
			$_SESSION['felhasznalo'] = $felhasznalo;	

			if($sor['Jog'] == "Admin" )
			{
				$_SESSION['jog'] = "Admin";
				echo "1";
				//header('location:admin.php');
				//echo $_SESSION['felhasznalo'].' '.'Admin';
			}
			else
			{

				//header('location:felhasznalo.php');
				echo $_SESSION['felhasznalo'].' '.'User';
				$felhasznalo = $jelszo = "";
			}
		}
		else
		{
			echo 'Hibás felhasználó vagy jelszó!';	
		}
        //Adatbázis megszüntetése 
        $pdo = null;
	}


?>

