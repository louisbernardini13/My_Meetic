<?php
// affiche les messages d'erreur
error_reporting(E_ALL);
ini_set("display_errors", 1);
require '../class/sql.php';
require '../class/utilisateur.php';

Sql::initialize();


$newUser = new utilisateur($_POST);

if($newUser->save()) {
    echo "OK";
}
else {

}


// var_dump($_POST);


?>