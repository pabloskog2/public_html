var map;  
function initialize() {
  var styles = []; 
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});
    var mapOptions = {
        zoom: 16,
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
        center: new google.maps.LatLng(-33.381008,-70.531481,21),
        styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]
          };
    var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions); 
        styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]
      

     
    var image = 'images/mapa.png';
    var myLatLng = new google.maps.LatLng(-33.381008,-70.531481,21);

    var beachMarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image,
      title: "Aqui estamos!"
  });
  var image = 'images/metro.png';
    var myLatLng = new google.maps.LatLng(-33.383463, -70.534152,21);

    var beachMarker2 = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image,
      title: "Fuente suiza"
  });
  var image = 'images/metro.png';
    var myLatLng = new google.maps.LatLng(-33.384612, -70.534016,21);

    var beachMarker3 = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image,
      title: "Fuente suiza"
  });
 
}
google.maps.event.addDomListener(window, 'load', initialize);

