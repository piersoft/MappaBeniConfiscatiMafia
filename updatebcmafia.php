<?php
/**
 * Convert the shop spreadsheet into a GeoJSON object. 
 */

function retrieve_remote_file_size($url){
     $ch = curl_init($url);

     curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
     curl_setopt($ch, CURLOPT_HEADER, TRUE);
     curl_setopt($ch, CURLOPT_NOBODY, TRUE);
     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
     $data = curl_exec($ch);
     $size = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);

     curl_close($ch);
     return $size;
}


function ucname($string) {
    $string=ucwords(strtolower($string));

    foreach (array('-', '\'') as $delimiter) {
      if (strpos($string, $delimiter)!==false) {
        $string =implode($delimiter, array_map('ucfirst', explode($delimiter, $string)));
      }
    }
    return $string;
}


function makeOpeningHours($data){
	
	global $keys;
	
	// Go through each day of the week.
	foreach(Array(
		$keys['Mon'],
		$keys['Tue'],
		$keys['Wed'],
		$keys['Thu'],
		$keys['Fri'],
		$keys['Sat'],
		$keys['Sun']
		) as $day){
		
		// First up, convert to 12 hour time.
		$hours = explode('-',$data[$day]);
		foreach($hours as &$hour){
			if($hour >= 1300){
				$hour -= 1200;
			}
			$hour = str_pad($hour,4,'0',STR_PAD_LEFT);

			$hour = substr($hour,0,2) . ':' . substr($hour,2,2);
		}
		$hours = implode(' &ndash; ',$hours);
		$data[$day] = $hours;
	}
	
	$html = "<dl><dt>Monday</dt><dd>{$data[$keys['Mon']]}</dd><dt>Tuesday</dt><dd>{$data[$keys['Tue']]}</dd><dt>Wednesday</dt><dd>{$data[$keys['Wed']]}</dd><dt>Thursday</dt><dd>{$data[$keys['Thu']]}</dd><dt>Friday</dt><dd>{$data[$keys['Fri']]}</dd><dt>Saturday</dt><dd>{$data[$keys['Sat']]}</dd><dt>Sunday</dt><dd>{$data[$keys['Sun']]}</dd></dl>";
	
	return $html;
	
}


$file_size = retrieve_remote_file_size( "https://docs.google.com/spreadsheet/pub?key=0AnLypt4fNj0hdFV4ZGpxSTNRR29hR3dLVHpKUVVuQ3c&output=csv" );
//echo $file_size."<br />";

$localfile= filesize("bcsod.csv");
//echo $localfile;


if ($localfile != $file_size){


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



$fh = fopen('bcsod3.csv','r');


$out = Array(
	'type' => 'FeatureCollection',
	'features' => Array()
);

/* First row is a heading. This is our key. */
$keys = fgetcsv($fh, 1000, ";");
$keys = array_flip($keys);



$i=0;
while (($data = fgetcsv($fh, 1000, ";")) !== FALSE) {
	$i++;
	$entry = Array(
		'id' => $data[$keys['Result Number']],
		
		'type' => 'Feature',
		'geometry' => Array(
			'type' => 'Point',
			'coordinates' => Array((float)$data[$keys['lng']], (float)$data[$keys['lat']])
		),
		'properties' => Array(
			'categoria' => $data[$keys['Categoria']],
			'tipo_scr' => $data[$keys['tipo_scr']],
				'sourcepageurl' => $data[$keys['SourcePageURL']],
			
		)
	);
	
	//$entry['properties']['description'] = '<p>'.str_replace(',',',<br/>',$data[$keys['Address']]).'</p>';
	//$entry['properties']['description'] .= makeOpeningHours($data);
		
	if($data[$keys['Url']]){
		$entry['properties']['description'] .= "<p><a href=\"{$data[$keys['Url']]}\">Website</a></p>";
	}
	$out['features'][] = $entry;
}


$json=json_encode($out);

$filej = "bcmafia.json";

$f = fopen($filej, "w");
fwrite($f, $json);
fclose($f); 

echo "finito";
//print(json_encode($out));

} else{



echo "file uguali";

//print(json_encode($out));

}
?>
