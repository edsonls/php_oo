<?php
require_once '../../src/UseCase/Raca.php';
switch ($_POST['op']) {
    case 1:
        header('Content-Type: application/json');
        $raca = new Raca();
        echo json_encode($raca->find());
        break;
    default:
        echo 0;
}