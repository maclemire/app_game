<?php
//Démarrage de la session
session_start();
$title = "Jeu";
include('partials/_header.php');
include("helpers/functions.php");
// Include PD0 pour connexion BDD
require_once("helpers/pdo.php");
// debug_array($_GET)

// 1- Vérifier qu'on recupère l'id existant du jeu
// On vérifie que id existe et qu'il est numérique
if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
    // 2- Je nettoie mon id contre les failles xss
    $id = protect_xss($_GET['id']);
    // 3- Faire la query vers BDD
    $sql = "SELECT * FROM jeux WHERE id=:id";
    // 4- Préparation de la query
    $query = $pdo->prepare($sql);
    // 5- Sécuriser la requête contre injections sql
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    // 6- Execute la requête vers la BDD
    $query->execute();
    // 7- On stocke tout dans une variable
    $game = $query->fetch();
    // debug_array($game);
    // $game = [];

    if (!$game) {
        $_SESSION["error"]= "Ce jeu est indisponible !";
        header("Location: index.php");
    }

} else {
    $_SESSION["error"] = "URL INVALIDE";
    header("Location: index.php");
}

?>

<!-- Main-content -->
<div class="text-center px-12">
    <h1 class="text-4xl font-bold text-blue-600 py-5"><?= $game['name'] ?></h1>
    <p class="text-xl px-96 py-8"><?= $game['description'] ?></p>
    <div class="justify-start">
        <p class="font-bold text-lg"><span class="text-blue-800"> Genre : </span><?= $game['genre'] ?> </p>
        <p class="font-bold text-lg"><span class="text-blue-800">Plateforme : </span><?= $game['platform'] ?> </p>
        <p class="font-bold text-lg"><span class="text-blue-800">Prix : </span><?= $game['price'] ?> </p>
        <p class="font-bold text-lg"><span class="text-blue-800">Note : </span><?= $game['note'] ?> </p>
        <p class="font-bold text-lg"><span class="text-blue-800">PEGI : </span><?= $game['PEGI'] ?> </p>
    </div>
    <a href="delete.php?id=<?= $game["id"]?>&name=<?= $game["name"]?>" class="btn btn-error mt-8 text-white">Supprimer le Jeu</a>
</div>


<!-- Footer -->
<?php include('partials/_footer.php') ?>