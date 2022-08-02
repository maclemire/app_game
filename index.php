<?php
$title = "App_Game | Home";
include('partials/_header.php');
include("helpers/functions.php");
// Include PD0 pour connexion BDD
require_once("helpers/pdo.php");

// 1- Requête pour récupérer mes jeux
$sql = "SELECT * FROM jeux";
// 2-Prépare la requête
$query = $pdo->prepare($sql);
// 3-Execute ma requête
$query->execute();
// 4-On stocke le résultat dans une variable
$games = $query->fetchAll();
// debug_array($games)

?>

<!-- Main content -->

<!-- Head -->
<div class="pt-16 wrap_content">
    <div class="wrap_content-head text-center">
        <h1 class="text-blue-500 text-5xl text-center uppercase font-black mb-6">App Game</h1>
        <p class="text-lg font-bold">L'app qui repertorie vos jeux</p>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto mt-16">
        <table class="table w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Genre</th>
                    <th>Platform</th>
                    <th>Price</th>
                    <th>PEGI</th>
                    <th>Voir</th>
                </tr>
            </thead>
            <tbody>
                <?php

                if (count($games) == 0) {
                    echo "<td class='text-center'>Pas de jeux disponibles actuellement</td>";
                } else { ?>
                    <?php foreach ($games as $game) : ?>
                        <tr>
                            <th><?= $game['id'] ?></th>
                            <td><?= $game['name'] ?></td>
                            <td><?= $game['genre'] ?></td>
                            <td><?= $game['platform'] ?></td>
                            <td><?= $game['price'] ?></td>
                            <td><?= $game['PEGI'] ?></td>
                            <td><a href=""><img class="w-5 h-auto" src="img/magnifying-glass.png" alt="loupe"></a></td>
                        </tr>
                    <?php endforeach ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- End main-content -->

<!-- Footer -->
<?php include('partials/_footer.php') ?>