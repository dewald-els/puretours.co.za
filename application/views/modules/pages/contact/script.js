function initMap() {

    var puresport = {lat: -26.037155, lng: 27.9553322};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        scrollwheel: false,
        center: puresport
    });
    var marker = new google.maps.Marker({
        position: puresport,
        map: map
    });
}