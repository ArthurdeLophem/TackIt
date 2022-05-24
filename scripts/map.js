//inotializing the map
const targetZone = document.querySelector("#map");
const latitude = 50.8144;
const longitude = 4.8855;
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

//check which type of item was dropped by user
document.querySelector(".items").addEventListener("mousedown", (e) => {
    removeActive();
    e.target.classList.add("active");
});

//remove active class
removeActive = () => {
    let items = document.querySelectorAll(".item");
    for (let i = 0; i < items.length; i++) {
        items[i].classList.remove("active");
    }
}

//drop new instance of image on the map
targetZone.ondragover = (e) => {
    e.preventDefault()
    e.dataTransfer.dropEffect = "move"
}
targetZone.ondrop = (e) => {
    e.preventDefault()

    console.log(items)

    if (document.querySelector(".active") == null) {
        itemType = item.itemtype;
    } else {
        itemType = document.querySelector(".active").dataset.itemType
    }

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
        itemType: itemType
    }).addTo(map)

    items.push({ "coordinates": coordinates, "itemType": itemType })

    let oldCoords

    newMarker.addEventListener('mousedown', (e) => {
        oldCoords = e.target.getLatLng(e)
    })

    newMarker.addEventListener('dragend', (e) => {
        const getIndex = items.findIndex(item => {
            if (item.coordinates == oldCoords) return true
        });

        newCoordinates = e.target.getLatLng(e);
        itemType = items[getIndex].itemType

        items.push({ "coordinates": newCoordinates, "itemType": itemType })
        items.splice(getIndex, 1)
    })

    //console.log(items);
    removeActive();
}

saveItems = (e) => {
    e.preventDefault();

    let userId = e.target.dataset.userId;
    let projectId = e.target.dataset.projectId;
    let data = new FormData()
    data.append("userId", userId)
    data.append("projectId", projectId)
    data.append("items", JSON.stringify(items))

    fetch('ajax/saveItems.php', {
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

document.querySelector(".saveBtn").addEventListener("click", saveItems);

drawItems = (item) => {
    itemType = item.itemType;
    imagePath = "/css/images/items/" + itemType + ".svg"
    console.log(itemType)

    newIcon = L.icon({
        iconUrl: imagePath,
        iconSize: [50, 50]
    })

    coordinates = { "lat": item.coordinates.lat, "lng": item.coordinates.lng };

    aMarker = L.marker(coordinates, {
        icon: newIcon,
        draggable: true,
        itemType: itemType
    }).addTo(map)

    items.push({ "coordinates": coordinates, "itemType": itemType })
    console.log(items)

    let oldCoords

    aMarker.addEventListener('mousedown', (e) => {
        oldCoords = e.target.getLatLng(e)
        itemType = e.target.options.itemType
    })

    aMarker.addEventListener('dragend', (e) => {
        const getIndex = items.findIndex(item => {
            if (item.coordinates.lat == oldCoords.lat && item.coordinates.lng == oldCoords.lng) return true
        });

        console.log(oldCoords + itemType)
        console.log(getIndex)

        newCoordinates = e.target.getLatLng(e);
        //itemType = items[getIndex].itemType

        items.push({ "coordinates": newCoordinates, "itemType": itemType })
        items.splice(getIndex, 1)
    })
}

getItems = (e) => {
    e.preventDefault();

    let userId = document.querySelector(".saveBtn").dataset.userId;
    let projectId = document.querySelector(".saveBtn").dataset.projectId;
    let data = new FormData()
    data.append("userId", userId)
    data.append("projectId", projectId)

    fetch('ajax/getItems.php', {
        method: 'POST', // or 'PUT'
        body: data,
    })
        .then(response => response.json())
        .then(data => {
            console.log(data)
            data.Items.forEach(drawItems)
        })
        .catch((error) => {
            console.error('Error:', error);
        });
}

window.addEventListener("load", getItems)