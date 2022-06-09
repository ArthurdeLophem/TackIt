<?php

include_once("inc/navdefiner.inc.php");

?><!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("inc/header.inc.php"); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>TackIt</title>
</head>
<body>
    
<?php include_once("inc/topnav.inc.php"); ?>

<section id="navSection" class="d-inline-block">
    <?php include_once("inc/nav.inc.php"); ?>

</section>

<section class="user-content-section">
    <section class="users-personeel">
        <div class="users-nav">
            <h3>Personeel</h3>
            <div>
                <select name="user-filter" id="user-filter">
                        <option value="">sorteren op</option>
                        <option value="">Alfabetisch</option>
                </select> 
            </div>    
        </div>
        <div class="users-content">
            <ul>
                <li class="user-item">
                    <div>
                        <img class="users-profile-pic" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654539958/Tackit_Assets/main_avatar_oxzrrf.png" alt="O">
                        <h2>Kristien Iepers</h2>
                        <img class="users-middle-icon" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654539695/Tackit_Assets/approve_image_wklbws.png" alt="U">
                        <p>3</p>
                        <p>Voltooide projecten</p>
                        <img class="users-settings-icon" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654539979/Tackit_Assets/Setting_w4bjeo.png" alt="O">
                    </div>
                </li>    
                <li class="user-item">
                    <div>
                        <img class="users-profile-pic" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654539958/Tackit_Assets/main_avatar_oxzrrf.png" alt="O">
                        <h2>Kristien Iepers</h2>
                        <img class="users-middle-icon" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654539695/Tackit_Assets/approve_image_wklbws.png" alt="U">
                        <p>3</p>
                        <p>Voltooide projecten</p>
                        <img class="users-settings-icon" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654539979/Tackit_Assets/Setting_w4bjeo.png" alt="O">
                    </div>
                </li>    
            </ul>    
        </div>
    </section>
    <section class="users-burgers">
        <div class="users-nav">
            <h3>Burgers</h3>
            <div>
                <select name="user-filter" id="user-filter">
                    <option value="">sorteren op</option>
                    <option value="">Alfabetisch</option>
                </select>    
                <!-- <p>sorteren op</p>
                <img src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654606496/Tackit_Assets/down_arrow_vxb7md.png" alt="V"> -->
            </div>
        </div>
        <div class="users-content">
            <ul>
                <li class="user-item">
                    <div>
                        <img class="users-profile-pic" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654539958/Tackit_Assets/main_avatar_oxzrrf.png" alt="O">
                        <h2>Jeroen Smets</h2>
                        <img class="users-middle-icon" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654539695/Tackit_Assets/approve_image_wklbws.png" alt="U">
                        <p>3</p>
                        <p>Voltooide projecten</p>
                        <img class="users-settings-icon" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654539979/Tackit_Assets/Setting_w4bjeo.png" alt="O">
                    </div>
                </li>   
                <li class="user-item">
                    <div>
                        <img class="users-profile-pic" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654539958/Tackit_Assets/main_avatar_oxzrrf.png" alt="O">
                        <h2>Jeroen Smets</h2>
                        <img class="users-middle-icon" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654539695/Tackit_Assets/approve_image_wklbws.png" alt="U">
                        <p>3</p>
                        <p>Voltooide projecten</p>
                        <img class="users-settings-icon" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654539979/Tackit_Assets/Setting_w4bjeo.png" alt="O">
                    </div>
                </li>  
                <li class="user-item">
                    <div>
                        <img class="users-profile-pic" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654539958/Tackit_Assets/main_avatar_oxzrrf.png" alt="O">
                        <h2>Jeroen Smets</h2>
                        <img class="users-middle-icon" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654539695/Tackit_Assets/approve_image_wklbws.png" alt="U">
                        <p>3</p>
                        <p>Voltooide projecten</p>
                        <img class="users-settings-icon" src="https://res.cloudinary.com/dgypufy9k/image/upload/v1654539979/Tackit_Assets/Setting_w4bjeo.png" alt="O">
                    </div>
                </li>   
            </ul>    
        </div>
    </section>
</section>



</body>
</html>