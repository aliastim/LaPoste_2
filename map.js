var map;
var panel;
var initialize;
var calculate;
var direction;

initialize = function(){
    var latLng = new google.maps.LatLng(50.6371834, 3.063017400000035); // Correspond au coordonnÃ©es de Lille
    var myOptions = {
        zoom      : 14, // Zoom par dÃ©faut
        center    : latLng, // CoordonnÃ©es de dÃ©part de la carte de type latLng
        mapTypeId : google.maps.MapTypeId.TERRAIN, // Type de carte, diffÃ©rentes valeurs possible HYBRID, ROADMAP, SATELLITE, TERRAIN
        maxZoom   : 20
    };

    map      = new google.maps.Map(document.getElementById('map'), myOptions);
    panel    = document.getElementById('panel');

    var marker = new google.maps.Marker({
        position : latLng,
        map      : map,
        title    : "Lille"
        //icon     : "marker_lille.gif" // Chemin de l'image du marqueur pour surcharger celui par dÃ©faut
    });

    var contentMarker = [
        '<div id="containerTabs">',
        '<div id="tabs">',
        '<ul>',
        '<li><a href="#tab-1"><span>Lorem</span></a></li>',
        '<li><a href="#tab-2"><span>Ipsum</span></a></li>',
        '<li><a href="#tab-3"><span>Dolor</span></a></li>',
        '</ul>',
        '<div id="tab-1">',
        '<h3>Lille</h3><p>Suspendisse quis magna dapibus orci porta varius sed sit amet purus. Ut eu justo dictum elit malesuada facilisis. Proin ipsum ligula, feugiat sed faucibus a, <a href="http://www.google.fr">google</a> sit amet mauris. In sit amet nisi mauris. Aliquam vestibulum quam et ligula pretium suscipit ullamcorper metus accumsan.</p>',
        '</div>',
        '<div id="tab-2">',
        '<h3>Aliquam vestibulum</h3><p>Aliquam vestibulum quam et ligula pretium suscipit ullamcorper metus accumsan.</p>',
        '</div>',
        '<div id="tab-3">',
        '<h3>Pretium suscipit</h3><ul><li>Lorem</li><li>Ipsum</li><li>Dolor</li><li>Amectus</li></ul>',
        '</div>',
        '</div>',
        '</div>'
    ].join('');

    var infoWindow = new google.maps.InfoWindow({
        content  : contentMarker,
        position : latLng
    });

    google.maps.event.addListener(marker, 'click', function() {
        infoWindow.open(map,marker);
    });

    google.maps.event.addListener(infoWindow, 'domready', function(){ // infoWindow est biensÃ»r notre info-bulle
        jQuery("#tabs").tabs();
    });


    direction = new google.maps.DirectionsRenderer({
        map   : map,
        panel : panel // Dom element pour afficher les instructions d'itinÃ©raire
    });

};

calculate = function(){
    origin      = document.getElementById('origin').value; // Le point dÃ©part
    destination = document.getElementById('destination').value; // Le point d'arrivÃ©
    if(origin && destination){
        var request = {
            origin      : origin,
            destination : destination,
            travelMode  : google.maps.DirectionsTravelMode.DRIVING // Mode de conduite
        }
        var directionsService = new google.maps.DirectionsService(); // Service de calcul d'itinÃ©raire
        directionsService.route(request, function(response, status){ // Envoie de la requÃªte pour calculer le parcours
            if(status == google.maps.DirectionsStatus.OK){
                direction.setDirections(response); // Trace l'itinÃ©raire sur la carte et les diffÃ©rentes Ã©tapes du parcours
            }
        });
    }
};

initialize();