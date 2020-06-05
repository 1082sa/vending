var map;
var geocoder;


function loadMap() {
    //黑夜模式樣式
    var styledMapType = new google.maps.StyledMapType(
        [{
            elementType: 'geometry',
            stylers: [{
                color: '#242f3e'
            }]
        }, {
            elementType: 'labels.text.stroke',
            stylers: [{
                color: '#242f3e'
            }]
        }, {
            elementType: 'labels.text.fill',
            stylers: [{
                color: '#746855'
            }]
        }, {
            featureType: 'administrative.locality',
            elementType: 'labels.text.fill',
            stylers: [{
                color: '#d59563'
            }]
        }, {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{
                color: '#d59563'
            }]
        }, {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [{
                color: '#263c3f'
            }]
        }, {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{
                color: '#6b9a76'
            }]
        }, {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{
                color: '#38414e'
            }]
        }, {
            featureType: 'road',
            elementType: 'geometry.stroke',
            stylers: [{
                color: '#212a37'
            }]
        }, {
            featureType: 'road',
            elementType: 'labels.text.fill',
            stylers: [{
                color: '#9ca5b3'
            }]
        }, {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{
                color: '#746855'
            }]
        }, {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{
                color: '#1f2835'
            }]
        }, {
            featureType: 'road.highway',
            elementType: 'labels.text.fill',
            stylers: [{
                color: '#f3d19c'
            }]
        }, {
            featureType: 'transit',
            elementType: 'geometry',
            stylers: [{
                color: '#2f3948'
            }]
        }, {
            featureType: 'transit.station',
            elementType: 'labels.text.fill',
            stylers: [{
                color: '#d59563'
            }]
        }, {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{
                color: '#17263c'
            }]
        }, {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{
                color: '#515c6d'
            }]
        }, {
            featureType: 'water',
            elementType: 'labels.text.stroke',
            stylers: [{
                color: '#17263c'
            }]
        }], {
            name: '黑夜模式'
        });

    //抓自己現在的位置
    navigator.geolocation.watchPosition((position) => {
        console.log(position.coords);
        lat = position.coords.latitude;
        lng = position.coords.longitude;
        var pune = { lat: lat, lng: lng };

        // 初始化地圖
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: pune,
            //黑夜模式設定
            gestureHandling: 'cooperative',
            mapTypeControlOptions: {
                mapTypeIds: ['roadmap', 'satellite', '黑夜模式']
            }

        });

        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('黑夜模式', styledMapType);
        map.setMapTypeId('roadmap');

        marker = new google.maps.Marker({
            position: pune,
            map: map,
            animation: google.maps.Animation.BOUNCE
        });
        geocoder = new google.maps.Geocoder();
        //var cdata = JSON.parse(document.getElementById('data').innerHTML);
        //codeAddress(cdata);

        var allData = JSON.parse(document.getElementById('allData').innerHTML);
        showAllMachines(allData)
    });



}

function showAllMachines(allData) {
    //infowindow內的資料
    var infoWind = new google.maps.InfoWindow;
    Array.prototype.forEach.call(allData, function(data) {
        var content = document.createElement('div');
        var strong = document.createElement('strong');

        strong.textContent = data.ven_num;
        //strong.textContent = contentString;
        content.appendChild(strong);

        //info window內的照片

        var a = document.createElement('a');
        var imgfav = document.createElement("img");
        imgfav.src = 'img/unfav.svg';
        imgfav.style.width = '100px';
        a.appendChild(imgfav);
        a.href = "http://example.com"; //要改看要彈跳/跳轉頁面
        content.appendChild(a);

        function imgWindow() {
            window.open("a");
        }


        // a.onclick = function fav() { 
        //     $.ajax({  
        //         type: "post",
        //           url: "\index.php",
        //           success: function() {  
        //             sid2.style.display = "inline";  
        //             sid1.style.display = "none";  
        //         }  
        //     });
        // };

        var b = document.createElement('a');
        var imgrou = document.createElement('img');
        imgrou.src = 'img/route.svg';
        imgrou.style.width = '100px';
        b.appendChild(imgrou);
        b.href = "http://example.com";
        content.appendChild(b);

        var c = document.createElement('a');
        var imgwar = document.createElement('img');
        imgwar.src = 'img/warning.svg';
        imgwar.style.width = '100px';
        c.appendChild(imgwar);
        c.setAttribute("data-target", "#exampleModalCenter");
        c.setAttribute("data-toggle", "modal");
        content.appendChild(c);

        var d = document.createElement('a');
        var imglis = document.createElement('img');
        imglis.src = 'img/list.svg';
        imglis.style.width = '100px';
        d.appendChild(imglis);
        d.setAttribute("data-target", "#exampleModalLong");
        d.setAttribute("data-toggle", "modal");
        content.appendChild(d);

        if (data.error >= 3) {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(data.location_Latitude, data.location_Longitude),
                map: map,
                icon: 'img/marker1.png' //顯示非正常運作


            });
        } else {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(data.location_Latitude, data.location_Longitude),
                map: map,
                icon: 'img/marker.png' //顯示正常運作



            });
        }


        marker.addListener('click', function() {
            infoWind.setContent(content);
            infoWind.open(map, marker);
        })


    })

    // var RouteCoordinates = [
    //     <?php
    //         $i = 0;
    //       while ($i < count($coordinates)) {
    //           echo $coordinates[$i];
    //           $i++;
    //       }
    //     ?>
    // ];

    //     var RoutePath = new google.maps.Polyline({
    //         path: RouteCoordinates,
    //         geodesic: true,
    //         strokeColor: '#1100FF',
    //         strokeOpacity: 1.0,
    //         strokeWeight: 10
    //       });

    //       mark = 'img/mark.png';
    //       flag = 'img/flag.png';

    //       startPoint = pune;
    //       endPoint = data.location_Latitude, data.location_Longitude;

    //       var marker = new google.maps.Marker({
    //           position: startPoint,
    //           map: map,
    //           icon: mark,
    //           title:"Start point!",
    //           animation: google.maps.Animation.BOUNCE
    //       });

    //       var marker = new google.maps.Marker({
    //       position: endPoint,
    //        map: map,
    //        icon: flag,
    //        title:"End point!",
    //        animation: google.maps.Animation.DROP
    //         });

    //       RoutePath.setMap(map);
    google.maps.event.addDomListener(window, 'load', initialize);

}

function codeAddress(cdata) {
    Array.prototype.forEach.call(cdata, function(data) {
        var address = data.name + ' ' + data.address;
        geocoder.geocode({ 'address': address }, function(results, status) {
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

//更新map位置
function updateMachinesWithLatLng(points) {
    $.ajax({
        url: "action.php",
        method: "request",
        data: points,
        success: function(res) {
            console.log(res)
        }
    })

}
//路線規劃
ClickEventHandler.prototype.calculateAndDisplayRoute = function(placeId) {
    var me = this;
    this.directionsService.route({
        origin: this.pune,
        destination: {
            placeId: placeId
        },
        travelMode: 'WALKING'
    }, function(response, status) {
        if (status === 'OK') {
            me.directionsRenderer.setDirections(response);
        } else {
            window.alert('Directions request failed due to ' + status);
        }
    });
};