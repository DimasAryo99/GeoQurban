 function initMap() {
            /*var mapOptions = {
                center: new google.maps.LatLng(-6.2315099231703535, 106.8002117980009),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControlOptions: {
                    position: google.maps.ControlPosition.RIGHT_TOP,
                    style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                },
                zoomControlOptions: {
                    position: google.maps.ControlPosition.RIGHT_BOTTOM
                },
                panControlOptions: {
                    position: google.maps.ControlPosition.RIGHT_BOTTOM
                }
            };

            

            EGMap0 = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
            // default map type
            EGMap0.mapTypeControlOptions.mapTypeIds = ['roadmap', 'satellite', 'hybrid', 'terrain'];

        }

        google.maps.event.addDomListener(window, "load", map_init);

        (function ($) {

            $(".point-list-view").mCustomScrollbar({
                scrollButtons: {
                    enable: true
                },
                theme: 'dark-thick',
                contentTouchScroll: true
            });

        })(jQuery);*/
        // The location of masjid
  var masjid = { lat: -6.235061499351085, lng: 106.79910672468752 };
  // The map, centered at masjid
  var map = new google.maps.Map(
    document.getElementById("map"),
    {
      zoom: 4,
      center: masjid,
    });
    }
