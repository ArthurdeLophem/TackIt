<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
    <link rel="stylesheet" href="css/app.css"/>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <title>project</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
        <div class="p-2">
            <a class="navbar-brand" href="index.php">logo</a>
        </div>

        <div class="p-2">
            <span>Gemeente Tienen</span>
        </div>

        <div class="p-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
            </svg>
        </div>
    </nav>
    
    <div style="height: 70vh; background-color: rgba(255,0,0,0.1); display: flex; justify-content: space-around">
        <div class="itemPicker h-100 d-flex flex-wrap justify-content-center align-content-start items" style="width: 25%; background-color: rgba(0,0,255,.1)">
            <img src="https://static.twinesocial.com/uploads/appProfiles/3986IUR95CHD0LYJ.png" data-item-type="boom" class="item inactive"></img>
            <img src="https://static.twinesocial.com/uploads/appProfiles/3986IUR95CHD0LYJ.png" data-item-type="verkeerslicht" class="item inactive"></img>
            <img src="https://static.twinesocial.com/uploads/appProfiles/3986IUR95CHD0LYJ.png" data-item-type="bank" class="item inactive"></img>
            <img src="https://static.twinesocial.com/uploads/appProfiles/3986IUR95CHD0LYJ.png" data-item-type="pad" class="item inactive"></img>
        </div>

        <div id="map" class="h-100 d-inline-block" style="width: 60%;">

        </div>
    </div>
    <script src="./scripts/map.js"></script>
</body>
</html>