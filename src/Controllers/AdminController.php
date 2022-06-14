<?php

namespace App\Controllers;

use App\Controller;
use App\Registry;

class AdminController extends Controller {

    public function index() {
        $user = $_SESSION['user']['userId'];

        if(!$_SESSION['role'] == 'admin') {
            $this->redirectTo("index");
        }

        $db = Registry::get('database');

        try {
            $statement = $db->query("SELECT userId, username, email, role FROM users;");
            $statement->execute([$user]);
            $users = $statement->fetchAll(\PDO::FETCH_OBJ);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }

        try {
            $statement = $db->query("SELECT subjectId, name FROM subject;");
            $statement->execute([$user]);
            $subjects = $statement->fetchAll(\PDO::FETCH_OBJ);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }

        return view('admin', ['users' => $users, 'subjects' => $subjects]);
    }

}