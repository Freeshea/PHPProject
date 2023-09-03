<?php
require_once 'config.php';

// Start of the app, page selection
$page = isset($_GET['page']) ? $_GET['page'] : '';

switch ($page) {
    case 'user_list':
        require_once 'controllers/UserController.php';
        $controller = new UserController();
        $controller->index();
        break;
    case 'advertisement_list':
        require_once 'controllers/AdvertisementController.php';
        $controller = new AdvertisementController();
        $controller->index();
        break;
    default:
        require_once 'views/index.php';
        break;
}
