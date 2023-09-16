<?php
class UserModel {
    public static function getAllUsers() {
        //adatbázis konf betöltés
        require_once 'config.php';
        
        //adatbázis kapcsolat létrehozása
        $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

        //itt ellenőrizzük a kapcsolatot
        if ($conn->connect_error) {
            die("Kapcsolódási hiba: " . $conn->connect_error);
        }

        //lekérdezzük az összes felhasználót
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        //felhasznűlók tömbje
        $users = array();

        //eredmény feldolgozás és hozzáadás
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }
        //adatbázis kapcsolat bezárás
        $conn->close();

        //visszadja az összes felhasználót
        return $users;
    }
}
?>
