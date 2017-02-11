<?php 

if(isset($_POST['latitude']) && isset($_POST['longitude'])){
 	
 	$latitude= $_POST['latitude'];
 	$longitude= $_POST['longitude'];
	echo "Hey, dawg. <br />
			You are here:<br /> Latitude: $latitude <br /> Longitude: $longitude <br /> I am going to find you hair stylists within a 3Km radius.

	";

}else{

	echo "I'm not your friend, dawg.";
}



 ?>