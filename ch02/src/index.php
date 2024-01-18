<?php

echo "<h3>Users</h3>";

$users = ["Tom", "Sam", "Bob", "Alice"];

foreach ($users as $n => $a) {
    echo "<li>$a </li>";

}

echo "<h3>Countries</h3>";

$countries = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];

foreach ($countries as $n => $a) {
    echo "<li>$n : $a </li>";

}

$gadgets = [
    "phones" => ["apple" => "iPhone 12", "samsumg" => "Samsung S20", "nokia" => "Nokia 8.3"],
    "tablets" => ["lenovo" => "Lenovo Yoga Smart Tab", "samsung" => "Samsung Galaxy Tab S5", "apple" => "Apple iPad Pro"]
];


foreach ($gadgets as $gadget => $items) {
    echo "<h3>$gadget</h3>";
    echo "<ul>";
    foreach ($items as $key => $value) {
        echo "<li>$key : $value</li>";
    }
    echo "</ul>";
}


class Word
{
    public $isIst;
    public $value;

    function __construct($isIst, $value)
    {
        $this->isIst = $isIst;
        $this->value = $value;

    }

}


echo "<h3>Words</h3>";

$Words = [
    "DER" => new Word(true, 'Der'),  "DIE" => new Word(true, 'Die'), "DAS" => new Word(true, 'Das')
];


foreach ($Words as $gadget => $items) {
    echo "<ul>";
    echo "<li>$gadget : </li>";
    echo "</ul>";
}
echo json_encode($Words);


$nodes['node_1'] = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];
$nodes['node_2'] = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];
$nodes['node_3'] = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];
$nodes['node_4'] = ["Germany","Madrid","Helsinki"];

foreach ($nodes as $gadget => $items) {
    echo "<h3>$gadget</h3>";
    echo "<ul>";
    foreach ($items as $key => $value) {
        echo "<li>$key : $value</li>";
    }
    echo "</ul>";
}
echo json_encode($nodes);

$books["library"] = [
    ["id" => "1", "photo" => "https://your-demo.site/api/library/photos/tigra.jpg",
        "author" => "Stephen King", "nameBook" => "Institute", "description" => "thriller"],

    ["id" => "2", "photo" => "https://your-demo.site/api/library/photos/deutschland.mp3",
        "author" => "Stephen King", "nameBook" => "Regulators", "description" => "thriller"],

    ["id" => "3", "photo" => "https://your-demo.site/api/library/photos/Rammstein - Karaoke.mp4",
        "author" => "Stephen King", "nameBook" => "Stranger", "description" => "thriller"],

    ["id" => "4", "photo" => "https://your-demo.site/api/library/photos/Матвеев-С.А.-Немецко-русский.pdf",
        "author" => "Stephen King", "nameBook" => "Mister Mercedes", "description" => "foreign detectives"],

    [ "id" => "5", "photo" => "https://your-demo.site/api/library/photos/tigra.jpg",
        "author" => "Stephen King", "nameBook" => "Cujo", "description" => "horror"],



];

print json_encode($books);

