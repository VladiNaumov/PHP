<?php

namespace config;


class DBquery
{

    private static $connection;


    public static function setConnection(): void
    {
        self::$connection = DbConnect::connection();
    }


    public static function selfAll($table){


        $sql = "SELECT * FROM {$table}";

        return self::$connection->query($sql);

    }



    public static function querySql($sql)
    {
        return self::$connection->query($sql);
    }

}