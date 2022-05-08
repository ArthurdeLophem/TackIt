const itemSelection = [
    "paal",
    "boom",
    "bank",
    "bloem",
    "weg",
    "pictogram",
    "licht",
    "parking",
    "zone30",
    "zone50"
];

const latitude = 50.8144;
const longitude = 4.8855;

const map = L.map('map').setView([latitude, longitude], 19);

L.tileLayer(
    'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 24
}).addTo(map);

let targetZone = document.querySelector("#map");

document.querySelector(".items").addEventListener("click", (e) => {
    console.log("clicked")
    let items = document.querySelectorAll(".item");
    for (let i = 0; i < items.length; i++) {
        items[i].classList.remove("active");
    }
    e.target.classList.add("active");
});