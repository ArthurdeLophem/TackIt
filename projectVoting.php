<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>TackIt</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
        <div class="p-2">
            <a class="navbar-brand" href="#">logo</a>
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

    <div class="container d-flex flex-column">
        <div class="text-center">
            <h1>stem op je favoriet project</h1>
        </div>
        <div class="d-flex flex-row justify-content-between">
            <div class="badge bg-dark text-light">49 Tacks</div>
            <div class="badge bg-dark text-light">0/3 votes</div>
        </div>
        <div class="container d-flex flex-row flex-wrap justify-content-center">
            <div class="col-sm-4 my-3">
                <div class="card align-self-end flex-column" >
                    <div class="card-img-top rounded-start shadow-1-strong" 
                        style="height: 160px; background-image: url('./css/images/project_back.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; border-radius: 3px 0px 0px 3px;">
                    </div>
                    <li class="card-text list-group-item d-flex justify-content-between align-items-center" style="border-radius: 0;"> <span>X votes</span> <span>by <strong>Geert Duhoux</strong></span> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                        </svg>
                    </li>
                </div>
            </div>
            <div class="col-sm-4 my-3">
                <div class="card align-self-end flex-column" >
                    <div class="card-img-top rounded-start shadow-1-strong" 
                        style="height: 160px; background-image: url('./css/images/project_back.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; border-radius: 3px 0px 0px 3px;">
                    </div>
                    <li class="card-text list-group-item d-flex justify-content-between align-items-center" style="border-radius: 0;"> <span>X votes</span> <span>by <strong>Geert Duhoux</strong></span> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                        </svg>
                    </li>
                </div>
            </div>
            <div class="col-sm-4 my-3">
                <div class="card align-self-end flex-column" >
                    <div class="card-img-top rounded-start shadow-1-strong" 
                        style="height: 160px; background-image: url('./css/images/project_back.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; border-radius: 3px 0px 0px 3px;">
                    </div>
                    <li class="card-text list-group-item d-flex justify-content-between align-items-center" style="border-radius: 0;"> <span>X votes</span> <span>by <strong>Geert Duhoux</strong></span> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                        </svg>
                    </li>
                </div>
            </div>
            <div class="col-sm-4 my-3">
                <div class="card align-self-end flex-column" >
                    <div class="card-img-top rounded-start shadow-1-strong" 
                        style="height: 160px; background-image: url('./css/images/project_back.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; border-radius: 3px 0px 0px 3px;">
                    </div>
                    <li class="card-text list-group-item d-flex justify-content-between align-items-center" style="border-radius: 0;"> <span>X votes</span> <span>by <strong>Geert Duhoux</strong></span> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                        </svg>
                    </li>
                </div>
            </div>
            <div class="col-sm-4 my-3">
                <div class="card align-self-end flex-column" >
                    <div class="card-img-top rounded-start shadow-1-strong" 
                        style="height: 160px; background-image: url('./css/images/project_back.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; border-radius: 3px 0px 0px 3px;">
                    </div>
                    <li class="card-text list-group-item d-flex justify-content-between align-items-center" style="border-radius: 0;"> <span>X votes</span> <span>by <strong>Geert Duhoux</strong></span> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                        </svg>
                    </li>
                </div>
            </div>
            <div class="col-sm-4 my-3">
                <div class="card align-self-end flex-column" >
                    <div class="card-img-top rounded-start shadow-1-strong" 
                        style="height: 160px; background-image: url('./css/images/project_back.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; border-radius: 3px 0px 0px 3px;">
                    </div>
                    <li class="card-text list-group-item d-flex justify-content-between align-items-center" style="border-radius: 0;"> <span>X votes</span> <span>by <strong>Geert Duhoux</strong></span> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                        </svg>
                    </li>
                </div>
            </div>
        </div>
    </div>
</body>
</html>