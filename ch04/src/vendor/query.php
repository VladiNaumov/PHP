<?php

function add($connect, $title, $price, $description)
{
    $sql = "INSERT INTO `products` (`id`, `title`, `price`, `description`) VALUES (NULL, '$title', '$price', '$description')";
    $createProduct = mysqli_query($connect, $sql);
}

/*
* Делаем выборку всех строк из таблицы "products"
*/
function getAll($connect)
{
    $sql = "SELECT * FROM products";
    $allProduct = mysqli_query($connect, $sql);
    return  mysqli_fetch_all($allProduct);
}



/*
* Делаем выборку одной строки из таблицы "products"
*/
function getId($connect){
    $product_id = 7;
    $sql = "SELECT * FROM products WHERE `id` = '$product_id '";
    $idProduct = mysqli_query($connect, $sql);
    return mysqli_fetch_all($idProduct);

}



function toJson($connect)
{
    try {
    $allProducts = [];
    $sql = "SELECT * FROM products";
    if ($result = $connect->query($sql)) {
        foreach ($result as $row) {
            $allProducts[] = $row;

        }
    }

    print json_encode([
        'success' => true,
        'messages' => $allProducts
    ]);

    } catch (\Exception $e) {
        print json_encode([
            'success' => false,
            'error' => $e->getMessage()
        ]);
    }

}

function rendering($connect)
{
    $sql = "SELECT * FROM products";
    if ($result = $connect->query($sql)) {
        foreach ($result as $row) {

            ?>
            <ul>
                <p>
                    <?= $row['id'] ?>
                    <?= $row['title'] ?>
                    <?= $row['price'] ?>
                    <?= $row['description'] ?>
                </p>
            </ul>
            <?php

        }
    }

}
