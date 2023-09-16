<?php
class AdvertisementModel {
    public static function getAllAdvertisements() {
        //adatbázis konf betöltés
        require_once 'config.php';

        //adatbvázis kapcsolat lérehozása
        $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

        //itt ellenőrizzük a kapcsolatot
        if ($conn->connect_error) {
            die("Kapcsolódási hiba: " . $conn->connect_error);
        }

        //lekérdezzük a hirdetéseket és a hozzájuk kapcsolódó felhasználót
        $sql = "SELECT advertisements.*, users.name as user_name FROM advertisements 
                INNER JOIN users ON advertisements.userid = users.id";

        //ez hajtja végre a lekrédezést
        $result = $conn->query($sql);

        //hirdetés tömb
        $ads = array();

        //eredmény feldolgozás és hozzáadás
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ads[] = $row;
            }
        }

        //adatbáziskapcsolat bezárása
        $conn->close();
        
        //kiadja az összes hirdetést a felhasználó nevével
        return $ads;
    }
}