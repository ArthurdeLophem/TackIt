<?php   

session_start();
$user = $_SESSION['user'];
$userType = $user['Type'];

if($userType == 0){
    $dashboard = "citizenDashboard.php";
}
if ($userType == 1){
    $dashboard = "GemeenteDashboard.php";
}


if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";   
$url = $_SERVER['REQUEST_URI'];    

if($url ='/tackit/citizenDashboard.php' || $url ='/tackit/GemeenteDashboard.php') {
    $navClassA = 'selectedTab';
} else {
    $navClassB = '';
    $navClassC = '';
    $navClassD = '';
    $navClassE = '';
    $navClassF = '';
    $navClassG = '';
}