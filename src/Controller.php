<?php

namespace App;

use App\Request;
use App\Session;

class Controller {

    protected $request;
    protected $session;

    function __construct(Request $request, Session $session) {
        $this -> request = $request;
        $this -> session = $session; 
    }

    function error(String $str) {
        Session::set('error', $str);
    }

    function redirectTo($location) {
        $location = root().$location;

        header('Location:'.$location);
    }

    function flash() {
        Session::unset('error');
    }
}