<?php

require_once './vendor/query.php';
require_once './util/connect.php';

$connect = connect();

echo "<p>JSON</p>";

toJson($connect);

echo "<p>Получено объектов</p>";

rendering($connect);


foreach (getAll($connect) as $product) {
    ?>

    <ul>
        <p>
            <?= $product[0] ?>
            <?= $product[1] ?>
            <?= $product[2] ?>
            <?= $product[3] ?>
        </p>
    </ul>

    <?php
}


echo "<p>Получен один объект по ID </p>";

foreach (getId($connect) as $product) {
    ?>
    <ul>
        <p>
            <?= $product[0] ?>
            <?= $product[1] ?>
            <?= $product[2] ?>
            <?= $product[3] ?>
        </p>
    </ul>

    <?php
}

