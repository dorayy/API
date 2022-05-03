<?php

use Core\Routeur\Routeur;

define("ROOT", dirname(__DIR__));
require ROOT . "/vendor/autoload.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: content-type , token , Authorization");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Max-Age:1728000");
header('Access-Control-Allow-Credentials: true');

if (isset($_GET['apikey']) && !empty($_GET['apikey'])) {
    require ROOT . "/Core/Routeur/Routeur.php";
    Routeur::routeur();
} else {
    http_response_code(403);
    echo json_encode("Vous n'avez pas accès à l'api , apikey not found");
}
