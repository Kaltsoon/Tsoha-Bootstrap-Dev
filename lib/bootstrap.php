<?php
  require 'lib/database.php';

  require 'lib/base_model.php';

  foreach(glob('app/models/*.php') as $model){
    require $model;
  }

  require 'lib/base_controller.php';

  foreach(glob('app/controllers/*.php') as $controller){
    require $controller;
  }

  require 'vendor/Slim/Slim.php';
  \Slim\Slim::registerAutoloader();

  $app = new \Slim\Slim();

  $app->get('/tietokantayhteys', function(){
    DB::test_connection();
  });

  require 'config/routes.php';

  $app->run();
