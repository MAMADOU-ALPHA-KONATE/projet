<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudbd";

// Créer une connexion
$con = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($con->connect_error) {
    die("La connexion à la base de données a échoué : " . $con->connect_error);
}
?>