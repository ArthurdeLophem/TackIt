//inotializing the map
const targetZone = document.querySelector("#map");
const latitude = 50.8144;
const longitude = 4.8855;
const map = L.map('map', {
    center: [latitude, longitude],
    zoom: 19,
})

//get map from osm
L.tileLayer(
    'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxNativeZoom: 19,
    maxZoom: 25,
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

drawItems = (item) => {
    console.log(item)
    itemType = item.itemType;

    //imagePath = "/css/images/" + itemType + ".png"
    imagePath = "https://static.twinesocial.com/uploads/appProfiles/3986IUR95CHD0LYJ.png"

    //console.log(imagePath);
    newIcon = L.icon({
        iconUrl: imagePath,
        iconSize: [50, 50]
    })

    coordinates = [item.coordinates.lat, item.coordinates.lng];

    //console.log(coordinates + imagePath)
    newMarker = L.marker(coordinates, {
        icon: newIcon
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