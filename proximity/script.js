function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {

  
  var R = 6371; // Radius of the earth in km
  var dLat = deg2rad(lat2-lat1);  // deg2rad below

  var dLon = deg2rad(lon2-lon1); 

  var a = 
    Math.sin(dLat/2) * Math.sin(dLat/2) +
    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
    Math.sin(dLon/2) * Math.sin(dLon/2)
    ;

   console.log("Here's what this means:");
   
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 

  var d = R * c; // Distance in km
  console.log(d); 

  document.getElementById('distance').innerHTML=d;
}

function deg2rad(deg) {
  return deg * (Math.PI/180)
}

getDistanceFromLatLonInKm(-33.9433769,18.4682218,-33.9657883,18.4810200);

