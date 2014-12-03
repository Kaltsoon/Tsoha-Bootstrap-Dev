<?php

  require 'vendor/Twig/lib/Twig/Autoloader.php';

  class BaseController{

    public static function render_status($status_code, $message = null){
      if(!is_null($message)){
        echo $message;
      }

      http_response_code($status_code);

      exit();
    }

    public static function render_view($view, $content = array()){
      Twig_Autoloader::register();

      $twig_loader = new Twig_Loader_Filesystem('app/views');
      $twig = new Twig_Environment($twig_loader);

      try{
        if(isset($_SESSION['flash_message'])){

          $content['message'] = json_decode($_SESSION['flash_message']);

          unset($_SESSION['flash_message']);
        }

        echo $twig->render($view, $content);
      } catch (Exception $e){
        die('Virhe näkymän näyttämisessä: ' . $e->getMessage());
      }

      exit();
    }

    public static function redirect_to($location, $message = null){
      $_SESSION['flash_message'] = json_encode($message);

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
