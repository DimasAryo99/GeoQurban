<script>
    function initMap() {
        /*var mapOptions = 
        {
            center: new google.maps.LatLng(-6.300641, 106.814095),
            zoom: 14,
            
        };*/

        const locations = [
            ["Masjid Ar Ridho Al-Azhar", -6.210476370920034, 106.79069189585186, 15],
            ["Masjid Al azhar UNP", -0.8984599691452988, 100.35112838545206, 16],
            ["Masjid Jami Al-Azhar (Pasar Minggu)", -6.295912030660403, 106.84192417932127, 14],
            ["Masjid Al Azhar Kemandoran", -6.210454005180001, 106.79069046812323, 13],
            ["Masjid Al Azhar Sumarecon Bekasi", -6.221556145190834, 107.0017980971097, 12],
            ["Masjid Al Azhar Cempaka Putih", -6.1745449632034175, 106.86241873335015, 11],
            ["Masjid Al-Azhar Semarang", -7.056256191005614, 110.42672519943758, 10],
            ["Masjid Al Azhar Permata Puri", -6.998537071450119, 110.34049621791506, 9],
            ["Mesjid Al azhar ISI Padang Panjang", -0.4569627002045399, 100.4053747198413, 8],
            ["Masjid Asy-Syarif Al Azhar BSD", -6.286939259411687, 106.67472746588912, 7],
            ['Masjid Al Azhar Pejaten', -6.269528278816006, 106.83741165424786, 6],
            ['Masjid Jami Al-Azhar Jakapermai', -6.2483096414542025, 106.97304436503315, 5],
            ['Masjid Nur Al Azhar', -6.351490291535406, 106.81326159585295, 4],
            ['Masjid Raya Al Azhar Bintaro', -6.267146407141842, 106.74208572468778, 3],
            ['Masjid Raya Al Azhar', -6.2113389467679445, 106.94228595333578, 2],
            ['Masjid Agung Al-Azhar', -6.235061499351085, 106.79910672468752, 1]
        ];

        var map = new google.maps.Map(document.getElementById("map-canvas"), {
            zoom: 11,
            center: new google.maps.LatLng(-6.300641, 106.814095),
        });
        // default map type
        // Add a listener for the click event

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
        /*var marker = new google.maps.Marker({
             position:{lat:106.814095,lng:-6.300641},
             map:map
             });
        */

    }

    /* function addLatLng(event) 
        {
        var marker = new google.maps.Marker({
        position: event.latLng,
        title: 'Simple GIS',
        map: map
        });
        markers.push(marker);
        }

        function addMarker(nama,location) 
        {
        var marker = new google.maps.Marker({
            position: location,
            map: map,
            title : nama
        });
        markers.push(marker);
        }


    google.maps.event.addDomListener(window, "load", initMap);

    $(document).on('click','#viewmarker',viewmarker);

    function viewmarker()
    {
            var id = $(this).data('idmasjid');
            var datamarker = {'id_masjid':id};
            console.log(datamarker);
            $.ajax({
            url : '<?php echo site_url("dashboard/read") ?>',
            data : datamarker,
            dataType : 'json',
            type : 'POST',
            success : function(data,status)
            {
                if (data.status!='error')
                {
                    //load marker
                    $.each(data.msg,function(k,v)
                    {
                        $['#latitude'].val(v['latitude']);
                        $['#longitude'].val(v['longitude']);
                        $['#id_masjid'].val(v['id_masjid']);
                        var myLatLng = {lat: parseFloat(n["latitude"]), lng: parseFloat(n["longitude"])};
                        addMarker(myLatLng);
                    })
                    //end load marker
                }
                else
                {
                    alert(data.msg);
                }
            },
            error:function(x,t,m)
            {
                alert(x.responseText);
            }
        })
    }*/
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9vGmYGF7rTSKaV4HefJZqcGxyr5hZQHQ&callback=initMap&libraries=&v=weekly" async>
</script>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= base_url('assets/') ?>js/jquery-1.10.2.min.js"></script>
<script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
<!--script src="<?= base_url('assets/') ?>ext/customScroll/js/jquery.mCustomScrollbar.min.js"></--script-->
<!--script src="<?= base_url('assets/') ?>ext/customScroll/js/jquery.mousewheel.min.js"></!--script-->
<script src="<?= base_url('assets/') ?>js/application.js"></script>
<script src="<?= base_url('assets/') ?>js/unhide.js"></script>
<!--script src="<?= base_url('assets/') ?>js/application.map.js"></--script-->

</body>

<!--DOCTYPE html>
    <html>

    <head>
        <title>Simple Map</title>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></sc>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/map.css" />
    </head>

    <body>
        <div id="map"></div>

    </html-->