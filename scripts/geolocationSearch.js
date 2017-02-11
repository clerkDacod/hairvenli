$(function(){

	
 
 	var x = document.getElementById("demo");
    var lat;
    var long;
    $("#stylistsNearby").click(function(){

    	$(this).css("color","#fd1a23");
    	getLocation();
    	

    })



    //finds the location of the client
	function getLocation() {
	    if (navigator.geolocation) {
	        navigator.geolocation.getCurrentPosition(passPosition);
	    } else { 
	        x.innerHTML = "Geolocation is not supported by this browser.";
	    }
	}

	//success callback function for GetCurrentPosistion of client
	function passPosition(position) {
	    // x.innerHTML = "Latitude: " + position.coords.latitude + 
	    // "<br>Longitude: " + position.coords.longitude;

	    lat= position.coords.latitude;
	    long= position.coords.longitude;
	

	    $.ajax({
	    	type: 'Post',
	    	url: 'http://localhost/hairvenli/proximity/stylistsNearby.php',
	    	data:{latitude:lat,longitude:long},
	    	success: function(data){
	    		$("#results").html(data);
	    	}

	    }); //end of ajax call
	}



});

