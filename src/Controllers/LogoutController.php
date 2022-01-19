<?php

namespace App\Controllers;

use App\Controller;
use App\Registry;
use App\Request;
use App\Session;

class LogoutController extends Controller {

    public function logo() {
        session_start();
        unset($_SESSION["uname"]);
        unset($_SESSION["email"]);
        header("Location: /pages/index");
    }
}
