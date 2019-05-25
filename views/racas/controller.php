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
    case 2:
        $racaObj = new \App\Model\Raca();
        $racaObj->setNome($_POST['nome']);
        $racaUseCase = new Raca();
        if ($racaUseCase->save($racaObj)) {
            header('Location: index.php');
        } else {
            echo 'erro ao salvar';
        }
        break;
    default:
        echo 0;
        break;
}