<?php
namespace Malla\Skin\Store\Sense;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

class Info {

  	public function app() {
  		return [
  			"type"			=> "theme",
  			"slug"			=> "sense",
  			"info"			=> \Malla\Skin\Store\Info::class,
  			"token"			=> NULL,
  			"activated" 	=> 1,
  		];
  	}

  	public function info() {
  		return [
  			"name"			  => "Sense",
  			"author"		  => "Ing. Ramón A Linares Febles",
  			"email"			  => "rlinares4381@gmail.com",
  			"license"		  => "MIT",
  			"support"		  => "http://www.iipec.net",
  			"version"		  => "V-1.0",
  			"description" => "Sentido de plantilla V-1.0",
  		];
  	}

    public function sync() {
      return __DIR__."/App.php";
    }

  	public function meta() {
  		return [
  		];
  	}

  	public function handler($core) {
  		$core->create($this->app())->addInfo($this->info());
  	}
}
