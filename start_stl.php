<?php session_start(); ?>
<!DOCTYPE html>



<script>
/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
} 
</script>

<html lang="fr">

<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
<link href="./css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="./css/style.css" />
<title>3D NOV</title>
</head>







<body>

<header>

<div class="navbar_custom">
	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="index.html">Accueil</a>
	  <a href="#">Services</a>
	  <a href="#">Clients</a>
	  <a href="#">Contact</a>
	</div>
	<span onclick="openNav()"><img src="./img/navbar.png" width="5%" height="5%"/></span>
	<span><img src="./img/logo.png" width="15%" height="15%"/></span>
	<span onclick="openNav()"> DEFAULT ID AND NAME </span>

</div>	


</header>





	<h2> Vous avez choisis : </h2>
<div id="main" >

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class=" start_box"> 
				<p>Nom du fichier : <?php echo $_SESSION['root']; ?></p>
				<p>Type de fichier : STL</p>
				<p>Taille du fichier : <?php echo $_SESSION['size']; ?></p>
				</br>
				<p>Infos :</p>
				<p>Temps d'impression estimé:</p>
				<p>Filament (bobine 1):</p>
				<p>Filament (bobine 2):</p>
				<p>Filament (bobine 3):</p>
			</div>
		</div>
		<div class="col-md-6">
		
			<div class=" start_box" style="background-color:#6E6E6E;"> 
				</br></br></br></br></br></br></br></br></br></br></br></br></br></br>

			</div>
		</div>
	</div>
</div>

	

	

</div> 
  <button class="button2" onclick="window.location.href='search_file.html'">Retour</button>
  <button class="button_valid_file" onclick="window.location.href='print.html'">Trancher</button>
	</form>
</body>




</html> 
