<?php
date_default_timezone_set('UTC');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');
header("Content-type: application/json");


class Library
{
    public $id;
    public $photo;
    public $author;
    public $nameBook;
    public $description;

    public function __construct($id, $photo, $author, $nameBook, $description)
    {
        $this->id = $id;
        $this->photo = $photo;
        $this->author = $author;
        $this->nameBook = $nameBook;
        $this->description = $description;
    }


}

$node = [

    "ID001" => new Library(1, 'none', 'Stephen King', 'Институт', 'триллер'),
    "ID002" => new Library(2, 'none', 'Stephen King', 'Регуляторы' , 'триллер'),
    "ID003" => new Library(3, 'none', 'Stephen King', 'Чужак', 'триллер'),
    "ID004" => new Library(4, 'none', 'Stephen King', 'Мистер Мерседес' , 'зарубежные детективы'),
    "ID005" => new Library(5, 'none', 'Stephen King', 'Куджо' , 'ужасы')

];



print json_encode([
    'messages' => $node
]);
