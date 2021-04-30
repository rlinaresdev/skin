<?php
namespace Malla\Skin\Support;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

class Store {

	protected $app;

	protected $slug;

	public function __construct($app) {
		$this->app = $app;
	}

	public function app() {
		return $this;
	}
	public function isActive( $slug ) {
		return ($this->slug == $slug);
	}
	public function set($slug) {
		$this->slug = $slug;
	}

	public function share($data) {
		view()->share($data);
	}

	public function slug() {
		return $this->slug;
	}

	public function path($path='master') {
		return "$this->slug::$path";
	}

	public function view($view=NULL, $data=[], $mergeData=[]) {

		if( view()->exists( ($path = $this->path($view)) ) ) {
			return view($path, $data, $mergeData);
		}

		return "ERROR 404 :: La vista {$path} no existe.";
	}

}
