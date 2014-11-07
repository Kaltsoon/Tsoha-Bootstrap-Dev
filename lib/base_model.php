<?php

  class BaseModel{

    protected $validators;

    public function __construct($attributes){

      foreach($attributes as $attribute => $value){
        $this->{$attribute} = $value;
      }
    }

    public function validate(){
      $errors = array();

      foreach($this->validators as $key => $value){
        $attribute = $this->{$key};
        $attribute_errors = $this->{$value}($attribute);

        $errors = array_merge($errors, $attribute_errors);
      }

      return $errors;
    }

  }

?>
