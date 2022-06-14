<?php

namespace App\Controllers;

use App\Controller;
use App\Registry;

class ListsTasksController extends Controller {

    public function tasksCreate() {

        if(isset($_POST['taskName'])) {
            $taskName = filter_input(INPUT_POST, 'taskName');
            $list = $_SESSION['chosenList'];
            $db = Registry::get('database');
            
            try {
                $statement = $db->query("INSERT INTO task(listId, taskName) VALUES(?, ?)");
                $statement->execute([$list, $taskName]);
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        
            $this->redirectTo("dashboard");
        }
    }

    public function listsCreate() {

        dd("hola");

        if(isset($_POST['listName'])) {
            $user = $_SESSION['user']['userId'];
            $listName = filter_input(INPUT_POST, 'listName');

            $db = Registry::get('database');
            
            try {
                $statement = $db->query("INSERT INTO list(userId, listName) VALUES(?, ?)");
                $statement->execute([$user, $listName]);
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        
            $this->redirectTo("dashboard"); 
        }
    }
}
