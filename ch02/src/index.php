<?php

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


$people = [
    ['name' => 'Tomm', 'age' => 25, 'address' => 'Helsinki'],
    ['name' => 'Andre', 'age' => 33, 'address' => 'Oulu'],
    ['name' => 'Vladimir', 'age' => 40,],
    ['name' => 'Andre', 'age' => 33, 'address' => 'Oulu']

];


foreach ($people as $gadget => $items) {
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

    function __construct($isIst, $value, $node)
    {
        $this->isIst = $isIst;
        $this->value = $value;
        $this->node = $node;
    }

}


$nodes = [
    new Word(true, 'ono', ['das', 'mein', 'dein']),
    new Word(true, 'on',['der', 'mein', 'dein']),
    new Word(true, 'ona', ['die', 'meine', 'deine'])
];


foreach ($nodes as $gadget => $items) {

    echo "<ul>";

    foreach ($items as $key => $value) {
        echo "<li>$key : $value</li>";
    }
    echo "</ul>";


}

echo json_encode($nodes);