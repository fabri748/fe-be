<?php
namespace Configs;

class Database {
    const DATABASE = "c15";
    const HOST = "127.0.0.1";
    const PORT = "3306";
    const TYPE = "mysql";
    const USERNAME = "c15";
    const PASSWORD = "pwd";
            
    const CONNECT = self::TYPE.":dbname=".self::DATABASE.";host=".self::HOST.";port=".self::PORT;
}

// Configs\Database::CONNECT;
// Database::CONNECT;