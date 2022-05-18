const targetZone = document.querySelector("#map");

const latitude = 50.8144;
const longitude = 4.8855;

const map = L.map('map', {
    center: [latitude, longitude],
    zoom: 19
})

L.tileLayer(
    'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 24,
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

document.querySelector(".items").addEventListener("mousedown", (e) => {
    let items = document.querySelectorAll(".item");
    for (let i = 0; i < items.length; i++) {
        items[i].classList.remove("active");
    }
    e.target.classList.add("active");
});

targetZone.ondragover = (e) => {
    e.preventDefault()
    e.dataTransfer.dropEffect = "move"
}

targetZone.ondrop = (e) => {
    e.preventDefault()

    itemType = document.querySelector(".active").dataset.itemType

    imagePath = e.dataTransfer.getData("text/plain")
    newIcon = L.icon({
        iconUrl: imagePath,
        iconSize: [50, 50]
    })

    coordinates = map.mouseEventToLatLng(e);
    console.log(coordinates + itemType)
    newMarker = L.marker(coordinates, {
        icon: newIcon,
        draggable: true,
    }).addTo(map)
}

//console.log(imagePath);
//coordinates = map.containerPointToLatLng(L.point([e.clientX, e.clientY]))
/*
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
}*/

