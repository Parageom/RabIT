<?php
//router oosztály betöltés
require_once 'controllers/Router.php';

//router osztály példányositás
$router = new Router();

//URL-ek kezelése a router metódussal
$router->route();