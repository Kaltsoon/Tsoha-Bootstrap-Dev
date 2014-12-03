<?php

  require 'config/database.php';

  class DB{

      public static function connection(){
        $config = DatabaseConfig::connection_config();
        /*
        try {
            if(isset($config['username'])){
              $connection = new PDO($config['resource'], $config['username'], $config['password']);
            }else{
              $connection = new PDO($config['resource']);
            }
        } catch (PDOException $e) {
            die('Virhe tietokantayhteydessä: ' . $e->getMessage());
        }*/

        $connection = new PDO('mysql:host=localhost;dbname=tsoha', 'root', 'root');

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->exec('SET NAMES utf8');

        return $connection;
      }

      public static function query($sql, $attributes = null){
        $connection = self::connection();

        $preparation = $connection->prepare($sql);

        try{
          if(!is_null($attributes)){
            $preparation->execute($attributes);
          }else{
            $preparation->execute();
          }
        } catch (Exception $e){
          die('Virhe tietokantakyselyssä: ' . $e->getMessage());
        }

        return $preparation->fetchAll();
      }

  }

?>
