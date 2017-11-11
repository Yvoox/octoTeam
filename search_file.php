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





	<h2> Veuillez chercher votre fichier </h2>
<div id="main" style="text-align:center;">



	<input id="file" type="file" accept=".gcode,.STL,.txt" style="color:white;">
	<progress id="progress"></progress>
	<button class="button_valid_file" onclick="uploadFile()">Valider</button>
</div>
</body>
  <button class="button2" style="background-color:#6E6E6E" onclick="window.location.href='index.html'">Retour</button>
  <button class="button_valid_file" onclick="redirection()">Suivant</button>







<script>




/*    var fileInput = document.querySelector('#file');


    fileInput.addEventListener('change', function() {


        var reader = new FileReader();


        reader.addEventListener('load', function() {

            alert('Contenu du fichier "' + fileInput.files[0].name + '" :\n\n' + reader.result);

        });


        reader.readAsText(fileInput.files[0]);


    });*/

</script>

</html> 
