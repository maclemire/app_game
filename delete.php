<?php
session_start();
include("helpers/functions.php");
// 1- Connexion à BDD
// Include PD0 pour connexion BDD
require_once("helpers/pdo.php");
// 2- Recupère id dans URL et je nettoie 
$id = protect_xss($_GET["id"]);
// 3- Requête vers BDD
$sql = "DELETE FROM jeux WHERE id =?";
// 4- Je prépare ma requête
$query = $pdo->prepare($sql);
// 5- On execute la requête
$query->execute([$id]);

// Redirection
$_SESSION["success"] = "Le jeu est bien supprimé !";
header("Location:index.php")
?>