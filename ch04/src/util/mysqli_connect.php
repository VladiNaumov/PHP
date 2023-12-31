<?php

/*
 * Расширение MySQLi ограничено только одной СУБД - MySQL. MySQLi предоставляет два способа взаимодействия с базами данных:
 * объектно-ориентированный и процедурный. К преимуществам MySQLi нередко относят то, что она больше ориентирована на специфику MySQL, специфичные для этой СУБД возможности и быстрее применяет новвоведения, которая появляются с новыми выпусками MySQL.
 * Кроме того, также в качестве преимущества MySQLi нередко заявляют о большей производительности и скорости по сравнению с PDO.
 *
 * Делаем константы для хранения данных о базе данных
 * HOST - адрес для подключения к БД
 * USER - логин для доступа к БД
 * PASSWORD - пароль для доступа к БД
 * DATABASE - название базы данных, к которой мы подключаемся
 */

const HOST = 'localhost';
const USER = 'root';
const PASSWORD = '';
const DATABASE = 'crud';


function connect()
{
    try {
       return  mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    }
    catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
        return die('Error connect to database!');
    }
}
