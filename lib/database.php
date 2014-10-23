<?php

  require 'config/database.php';

  class db{

      public static function connection(){
        $config = DatabaseConfig::connection_config();

        try {
            if(isset($config['username'])){
              $connection = new PDO($config['resource'], $config['username'], $config['password']);
            }else{
              $connection = new PDO($config['resource']);
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->exec('SET NAMES utf8');

        return $connection;
      }

  }

?>
