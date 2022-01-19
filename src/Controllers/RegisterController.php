<?php

namespace App\Controllers;

use App\Controller;
use App\Registry;
use App\Request;
use App\Session;

class RegisterController extends Controller {

    public function regi() {

        //echo "lamamadelamamadelamamadelamama";
        if (($uname = filter_input(INPUT_POST, 'uname')) != null and ($passwd = filter_input(INPUT_POST, 'passwd')) != null 
        and ($role = filter_input(INPUT_POST, 'role')) != null and ($email = filter_input(INPUT_POST, 'email')) != null 
        and ($course = filter_input(INPUT_POST, 'course')) != null) {
            $register = Registry::get("database")->register($uname, $passwd, $role, $email, $course);
            $controller = new Controller(new Request, new Session);
            $controller->redirectTo('pages/dashboard');
        } else {
            $controller->redirectTo('pages/badlogin');
        }
    }
}
