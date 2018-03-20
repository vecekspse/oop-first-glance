<?php
    require 'autoloader.php';

    $controller = new ProductController();
    $products = $controller->getAllProducts();
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
<a href="create.php">Přidat nové tričko</a>
<ul>
<?php foreach($products as $product) : ?>
    <li><?= $product->getNazev(); ?> (<?= $product->getVelikost(); ?>)
        <a href="smaz.php?id=<?= $product->getId(); ?>">Smaž</a>
    </li>        
<?php endforeach; ?>
</ul>
</body>
</html>