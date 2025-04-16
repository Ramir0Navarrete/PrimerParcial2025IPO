<?php
class Aerolineas {
    private $identificacion;
    private $nombre;
    private $coleccion_vuelos_program;

    /** CONSTRUNCTOR
     * @param STRING $identificacion;
     * @param STRING $nombre;
     * @param ARRAY $coleccion_vuelos_program;
     */

    public function __construct($identificacion,$nombre,){
        $this-> identificacion = $identificacion;
        $this-> nombre = $nombre;
        $this-> coleccion_vuelos_program = []; 
    }
    // GETTERS
    public function getIdentificacion() {
        return $this->identificacion;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getVuelosProgramados() {
        return $this->coleccion_vuelos_program;
    }

    // Setters
    public function setIdentificacion($identificacion) {
        $this->identificacion = $identificacion;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setVuelosProgramados($coleccion_vuelos_program) {
        $this->coleccion_vuelos_program = $coleccion_vuelos_program;
    }

    // to_String
    public function __toString() {
        return "Aerolínea: " . $this->getNombre() . "\n" .
        "ID: " . $this->getIdentificacion();
    }
}
