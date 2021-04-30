<?php

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

define("__SKIN__", __DIR__);


if( Malla::isAppStart("core", "core") ) {
  //Malla::load("theme")->syncUP($this->app, $HTTP, $LANG);
  if( !empty( ($themes = Malla::load("theme")->all()) ) ) {
    foreach ($themes as $theme) {
        $info = $theme->info;
        $info = new $info;

        if( method_exists($info, "sync") ) {
          if( $this->app['files']->exists($info->sync()) && !is_array($info->sync()) ) {
            require_once($info->sync());
          }
        }
    }
  }
}
