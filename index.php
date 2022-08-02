<?php
$title = "App_Game | Home";
include('partials/_header.php') ;
// Include PD0 pour connexion BDD
require_once("helpers/pdo.php") 
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
                <!-- row 1 -->
                <tr>
                    <th>1</th>
                    <td>Mario</td>
                    <td>Plateform</td>
                    <td>Switch</td>
                    <td>59.99</td>
                    <td>12</td>
                    <td><a href=""><img class="w-5 h-auto" src="img/magnifying-glass.png" alt="loupe"></a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- End main-content -->

<!-- Footer -->
<?php include('partials/_footer.php') ?>