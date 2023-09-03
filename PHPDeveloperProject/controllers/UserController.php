<?php
require_once 'config.php';
require_once 'models/UserModel.php';

class UserController
{
    // Controller gets users database data from the Model and sends request to the View
    public function index()
    {
        global $db;
        $data = new UserModel();
        $users = $data->getUserData($db);
        
        if($users){
            require_once 'views/user_list.php';
        }
        else{
            require_once 'views/error.php';
            echo("Something went wrong");
        }
    }
}
