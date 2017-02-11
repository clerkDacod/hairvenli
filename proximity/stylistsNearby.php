<?php
 require_once("../connecttodatabase.php");

 /*Start of connection block*/
 function searchForStylistsFromInDatabase($lat,$long,$con){
  $q = $con->query("SELECT * FROM Stylists");
  $num = mysqli_num_rows($q);
  
  	

  if($num>0){

  	while($stylist = $q->fetch_object()){

  		

  		if((vincentyGreatCircleDistance($lat, $long, $stylist->latitude, $stylist->longitude)) <=3){

  			echo $stylist->id." ".$stylist->name." ".$stylist->latitude." ".$stylist->longitude."<br />";

  			}  
  		}

  	}

 }


 /*End of connection block*/


/*Main class type thing*/
if(isset($_POST['latitude']) && isset($_POST['longitude'])){
 	
 	$latitude= $_POST['latitude'];
 	$longitude= $_POST['longitude'];


	echo "Hey, dawg. <br />
			You are here:<br /> Latitude: $latitude <br /> Longitude: $longitude <br /> I am going to find you hair stylists within a 3Km radius.<br /><br />";
	searchForStylistsFromInDatabase($latitude,$longitude, $con);


}else{

	echo "I'm not your friend, dawg.";
}

/*End of main block type thing*/


//Finds the distance between any two given places in the world
function vincentyGreatCircleDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo)
{
  // convert from degrees to radians
  $earthRadius = 6371000;
  $latFrom = deg2rad($latitudeFrom);
  $lonFrom = deg2rad($longitudeFrom);
  $latTo = deg2rad($latitudeTo);
  $lonTo = deg2rad($longitudeTo);

  $lonDelta = $lonTo - $lonFrom;
  $a = pow(cos($latTo) * sin($lonDelta), 2) +
    pow(cos($latFrom) * sin($latTo) - sin($latFrom) * cos($latTo) * cos($lonDelta), 2);
  $b = sin($latFrom) * sin($latTo) + cos($latFrom) * cos($latTo) * cos($lonDelta);

  $angle = atan2(sqrt($a), $b);
  $distanceInKm = ($angle * $earthRadius)/1000;
  return $distanceInKm;
}


 ?>