<?php

namespace App\Controllers;

use App\Controller;
use App\Registry;
use App\Request;
use App\Session;

class ListsController extends Controller {

    public function logo() {

        //echo "lamamadelamamadelamamadelamama";
        if (($listname = filter_input(INPUT_POST, 'listname2')) != null) {
            $logout = Registry::get("database")->lists($uname, $listname);
            $controller = new Controller(new Request, new Session);
            echo 'Lista creada correctamente.';
        } else {
            echo 'Parámetros incorrectos o el nombre de la lista ya está asignado, prueba otro.';
        }
    }
}
