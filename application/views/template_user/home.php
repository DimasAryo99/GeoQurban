    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('assets/') ?> js/jquery-1.10.2.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/') ?>ext/customScroll/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="<?= base_url('assets/') ?>ext/customScroll/js/jquery.mousewheel.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/application.js"></script>
    <!--script src="<?= base_url('assets/') ?>js/application.map.js"></!--script-->
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzmR9L3VGDN-fVjZuXCO9IBA6eOJG_2DU&callback=initMap">
    </script>

    <script>
        let map;

        function initMap() {
            var mapOptions = {
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

        google.maps.event.addDomListener(window, "load", initMap);

        (function($) {

            $(".point-list-view").mCustomScrollbar({
                scrollButtons: {
                    enable: true
                },
                theme: 'dark-thick',
                contentTouchScroll: true
            });

        })(jQuery);
    </script>
    </body>

    <!--DOCTYPE html>
    <html>

    <head>
        <title>Simple Map</title>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/map.css" />
    </head>

    <body>
        <div id="map"></div>

    </html-->