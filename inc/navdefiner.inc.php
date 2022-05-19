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

switch ($url) {
    case '/tackit/citizenDashboard.php':
        $navClassA = 'selectedTab';
        $navClassB = '';
        $navClassC = '';
        $navClassD = '';
        $navClassE = '';
        $navClassF = '';
        $navClassG = '';
        break;
    case '/tackit/GemeenteDashboard.php':
        $navClassA = 'selectedTab';
        $navClassB = '';
        $navClassC = '';
        $navClassD = '';
        $navClassE = '';
        $navClassF = '';
        $navClassG = '';
        break;
    case '/tackit/projecten.php':
        $navClassA = '';
        $navClassB = 'selectedTab';
        $navClassC = '';
        $navClassD = '';
        $navClassE = '';
        $navClassF = '';
        $navClassG = '';
        break;
}