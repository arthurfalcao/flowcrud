<?php

require_once __DIR__ . "/../global.php";

if (isset($_POST['action'])) {
    
    $class = $_POST['model'];

    require_once __DIR__ . "/controllers/" . $class . "Controller.php";

    $controller = $class ."Controller";
    $model = new $controller();

    switch ($_POST['action']) {
        case 'add':
            if ($model->add($_POST)) {
                echo "opa";
            } else {

            }
            break;

        case 'update':
            if ($model->update($_POST)) {
                echo "opa";
            } else {

            }
            break;

        case 'delete':
            if ($model->delete()) {
                echo "opa";
            } else {

            }
            break;

        default:
            break;
    }

    // header("Location: {}");
    exit;
}