<?php
// affiche les messages d'erreur
error_reporting(E_ALL);
ini_set("display_errors", 1);
require '../class/sql.php';
require '../class/utilisateur.php';

Sql::initialize();

if (isset($_POST['email']) && isset($_POST['mot_de_passe']) && $_POST['mot_de_passe']&& $_POST['email']){
  $user = new utilisateur();
  $email = stripslashes($_POST['email']);
  $email = Sql::sanitize($email);
  $password = stripslashes($_POST['mot_de_passe']);
  $password = Sql::sanitize($password);
  $logedUser = $user->checkLogin($email, $password);
}

?>