<?php
	session_start();
	include('adatbazis.php');
	include('logout.php'); 
	include("frissites.php");
	include("torles.php");
	include("elfogad.php");
	if(isset($_SESSION['jog']) != "Admin"){
		header('location:index.php');
	}else{

	}
?>	

<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
		<meta charset="utf8">
		<meta name="Description" content="Admin felület">
		<meta name="Keywords" content="admin">
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
					<form method="POST" action="admin.php">
					<i class='fas fa-user-circle' id="userIcon"></i>
					<h3><?php echo $_SESSION['felhasznalo']; ?></h3>
					<h1>Admin</h1>
					<div id="kijelentkezes" style="margin-top:20px"><input type="submit" name="kijelentkezes" value="Kijelentkezes"></div>
					<div class="egySor">
						<?php
							$query = "SELECT * FROM felhasznalok";
					        $parancs = $pdo->prepare($query);
					        $parancs->execute();
					        $sor = $parancs->fetchAll();
		               	 ?>

		       			<table cellspacing="0" align="center" border="0" style="width:100%;border:white;color:white;text-shadow:1px 1px 1px black">
						<tr>
							<th>id</th>
							<th>Felhasznalo</th>
							<th>Jelszo</th>
							<th>Jog</th>
							<th style="color:orange">Frissítés</th>
							<th style="color:brown">Törlés</th>
						</tr>

						<?php foreach($sor as $elem)	{ ?>
						<tr>
							<td><?php echo $elem['id']; ?></td>
							<td><?php echo $elem['Felhasznalo']; ?></td>
							<td><?php echo $elem['Jelszo']; ?></td>
							<td><?php echo $elem['Jog']; ?></td>
							<td><input type="hidden" name="azonosito" class="azonosito" value="<?php echo $elem['id']; ?>" />
								<input type="button" name="frissites" value="Frissítés" class="frissites" ></td>
							<td><a href="admin.php?torles=<?php echo $elem['id']; ?>" class="torles">Törlés 
							<?php } ?></td>
						</tr>
						</table>
					
				</form>
						

					<form id="frissitesForm" method="POST" action="admin.php">
					      <h2>Frissítés</h2>
					      <div style="margin-bottom: 20px; margin-top: 20px">
					        <input
					          class="frissitesMezo"
					          type="text"
					          name="idFrissites"
					          id="idFrissites" 
					          autocomplete="off"
					          value="<?php echo $id; ?>"
					        />
					      </div>
					      <!-- row 1 -->
					      <div style="margin-bottom: 20px;">
					        <input
					          class="frissitesMezo"
					          type="text"
					          name="felhasznaloFrissites"
					          id="felhasznaloFrissites" 
					          autocomplete="off"
					          value="<?php echo $felhasznalo; ?>"
					        />
					      </div>
					      <!-- row 2 -->
					      <div style="margin-bottom: 20px">
					        <input
					          class="frissitesMezo"
					          type="text"
					          name="jelszoFrissites"
					          id="jelszoFrissites" 
					          autocomplete="off"
					          value="<?php echo $jelszo; ?>"
					        />
					      </div>
					       <!-- row 3 -->
					      <div style="margin-bottom: 20px">
					        <input
					          class="frissitesMezo"
					          type="text"
					          name="jogFrissites"
					          id="jogFrissites"
					          autocomplete="off"
					          value="<?php echo $jog ; ?>"
					        />
					      </div>
					      <!-- row 4 -->
					      <div>
					        <input type="submit" name="elfogad" value="Elfogad" >
					      </div>
					</div>
				
					    </form>
				</div>
			</div>
		</main>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="js/javascript2.js"></script>
	</body>
</html>