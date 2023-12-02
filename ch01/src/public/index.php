<?php

use config\DbConnect;
use config\DBquery;

error_reporting(-1);


//считывания данных с URL браузера
 //$query = rtrim($_SERVER['QUERY_STRING'], '/');

    require '../config/DBquery.php';
    require '../config/DbConnect.php';
    require '../config/RedBean.php';

    //подключение к БД
    DBquery::setConnection();

    // выполнение запроса
   // $result = DBquery::selfAll('posts');

   $result = DBquery::querySql('SELECT * FROM posts');

    // $result = DBquery::finLike('2', 'posts');




echo "<table><tr><th>category_id</th><th>title</th><th>excerpt</th><th>text</th><th>keywords</th><th>discription</th></tr>";

    while ($row = $result->fetch())
   // foreach ($result as $row)

    {

    echo "<tr>";
    echo "<td>" . $row["category_id"] . "</td>";
    echo "<td>" . $row["title"] . "</td>";
    echo "<td>" . $row["excerpt"] . "</td>";
    echo "<td>" . $row["text"] . "</td>";
    echo "<td>" . $row["keywords"] . "</td>";
    echo "<td>" . $row["discription"] . "</td>";
    echo "</tr>";
    }
    echo "</table>";


/*
 * Дваеточие - это обращение к статическому методу
 * Ruoter::dispatch($query);
 *
 * $DEMO = new DemoDemo();
 * $DEMO->myDemo();
 * $DEMO->myDemo();
 *
 * Дваеточие - это обращение к статическому методу
 * $DEMO::myStaticDemo();
 */
