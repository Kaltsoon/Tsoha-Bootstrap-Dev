<?php

	class GameController extends BaseController{
		
		public static function index(){
			$games = Game::all();
			self::render_view('game/index.html', array('games' => $games));
		}	

		public static function create(){
			self::render_view('game/create.html');
		}

		public static function store(){
		  $params = $_POST;

		  $attributes = array(
		    'name' => $params['name'],
		    'description' => $params['description'],
		    'publisher' => $params['publisher'],
		    'published' => $params['published']
		  );

		  $game = new Game($attributes);
		  $errors = $game->errors();

		  if(count($errors) == 0){
		    // Peli on validi, hyvä homma!
	
		    self::redirect_to('/', array('message' => 'Peli on lisätty kirjastoosi!'));
		  }else{
		    // Pelissä oli jotain vikaa :(
		    self::redirect_to('/game/create', array('errors' => $errors, 'attributes' => $attributes));
		  }
		}
	}