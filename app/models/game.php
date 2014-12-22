<?php

	class Game extends BaseModel{
		public $id, $user_id, $name, $played, $description, $published, $publisher, $added;

		public function __construct($attributes){
		    parent::__construct($attributes);

		    $this->validators = array(
			    'name' => 'name_validator'
			);
		}

		public static function all(){
		    $games = array();
		    // Kutsutaan luokan DB staattista metodia query
		    $rows = DB::query('SELECT * FROM Game');

		    // Käydään kyselyn tuottamat rivit läpi
		    foreach($rows as $row){
		      // Tämä on PHP:n hassu syntaksi alkion lisäämiseksi taulukkoon :)
		      $games[] = new Game(array(
		        'id' => $row['id'],
		        'user_id' => $row['user_id'],
		        'name' => $row['name'],
		        'played' => $row['played'],
		        'description' => $row['description'],
		        'published' => $row['published'],
		        'publisher' => $row['publisher'],
		        'added' => $row['added']
		      ));
		    }

		    return $games;
		}

		public static function find($id){
		    $rows = DB::query('SELECT * FROM Game WHERE id = :id LIMIT 1', array('id' => $id));

		    if(count($rows) > 0){
		      $row = $rows[0];

		      $game = new Game(array(
		        'id' => $row['id'],
		        'user_id' => $row['user_id'],
		        'name' => $row['name'],
		        'played' => $row['played'],
		        'description' => $row['description'],
		        'published' => $row['published'],
		        'publisher' => $row['publisher'],
		        'added' => $row['added']
		      ));

		      return $game;
		    }

		    return null;
		}

		public function name_validator($name){
			$errors = array();

			  if($this->name == null || $this->name == ''){
			    $errors[] = 'Nimi ei saa olla tyhjä!';
			  }else if(count($this->name) < 3){
			    $errors[] = 'Nimen pituuden tulee olla vähintään kolme merkkiä!';
			  }

			  return $errors;
		}
	}
