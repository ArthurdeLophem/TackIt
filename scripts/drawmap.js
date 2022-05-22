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
            console.log(data);
        })
        .catch((error) => {
            console.error('Error:', error);
        });
}

window.addEventListener("load", getItems)