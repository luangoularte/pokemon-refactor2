<?php 

require_once "Controlador.php";

class Roteador {
    public function router($route) {
        $controlador = new Controlador();
        if (preg_match('/\/\?page=[0-9]+/', $route) ) {

            $controlador->listaPokemons();
        }

        if (preg_match('/\/pokemon\/.+/', $route) ) {

            $controlador->statsPokemon($route);
        }
    }
}