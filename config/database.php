<?php

  class DatabaseConfig{

    // Valitse käyttöympäristö (xampp tai users). Vaihda ympäristö users:iin, kun siirrät sovelluksen palvelimelle
    private static $environment = 'xampp';

    // Muuta users-ympäristöä asettamalle oikeat arvot KAYTTAJATUNNUS-kohtaan (käyttäjätunnuksesi)
    // ja SALASANA-kohtaan (tietokantasi pääkäyttäjän salasana)
    private static $connection_config = array(
      'xampp' => array(
          'resource' => 'mysql:localhost;dbname=test',
          'username' => 'mysql',
          'password' => null
      ),
      'users' => array(
        'resource' => 'mysql:unix_socket=/home/KAYTTAJATUNNUS/mysql/socket;dbname=test',
        'username' => 'root',
        'password' => 'SALASANA'
      )
    );

    public static function connection_config(){
      $config = array(
        'db' => 'mysql',
        'config' => self::$connection_config[self::$environment]
      );

      return $config;
    }

  }