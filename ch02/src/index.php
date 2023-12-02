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
    public $deu;

    function __construct($isIst, $deu)
    {
        $this->isIst = $isIst;
        $this->deu = $deu;
    }
}


$tom = new Word(true, 'noch');

$nodes = [new Word(true, 'noch'), new Word(true, 'nich'), new Word(true, 'kaufen')];



foreach ($nodes as $gadget => $items) {

    echo "<ul>";

    foreach ($items as $key => $value) {
        echo "<li>$key : $value</li>";
    }
    echo "</ul>";


}



echo json_encode($people);