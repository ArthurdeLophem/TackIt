<?php   

session_start();
$user = $_SESSION['user'];
$userType = $user['Type'];

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";   
$url = $_SERVER['REQUEST_URI'];    

switch ($url) {
    case '/tackit/dashboard.php':
        $navClassA = 'selectedTab';
        $navimgA = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654611494/Tackit_Assets/monitor_srmams.png';
        $navClassB = '';
        $navimgB = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539964/Tackit_Assets/folder_kdtbjq.png';
        $navClassC = '';
        $navimgC = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539982/Tackit_Assets/users_ttv8xw.png';
        $navClassD = '';
        $navimgD = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539979/Tackit_Assets/Setting_w4bjeo.png';
        $navClassE = '';
        $navimgE = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539972/Tackit_Assets/Logout_kmk0p3.png';
        $navClassF = '';
        $navimgF = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539958/Tackit_Assets/main_avatar_oxzrrf.png';
        $navClassG = '';
        $navimgG = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539968/Tackit_Assets/Help_x25g5e.png';
        break;
    case '/tackit/projecten.php':
        $navClassA = '';
        $navimgA = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539975/Tackit_Assets/monitor_sl1u7s.png';
        $navClassB = 'selectedTab';
        $navimgB = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654611494/Tackit_Assets/folder_flhtfv.png';
        $navClassC = '';
        $navimgC = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539982/Tackit_Assets/users_ttv8xw.png';
        $navClassD = '';
        $navimgD = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539979/Tackit_Assets/Setting_w4bjeo.png';
        $navClassE = '';
        $navimgE = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539972/Tackit_Assets/Logout_kmk0p3.png';
        $navClassF = '';
        $navimgF = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539958/Tackit_Assets/main_avatar_oxzrrf.png';
        $navClassG = '';
        $navimgG = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539968/Tackit_Assets/Help_x25g5e.png';
        break;
    case '/tackit/gebruikers.php':
        $navClassA = '';
        $navimgA = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539975/Tackit_Assets/monitor_sl1u7s.png';
        $navClassB = '';
        $navimgB = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539964/Tackit_Assets/folder_kdtbjq.png';
        $navClassC = 'selectedTab';
        $navimgC = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654611494/Tackit_Assets/users_gtak4x.png';
        $navClassD = '';
        $navimgD = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539979/Tackit_Assets/Setting_w4bjeo.png';
        $navClassE = '';
        $navimgE = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539972/Tackit_Assets/Logout_kmk0p3.png';
        $navClassF = '';
        $navimgF = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539958/Tackit_Assets/main_avatar_oxzrrf.png';
        $navClassG = '';
        $navimgG = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539968/Tackit_Assets/Help_x25g5e.png';
        break;
    case '/tackit/instellingen.php':
        $navClassA = '';
        $navimgA = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539975/Tackit_Assets/monitor_sl1u7s.png';
        $navClassB = '';
        $navimgB = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539964/Tackit_Assets/folder_kdtbjq.png';
        $navClassC = '';
        $navimgC = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539982/Tackit_Assets/users_ttv8xw.png';
        $navClassD = 'selectedTab';
        $navimgD = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654611494/Tackit_Assets/Setting_vp0bfq.png';
        $navClassE = '';
        $navimgE = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539972/Tackit_Assets/Logout_kmk0p3.png';
        $navClassF = '';
        $navimgF = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539958/Tackit_Assets/main_avatar_oxzrrf.png';
        $navClassG = '';
        $navimgG = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539968/Tackit_Assets/Help_x25g5e.png';
        break;
    case '/tackit/account.php':
        $navClassA = '';
        $navimgA = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539975/Tackit_Assets/monitor_sl1u7s.png';
        $navClassB = '';
        $navimgB = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539964/Tackit_Assets/folder_kdtbjq.png';
        $navClassC = '';
        $navimgC = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539982/Tackit_Assets/users_ttv8xw.png';
        $navClassD = '';
        $navimgD = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539979/Tackit_Assets/Setting_w4bjeo.png';
        $navClassE = '';
        $navimgE = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539972/Tackit_Assets/Logout_kmk0p3.png';
        $navClassF = 'selectedTab';
        $navimgF = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539958/Tackit_Assets/main_avatar_oxzrrf.png';
        $navClassG = '';
        $navimgG = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539968/Tackit_Assets/Help_x25g5e.png';
        break;    
    case '/tackit/help.php':
        $navClassA = '';
        $navimgA = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539975/Tackit_Assets/monitor_sl1u7s.png';
        $navClassB = '';
        $navimgB = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539964/Tackit_Assets/folder_kdtbjq.png';
        $navClassC = '';
        $navimgC = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539982/Tackit_Assets/users_ttv8xw.png';
        $navClassD = '';
        $navimgD = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539979/Tackit_Assets/Setting_w4bjeo.png';
        $navClassE = '';
        $navimgE = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539972/Tackit_Assets/Logout_kmk0p3.png';
        $navClassF = '';
        $navimgF = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654539958/Tackit_Assets/main_avatar_oxzrrf.png';
        $navClassG = 'selectedTab';
        $navimgG = 'https://res.cloudinary.com/dgypufy9k/image/upload/v1654693991/Tackit_Assets/Vector_eknk7d.png';
        break;      

}