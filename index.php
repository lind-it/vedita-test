<?php
    require_once __DIR__ . "/vendor/autoload.php";

    use App\CProducts;

    $products = CProducts::getProducts(5);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">PRODUCT_ID</th>
            <th scope="col">PRODUCT_NAME</th>
            <th scope="col">PRODUCT_PRICE</th>
            <th scope="col">PRODUCT_ARTICLE</th>
            <th scope="col">PRODUCT_QUANTITY</th>
            <th scope="col">DATE_CREATE</th>
            <th scope="col"></th>
        </tr>
    </thead>

    <tbody>
        <? foreach ($products as $product) : ?>
            <tr id="<?= $product['id'] ?>>">
                <th scope="row"><?= $product['id'] ?></th>
                <td><?= $product['PRODUCT_ID'] ?></td>
                <td><?= $product['PRODUCT_NAME'] ?></td>
                <td><?= $product['PRODUCT_PRICE'] ?></td>
                <td><?= $product['PRODUCT_ARTICLE'] ?></td>
                <td style="display: flex; flex-direction: row; justify-content: space-between">
                    <button class="change-quantity-btn">+</button>
                    <div class="quantity"><?= $product['PRODUCT_QUANTITY'] ?></div>
                    <button class="change-quantity-btn">-</button>
                </td>
                <td><?= $product['DATE_CREATE'] ?></td>
                <td class="hideButton"><button>скрыть</button></td>
            </tr>
        <? endforeach; ?>
    </tbody>

    <script type="module" src="js/main.js"></script>
</table>
</body>
</html>