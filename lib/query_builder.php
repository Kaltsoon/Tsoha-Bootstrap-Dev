<?php

  class QueryBuilder{

    private $query;
    private $attributes;
    private $connection;

    public function __construct($query){
      $this->query = $query;
      $this->connection = DB::connection();
    }

    public function with($attributes){
      $this->attributes = $attributes;

      return $this;
    }

    public function all(){
      $results = $this->fetch();

      return $results->fetchAll();
    }

    public function one(){
      $results = $this->fetch();
      $all = $results->fetchAll();

      return $all[0];
    }

    public function execute(){
      $this->fetch();
    }

    private function fetch(){
      $preparation = $this->connection->prepare($this->query);

      if(!is_null($this->attributes)){
        $preparation->execute($this->attributes);
      }
      else{
        $preparation->execute();
      }

      return $preparation;
    }

  }

?>
