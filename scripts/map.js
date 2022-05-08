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

const targetZone = document.querySelector("#map");


const latitude = 50.8144;
const longitude = 4.8855;

const map = L.map('map', {
    center: [latitude, longitude],
    zoom: 19,
    dragging: false,
})

L.tileLayer(
    'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 24,
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

document.querySelector(".items").addEventListener("click", (e) => {
    let items = document.querySelectorAll(".item");
    for (let i = 0; i < items.length; i++) {
        items[i].classList.remove("active");
    }
    e.target.classList.add("active");
    dragEvent();
});

//for objects that require bounds
dragEvent = () => {
    activeItem = document.querySelector(".active");
    itemId = activeItem.dataset.itemId;
    let side1;
    let side2;
    map.addEventListener('mousedown', e => {
        side1 = e.latlng;
        console.log("found");
    })
    map.addEventListener('mouseup', e => {
        side2 = e.latlng;
        bounds = [side1, side2];
        console.log(bounds);
        if (activeItem) {
            itemId = activeItem.dataset.itemId;
            switch (itemSelection[itemId]) {
                case "bank": ;
                    break;
                case "weg": ;
                    break;
                case "parking": ;
                    break;
                case "zone30": ;
                    break;
                case "zone50": ;
                    break;
                default: ;
            }
        }
        else {
            console.log("error no item selected")
        }
    })
}

//for objects that require radius
targetZone.addEventListener("click", (e) => {
    activeItem = document.querySelector(".active");
    itemId = activeItem.dataset.itemId;
    newPoint = L.point([e.clientX, e.clientY]);
    coordinates = map.mouseEventToLatLng(e);
    if (activeItem) {
        switch (itemSelection[itemId]) {
            case "paal": L.circle(coordinates, { radius: 1 }).addTo(map);
                break;
            case "boom": L.circle(coordinates, { color: 'green', radius: 2 }).addTo(map);
                break;
            case "bloem": L.circle(coordinates, { color: 'yellow', radius: 0.7 }).addTo(map);
                break;
            case "pictogram": L.circle(coordinates, { color: 'gray', radius: 0.5 }).addTo(map);
                break;
            case "licht": L.circle(coordinates, { color: 'white', radius: 0.5 }).addTo(map);
                break;
            default: ;
        }
    } else {
        console.log("error no item selected")
    }
})
