<?php

namespace App\Controllers;

class PagesController {

    function index() {
        return view('index');
    }

    function about() {
        return view('about');
    }

    function badlogin() {
        return view('badlogin');
    }

    function dashboard() {
        return view('dashboard');
    }

    function login() {
        return view('login');
    }

    function register() {
        return view('register');
    }

    function lists() {
        return view('lists');
    }

    function tasks() {
        return view('tasks');
    }

}