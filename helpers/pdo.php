<?php
$server = "localhost"; 
$dbname = "app_game";
$login = "root";
$password = "";  // or "root"

try {
    $pdo = new PDO("mysql:host=$server;dbname=$dbname", $login, $password, array(
        PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8",
        // Ne pas récupérer les elements dupliqués
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        // Pour afficher les error
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ));
    // Affiche message ok connexion
    echo "Connexion établie !";

} catch (PDOException $e) {
    echo "Erreur de connexion : ". $e->getMessage();
}
?>