<?php

  class Person extends BaseModel{

    public $name;
    public $age;
    public $gender;

    public function __construct($attributes){
      parent::__construct($attributes);
    }

    public function introduce(){
      return 'Hi, my names is ' . $this->name . ', I am a ' . $this->age . '-year-old ' . $this->gender . '. Nice to meet you!';
    }

  }

?>
