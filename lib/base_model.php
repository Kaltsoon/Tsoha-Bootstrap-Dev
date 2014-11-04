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

      foreach($this as $attribute => $value){
        if(in_array($attribute, $this->validators)){
            $attribute_errors = $this->{$attribute . '_validator'}($value);

            $errors = array_merge($errors, $attribute_errors);
        }
      }

      return $errors;
    }

  }

?>
