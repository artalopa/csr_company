const LeafIcon = L.Icon.extend({
    options: {
        iconSize:     [35, 35],
    }
});
const greenIcon = new LeafIcon({iconUrl: 'http://127.0.0.1:8000/assets/dist/js/maps/icon/location-green.png'});
const yellowIcon = new LeafIcon({iconUrl: 'http://127.0.0.1:8000/assets/dist/js/maps/icon/location-yellow.png'});

const cities = L.layerGroup();
const mlonggo= L.marker([-6.5082146502488465, 110.7173468364222], {icon: greenIcon}).bindPopup('Kecamatan Mlonggo').addTo(cities);
const bangsri = L.marker([-6.522297620172923, 110.76462363490234], {icon: greenIcon}).bindPopup('Bangsri').addTo(cities);
const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    minZoom: 11,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});

const osmHOT = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Tiles style by <a href="https://www.hotosm.org/" target="_blank">Humanitarian OpenStreetMap Team</a> hosted by <a href="https://openstreetmap.fr/" target="_blank">OpenStreetMap France</a>'
});

const map = L.map('map', {
    center: [-6.582310350983239, 110.67830742527129],
    zoom: 11,
    layers: [osm, cities]
});

const baseLayers = {
    'OpenStreetMap': osm,
    'OpenStreetMap.HOT': osmHOT
};

const overlays = {
    'Kecamatan': cities
};

const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

var detailMaps =
        "<div clas='card'>\
            <img src='http://127.0.0.1:8000/assets/images/maps/kura.jpg' width='100%'>\
            <div class='p-2'>\
                <span class='fw-bold'>Kecamatan Tahunan</span>\
            </div>\
        </div>"
;
const tahunan = L.marker([-6.6141833403467265, 110.69257783915397], {icon: yellowIcon}).bindPopup(detailMaps);

const parks = L.layerGroup([tahunan]);

layerControl.addOverlay(parks, 'Desa');
