<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.20.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?></title>
</head>

<body>

    <div class="flex px-6 py-8 justify-between bg-gradient-to-r from-blue-800 to-blue-200">
        <a href="index.php" class="text-white text-3xl font-bold">App_<span class="text-red-600">Game</span></a>
        <div class="text-blue-800 text-xl font-bold space-x-1.5">
            <a href="index.php">Accueil</a>
            <a href="">Jeux</a>
            <a href="display.php">Display</a>
        </div>
    </div>