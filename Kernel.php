<?php
namespace Malla\Skin;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

class Kernel {

	public function providers() {
		return [
      \Malla\Skin\Providers\SkinServiceProvider::class,
		];
	}

	public function alias() {
		return [
      "Skin" => \Malla\Skin\Facade\Skin::class,
		];
	}

	public function handler($app) {
    
	}
}
