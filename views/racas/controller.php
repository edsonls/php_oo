<?php
require_once '../../vendor/autoload.php';

use App\UseCase\Raca;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
switch ($_POST['op']) {
    case 1:
        header('Content-Type: application/json');
        $raca = new Raca();
        echo json_encode($raca->find());
        break;
    default:
        echo 0;
}