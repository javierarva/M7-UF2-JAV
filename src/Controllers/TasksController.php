<?php

namespace App\Controllers;

use App\Controller;
use App\Registry;
use App\Request;
use App\Session;

class TasksController extends Controller {

    public function logo() {

        //echo "lamamadelamamadelamamadelamama";
        if (($task = filter_input(INPUT_POST, 'task')) != null and ($list = filter_input(INPUT_POST, 'listname1')) != null) {
            $logout = Registry::get("database")->tasks($task, $list);
            $controller = new Controller(new Request, new Session);
            echo 'Apunte registrado correctamente.';
        } else {
            echo 'Apunte registrado incorrectamente.';
        }
    }
}
