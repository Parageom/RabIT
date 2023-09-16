<?php
class AdvertisementController {

    //Az adlist listázza a hirdetéseket a felhasználók számára
    public function adList() {
        require_once 'models/AdvertisementModel.php';
        //Az összes hirdetést lekérdezi
        $ads = AdvertisementModel::getAllAdvertisements();
        //MEgjeleníti a hirdetéseket
        require_once 'views/adList.php';
    }
}