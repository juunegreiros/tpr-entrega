
$(function () {
    'use strict';
    // Navbar 
    $(window).scroll(function () {
        var navbar = $('.navbar');
        if ($(window).scrollTop() >= navbar.height()) {
            navbar.addClass('scrolled');
        } else {
            navbar.removeClass('scrolled');
        }
    });
    
    // Navbar Toggle
    $('.navbar-toggle').on('click', function () {
        $('.navbar-toggle').toggleClass('change');
    });
    
    //Nice Scroll
    $("html, .navbar-collapse").niceScroll({
        cursorcolor: "#ce3745",
        cursorborder: 'none',
        zindex: 999
    });
    // Background Slideshow Testimonials
    $('.testimonials-container').backstretch([
        "./img/10.jpg",
        "./img/rua2.jpg"
    ], {
        duration: 3000,
        fade: 750
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function () {
        $('.testimonials-container').backstretch("resize");
    });
    
    // Scroll Top
    var scrollButton = $("#scroll-top");
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 500) {
            scrollButton.show();
        } else {
            scrollButton.hide();
        }
    });
    scrollButton.on('click', function () {
        $("html,body").animate({scrollTop: 0}, 2000);
    });
});


// Isotope
// init Isotope
var $grid = $('.grid').isotope({
    itemSelector: '.grid-item',
    layoutMode: 'fitRows',
    getSortData: {
        name: '.name',
        symbol: '.symbol',
        number: '.number parseInt',
        category: '[data-category]',
        weight: function (itemElem) {
            'use strict';
            var weight = $(itemElem).find('.weight').text();
            return parseFloat(weight.replace(/[\(\)]/g, ''));
        }
    }
});

// filter functions
var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function () {
        'use strict';
        var number = $(this).find('.number').text();
        return parseInt(number, 10) > 50;
    },
    // show if name ends with -ium
    ium: function () {
        'use strict';
        var name = $(this).find('.name').text();
        return name.match(/ium$/);
    }
};

// bind filter button click
$('#filters').on('click', 'button', function () {
    'use strict';
    var filterValue = $(this).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[filterValue] || filterValue;
    $grid.isotope({
        filter: filterValue
    });
});

// bind sort button click
$('#sorts').on('click', 'button', function () {
    'use strict';
    var sortByValue = $(this).attr('data-sort-by');
    $grid.isotope({
        sortBy: sortByValue
    });
});

// change is-checked class on buttons
$('.button-group').each(function (i, buttonGroup) {
    'use strict';
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on('click', 'button', function () {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        $(this).addClass('is-checked');
    });
});

// Map
function initMap() {
    // Styles a map in night mode.
    'use strict';
    var sulz = {lat: -23.6082537, lng: -47.0299576};
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: -23.6082537,
            lng: -47.0299576
        },
        zoom: 17,
        styles: [
            {
                elementType: 'geometry',
                stylers: [{
                    color: '#272727'
                }]
            },
            {
                elementType: 'labels.text.stroke',
                stylers: [{
                    color: '#1d1d1d'
                }]
            },
            {
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#403e3e'
                }]
            },
            {
                featureType: 'administrative.locality',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#909090'
                }]
            },
            {
                featureType: 'poi',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#ce3745'
                }]
            },
            {
                featureType: 'poi.park',
                elementType: 'geometry',
                stylers: [{
                    color: '#414242'
                }]
            },
            {
                featureType: 'poi.park',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#909090'
                }]
            },
            {
                featureType: 'road',
                elementType: 'geometry',
                stylers: [{
                    color: '#ce3745'
                }]
            },
            {
                featureType: 'road',
                elementType: 'geometry.stroke',
                stylers: [{
                    color: '#ec7782'
                }]
            },
            {
                featureType: 'road',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#6b6b6b'
                }]
            },
            {
                featureType: 'road.highway',
                elementType: 'geometry',
                stylers: [{
                    color: '#841f28'
                }]
            },
            {
                featureType: 'road.highway',
                elementType: 'geometry.stroke',
                stylers: [{
                    color: '#ababab'
                }]
            },
            {
                featureType: 'road.highway',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#ce3745'
                }]
            },
            {
                featureType: 'transit',
                elementType: 'geometry',
                stylers: [{
                    color: '#777777'
                }]
            },
            {
                featureType: 'transit.station',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#6b6b6b'
                }]
            },
            {
                featureType: 'water',
                elementType: 'geometry',
                stylers: [{
                    color: '#1c1c1c'
                }]
            },
            {
                featureType: 'water',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#6b6b6b'
                }]
            },
            {
                featureType: 'water',
                elementType: 'labels.text.stroke',
                stylers: [{
                    color: '#272727'
                }]
            }
        ]
    });
    var marker = new google.maps.Marker({ position: sulz, map: map });
}