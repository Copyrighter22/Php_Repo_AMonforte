<?php

namespace framework\Database;

use PDO;
class Connection
{
    private static $config;

    // NAMED CONSTRUCTOR
    public static function make($config)
    {
        static::$config = $config;
        return self;
    }

    function connectDB(){
        try{
            return new PDO( $this->config['databasetype'] . ':host=' . $this->config['host'] . ';dbname=' . $this->config['name'],
                $this->config['user'],
                $this->config['password']);
        }catch (\Exception $e){
            echo 'Error de connexió a la base de dades';
        }
    }
}