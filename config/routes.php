<?php

  // Alustetaan Slim
  $app = new \Slim\Slim();

  $app->get('/', function() {
    HelloController::index();
  });

  $app->get('/me', function(){
    HelloController::me();
  });

  $app->get('/my-friend', function(){
    HelloController::my_friend();
  });

  $app->get('/my-gang', function(){
    HelloController::my_gang();
  });

  // Käynnistetään reititin
  $app->run();

?>
