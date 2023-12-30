<?php

/*
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
