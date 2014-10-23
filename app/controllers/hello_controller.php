<?php

  class HelloController extends BaseController{

    public static function me(){
      $me = new Person(array(
                        'name' => 'Kalle',
                        'age' => 21,
                        'gender' => 'male'
                      ));

      self::render_json(array( 'introduction' => $me->introduce() ));
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
                              'gender' => 'female'
                          ));

      $my_gang = array($elina, $henri);

      self::render_json($my_gang);
    }

  }

?>
