    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('assets/') ?> js/jquery-1.10.2.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/') ?>ext/customScroll/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="<?= base_url('assets/') ?>ext/customScroll/js/jquery.mousewheel.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/application.js"></script>

    <script>
        function map_init() {
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

        google.maps.event.addDomListener(window, "load", map_init);

        (function ($) {

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

</html>