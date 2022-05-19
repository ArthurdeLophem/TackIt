<?php   

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";   
$url = $_SERVER['REQUEST_URI'];    

if($url ='/tackit/citizenDashboard.php') {
    $navClassA = 'selectedTab';
} else {
    $navClassB = '';
    $navClassC = '';
    $navClassD = '';
    $navClassE = '';
    $navClassF = '';
    $navClassG = '';
}