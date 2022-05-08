const latitude = 50.8144;
const longitude = 4.8855;

const map = L.map('map').setView([latitude, longitude], 19);

L.tileLayer(
    'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 24
}).addTo(map);

let targetZone = document.querySelector("#map")
