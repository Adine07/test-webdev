<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lokasi Lahan</title>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
    </head>
    <body>

        <div id="map" style="width: 100%; height: 100vh;"></div>

        <script>
            const data = @json($data);
            const map = L.map('map').setView([-7.8032076,110.3573354], 13);
    
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
    
            var coord = coord || map.getCenter()
            const markerConf = { draggable: 'true', autoPan: true }
    
            // L.marker([-7.8032076,110.3573354], markerConf).addTo(map)
            //     .bindPopup('Mantap.<br> Jiwa.')
            //     .openPopup();
    
    
            // const marker = L.marker([data[1].lat,data[1].long], markerConf).addTo(map).bindPopup('No Lahan: XXXX<br>Petani: XXX')
    
            // marker.on('dragend', (e) => {
            //     console.log(data)
            // })

            for (let i = 0; i < data.length; i++) {
                marker = L.marker([data[i].lat, data[i].long], {zoom: 13, draggable: true, interactive: true}).bindPopup('No Lahan: ' + data[i].area_number + '<br>Petani: ' + data[i].farmer).addTo(map);
            }

            // map.on('dblclick', (e) => {
            //     console.log(marker)
            // })

            // marker.on('dragend', (e) => {
            //     console.log(data)
            // })

            // marker.on('dblclick')

            // function polygon(poly){
            //     for (let i = 0; i < data.length; i++) {
            //         if (data[i].polygon == poly) {
            //             var polygon = L.polygon([[data[0].lat,data[0].long], [data[1].lat,data[1].long], [data[2].lat,data[2].long]], {color: 'red', radius: 50})
            //         }
            //     }
            // }
            var polygon = L.polygon([[data[0].lat,data[0].long], [data[1].lat,data[1].long], [data[2].lat,data[2].long]], {color: 'red', radius: 50}).addTo(map);

        </script>
    </body>
</html>