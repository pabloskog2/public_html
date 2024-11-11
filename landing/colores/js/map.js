var map;  
function initialize() {
  var styles = []; 
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});
    var mapOptions = {
        zoom: 15,
        zoomControlOptions: {
          style: google.maps.ZoomControlStyle.SMALL},
        mapTypeControl: false,  
        panControl: false,
        scrollwheel: false,
        scaleControl: false,
        zoomControl: true,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        rotateControl: false,
        fullscreenControl: false,
        center: new google.maps.LatLng(-33.381797,-70.525661),
        styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]
          };
    var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions); 
        styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]
      

     
    var image = 'images/meet.png';
    var myLatLng = new google.maps.LatLng(-33.381008,-70.531481,21);

    var beachMarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image,
      title: "Meet10800"
  });
  //metro
  var image = 'images/metro.png';
    var myLatLng = new google.maps.LatLng(-33.383463, -70.534152,21);

    var beachMarker2 = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image,
      title: "Futura Estación del Metro"
  });
  var image = 'images/metro.png';
    var myLatLng = new google.maps.LatLng(-33.384612, -70.534016,21);

    var beachMarker3 = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image,
      title: "Futura Estación del Metro"
  });
  //restaurants
  var image = 'images/restaurante.png';
  var myLatLng = new google.maps.LatLng(-33.3784587, -70.52989939999998,21);

  var beachMarker3 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    title: "Restaurant Ambrosía"
  });
  var image = 'images/restaurante.png';
  var myLatLng = new google.maps.LatLng(-33.39004289,-70.54717283,21);

  var beachMarker3 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    title: "Restaurante Open Wine"
  });
 var image = 'images/restaurante.png';
  var myLatLng = new google.maps.LatLng(-33.3824324,-70.54735929999998,21);

  var beachMarker3 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    title: "Pub Barbazul"
  });
  var image = 'images/restaurante.png';
  var myLatLng = new google.maps.LatLng(-33.38299605,-70.53560345,21);

  var beachMarker3 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    title: "Mr Jack"
  });
  var image = 'images/restaurante.png';
  var myLatLng = new google.maps.LatLng(-33.38321329,-70.5352199,21);

  var beachMarker3 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    title: "Niu Sushi"
  });
  var image = 'images/restaurante.png';
  var myLatLng = new google.maps.LatLng(-33.386899,-70.5382153,21);

  var beachMarker3 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    title: "Las Condes Design"
  });
  var image = 'images/restaurante.png';
  var myLatLng = new google.maps.LatLng(-33.39194644,-70.54706018,21);

  var beachMarker3 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    title: "Alto las Condes"
  });
  //salud
  
  var image = 'images/clinica.png';
  var myLatLng = new google.maps.LatLng(-33.3848717,-70.5312022,21);

  var beachMarker3 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    title: "Clínica Las Condes"
  });
  var image = 'images/clinica.png';
  var myLatLng = new google.maps.LatLng(-33.391693, -70.57402,21);

  var beachMarker3 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    title: "Clínica Alemana"
  });
  var image = 'images/clinica.png';
  var myLatLng = new google.maps.LatLng(-33.3823479,-70.53547859999998,21);

  var beachMarker3 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    title: "Clínica RedSalud Vitacura"
  });
  //Educación
  var image = 'images/educacion.png';
  var myLatLng = new google.maps.LatLng(-33.3787861,-70.52858950000001,21);

  var beachMarker3 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    title: "U. del pacifico"
  });  
  var image = 'images/educacion.png';
  var myLatLng = new google.maps.LatLng(-33.371896708270015,-70.51602065563202,21);

  var beachMarker3 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    title: "U. del desarrollo"
  });
  var image = 'images/educacion.png';
  var myLatLng = new google.maps.LatLng(-33.38026479781437,-70.53432941436768,21);

  var beachMarker3 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    title: "Colegio Tabancura"
  });    
  var image = 'images/educacion.png';
  var myLatLng = new google.maps.LatLng(-33.3747095,-70.52082250000001,21);

  var beachMarker3 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    title: "Colegio Dunalastair"
  });
  //parques
  var image = 'images/educacion.png';
  var myLatLng = new google.maps.LatLng(-33.3619541,-70.4971008,21);

  var beachMarker3 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    title: "Parque Las Rosas"
  });
  var image = 'images/plazas.png';
  var myLatLng = new google.maps.LatLng(-33.3963938,-70.50383590000001,21);

  var beachMarker3 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    title: "Parque San Carlos de Apoquindo"
  }); 
  
  var image = 'images/plazas.png';
  var myLatLng = new google.maps.LatLng(-33.33265960000001,-70.46097650000002,21);

  var beachMarker3 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: image,
    title: "EL Arrayan"
  });      
}
google.maps.event.addDomListener(window, 'load', initialize);

