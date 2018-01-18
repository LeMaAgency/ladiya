$('.interest .item').bind('touchstart touchend', function(event) {
    event.preventDefault();
    $(this).toggleClass('onhover');
});

$('.interest .item').hover(function (event) {
    event.preventDefault();

    $(this).toggleClass('onhover');

});

$(document).ready(function(){
    $('.carousel-inner').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        pauseOnFocus: false,
        pauseOnHover: false
    });

    $('.gallery .slider').slick({
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnFocus: false,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.tablist.main a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });

    $('.tablist.main a:first').tab('show')

    $('.tablist.inner a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });

    $('.tablist.inner a:first').tab('show')

    $( "#price .range__slider" ).slider({
        range: true,
        min: 1200,
        max: 25000,
        values: [ 7500, 21000 ],
        slide: function( event, ui ) {
            $('.range .min').text(ui.values[0]);
            $('.range .max').text(ui.values[1]);
        }
    });

    $('#bron__btn').click(function () {
        $('[aria-controls="price"]').trigger('click');
    });
});

// MAP
(function(){
    var map;
    function initialize() {
        if(!document.getElementById('map'))
            return ;
        var myLatLng = {lat: 44.037287, lng: 43.074850};

        var mapOptions = {
            center: myLatLng,
            zoom: 16,
            disableDefaultUI: true,
            scrollwheel: false,
            draggable: false
        };

        map = new google.maps.Map(document.getElementById('map'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);

    google.maps.event.addDomListener(window, "resize", function() {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center);
    });
})();