<?php



$url = "https://maps.googleapis.com/maps/api/geocode/xml?address=nelspruit&key=AIzaSyDA-IBLs0bvwYtY8MAqXSOZNPtcg6u3cWI";
$xml = simplexml_load_file($url);

$longitude=$xml->result->geometry->location->lng;
$latitude=$xml->result->geometry->location->lat;

$html= "<p>Long: $longitude Lat: $latitude<p>";

echo $html;


?>