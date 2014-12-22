<?php

  class BaseModel{

    protected $validators;

    public function __construct($attributes = null){

      foreach($attributes as $attribute => $value){
        if(property_exists($this, $attribute)){
          $this->{$attribute} = $value;
        }
      }
    }

    public function validate($arr){
      $this->validators = $arr;
    }

    public function errors(){
      $errors = array();

      foreach($this->validators as $key => $value){
        if(method_exists($this, $value)){
          $attribute = $this->{$key};
          $attribute_errors = $this->{$value}($attribute);

          $errors = array_merge($errors, $attribute_errors);
        }
      }

      return $errors;
    }

  }
