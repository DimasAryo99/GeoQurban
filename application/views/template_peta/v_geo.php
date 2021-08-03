<div id="contact" class="contact-us section">

        <div class="container">
            <div class="row">
                <div class="rounded">
                <div id="mapid" style="width: 1100px; height: 400px;"></div>
                    <div class="shadow p-4 mb-4 bg-white">
                        <div class="col-mid" style="height: 100%;">
                            <div class="section-heading">
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var mymap = L.map('mapid').setView([-6.300641, 106.814095], 14);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);
    </script>