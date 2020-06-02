var map;
var geocoder;

function loadMap() {
	navigator.geolocation.watchPosition((position) => {
        console.log(position.coords);
        lat = position.coords.latitude;
		lng = position.coords.longitude;
		var pune = {lat:lat, lng:lng};
        // 初始化地圖
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: pune
        });
        marker = new google.maps.Marker({
            position: pune,
            map: map
        });
    var cdata = JSON.parse(document.getElementById('data').innerHTML);
    geocoder = new google.maps.Geocoder();  
    codeAddress(cdata);

    var allData = JSON.parse(document.getElementById('allData').innerHTML);
	showAllMachines(allData)
	});
}

function showAllMachines(allData) {
    
	var infoWind = new google.maps.InfoWindow;
	Array.prototype.forEach.call(allData, function(data){
		var content = document.createElement('div');
		var strong = document.createElement('strong');
		
		strong.textContent = data.name;
		content.appendChild(strong);

		var img = document.createElement('img');
		img.src = 'img/marker.png';
		img.style.width = '100px';
        content.appendChild(img);
        
		var marker = new google.maps.Marker({
	      position: new google.maps.LatLng(data.location_Latitude, data.location_Longitude),
		  map: map
		  
	    });

	    marker.addListener('mouseover', function(){
	    	infoWind.setContent(content);
	    	infoWind.open(map, marker);
	    })
	})
}

function codeAddress(cdata) {
   Array.prototype.forEach.call(cdata, function(data){
    	var address = data.name + ' ' + data.address;
	    geocoder.geocode( { 'address': address}, function(results, status) {
	      if (status == 'OK') {
	        map.setCenter(results[0].geometry.location);
	        var points = {};
	        points.ven_num = data.ven_num;
	        points.location_Latitude = map.getCenter().location_Latitude();
	        points.location_Longitude = map.getCenter().location_Longitude();
	        updateCollegeWithLatLng(points);
	      } else {
	        alert('Geocode was not successful for the following reason: ' + status);
	      }
	    });
	});
}

function updateMachinesWithLatLng(points) {
	$.ajax({
		url:"action.php",
		method:"request",
		data: points,
		success: function(res) {
			console.log(res)
		}
	})
	
}