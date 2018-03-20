<?php
    require 'autoloader.php';

    $controller = new ProductController();
    if(isset($_POST['nazev'])) {
        $redirect = $controller->insertProduct($_POST);
        header('Location: ' . $redirect);  
    }
?>
<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form { display: block; width: 500px; margin: 0 auto;}
        form input, form button { display block; width: 100%; margin: .5rem; padding: .5rem; }
    </style>
</head>
<body>
    <a href="index.php">Zpátky na hlavní stránku</a>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
        <h1>Vlož nové triko</h1>
        <input type="text" name="nazev" placeholder="Název">
        <input type="text" name="barva" placeholder="Barva">
        <input type="text" name="velikost" placeholder="Velikost">
        <input type="text" name="skladem" placeholder="Skladem 0 / 1">
        <button type="submit">Odeslat</button>
    </form>
</body>
</html>