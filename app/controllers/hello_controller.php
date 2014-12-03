<?php

  class HelloController extends BaseController{

    public static function index(){
      $me = new Person(array(
        'name' => 'Kalle',
        'age' => 18,
        'gender' => 'male'
      ));

      self::render_view('home.html');
    }

    public static function me(){
    }

    public static function my_friend(){
      $my_friend = new Person(array(
                              'name' => 'Henri',
                              'age' => 21,
                              'gender' => 'male'
                            ));

      self::render_json($my_friend);
    }

    public static function my_gang(){
      $henri = new Person(array(
                              'name' => 'Henri',
                              'age' => 21,
                              'gender' => 'male'
                          ));

      $elina = new Person(array(
                              'name' => 'Elina',
                              'age' => 23,
                              'gender' => 'female',
                              'friends' => array($henri)
                          ));

      self::render_json(array($elina, $henri));
    }

  }

?>
