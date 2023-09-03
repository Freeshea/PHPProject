<?php
require_once 'config.php';
require_once 'models/AdvertisementModel.php';

class AdvertisementController
{
    // Controller gets advertisements database data from the Model and sends request to the View
    public function index()
    {
        global $db;
        $advertisementModel = new AdvertisementModel();
        $advertisements = $advertisementModel->getAllAdvertisements($db);

        if($advertisements){
            require_once 'views/advertisement_list.php';
        }
        else{
            require_once 'views/error.php';
            echo("Something went wrong");
        }
    }
}
