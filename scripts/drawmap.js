//inotializing the map
const targetZone = document.querySelector("#map");
const latitude = 51.0259;
const longitude = 4.4776;
const map = L.map('map', {
    center: [latitude, longitude],
    zoom: 19,
})

const items = [];

//get map from osm
L.tileLayer(
    'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxNativeZoom: 19,
    maxZoom: 25,
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

drawItems = (item) => {
    itemType = item.itemType;
    imagePath = "css/images/items/" + itemType + ".svg"
    console.log(itemType)

    newIcon = L.icon({
        iconUrl: imagePath,
        iconSize: [50, 50]
    })

    coordinates = { "lat": item.coordinates.lat, "lng": item.coordinates.lng };

    aMarker = L.marker(coordinates, {
        icon: newIcon,
        draggable: false,
        itemType: itemType
    }).addTo(map)
}

getItems = (e) => {
    e.preventDefault();

    let userId = targetZone.dataset.userId;
    let projectId = targetZone.dataset.projectId;
    let data = new FormData()
    data.append("userId", userId)
    data.append("projectId", projectId)

    fetch('ajax/getItems.php', {
        method: 'POST', // or 'PUT'
        body: data,
    })
        .then(response => response.json())
        .then(data => {
            data.Items.forEach(drawItems)
        })
        .catch((error) => {
            console.error('Error:', error);
        });
}

window.addEventListener("load", getItems)