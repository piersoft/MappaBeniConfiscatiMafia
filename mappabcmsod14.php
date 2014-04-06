<?php


$url = 'https://docs.google.com/spreadsheet/pub?key=0AnLypt4fNj0hdFV4ZGpxSTNRR29hR3dLVHpKUVVuQ3c&output=csv';
$file = "bcsod.csv";
$fileok = "bcsod1.csv";
$fileok1 = "bcsod2.csv";
$fileok2 = "bcsod3.csv";
$src = fopen($url, 'r');

$dest = fopen($file, 'w');
stream_copy_to_stream($src, $dest);


$search="Lat";
$replace="lat";

$output = passthru("sed -e 's/$search/$replace/g' $file > $fileok");

$search1="Lon";
$replace1="lng";

$output1 = passthru("sed -e 's/$search1/$replace1/g' $fileok > $fileok1");

$search2=",";
$replace2=";";

$output2 = passthru("sed -e 's/$search2/$replace2/g' $fileok1 > $fileok2");

//sleep(1);

//echo stream_copy_to_stream($src, $dest) . "";

?>
<!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="utf-8">
		<title>Beni confiscati alla mafia elaborati per #SOD14</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <meta property="og:image" content="http://lucacorsato.it/wp-content/uploads/2014/03/SOD_14_timbro-150x149.png"/>
      <!-- Leaflet 0.5: https://github.com/CloudMade/Leaflet-->
		<link rel="stylesheet" href="http://joker-x.github.io/Leaflet.geoCSV/lib/leaflet.css" />
		<!--[if lte IE 8]> <link rel="stylesheet" href="http://joker-x.github.io/Leaflet.geoCSV/lib/leaflet.ie.css" />  <![endif]-->  
		<script src="http://joker-x.github.io/Leaflet.geoCSV/lib/leaflet.js"></script>

		<!-- MarkerCluster https://github.com/danzel/Leaflet.markercluster -->
		<link rel="stylesheet" href="http://joker-x.github.io/Leaflet.geoCSV/lib/MarkerCluster.css" />
		<link rel="stylesheet" href="http://joker-x.github.io/Leaflet.geoCSV/lib/MarkerCluster.Default.css" />
		<!--[if lte IE 8]> <link rel="stylesheet" href="http://joker-x.github.io/Leaflet.geoCSV/lib/MarkerCluster.Default.ie.css" /> <![endif]-->
		<script src="http://joker-x.github.io/Leaflet.geoCSV/lib/leaflet.markercluster-src.js"></script>

		<!-- GeoCSV: https://github.com/joker-x/Leaflet.geoCSV -->
		<script src="leaflet.geocsv-src.js"></script>
		<script src="leaflet-hash.js"></script>
		<!-- jQuery 1.8.3: http://jquery.com/ -->
		<script src="http://joker-x.github.io/Leaflet.geoCSV/lib/jquery.js"></script>

		<style>	
		html, body, #mapa {
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;	
			font-family: Arial, sans-serif;
			font-color: #38383;
		}

		#botonera {
			position:fixed;
			top:60px;
			left:10px;
			z-index: 2;
		}
		#botonera1 {
			position:fixed;
			top:85px;
			left:10px;
			z-index: 2;
		}
		#botonera2 {
			position:fixed;
			top:110px;
			left:10px;
			z-index: 2;
		}
#botonera3 {
			position:fixed;
			top:135px;
			left:10px;
			z-index: 2;
		}
#botonera4 {
			position:fixed;
			top:160px;
			left:10px;
			z-index: 2;
		}
#botonera5 {
			position:fixed;
			top:185px;
			left:10px;
			z-index: 2;
		}


		#cargando {

			position:fixed;
			top:0;
			left:0;
			width:100%;
			height:100%;
			background-color:#666;
			color:#fff;
			font-size:2em;
			padding:32% 40%;
			z-index:10;
opacity:0.6;
  filter:alpha(opacity=60); /* For IE8 and earlier */
		}

		.boton {
			border: 1px solid #96d1f8;
			background: #65a9d7;
			background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
			background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
			background: -moz-linear-gradient(top, #3e779d, #65a9d7);
			background: -ms-linear-gradient(top, #3e779d, #65a9d7);
			background: -o-linear-gradient(top, #3e779d, #65a9d7);
			padding: 1px 1px;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			border-radius: 10px;
			-webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
			-moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
			box-shadow: rgba(0,0,0,1) 0 1px 0;
			text-shadow: rgba(0,0,0,.4) 0 1px 0;
			color: white;
			font-size: 12px;
			/*font-family: Helvetica, Arial, Sans-Serif;*/
			text-decoration: none;
			vertical-align: middle;
		}
		.boton:hover {
			border-top-color: #28597a;
			background: #28597a;
			color: #ccc;
		}
		.boton:active {
			border-top-color: #1b435e;
			background: #1b435e;
		}
	.boton1 {
			border: 1px solid #96d1f8;
			background: #65a9d7;
			background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
			background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
			background: -moz-linear-gradient(top, #3e779d, #65a9d7);
			background: -ms-linear-gradient(top, #3e779d, #65a9d7);
			background: -o-linear-gradient(top, #3e779d, #65a9d7);
			padding: 1px 1px;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			border-radius: 10px;
			-webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
			-moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
			box-shadow: rgba(0,0,0,1) 0 1px 0;
			text-shadow: rgba(0,0,0,.4) 0 1px 0;
			color: white;
			font-size: 12px;
			/*font-family: Helvetica, Arial, Sans-Serif;*/
			text-decoration: none;
			vertical-align: middle;
		}
		.boton1:hover {
			border-top-color: #28597a;
			background: #28597a;
			color: #ccc;
		}
		.boton1:active {
			border-top-color: #1b435e;
			background: #1b435e;
		}
		.boton2 {
			border: 1px solid #96d1f8;
			background: #65a9d7;
			background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
			background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
			background: -moz-linear-gradient(top, #3e779d, #65a9d7);
			background: -ms-linear-gradient(top, #3e779d, #65a9d7);
			background: -o-linear-gradient(top, #3e779d, #65a9d7);
			padding: 1px 1px;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			border-radius: 10px;
			-webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
			-moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
			box-shadow: rgba(0,0,0,1) 0 1px 0;
			text-shadow: rgba(0,0,0,.4) 0 1px 0;
			color: white;
			font-size: 12px;
			/*font-family: Helvetica, Arial, Sans-Serif;*/
			text-decoration: none;
			vertical-align: middle;
		}
		.boton2:hover {
			border-top-color: #28597a;
			background: #28597a;
			color: #ccc;
		}
		.boton2:active {
			border-top-color: #1b435e;
			background: #1b435e;
		}
	.boton3 {
			border: 1px solid #96d1f8;
			background: #65a9d7;
			background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
			background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
			background: -moz-linear-gradient(top, #3e779d, #65a9d7);
			background: -ms-linear-gradient(top, #3e779d, #65a9d7);
			background: -o-linear-gradient(top, #3e779d, #65a9d7);
			padding: 1px 1px;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			border-radius: 10px;
			-webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
			-moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
			box-shadow: rgba(0,0,0,1) 0 1px 0;
			text-shadow: rgba(0,0,0,.4) 0 1px 0;
			color: white;
			font-size: 12px;
			/*font-family: Helvetica, Arial, Sans-Serif;*/
			text-decoration: none;
			vertical-align: middle;
		}
		.boton3:hover {
			border-top-color: #28597a;
			background: #28597a;
			color: #ccc;
		}
		.boton3:active {
			border-top-color: #1b435e;
			background: #1b435e;
		}
.boton4 {
			border: 1px solid #96d1f8;
			background: #65a9d7;
			background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
			background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
			background: -moz-linear-gradient(top, #3e779d, #65a9d7);
			background: -ms-linear-gradient(top, #3e779d, #65a9d7);
			background: -o-linear-gradient(top, #3e779d, #65a9d7);
			padding: 1px 1px;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			border-radius: 10px;
			-webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
			-moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
			box-shadow: rgba(0,0,0,1) 0 1px 0;
			text-shadow: rgba(0,0,0,.4) 0 1px 0;
			color: white;
			font-size: 12px;
			/*font-family: Helvetica, Arial, Sans-Serif;*/
			text-decoration: none;
			vertical-align: middle;
		}
		.boton4:hover {
			border-top-color: #28597a;
			background: #28597a;
			color: #ccc;
		}
		.boton4:active {
			border-top-color: #1b435e;
			background: #1b435e;
		}
.boton5 {
			border: 1px solid #96d1f8;
			background: #65a9d7;
			background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
			background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
			background: -moz-linear-gradient(top, #3e779d, #65a9d7);
			background: -ms-linear-gradient(top, #3e779d, #65a9d7);
			background: -o-linear-gradient(top, #3e779d, #65a9d7);
			padding: 1px 1px;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			border-radius: 10px;
			-webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
			-moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
			box-shadow: rgba(0,0,0,1) 0 1px 0;
			text-shadow: rgba(0,0,0,.4) 0 1px 0;
			color: white;
			font-size: 12px;
			/*font-family: Helvetica, Arial, Sans-Serif;*/
			text-decoration: none;
			vertical-align: middle;
		}
		.boton5:hover {
			border-top-color: #28597a;
			background: #28597a;
			color: #ccc;
		}
		.boton5:active {
			border-top-color: #1b435e;
			background: #1b435e;
		}

#infodiv{
position:fixed;
        left:2px;
        bottom:2px;
	font-size: 10px;
        z-index:9999;
        border-radius: 5px; 
        -moz-border-radius: 5px; 
        -webkit-border-radius: 5px; 
        border: 2px solid #808080;
        background-color:#fff;
        padding:5px;
        box-shadow: 0 3px 14px rgba(0,0,0,0.4)
}

#div.pop {
max-width: 600px;
}
#sodlogo{
position:fixed;
			top:60px;
			right:5px;
	//font-size: 10px;
        //z-index:9999;

		//	border-top-color: #28597a;
		//	background: #28597a;
		//	color: #ccc;
		//	background: #65a9d7;
		//	background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
		//	background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
		//	background: -moz-linear-gradient(top, #3e779d, #65a9d7);
		//	background: -ms-linear-gradient(top, #3e779d, #65a9d7);
		//	background: -o-linear-gradient(top, #3e779d, #65a9d7);
			
		//	-webkit-border-radius: 10px;
		//	-moz-border-radius: 10px;
		//	border-radius: 10px;
		//	-webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
		//	-moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
		//	box-shadow: rgba(0,0,0,1) 0 1px 0;
		//	text-shadow: rgba(0,0,0,.4) 0 1px 0;
		//	color: white;
			//font-size: 12px;
			/*font-family: Helvetica, Arial, Sans-Serif;*/
		//	text-decoration: none;
		//	vertical-align: middle;
}
#filtradiv{
position:fixed;
			top:130px;
			right:5px;

}
		</style>
	</head>
	<body>
		<div id="mapa"></div>



	<div id="cargando">Sto caricando i dati...</div>


<div id="sodlogo" style="leaflet-popup-content-wrapper">
<a href="http://www.spaghettiopendata.org" target="_blank"><img src="http://lucacorsato.it/wp-content/uploads/2014/03/SOD_14_timbro-150x149.png" width="60px"></a><br /></div>
<div id="filtradiv" style="leaflet-popup-content-wrapper">
<select id="start" onchange="filtra();">

  <option value="PPP">Filtra i beni</option>

  <option value="abitazione">Abitazione</option>

  <option value="terreno">Terreno</option>

  <option value="locale">Locale</option>

  <option value="altri">Altri beni immobili</option>

  <option value="fabbricato">Fabbricato</option>

<option value="capannone">Capannone</option>



</select>

 </div>
<script>

//;$(function() {

var mapa = L.map('mapa', {attributionControl:true}).setView([40.46, -3.75], 5);

//L.tileLayer('http://{s}.tile.cloudmade.com/3a83164a47874169be4cabc2e8b8c449/43782/256/{z}/{x}/{y}.png', {maxZoom: 19, attribution: 'Map Data &copy; <a //href="http://openstreetmap.org">OpenStreetMap</a> contributors | <a href="http://www.spaghettiopendata.org">#SOD14</a> Beni Confiscati alla mafia'}).addTo(mapa);

var baseLayer= L.tileLayer('http://{s}.tile.cloudmade.com/3a83164a47874169be4cabc2e8b8c449/43782/256/{z}/{x}/{y}.png', {maxZoom: 19, attribution: 'Map Data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors | <a href="https://twitter.com/Piersoft" target="_blank">@Piersoft</a> for <a href="http://www.spaghettiopendata.org">#SOD14</a> Beni Confiscati alla mafia'});


var osmLayer = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {maxZoom: 19, attribution: 'Map Data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors | <a href="https://twitter.com/Piersoft" target="_blank">@Piersoft</a> for <a href="http://www.spaghettiopendata.org">#SOD14</a> Beni Confiscati alla mafia'});

osmLayer.addTo(mapa);

        
var int=0;
	
 var cluster0='';
 var cluster='';
 var cluster1='';
 var cluster2='';
 var cluster3='';
var cluster4='';
var cluster5='';
var cluster6='';
var filtervar='';
var button= "YES";
  
var hash = new L.Hash(mapa);

var bankias = L.geoCsv(null, {
	onEachFeature: function (feature, layer) {
		var popup = '';
var pin='';


feature.properties.sourcepageurl='<div class="pop"><a href="'+feature.properties.sourcepageurl+'" target="_blank">'+feature.properties.sourcepageurl+'</a></div>';
popup +='<b>Categoria</b><br/>'+feature.properties.categoria+'<br /><br />';
popup += '<b>Tipo</b><br/>'+feature.properties.tipo_scr+'<br /><br />';
popup += '<b>Link</b><br/>'+feature.properties.sourcepageurl+'<br /><br />';

		for (var clave in feature.properties) {


			var title = bankias.getPropertyTitle(clave);
			//popup += '<b>'+title+'</b><br />'+feature.properties[clave]+'<br /><br />';

		}
		layer.bindPopup(popup, {
                                maxWidth: "210",
				 maxHeight: "250",
                                closeButton: false
                            });
	},
	pointToLayer: function (feature, latlng) {
if (feature.properties.tipo_scr =="Terreno") {pin='pinarancio.png'};
if (feature.properties.tipo_scr =="Abitazione") {pin='pinrossoe.png'};
if (feature.properties.tipo_scr =="Locale") {pin='pingiallo.png'};
if (feature.properties.tipo_scr =="Fabbricato") {pin='pingrigio.png'};
if (feature.properties.tipo_scr =="Altri beni immobili") {pin='pinarancioforte.png'};
if (feature.properties.tipo_scr =="Capannone") {pin='pinnero.png'};



		return L.marker(latlng, {
			icon:L.icon({
				iconUrl: pin,
				shadowUrl: 'marker-shadow.png',
				iconSize: [15,15],
				shadowSize:   [15, 7],
				shadowAnchor: [5, 2]
			})
		});
	},
	firstLineTitles: true
});

var terreno = L.geoCsv(null, {
	onEachFeature: function (feature, layer) {
		var popup = '';

feature.properties.sourcepageurl='<div class="pop"><a href="'+feature.properties.sourcepageurl+'" target="_blank">'+feature.properties.sourcepageurl+'</a></div>';
popup +='<b>Categoria</b><br/>'+feature.properties.categoria+'<br /><br />';
popup += '<b>Tipo</b><br/>'+feature.properties.tipo_scr+'<br /><br />';
popup += '<b>Link</b><br/>'+feature.properties.sourcepageurl+'<br /><br />';

		for (var clave in feature.properties) {


			var title = terreno.getPropertyTitle(clave);
			//popup += '<b>'+title+'</b><br />'+feature.properties[clave]+'<br /><br />';

		}
		layer.bindPopup(popup, {
                                maxWidth: "210",
				 maxHeight: "250",
                                closeButton: false
                            });
	}, 
filter: function(feature, layer) {

if (feature.properties.tipo_scr =="Terreno") {
					
return true;
				}
	return false;

    },
	pointToLayer: function (feature, latlng) {
		return L.marker(latlng, {
			icon:L.icon({
				iconUrl: 'pinarancio.png',
				shadowUrl: 'marker-shadow.png',
				iconSize: [15,15],
				shadowSize:   [15, 7],
				shadowAnchor: [5, 2]
			})
		});
	},
	firstLineTitles: true	
		
});


var abitazione = L.geoCsv(null, {
	onEachFeature: function (feature, layer) {
		var popup = '';

feature.properties.sourcepageurl='<div class="pop"><a href="'+feature.properties.sourcepageurl+'" target="_blank">'+feature.properties.sourcepageurl+'</a></div>';
popup +='<b>Categoria</b><br/>'+feature.properties.categoria+'<br /><br />';
popup += '<b>Tipo</b><br/>'+feature.properties.tipo_scr+'<br /><br />';
popup += '<b>Link</b><br/>'+feature.properties.sourcepageurl+'<br /><br />';

		for (var clave in feature.properties) {


			var title = abitazione.getPropertyTitle(clave);
			//popup += '<b>'+title+'</b><br />'+feature.properties[clave]+'<br /><br />';

		}
		layer.bindPopup(popup, {
                                maxWidth: "210",
				 maxHeight: "250",
                                closeButton: false
                            });
	}, 
filter: function(feature, layer) {

if (feature.properties.tipo_scr =="Abitazione") {
					
return true;
				}
	return false;

    },
	pointToLayer: function (feature, latlng) {
		return L.marker(latlng, {
			icon:L.icon({
				iconUrl: 'pinrossoe.png',
				shadowUrl: 'marker-shadow.png',
				iconSize: [15,15],
				shadowSize:   [15, 7],
				shadowAnchor: [5, 2]
			})
		});
	},
	firstLineTitles: true
	
		
});
		
var locale = L.geoCsv(null, {
	onEachFeature: function (feature, layer) {
		var popup = '';

feature.properties.sourcepageurl='<div class="pop"><a href="'+feature.properties.sourcepageurl+'" target="_blank">'+feature.properties.sourcepageurl+'</a></div>';
popup +='<b>Categoria</b><br/>'+feature.properties.categoria+'<br /><br />';
popup += '<b>Tipo</b><br/>'+feature.properties.tipo_scr+'<br /><br />';
popup += '<b>Link</b><br/>'+feature.properties.sourcepageurl+'<br /><br />';

		for (var clave in feature.properties) {


			var title = terreno.getPropertyTitle(clave);
			//popup += '<b>'+title+'</b><br />'+feature.properties[clave]+'<br /><br />';

		}
		layer.bindPopup(popup, {
                                maxWidth: "210",
				 maxHeight: "250",
                                closeButton: false
                            });
	}, 
filter: function(feature, layer) {

if (feature.properties.tipo_scr =="Locale") {
					
return true;
				}
	return false;

    },
	pointToLayer: function (feature, latlng) {
		return L.marker(latlng, {
			icon:L.icon({
				iconUrl: 'pingiallo.png',
				shadowUrl: 'marker-shadow.png',
				iconSize: [15,15],
				shadowSize:   [15, 7],
				shadowAnchor: [5, 2]
			})
		});
	},
	firstLineTitles: true	
		
});

var fabbricato = L.geoCsv(null, {
	onEachFeature: function (feature, layer) {
		var popup = '';

feature.properties.sourcepageurl='<div class="pop"><a href="'+feature.properties.sourcepageurl+'" target="_blank">'+feature.properties.sourcepageurl+'</a></div>';
popup +='<b>Categoria</b><br/>'+feature.properties.categoria+'<br /><br />';
popup += '<b>Tipo</b><br/>'+feature.properties.tipo_scr+'<br /><br />';
popup += '<b>Link</b><br/>'+feature.properties.sourcepageurl+'<br /><br />';

		for (var clave in feature.properties) {


			var title = terreno.getPropertyTitle(clave);
			//popup += '<b>'+title+'</b><br />'+feature.properties[clave]+'<br /><br />';

		}
		layer.bindPopup(popup, {
                                maxWidth: "210",
				 maxHeight: "250",
                                closeButton: false
                            });
	}, 
filter: function(feature, layer) {

if (feature.properties.tipo_scr =="Fabbricato") {
					
return true;
				}
	return false;

    },
	pointToLayer: function (feature, latlng) {
		return L.marker(latlng, {
			icon:L.icon({
				iconUrl: 'pingrigio.png',
				shadowUrl: 'marker-shadow.png',
				iconSize: [15,15],
				shadowSize:   [15, 7],
				shadowAnchor: [5, 2]
			})
		});
	},
	firstLineTitles: true	
		
});

var altri = L.geoCsv(null, {
	onEachFeature: function (feature, layer) {
		var popup = '';

feature.properties.sourcepageurl='<div class="pop"><a href="'+feature.properties.sourcepageurl+'" target="_blank">'+feature.properties.sourcepageurl+'</a></div>';
popup +='<b>Categoria</b><br/>'+feature.properties.categoria+'<br /><br />';
popup += '<b>Tipo</b><br/>'+feature.properties.tipo_scr+'<br /><br />';
popup += '<b>Link</b><br/>'+feature.properties.sourcepageurl+'<br /><br />';

		for (var clave in feature.properties) {


			var title = terreno.getPropertyTitle(clave);
			//popup += '<b>'+title+'</b><br />'+feature.properties[clave]+'<br /><br />';

		}
		layer.bindPopup(popup, {
                                maxWidth: "210",
				 maxHeight: "250",
                                closeButton: false
                            });
	}, 
filter: function(feature, layer) {

if (feature.properties.tipo_scr =="Altri beni immobili") {
					
return true;
				}
	return false;

    },
	pointToLayer: function (feature, latlng) {
		return L.marker(latlng, {
			icon:L.icon({
				iconUrl: 'pinarancioforte.png',
				shadowUrl: 'marker-shadow.png',
				iconSize: [15,15],
				shadowSize:   [15, 7],
				shadowAnchor: [5, 2]
			})
		});
	},
	firstLineTitles: true	
		
});

var capannone = L.geoCsv(null, {
	onEachFeature: function (feature, layer) {
		var popup = '';

feature.properties.sourcepageurl='<div class="pop"><a href="'+feature.properties.sourcepageurl+'" target="_blank">'+feature.properties.sourcepageurl+'</a></div>';
popup +='<b>Categoria</b><br/>'+feature.properties.categoria+'<br /><br />';
popup += '<b>Tipo</b><br/>'+feature.properties.tipo_scr+'<br /><br />';
popup += '<b>Link</b><br/>'+feature.properties.sourcepageurl+'<br /><br />';

		for (var clave in feature.properties) {


			var title = abitazione.getPropertyTitle(clave);
			//popup += '<b>'+title+'</b><br />'+feature.properties[clave]+'<br /><br />';

		}
		layer.bindPopup(popup, {
                                maxWidth: "210",
				 maxHeight: "250",
                                closeButton: false
                            });
	}, 
filter: function(feature, layer) {

if (feature.properties.tipo_scr =="Capannone") {
					
return true;
				}
	return false;

    },
	pointToLayer: function (feature, latlng) {
		return L.marker(latlng, {
			icon:L.icon({
				iconUrl: 'pinnero.png',
				shadowUrl: 'marker-shadow.png',
				iconSize: [15,15],
				shadowSize:   [15, 7],
				shadowAnchor: [5, 2]
			})
		});
	},
	firstLineTitles: true
	
		
});

$.ajax ({
	type:'GET',
	dataType:'text',
	url:'bcsod3.csv',
   error: function() {
     alert('No si possono caricare i dati, riprova');
   },
	success: function(csv) {
      		cluster = new L.MarkerClusterGroup();
		
		bankias.addData(csv);
		cluster.addLayer(bankias);
		


	},
   complete: function() {
	mapa.addLayer(cluster);
	mapa.fitBounds(cluster.getBounds());

      $('#cargando').delay(500).fadeOut('slow');
   }
});



function filtra()
{ 

var start = document.getElementById("start").value;


mapa.removeLayer(cluster3);
mapa.removeLayer(cluster4);
mapa.removeLayer(cluster1);
mapa.removeLayer(cluster);
mapa.removeLayer(cluster6);
mapa.removeLayer(cluster2);
mapa.removeLayer(cluster5);	
alert('Per un bug noto il filtro va applicato 2 volte');

if (start == "PPP"){

	  }

	  else
{
//$("#cargando").show();
$.ajax ({
	
	dataType:'text',
	url:'bcsod3.csv',
   error: function() {
     alert('No si possono caricare i dati, riprova');
   },
	success: function(csv) {
	

if (start =="abitazione" ){
cluster3 = new L.MarkerClusterGroup();
		abitazione.addData(csv);

		cluster3.addLayer(abitazione);

mapa.addLayer(cluster3);
mapa.fitBounds(cluster3.getBounds());

}
if (start =="terreno"){
cluster1 = new L.MarkerClusterGroup();
		terreno.addData(csv);
		cluster1.addLayer(terreno);
mapa.addLayer(cluster1);
mapa.fitBounds(cluster1.getBounds());

}
if (start =="fabbricato"){
cluster4 = new L.MarkerClusterGroup();
		fabbricato.addData(csv);
		cluster4.addLayer(fabbricato);
mapa.addLayer(cluster4);
mapa.fitBounds(cluster4.getBounds());

}
if (start =="altri"){
cluster5 = new L.MarkerClusterGroup();
		altri.addData(csv);
		cluster5.addLayer(altri);
mapa.addLayer(cluster5);
mapa.fitBounds(cluster5.getBounds());

}
if (start =="capannone"){
cluster6 = new L.MarkerClusterGroup();
		capannone.addData(csv);
		cluster6.addLayer(capannone);
mapa.addLayer(cluster6);
mapa.fitBounds(cluster6.getBounds());

}
if (start =="locale"){
cluster2 = new L.MarkerClusterGroup();
		locale.addData(csv);
		cluster2.addLayer(locale);
mapa.addLayer(cluster2);
mapa.fitBounds(cluster2.getBounds());

}
	},
   complete: function() {
	  

  $('#cargando').delay(500).fadeOut('slow');
   }
});


}
}


 var overlays = {
                "Abitazione": abitazione,
                "Terreno": terreno
            
            };

var layerControl = new L.Control.Layers({
		'Cloudmade': baseLayer,
		'OSM': osmLayer
	});

layerControl.addTo(mapa);

//});
</script>

	</body>
</html>