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
<script src="./js/function.js" type="text/javascript"></script>
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
				<div style="text-align:center">
				<p>Nom du fichier :</p><p id="filename"> <?php echo $_GET['namefile']; ?></p></div>
				<p>Type de fichier : STL</p>
				<p style="display:inline;">Taille du fichier :</p> <p style="display:inline;" id="size">#DEFAULT</p>
				</br>
				<p style="padding-left:1%;boder-bottom: dotted 1px white;font-size:1.5em;">Infos :</p>
				<p style="display:inline;">Temps d'impression estimé :</p><p style="display:inline;" id="time"> #DEFAULT</p></br>
				<p style="display:inline;">Dimensions (hauteur x largeur x profondeur) :</p><p style="display:inline;" id="height"> #DEFAULT</p><p style="display:inline;" id="width"> #DEFAULT</p><p style="display:inline;" id="depth"> #DEFAULT</p></br>
				<p style="display:inline;">Filament (bobine 1) :</p><p style="display:inline;" id="head1"> #DEFAULT</p></br>
				<p style="display:inline;">Filament (bobine 2) :</p><p style="display:inline;" id="head2"> #DEFAULT</p></br>
				<p style="display:inline;">Filament (bobine 3) :</p><p style="display:inline;" id="head3"> #DEFAULT</p></br>
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


<script>getFileState("<?php echo $_GET['namefile']; ?>");</script>
</html> 
