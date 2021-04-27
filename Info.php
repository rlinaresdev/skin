<?php
namespace Malla\Skin;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

class Info {
  
  	public function app() {
  		return [
  			"type"			  => "library",
  			"slug"			  => "skin",
  			"kernel"		  => \Malla\Skin\Kernel::class,
  			"info"			  => \Malla\Skin\Info::class,
  			"token"			  => NULL,
  			"activated" 	=> 1,
  		];
  	}

  	public function info() {
  		return [
  			"name"			    => "Skin",
  			"author"		    => "Ing. Ramón A Linares Febles",
  			"email"			    => "rlinares4381@gmail.com",
  			"license"		    => "MIT",
  			"support"		    => "http://www.iipec.net",
  			"version"		    => "V-1.0",
  			"description" 	=> "Biblioteca de Plantillas V-1.0",
  		];
  	}

  	public function meta() {
  		return [
  		];
  	}

  	public function handler($core) {
  		$core->create($this->app())->addInfo($this->info());
  	}
}
