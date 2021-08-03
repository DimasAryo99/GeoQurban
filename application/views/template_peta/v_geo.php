<div id="contact" class="contact-us section">

        <div class="container">
            <div class="row">
                <div class="rounded">
                    <div id="mapid" style="height:auto;"></div>
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
        L.titleLayer('https://api/api.mapbox.com/styles/c1/{id}/tiles/{z}/{y}?access_tokenpk.rJcFIG214AriISLbB6B5aw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/street-v11'

        
        }).addTo(mymap);
    </script>