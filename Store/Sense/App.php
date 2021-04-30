<?php


/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

if( $this->app["skin"]->isActive("sense") ) {

    /* URLS */
    $this->app["malla"]->addTagUrl([
    "__sense" => "malla/themes/sense/assets"
    ]);

    /* PATHS */
    $this->app["malla"]->addTagPath([
    "__sense_public_path" => "malla/themes/sense/assets"
    ]);

    /* VIEW */
    $this->loadViewsFrom(__DIR__.'/Views', 'sense');


    /*
    * PUBLICOS
    * Configuración del directorio o archivos a publicar */
    $this->publishes([
    __DIR__."/Views/assets"	=> public_path("malla/themes/sense/assets")
    ], 'sense');

}
