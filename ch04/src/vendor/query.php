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
    $allProducts = [];
    $sql = "SELECT * FROM products";
    if ($result = $connect->query($sql)) {
        foreach ($result as $row) {
            $id = $row['id'];
            $title = $row['title'];
            $price = $row['price'];
            $description = $row['description'];

            $product = ["Id" => "$id", "title" => "$title", "price" => "$price", "description" => "$description"];
            $allProducts[] = $product;

        }
    }

   echo json_encode($allProducts);

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
