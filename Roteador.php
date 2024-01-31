<?php 

require_once "Controlador.php";

class Roteador {
    public function router($route) {
        if (preg_match('/\/\?page=[0-9]+/', $route) ) {

            $message = 'Read from file.';

            $controlador = new Controlador;
            $controlador->listaPokemons();
        }

        if (preg_match('/\/pokemon\/.+/', $route) ) {

            $message = 'Read from file.';
        
            $searched = explode('/', substr($route, 1))[1];

            $controlador = new Controlador;
            $controlador->statsPokemon($searched);
        }
    }
}