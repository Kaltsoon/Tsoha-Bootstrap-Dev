<?php

  // Require database helper
  require 'lib/database.php';

  // Require base model
  require 'lib/base_model.php';

  // Require all models
  foreach(glob('app/models/*.php') as $model){
    require $model;
  }

  // Require base controller
  require 'lib/base_controller.php';

  // Require all controllers
  foreach(glob('app/controllers/*.php') as $controller){
    require $controller;
  }

  // Require and set up Slim
  require 'vendor/Slim/Slim.php';
  \Slim\Slim::registerAutoloader();

  // Require routes
  require 'config/routes.php';

  // And we are done!
?>
