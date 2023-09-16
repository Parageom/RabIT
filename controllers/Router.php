<?php
class Router {
    public function route() {
        //Url lekérése, alapértelmezett érték az "index"
        $url = isset($_GET['url']) ? $_GET['url'] : 'index';
        //vezérlő és művelet meghívása
        switch ($url) {
            case 'users':
                //USercontroller betöltése és példányositás
                require_once 'controllers/UserController.php';
                $controller = new UserController();
                //Itt hívjuk meg az userlist metódust
                $controller->userList();
                break;
            case 'ads':
                //meghívás és példányositás
                require_once 'controllers/AdvertisementController.php';
                $controller = new AdvertisementController();
                $controller->adList();
                break;
            default:
                //főoldal megjelenitése
                require_once 'views/layout.php';
        }
    }
}