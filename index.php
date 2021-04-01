<?php
	include('adatbazis.php');
	//include('bejelentkezes.php');
?>	

<!DOCTYPE html>
<html>
	<head>
		<title>Belépés</title>
		<meta charset="utf8">
		<meta name="Description" content="belépés">
		<meta name="Keywords" content="belépés">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style/style.css">

		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	</head>

	<body>
		<main>
			<div id="container">
				<div id="wrapper">
					<form method="POST" action="index.php" id="belepesForm">
					<i class='fas fa-user-circle' id="userIcon"></i>
					<h1>Belépés</h1>
					<div class="egySor"><input type="text" name="felhasznalo" placeholder="Felhasználó" autocomplete="off" value="" id="felhasznalo"></div>
					<div class="egySor"><input type="password" name="jelszo" placeholder="Jelszó" autocomplete="off" value="" id="jelszo"></div>
					
					<div class="egySor" style="text-align:center;"><span style="font-size:20px;color:orange" id="hiba"> </span></div>
					<div id="submitGomb"><input type="button" name="kuldes" value="Belépés" id="belepes" ></div>
				</form>
				</div>
			</div>
		</main>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="js/javascript.js"></script> 
	</body>
</html>