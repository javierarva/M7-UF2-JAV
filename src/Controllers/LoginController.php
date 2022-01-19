<?php

namespace App\Controllers;

use App\Controller;
use App\Registry;
use App\Request;
use App\Session;

class LoginController extends Controller {

    public function logi() {

        //echo "lamamadelamamadelamamadelamama";
        if (($email = filter_input(INPUT_POST, 'email')) != null and ($passwd = filter_input(INPUT_POST, 'passwd')) != null) {
            $login = Registry::get("database")->auth($email, $passwd);
            $controller = new Controller(new Request, new Session);
            $controller->redirectTo('pages/dashboard');
        } else {
            $controller->redirectTo('pages/badlogin');
        }
    }
}
