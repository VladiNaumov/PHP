<?php

header("Content-type: application/json");
date_default_timezone_set('UTC');

function connect()
{
    try {
        return  mysqli_connect('localhost', 'root', '', 'crud');
    }
    catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
        return die('Error connect to database!');
    }
}


function GET()
{
    try {

        $query = "SELECT * FROM products";
        $allProduct = mysqli_query(connect(), $query);
        $get = mysqli_fetch_all($allProduct);

        print json_encode([
            'success' => true,
            'messages' => $get
        ]);

    } catch (\Exception $e) {
        print json_encode([
            'success' => false,
            'error' => $e->getMessage()
        ]);
    }

}

GET();
