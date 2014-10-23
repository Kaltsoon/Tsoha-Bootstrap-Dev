<?php

  class DatabaseConfig{

    // Choose which database to use (mysql or psql)
    private static $use_database = 'psql';

    // Set correct variables for the connection
    private static $connection_config = array(
      'mysql' => array(
                  'resource' => 'mysql:unix_socket=/home/CHANGE/mysql/socket;dbname=CHANGE',
                  'username' => 'root',
                  'password' => 'CHANGE'
                ),
      'psql' => array(
                  'resource' => 'pgsql:'
                )
    );

    public static function connection_config(){
      return self::$connection_config[self::$use_database];
    }

  }

?>
