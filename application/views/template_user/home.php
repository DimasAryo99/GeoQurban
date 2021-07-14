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
        var map;
        var markers=[];

        function initMap() 
        {
            var mapOptions = 
            {
                center: new google.maps.LatLng(-6.300641, 106.814095),
                zoom: 14,
                
            };

            map= new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
            // default map type
             // Add a listener for the click event
            google.maps.event.addListener(map, 'rightclick', addLatLng);
            google.maps.event.addListener(map, "rightclick", function(event) {
            var lat = event.latLng.lat();
            var lng = event.latLng.lng();
            $('#latitude').val(lat);
            $('#longitude').val(lng);
            //alert(lat +" dan "+lng);
        });

        }

        function addLatLng(event) 
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
    }


    </script>
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