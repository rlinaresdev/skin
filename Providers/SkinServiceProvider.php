<?php
namespace Malla\Skin\Providers;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

use Malla\Skin\Facade\Skin;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Translation\Translator;
use Illuminate\Support\ServiceProvider;

class SkinServiceProvider extends ServiceProvider {

	public function boot( Kernel $HTTP, Translator $LANG ) {
    require_once(__DIR__."/../App.php");
	}

	public function register() {

    $this->app->bind("Skin", function($app){
      return new \Malla\Skin\Support\Store($app);
    });
	}

	public function getGrammars($locale="es") {
		// if( $this->app["files"]->exists(__VENDORPATH__."App/Http/Langs/$locale.php") ) {
		// 	return $this->app["files"]->getRequire(__VENDORPATH__."App/Http/Langs/$locale.php");
		// }
		return NULL;
	}
}
