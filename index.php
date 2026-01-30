<?php
require 'vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\StudentController;

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        (new HomeController())->index();
        break;

    case 'students':
        (new StudentController())->index();
        break;

    default:
        echo "404 - Page Not Found";
}