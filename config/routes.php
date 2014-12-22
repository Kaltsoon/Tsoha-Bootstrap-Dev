<?php

  $app->get('/', function() {
    GameController::index();
  });

  $app->get('/game/create', function() {
    GameController::create();
  });

  $app->post('/game', function() {
    GameController::store();
  });

  $app->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
  });
