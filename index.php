<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$page = isset($_GET['page']) ? $_GET['page'] : 'home';

include_once __DIR__ . '/config/config.php';


switch ($page) {
    case 'portfolio':
        include __DIR__ . '/pages/portfolio.php';
        break;
    case 'about':
        include __DIR__ . '/pages/about.php';
        break;
    case 'contact':
        include __DIR__ . '/pages/contact.php';
        break;
    case 'terms':
        include __DIR__ . '/pages/terms.php';
        break;
    case 'privacy':
        include __DIR__ . '/pages/privacy.php';
        break;
    default:
        include __DIR__ . '/pages/home.php';
        break;
}
