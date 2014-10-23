<?php

  class BaseModel{

    function __construct($attributes){
      foreach($attributes as $attribute => $value){
        $this->{$attribute} = $value;
      }
    }

    function to_json(){
      $object = array();

      foreach($this as $attribute => $value){
        $object[$attribute] = $value;
      }

      return $object;
    }

  }

?>
