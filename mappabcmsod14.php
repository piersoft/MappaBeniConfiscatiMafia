<?php


?>
<!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="utf-8">
		<title>Beni confiscati alla mafia elaborati per #SOD14</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <meta property="og:image" content="http://lucacorsato.it/wp-content/uploads/2014/03/SOD_14_timbro-150x149.png"/>

  <link rel="stylesheet" href="http://necolas.github.io/normalize.css/2.1.3/normalize.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7/leaflet.css" />
        <link rel="stylesheet" href="MarkerCluster.css" />

        <link rel="stylesheet" href="MarkerCluster.Default.css" />
  <script src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js"></script>
   <script src="leaflet.markercluster.js"></script>
<script src="leaflet-hash.js"></script>


<script type="text/javascript">
function microAjax(B,A){this.bindFunction=function(E,D){return function(){return E.apply(D,[D])}};this.stateChange=function(D){if(this.request.readyState==4){this.callbackFunction(this.request.responseText)}};this.getRequest=function(){if(window.ActiveXObject){return new ActiveXObject("Microsoft.XMLHTTP")}else{if(window.XMLHttpRequest){return new XMLHttpRequest()}}return false};this.postBody=(arguments[2]||"");this.callbackFunction=A;this.url=B;this.request=this.getRequest();if(this.request){var C=this.request;C.onreadystatechange=this.bindFunction(this.stateChange,this);if(this.postBody!==""){C.open("POST",B,true);C.setRequestHeader("X-Requested-With","XMLHttpRequest"); C.setRequestHeader("Content-type","application/x-www-form-urlencoded");C.setRequestHeader("Connection","close")}else{C.open("GET",B,true)}C.send(this.postBody)}};
</script>
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
			padding:32% 10%;
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

.pop {
max-width: 250px;
overflow:hidden;height:50px;line-height:50px;
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
<select id="start" onchange="filtra(this.value);">

  <option value="PPP">Filtra i beni</option>

  <option value="Abitazione">Abitazione</option>

  <option value="Terreno">Terreno</option>

  <option value="Locale">Locale</option>

  <option value="Altri beni immobili">Altri beni immobili</option>

  <option value="Fabbricato">Fabbricato</option>

<option value="Capannone">Capannone</option>



</select>

 </div>
<script type="text/javascript">

//;$(function() {

var lat=42.302,
        lon=15.601,
        zoom=6;
        var osm = new L.TileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {maxZoom: 19, attribution: 'Map Data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'});
		var mapquest = new L.TileLayer('http://otile{s}.mqcdn.com/tiles/1.0.0/osm/{z}/{x}/{y}.png', {subdomains: '1234', maxZoom: 18, attribution: 'Map Data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'});        

        var map = new L.Map('mapa', {
                    editInOSMControl: true,
            editInOSMControlOptions: {
                position: "topright"
            },
            center: new L.LatLng(lat, lon),
            zoom: zoom,
            layers: [osm]
        });
        
        var baseMaps = {
    "Mapnik": osm,
    "Mapquest Open": mapquest       
        };
        L.control.layers(baseMaps).addTo(map);

//var hash = new L.Hash(map);

 var ico=L.icon({iconUrl:'icccc.png', iconSize:[20,20],iconAnchor:[10,0]});
    var markers = L.markerClusterGroup();

var pin='';

          
var hash = new L.Hash(map);

function start(){
//map.removeLayer(markers);
map.removeLayer(markers1);

microAjax('bcmafia.json',function (res) { 
var feat=JSON.parse(res);
loadLayer(feat);

 } );
 
 }
 
  
 function loadLayer(url)
        {
        

                var myLayer = L.geoJson(url,{
                        onEachFeature:function onEachFeature(feature, layer) {
                           
                             if (feature.properties) {
		var popup = '';
var pin='';
//popup += '<b>Link</b><br/>'+feature.properties.id+'<br /><br />';
feature.properties.sourcepageurl='<div class="pop"><a href="'+feature.properties.sourcepageurl+'" target="_blank">Link</a></div>';
popup +='<b>Categoria</b><br/>'+feature.properties.categoria+'<br /><br />';
popup += '<b>Tipo</b><br/>'+feature.properties.tipo_scr+'<br /><br />';
popup += '<b>'+feature.properties.sourcepageurl+'</b>';
                             layer.bindPopup(popup, {
                                maxWidth: "210",
				 maxHeight: "200",
                                closeButton: true
                            });
                                }
                        },

                        pointToLayer: function (feature, latlng) {
if (feature.properties.tipo_scr =="Terreno") {pin='pinarancio.png'};
if (feature.properties.tipo_scr =="Abitazione") {pin='pinrossoe.png'};
if (feature.properties.tipo_scr =="Locale") {pin='pingiallo.png'};
if (feature.properties.tipo_scr =="Fabbricato") {pin='pingrigio.png'};
if (feature.properties.tipo_scr =="Altri beni immobili") {pin='pinarancioforte.png'};
if (feature.properties.tipo_scr =="Capannone") {pin='pinnero.png'};

                                        var marker = new L.marker(latlng, {
                                                                  icon:L.icon({
                                                                              iconUrl: pin,
                                                                              shadowUrl: 'marker-shadow.png',
                                                                              iconSize: [15,15],
                                                                              shadowSize:   [15, 7],
                                                                              shadowAnchor: [5, 2]
                                                                              })
                                                                  });
                                        
                        markers[feature.properties.id] = marker;
                        return marker;

                        }
                }).addTo(markers);

      markers.addLayer(myLayer);
       map.addLayer(markers);
map.fitBounds(markers.getBounds());
document.getElementById("cargando").remove();

        }

 
 
var filtro='';
var markers1 = L.markerClusterGroup();

function fadeout (){

//$('#cargando').delay(500).fadeOut('slow');
}

function filtra(value)
{    
 
if (value == "PPP"){

	  }

else
{

var iDiv = document.createElement('div');

iDiv.id = 'cargando';
iDiv.className = 'cargando';
document.getElementsByTagName('body')[0].appendChild(iDiv);


filtro='';
map.removeLayer(markers);
map.removeLayer(markers1);
markers1='';
markers1=L.markerClusterGroup();

markers='';
markers=L.markerClusterGroup();
filtro=value;
microAjax('bcmafia.json',function (res1) { 
var feat1=JSON.parse(res1);

if (filtro == "tutti") {

start();

}else{
loadLayerF(feat1);
}
 } );
 
}

}

 function loadLayerF(url)
        {
                var myLayer1 = L.geoJson(url,{
                        onEachFeature:function onEachFeature(feature, layer) {
                           
                             if (feature.properties) {
		var popup = '';
var pin='';
//popup += '<b>Link</b><br/>'+feature.properties.id+'<br /><br />';
feature.properties.sourcepageurl='<div class="pop"><a href="'+feature.properties.sourcepageurl+'" target="_blank">Link</a></div>';
popup +='<b>Categoria</b><br/>'+feature.properties.categoria+'<br /><br />';
popup += '<b>Tipo</b><br/>'+feature.properties.tipo_scr+'<br /><br />';
popup += '<b>'+feature.properties.sourcepageurl+'</b>';
                             layer.bindPopup(popup, {
                                maxWidth: "210",
				 maxHeight: "200",
                                closeButton: true
                            });
                                }                        }, 
                       
filter: function(feature, layer) {

if (feature.properties.tipo_scr ==filtro) {
					
return true;
				}
	return false;

    },
                        pointToLayer: function (feature, latlng) {
                                        if (feature.properties.tipo_scr =="Terreno") {pin='pinarancio.png'};
if (feature.properties.tipo_scr =="Abitazione") {pin='pinrossoe.png'};
if (feature.properties.tipo_scr =="Locale") {pin='pingiallo.png'};
if (feature.properties.tipo_scr =="Fabbricato") {pin='pingrigio.png'};
if (feature.properties.tipo_scr =="Altri beni immobili") {pin='pinarancioforte.png'};
if (feature.properties.tipo_scr =="Capannone") {pin='pinnero.png'};


                                         var marker = new L.marker(latlng, {
                                                                   icon:L.icon({
                                                                               iconUrl: pin,
                                                                               shadowUrl: 'marker-shadow.png',
                                                                               iconSize: [15,15],
                                                                               shadowSize:   [15, 7],
                                                                               shadowAnchor: [5, 2]
                                                                               })
                                                                   });
                                         
                        markers1[feature.properties.id] = marker;
                        return marker;

                        }
                }).addTo(markers1);

      markers1.addLayer(myLayer1);
    map.addLayer(markers1);
map.fitBounds(markers1.getBounds());
document.getElementById("cargando").remove();
        }



start();


</script>
	</body>
</html>