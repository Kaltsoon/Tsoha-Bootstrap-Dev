<?php

  class BaseController{

    public static function render_status($status_code, $message = null){
      if(!is_null($message)){
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($message);
      }

      http_response_code($status_code);

      exit();
    }

    public static function request_body(){
      $request = file_get_contents('php://input');

      return json_decode($request);
    }

    public static function redirect_to($location){
      header('Location: ' . $location);

      exit();
    }

    public static function render_json($object){
      header('Content-Type: application/json; charset=utf-8');
      echo json_encode($object);

      exit();
    }

  }

?>
