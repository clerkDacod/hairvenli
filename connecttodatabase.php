<?php 
 $host="localhost";
 $database="hairvenli";
 $user="root";
 $password="";
 $table="hairstylists";
 $name="Dacod";

 $con = mysqli_connect($host,$user,$password,$database);

 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  /* The following part has been moved to the stylists nearby.php on account of how it was built with the intent of eventually meging it with stylistsNearby.php*/
 
  /*$q = $con->query("SELECT * FROM Stylists WHERE name='$name' ");
  $num = mysqli_num_rows($q);
  
  	echo $num;

  if($num>0){

  	while($stylist = $q->fetch_object()){

  		echo $stylist->id." ".$stylist->name." ".$stylist->latitude." ".$stylist->longitude;  
  	}

  }*/


 ?>