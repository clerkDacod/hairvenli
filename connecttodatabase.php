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
  }else{

  	echo "hurray, My friend <br />";
  }

  //mysql_query("SELECT * FROM Stylists WHERE name='$name' ") or die(mysql_error());
  $q = $con->query("SELECT * FROM Stylists WHERE name='$name' ");
  $num = mysqli_num_rows($q);
  
  	echo $num;

  if($num>0){

  	while($stylist = $q->fetch_object()){

  		echo $stylist->id." ".$stylist->name." ".$stylist->latitude." ".$stylist->longitude;  
  	}

  }


 ?>