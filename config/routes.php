<?php

  // Set up our router
  $app = new \Slim\Slim();

  // Don't touch these routes unless you know that you're doing!
  $app->get('/', function() {
    require 'app/views/main.html';
  });

  /***************************************
  * WRITE THE ENDPOINTS OF YOUR API HERE *
  ****************************************/

  // Here's a demo

  $app->get('/me', function(){
    HelloController::me();
  });

  $app->get('/my-friend', function(){
    HelloController::my_friend();
  });

  $app->get('/my-gang', function(){
    HelloController::my_gang();
  });

  // Here's some examples

  /*
  * $app->get('/dog', function(){
  *   DogsController::index();
  * });
  *
  * $app->get('/dog/:id', function($id){
  *   DogsController::show($id);
  * });
  *
  * $app->post('/dog', function(){
  *   DogsController::create();
  * });
  *
  */

  // Run the router
  $app->run();

?>
