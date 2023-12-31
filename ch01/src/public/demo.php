<?php

require '../config/RedBean.php';

$options = array(
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
);

$dns = 'mysql:host=localhost;dbname=u1322686_demo;charset=utf8';
$username = 'u1322686_admin';
$password = 'sI3eJ2jV3bhA7j';

RearBean::setup($dns, $username, $password,$options);
RearBean::freeze(true);
RearBean::fancyDebug(TRUE);

var_dump(RearBean::testConnection());


// CREATE
$cat = RearBean::dispense('category');
$cat->title = 'Category 1';
$id = RearBean::store($cat);
var_dump($id);


//READ
$cat = RearBean::load('category',10);
print_r($cat);
echo $cat->title; // работаем как с объектом
echo $cat['title']; // работаем как с массивом

//UPDATE
$cat = RearBean::load('category',10);
echo $cat->title. '<br>';
$cat->title = 'KATEGORY 10';
$id = RearBean::store($cat);
echo $cat->title. '<br>';

//DELETE
$cat = RearBean::load('category',10);
RearBean::trash($cat);

RearBean::wipe('category'); //полное удаление таблицы

//READ ALL
$cat = RearBean::findAll('posts');
$cat = RearBean::findAll('category', 'id > ?' [2]); //получаем запись где ID больше двух
$cat = RearBean::findAll('category', 'title LIKE ?', ['% cat %']);
$cat = RearBean::findOne('category', 'ID = 2');
echo '<pre>';
print_r($cat);


$result = RearBean::findAll('posts');



echo "
<table>
    <tr>
        <th>category_id</th>
        <th>title</th>
        <th>excerpt</th>
        <th>text</th>
        <th>keywords</th>
        <th>discription</th>
        </tr>";

    foreach ($result as $value)
    {

    echo "<tr>";
        echo "<td>" . $value["category_id"] . "</td>";
        echo "<td>" . $value["title"] . "</td>";
        echo "<td>" . $value["excerpt"] . "</td>";
        echo "<td>" . $value["text"] . "</td>";
        echo "<td>" . $value["keywords"] . "</td>";
        echo "<td>" . $value["discription"] . "</td>";
    echo "</tr>";
    }
echo "</table>";