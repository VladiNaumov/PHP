<?php

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

$phones = [
    array("iPhone 12", "iPhone X", "iPhone 12 Pro"),
    array("Samsung Galaxy S20", "Samsung Galaxy S20 Ultra"),
    array("Nokia 8.3", "Nokia 3.4")

];

foreach ($phones as $brand => $items) {
    echo "<ul>";

    foreach ($items as $key => $value) {
        echo "<li>$value</li>";
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

echo "<h3>Nodes</h3>";

$nodes = [
    "DER" => new Word(true, 'Der'),  "DIE" => new Word(true, 'Die'), "DAS" => new Word(true, 'Das')
];


foreach ($nodes as $gadget => $items) {
    echo "<ul>";
    echo "<li>$gadget : </li>";
    echo "</ul>";
}
echo json_encode($countries);