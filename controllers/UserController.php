<?php
class UserController {
    //Userlist listázza a felhasználókat
    public function userList() {
        require_once 'models/UserModel.php';
        //lekérdezi a felhasználókat
        $users = UserModel::getAllUsers();
        //megjeleniti a felhasználókat
        require_once 'views/userList.php';
    }
}