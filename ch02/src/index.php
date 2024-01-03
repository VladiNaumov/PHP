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
    public $node = [];

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


$nodes['node_1'] = $countries = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];
$nodes['node_2'] = $countries = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];
$nodes['node_3'] = $countries = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];
$nodes['node_4'] = $countries = ["Germany","Madrid","Helsinki"];

foreach ($nodes as $gadget => $items) {
    echo "<h3>$gadget</h3>";
    echo "<ul>";
    foreach ($items as $key => $value) {
        echo "<li>$key : $value</li>";
    }
    echo "</ul>";
}
echo json_encode($nodes);
