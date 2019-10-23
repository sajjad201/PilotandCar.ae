

function initializeAutocompleteFour(){
	var input = document.getElementById('locality4');
	var options = {
    //types: ['(regions)'],
    componentRestrictions: {country: "AE"}
	};

	var autocomplete = new google.maps.places.Autocomplete(input, options);

	google.maps.event.addListener(autocomplete, 'place_changed', function() {
	var place = autocomplete.getPlace();
	var lat = place.geometry.location.lat();
	var lng = place.geometry.location.lng();
	var placeId = place.place_id;
	// to set city name, using the locality param
	var componentForm = {
		locality: 'short_name',
	};
	  
	  for (var i = 0; i < place.address_components.length; i++) {
		var addressType = place.address_components[i].types[0];
		if (componentForm[addressType]) {
		  var val = place.address_components[i][componentForm[addressType]];
		  document.getElementById("city").value = val;
		}
	  }
	  
		document.getElementById("latitude").value = lat;
		document.getElementById("longitude").value = lng;
		
		var latitude2 = document.getElementById("latitudethree").value;
		console.log(latitude2);
		var longitude2 = document.getElementById("longitudeone").value;
		console.log(longitude2);
		var latitude1 = lat;
		console.log(latitude1);
		var longitude1 = lng;
		console.log(longitude1);

		calculateTimeAndDistance4(latitude1,longitude1,latitude2,longitude2);
		
	});

}
  
function initializeAutocompleteThree(){
    var input = document.getElementById('current3');
    var options = {
       //types: ['(regions)'],
       componentRestrictions: {country: "AE"}
    };
    //var options = {}

    var autocomplete = new google.maps.places.Autocomplete(input, options);

    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      var place = autocomplete.getPlace();
      var lat = place.geometry.location.lat();
      var lng = place.geometry.location.lng();
      var placeId = place.place_id;
      // to set city name, using the locality param
      var componentForm = {
        locality: 'short_name',
      };
      for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
          var val = place.address_components[i][componentForm[addressType]];
          document.getElementById("citythree").value = val;
        }
      }
      document.getElementById("latitudethree").value = lat;
      document.getElementById("longitudeone").value = lng;
     
    });
 }
  

var x = document.getElementById("demo");

$('#current_loc_btn').click(function(e){

  e.preventDefault();
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
	
  }
});

function showPosition(position) {
  document.getElementById("current3").value = position.coords.latitude + ',' +  position.coords.longitude;
  initMap();
	  
}
  
//set the address in field


function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
	  zoom: 8,
	  center: {lat: 40.731, lng: -73.997}
	});
	var geocoder = new google.maps.Geocoder;
	var infowindow = new google.maps.InfoWindow;

	
	geocodeLatLng(geocoder, map, infowindow);
	
  }

function geocodeLatLng(geocoder, map, infowindow) {
	var input = document.getElementById('current3').value;
	var latlngStr = input.split(',', 2);
	var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
	geocoder.geocode({'location': latlng}, function(results, status) {
	  if (status === 'OK') {
		if (results[0]) {
		  document.getElementById("current3").value =  results[0].formatted_address ;
		  document.getElementById("latitudethree").value = latlngStr[0];
		  document.getElementById("longitudeone").value = latlngStr[1];
		} else {
		  window.alert('No results found');
		}
	  } else {
		window.alert('Geocoder failed due to: ' + status);
	  }
	});
  }

  
  function calculateTimeAndDistance4(latitude1,longitude1,latitude2,longitude2){
			var bounds = new google.maps.LatLngBounds;
        var markersArray = [];

        var origin1 = new google.maps.LatLng(latitude1, longitude1);
        
        var destinationA = new google.maps.LatLng(latitude2, longitude2);

        var destinationIcon = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=D|FF0000|000000';
        var originIcon = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=O|FFFF00|000000';
        
        var geocoder = new google.maps.Geocoder;

        var service = new google.maps.DistanceMatrixService;
        service.getDistanceMatrix({
          origins: [origin1],
          destinations: [destinationA],
          travelMode: 'DRIVING',
          unitSystem: google.maps.UnitSystem.METRIC,
          avoidHighways: false,
          avoidTolls: false
        }, function(response, status) {
          if (status !== 'OK') {
            alert('Error was: ' + status);
          } else {
            var originList = response.originAddresses;
            var destinationList = response.destinationAddresses;
            var outputDiv = document.getElementById('output2');
            outputDiv.innerHTML = '';
            

            var showGeocodedAddressOnMap = function(asDestination) {
              var icon = asDestination ? destinationIcon : originIcon;
              return function(results, status) {
                if (status === 'OK') {
                  map.fitBounds(bounds.extend(results[0].geometry.location));
                  markersArray.push(new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    icon: icon
                  }));
                } else {
                  alert('Geocode was not successful due to: ' + status);
                }
              };
            };

            for (var i = 0; i < originList.length; i++) {
              var results = response.rows[i].elements;
              geocoder.geocode({'address': originList[i]},
                  showGeocodedAddressOnMap(false));
              for (var j = 0; j < results.length; j++) {
                
                outputDiv.innerHTML += 'Distance : ' + results[j].distance.text + '. Time ' +
                    results[j].duration.text + '<br>';
              }
            }
          }
        });
  }


  
  
  //now and letter change function
$("#nowandlatter").change(function(){
	if($('#nowandlatter').val() == 'later'){
	$("#later").show('slow');
	}
	else{
		$("#later").hide('slow');
	}
});  



$(function() {
  $(document).ready(function () {
	var todaysDate = new Date();
	var year = todaysDate.getFullYear();
	var month = ("0" + (todaysDate.getMonth() + 1)).slice(-2);
	var day = ("0" + todaysDate.getDate()).slice(-2);
	var maxDate = (year +"-"+ month +"-"+ day);
	$('#mindate').attr('min',maxDate);
  });
});

$(".hidden-md").hover(function(){
  $("#ruby-active").removeClass("ruby-active-menu-item");
  });
		
