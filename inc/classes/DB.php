<?php

    // if not constant __CONFIG__
    // do not lod this file
    if(!defined('__CONFIG__')) {
        exit('You do not a config file');
    }


class DB {

    protected static $con;

    private function __construct(){
      
        try {
            self::$con = new PDO( 'mysql:host=localhost;port=3308;dbname=login_course' , 'root', 'Admin@123456' );
            self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );
        }
        catch ( PDOException $e ) {
            echo "Could not connect to database.\r\n";
            exit;
        }
    }

    public static function getConnection() {

        // if ths instance has not been started; start it
        if (!self::$con) {
            new DB();
        }

        // return the writable db connection
        return self::$con;

    }

}

?>