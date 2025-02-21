<?php

/*
Template Name: contacts
*/

?>

<?php get_header(); ?>
<?php $front_page = get_option('page_on_front') ?>

<main class="main">

    <section class="contact-page">
        <div class="container">
            <h2 class="contact-page__title title">Контакты</h2>
            <div class="contact-page__wrapper">
                <div id="map" class="contact-page__map">
                </div>
                <div class="contact-page__inner">
                    <ul class="contact-page__list">
                        <li class="contact-page__item">
                            <a href="tel:<?php the_field('phone-number', $front_page) ?>"><?php the_field('phone',$front_page) ?></a>
                        </li>
                        <li class="contact-page__item">
                            <a href="https://www.google.com.ua/maps/place/49%C2%B000'38.4%22N+33%C2%B038'45.3%22E/@49.0106552,33.6451442,18z/data=!3m1!4b1!4m14!1m7!3m6!1s0x40d9ffcd5cc0be81:0x7a11652706be2492!2z0JPQvtGA0LjRiNC90LjQtSDQn9C70LDQstC90LgsINCf0L7Qu9GC0LDQstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGM!3b1!8m2!3d49.0156679!4d33.6450451!3m5!1s0x0:0xfca17aabf4806c3d!7e2!8m2!3d49.0106536!4d33.6459177?hl=ru">
                                <?php the_field('adress', $front_page); ?>
                            </a>
                        </li>
                        <li class="contact-page__item">
                            <p><?php the_field('working-hours', $front_page); ?></p>
                        </li>
                        <li class="contact-page__item">
                            <a href="mailto:<?php the_field('email', $front_page); ?>"><?php the_field('email', $front_page); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</main>
<script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&v=weekly" defer></script>
<script>
    let map;

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: {
                lat: 49.010598,
                lng: 33.646478
            },
            zoom: 14,
            styles: [{
                    "featureType": "administrative",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "administrative.country",
                    "elementType": "labels.text",
                    "stylers": [{
                            "saturation": "3"
                        },
                        {
                            "lightness": "100"
                        },
                        {
                            "gamma": "10.00"
                        },
                        {
                            "hue": "#003bff"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "on"
                    }]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#e8e7e7"
                    }]
                },
                {
                    "featureType": "landscape.man_made",
                    "elementType": "all",
                    "stylers": [{
                            "visibility": "on"
                        },
                        {
                            "color": "#d3d3d3"
                        }
                    ]
                },
                {
                    "featureType": "landscape.natural",
                    "elementType": "all",
                    "stylers": [{
                        "color": "#d3d3d3"
                    }]
                },
                {
                    "featureType": "landscape.natural.landcover",
                    "elementType": "all",
                    "stylers": [{
                            "visibility": "on"
                        },
                        {
                            "color": "#d3d3d3"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#C5E3BF"
                    }]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "geometry",
                    "stylers": [{
                        "saturation": "7"
                    }]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "gamma": "1"
                    }]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "labels",
                    "stylers": [{
                        "weight": "0.01"
                    }]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "labels.text",
                    "stylers": [{
                            "color": "#dc6e36"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "color": "#a33e3e"
                    }]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "labels.icon",
                    "stylers": [{
                            "visibility": "simplified"
                        },
                        {
                            "gamma": "1"
                        },
                        {
                            "saturation": "0"
                        },
                        {
                            "color": "#dc6e36"
                        }
                    ]
                },
                {
                    "featureType": "poi.government",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "poi.government",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "poi.medical",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "all",
                    "stylers": [{
                            "visibility": "simplified"
                        },
                        {
                            "color": "#55e400"
                        },
                        {
                            "saturation": "-66"
                        },
                        {
                            "lightness": "21"
                        }
                    ]
                },
                {
                    "featureType": "poi.school",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "poi.school",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "on"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [{
                            "lightness": 100
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#ffffff"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "weight": "0.56"
                    }]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "on"
                    }]
                },
                {
                    "featureType": "road.local",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "simplified"
                    }]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "on"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                            "visibility": "on"
                        },
                        {
                            "color": "#4da3fd"
                        }
                    ]
                }
            ]
        });
    }

    window.initMap = initMap;
</script>

<?php get_footer(); ?>