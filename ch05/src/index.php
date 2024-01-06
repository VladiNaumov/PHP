<?php

date_default_timezone_set('UTC');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');
header("Content-type: application/json");

function connect()
{
    try {
        return mysqli_connect('localhost', 'root', '', 'crud');
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
        return die('Error connect to database!');
    }
}

function GET()
{
    try {

        $allProducts = [];
        $query = "SELECT * FROM products";
        if ($result = connect()->query($query)) {
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

GET();