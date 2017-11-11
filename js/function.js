var temp1,temp2,temp3,dt=0,root,impname,redirect,filename;
var HOST = "http://localhost:5000";


function startImp(){
fetch(HOST+"/api/job",{
  method: "post",
  headers: {
    'Content-Type': 'application/json',
	'X-Api-Key': 'D337D723E2684C0989708BD216F0C6F0',
	'Access-Control-Allow-Origin':'*',
	'Access-Control-Allow-Headers':'x-requested-with',
	'Access-Control-Allow-Methods':' PUT, DELETE, OPTIONS,POST,GET'
  },

  //make sure to serialize your JSON body
  body: JSON.stringify({
    'command':'start'
  })
})
.then( (response) => { 
   //do something awesome that makes the world a better place
});
}

function homeZ(){
fetch(HOST+"/api/printer/printhead",{
  method: "post",
  headers: {
    'Content-Type': 'application/json',
	'X-Api-Key': 'D337D723E2684C0989708BD216F0C6F0',
	'Access-Control-Allow-Origin':'*',
	'Access-Control-Allow-Headers':'x-requested-with',
	'Access-Control-Allow-Methods':' PUT, DELETE, OPTIONS,POST,GET'
  },

  //make sure to serialize your JSON body
  body: JSON.stringify({
    'command':'home',
	'axes':'z'
  })
})
.then( (response) => { 
   //do something awesome that makes the world a better place
});
}

function homeXY(){
fetch(HOST+"/api/printer/printhead",{
  method: "post",
  headers: {
    'Content-Type': 'application/json',
	'X-Api-Key': 'D337D723E2684C0989708BD216F0C6F0',
	'Access-Control-Allow-Origin':'*',
	'Access-Control-Allow-Headers':'x-requested-with',
	'Access-Control-Allow-Methods':' PUT, DELETE, OPTIONS,POST,GET'
  },

  //make sure to serialize your JSON body
  body: JSON.stringify({
    'command':'home',
	'axes': ["x", "y"]
  })
})
.then( (response) => { 
   //do something awesome that makes the world a better place
});
}

function move(dx,dy,dz){
fetch(HOST+"/api/printer/printhead",{
  method: "post",
  headers: {
    'Content-Type': 'application/json',
	'X-Api-Key': 'D337D723E2684C0989708BD216F0C6F0',
	'Access-Control-Allow-Origin':'*',
	'Access-Control-Allow-Headers':'x-requested-with',
	'Access-Control-Allow-Methods':' PUT, DELETE, OPTIONS,POST,GET'
  },

  //make sure to serialize your JSON body
  body: JSON.stringify({
    'command':'jog',
	'x':dx,
	'y':dy,
	'z':dz
  })
})
.then( (response) => { 
   //do something awesome that makes the world a better place
});
/*alert(dx);
alert(dy);
alert(dz);*/
}

function extrude(length){
fetch(HOST+"/api/printer/tool",{
  method: "post",
  headers: {
    'Content-Type': 'application/json',
	'X-Api-Key': 'D337D723E2684C0989708BD216F0C6F0',
	'Access-Control-Allow-Origin':'*',
	'Access-Control-Allow-Headers':'x-requested-with',
	'Access-Control-Allow-Methods':' PUT, DELETE, OPTIONS,POST,GET'
  },

  //make sure to serialize your JSON body
  body: JSON.stringify({
	'command':'extrude',
    'amount':length
  })
})
.then( (response) => { 
   //do something awesome that makes the world a better place
});
}

function setTemp(temp1,temp2,temp3){
fetch(HOST+"/api/printer/tool",{
  method: "post",
  headers: {
    'Content-Type': 'application/json',
	'X-Api-Key': 'D337D723E2684C0989708BD216F0C6F0',
	'Access-Control-Allow-Origin':'*',
	'Access-Control-Allow-Headers':'x-requested-with',
	'Access-Control-Allow-Methods':' PUT, DELETE, OPTIONS,POST,GET'
  },

  //make sure to serialize your JSON body
  body: JSON.stringify({
    'command':"target",
	 "targets": {
		"tool0":+parseInt(temp1),
		"tool1":+parseInt(temp2),
		"tool2":+parseInt(temp3)}
  })
})
.then( (response) => { 
   //do something awesome that makes the world a better place
});
}

function changeDt(value){
	dt=value;
}

function changeTempValue(temp,head){
	if(head==1){
	temp1=temp;
	setTemp(temp1,0,0);}
	if(head==2){
	temp2=temp;
	setTemp(0,temp2,0);}
	if(head==3){
	temp3=temp;
	setTemp(0,0,temp3);}
}




function uploadFile(){
	
	//xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
	//xhr.setRequestHeader("Accept","application/json, text/javascript, */*; q=0.01");
	//xhr.setRequestHeader('Content-Type','multipart/form-data; boundary=---------------------------26413745532447');
	//xhr.setRequestHeader('X-Api-Key','D337D723E2684C0989708BD216F0C6F0');
	//xhr.setRequestHeader("Access-Control-Allow-Origin","*");
	//xhr.setRequestHeader("Access-Control-Allow-Headers","x-requested-with");
	//xhr.setRequestHeader("Access-Control-Allow-Methods","PUT, DELETE, OPTIONS,POST,GET");

var fileInput = document.querySelector('#file'),
    progress = document.querySelector('#progress');
	

    var xhr = new XMLHttpRequest();

    xhr.open('POST', HOST+'/api/files/local');
	xhr.setRequestHeader('X-Api-Key','D337D723E2684C0989708BD216F0C6F0');

    xhr.upload.addEventListener('progress', function(e) {
        progress.value = e.loaded;
        progress.max = e.total;
    });


    xhr.addEventListener('load', function() {
        alert('Upload terminé !');
    });

    var form = new FormData();
    form.append('file', fileInput.files[0]);

    xhr.send(form);

	redirect=fileInput.files[0].type;
	filename=fileInput.files[0].name;

}

function redirection(){
	if(redirect =='simplify3d_gcode'){
	window.location.href='start_gcode.php?namefile='+filename;}
	else if(redirect=='simplify3d_stl'){
	window.location.href='start_stl.php?namefile='+filename;}
}


function getFileState(fileName){

var courses = {};
var url = "http://localhost:5000/api/files/local/"+fileName+"?apikey=D337D723E2684C0989708BD216F0C6F0";
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", url, true);
xmlhttp.onreadystatechange = function () {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
    courses = JSON.parse(xmlhttp.responseText);
	document.getElementById("size").innerHTML = (courses.size/1000000).toFixed(2)+"MB";
	document.getElementById("time").innerHTML = (courses.gcodeAnalysis.estimatedPrintTime/3600).toFixed(2)+" Heures";
	document.getElementById("height").innerHTML = (courses.gcodeAnalysis.dimensions.height).toFixed(2)+"mm x ";
	document.getElementById("width").innerHTML = (courses.gcodeAnalysis.dimensions.width).toFixed(2)+"mm x ";
	document.getElementById("depth").innerHTML = (courses.gcodeAnalysis.dimensions.depth).toFixed(2)+"mm";
	document.getElementById("head1").innerHTML = (courses.gcodeAnalysis.filament.tool0.length/1000).toFixed(2)+" m";
	/*document.getElementById("head2").innerHTML = (courses.gcodeAnalysis.filament.tool1.length/1000).toFixed(2)+" m";
	document.getElementById("head3").innerHTML = (courses.gcodeAnalysis.filament.tool2.length/1000).toFixed(2)+" m";*/
  }
};
xmlhttp.send(null);
}

function getState(){
var courses = {};
var url = "http://localhost:5000/api/job?apikey=D337D723E2684C0989708BD216F0C6F0";
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", url, true);
xmlhttp.onreadystatechange = function () {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
    courses = JSON.parse(xmlhttp.responseText);
	document.getElementById("pourcent").innerHTML = (courses.progress.completion*100).toFixed(2)+" %";
	document.getElementById("timeSpend").innerHTML = (courses.progress.printTime/3600).toFixed(2)+" Heure(s)";
	document.getElementById("timeLeft").innerHTML = (courses.progress.printTimeLeft/3600).toFixed(2)+" Heure(s)";
  }
};
xmlhttp.send(null);
setTimeout('getState()',2000);
}

function startImp(directory,file){
fetch(HOST+"/api/files/"+directory+"/"+file,{
  method: "post",
  headers: {
    'Content-Type': 'application/json',
	'X-Api-Key': 'D337D723E2684C0989708BD216F0C6F0',
	'Access-Control-Allow-Origin':'*',
	'Access-Control-Allow-Headers':'x-requested-with',
	'Access-Control-Allow-Methods':' PUT, DELETE, OPTIONS,POST,GET'
  },

  //make sure to serialize your JSON body
  body: JSON.stringify({
    'command':"select",
	 "print":"true"
  })
})
.then( (response) => { 
   //do something awesome that makes the world a better place
});
window.location.href='print.html?filename='+file;
}


function contentRoot(content){
	root=content;
	alert(root);
}

function getTemp(head){
var courses = {};
var url = HOST+"/api/printer/tool?history=true&limit=2&apikey=D337D723E2684C0989708BD216F0C6F0";
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", url, true);
xmlhttp.onreadystatechange = function () {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
    courses = JSON.parse(xmlhttp.responseText);
	if(head==1){document.getElementById("temp1").innerHTML = courses.tool0.actual;}
	if(head==2){document.getElementById("temp2").innerHTML = courses.tool1.actual;}
	if(head==3){document.getElementById("temp3").innerHTML = courses.tool2.actual;}
  }
};
xmlhttp.send(null);
}

function refresh_temp(){
getTemp(1);
getTemp(2);
getTemp(3);
setTimeout('refresh_temp()', 3000);

}

function connection_portAuto(){
fetch(HOST+"/api/connection",{
  method: "post",
  headers: {
    'Content-Type': 'application/json',
	'X-Api-Key': 'D337D723E2684C0989708BD216F0C6F0',
	'Access-Control-Allow-Origin':'*',
	'Access-Control-Allow-Headers':'x-requested-with',
	'Access-Control-Allow-Methods':' PUT, DELETE, OPTIONS,POST,GET'
  },

  //make sure to serialize your JSON body
  body: JSON.stringify({
  "command": "connect",
  "port": "COM3",
  "save": true,
  "autoconnect": true
  })
})
.then( (response) => { 
   //do something awesome that makes the world a better place
});	
}

var test;
function getConnectionState(){
var courses = {};
var url = HOST+"/api/connection?apikey=D337D723E2684C0989708BD216F0C6F0"
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", url, true);
xmlhttp.onreadystatechange = function () {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
    courses = JSON.parse(xmlhttp.responseText);
	if(courses.current.state=="Operational"){
	test=1;}
	else{
	test=2;}
  }
};

xmlhttp.send(null);
return test;
}

function printerConnection(){
	connection_portAuto();
	document.location.href="index.html"
}

function changeName(name){
	impname=name;
	setName();
	getName();
	alert(impname);
}

function getName(){
var courses = {};
var url = HOST+"/api/settings?apikey=D337D723E2684C0989708BD216F0C6F0"
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", url, true);
xmlhttp.onreadystatechange = function () {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
    courses = JSON.parse(xmlhttp.responseText);
	alert(courses.plugins.discovery.model.name);
	if(courses.plugins.discovery.model.name!=null){
	document.getElementById("impName").innerHTML = courses.plugins.discovery.model.name;}
  }
};
xmlhttp.send(null);
}

function setName(){
fetch(HOST+"/api/settings",{
  method: "post",
  headers: {
    'Content-Type': 'application/json',
	'X-Api-Key': 'D337D723E2684C0989708BD216F0C6F0',
	'Access-Control-Allow-Origin':'*',
	'Access-Control-Allow-Headers':'x-requested-with',
	'Access-Control-Allow-Methods':' PUT, DELETE, OPTIONS,POST,GET'
  },

  //make sure to serialize your JSON body
  body: JSON.stringify({
	
	'plugins': {
		'discovery': {
			'model': {
		'name': impname
		  }
		}
	}

  })
})
.then( (response) => { 
   //do something awesome that makes the world a better place
});
}
