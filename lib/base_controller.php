<?php

  class BaseController{

    public static function render_status($status_code, $message = null){
      if(!is_null($message)){
        echo $message;
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
      header('Content-Type: application/json');

      if(is_array($object) && isset($object[0])){

        $objects = array();

        foreach($object as $obj){
          if(method_exists($obj, 'to_json')){
            $objects[] = $obj->to_json();
          }else{
            $objects[] = $obj;
          }
        }

        echo json_encode($objects);

      }else{

        if(method_exists($object, 'to_json')){
          echo json_encode($object->to_json());
        }else{
          echo json_encode($object);
        }

      }

      exit();
    }

  }

?>
