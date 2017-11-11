<!DOCTYPE html>
<?php header('Access-Control-Allow-Origin: *'); ?>
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<script src="http://localhost:5000/static/webassets/packed_client.js"</script>


<script src="http:/localhost:5000/static/js/lib/less.min.js" type="text/javascript"></script>
<script src="./js/function.js" type="text/javascript"></script>



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


<script>
window.setInterval(function(){
  getTemp(1);
  getTemp(2);
  getTemp(3);
}, 5000);
</script>





<div id="main" class="class_control">
<section id="section_one">

<div class="container">
<div class="row">
	<div class="col-md-7" id="leftside">
				<div class="row" id="leftTop">
					<div class="col-md-6" style="text-align:center">
						<h3>Axes X/Y</h3></br>
						<div>
							<input type="image"  src="./img/up.svg" value="clickme" onclick="move(0,dt,0)" width="20%" height="20%">
						</div>
						<div>
								
								<input type="image" class="img_align" src="./img/left.svg" value="clickme" onclick="move(-dt,0,0)" width="20%" height="20%">
								<input type="image" class="img_align" src="./img/home.png" value="clickme" onclick="homeXY()" width="20%" height="20%">
								<input type="image" class="img_align" src="./img/right.svg" value="clickme" onclick="move(dt,0,0)" width="20%" height="20%">
								
								
						</div>
						<div>
							<input type="image"  src="./img/down.svg" value="clickme" onclick="move(0,-dt,0)" width="20%" height="20%">
						</div>
					</div>
					
					<div class="col-md-6" style="text-align:center">
						<h3>Axe Z</h3></br>
						<div>
							
							<input type="image"  src="./img/up.svg" value="clickme" onclick="move(0,0,dt)" width="20%" height="20%">
						</div>
						<div>
						
							<!--<img src="./img/home.png" width="20%" height="20%" />-->
							<input type="image"  src="./img/home.png" value="clickme" onclick="homeZ()" width="20%" height="20%">



						</div>
						
						<div>
							<input type="image"  src="./img/down.svg" value="clickme" onclick="move(0,0,-dt)" width="20%" height="20%">
						</div>
					</div>
					<div class="div_match">
						<button class="button_number" onclick="changeDt(0.1)">0.1</button>
						<button class="button_number" onclick="changeDt(1)">1</button>
						<button class="button_number" onclick="changeDt(10)">10</button>
						<button class="button_number" onclick="changeDt(30)">30</button>
						<button class="button_number" onclick="changeDt(100)">100</button>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-3">
						<div style="text-align:center">
							<img src="./img/up.svg" width="30%" height="30%"/>
						</div>
						<div class="img_hori">
							<div class="box">
								<p id="temp1"> #DEFAULT </p>
								<p>Tête 1</p>
							</div>
						</div>
						<div style="text-align:center">
							<img src="./img/down.svg" width="30%" height="30%"/>
						</div>
						
					</div>
					<div class="col-md-3">
						<div style="text-align:center">
							<img src="./img/up.svg" width="30%" height="30%"/>
						</div>
						<div class="img_hori">
							<div class="box">
								<p id="temp2"> #DEFAULT </p>
								<p>Tête 2</p>
							</div>
						</div>
						<div style="text-align:center">
							<img src="./img/down.svg" width="30%" height="30%"/>
						</div>
					</div>
					<div class="col-md-3">
						<div style="text-align:center">
							<img src="./img/up.svg" width="30%" height="30%"/>
						</div>
						<div class="img_hori">
							<div class="box">
								<p id="temp3"> #DEFAULT </p>
								<p>Tête 3</p>
							</div>
						</div>
						<div style="text-align:center">
							<img src="./img/down.svg" width="30%" height="30%"/>
						</div>
					</div>
					<div class="col-md-3">
						<div  style="text-align:center">
						<p></p>
							<font color="white" style="cursor: pointer;" onclick="extrude(-5);">Retracter</font>
						</div>
						<div class="img_hori">
							<div class="box">
								<p><font color="red">5</font></p>
								<p><font color="red">mm</font></p>
							</div>
						</div>
						<div style="text-align:center">
							<p style="cursor: pointer;" onclick="extrude(5);">Extruder</p>
						</div>
					</div>
				</div>
	
	</div>
	<div class="col-md-4" id="centerside">
		<div class="container">
			<div class="row">
	
				<div class="col-md-4">
					<div class="range-slider">
						<p> Tête n°1 </p>
		               <input type="range" value="0" min="0" max="350" class="range-slider__range" orient="vertical">
						<div id="temp1" class="indic"><span>0</span></div>
						<div><button class="button_simple" onclick="changeTempValue(+document.getElementById('temp1').innerHTML,1)">Ok</button></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="range-slider">
						<p> Tête n°2 </p>
						<input type="range"  value="0" min="0" max="350" class="range-slider__range" orient="vertical">
						<div id="temp2" class="indic"><span >0</span></div>
						<div><button class="button_simple" onclick="changeTempValue(+document.getElementById('temp2').innerHTML,2)">Ok</button></div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="range-slider">
						<p> Tête n°3 </p>
						<input type="range" value="0" min="0" max="350" class="range-slider__range" orient="vertical">
						<div id="temp3" class="indic"><span>0</span></div>
						<div><button class="button_simple" onclick="changeTempValue(+document.getElementById('temp3').innerHTML,3)">Ok</button></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-1" id="rightside">
               <h1>Picture perfect</h1>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
		
	</div>

</div>
</div>
</section>

  <button class="button2" onclick="test()">Utilitaires</button>
  <button class="button3">Redémarrer</button>
  
  
</div> 

</body>


<script>
var rangeSlider = function(){
  var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $(this).next(value).html(this.value);
    });
  });
};

rangeSlider();
</script>

<script>
refresh_temp();
</script>




</html> 
