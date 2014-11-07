<?php

  class Person extends BaseModel{

    public $name;
    public $age;
    public $gender;
    public $friends;

    public function __construct($attributes){
      parent::__construct($attributes);

      $this->validators = array('name' => 'name_validator', 'age' => 'age_validator');
    }

    public function introduce(){
      $elina = DB::query('SELECT * FROM kayttaja WHERE kayttajatunnus = :kayttajatunnus')->with(array('kayttajatunnus' => 'elina'))->one();

      return 'Hi, my names is ' . $elina['kayttajatunnus'] . ', I am a ' . $this->age . '-year-old ' . $this->gender . '. Nice to meet you!';
    }

    protected function name_validator($name){
      $errors = array();

      if($name == ''){
        $errors[] = 'Nimi ei saa olla tyhjä!';
      }

      return $errors;
    }

    protected function age_validator($age){
      $errors = array();

      if($age < 18){
        $errors[] = 'Et ole täysi-ikäinen!';
      }

      return $errors;
    }

  }

?>
