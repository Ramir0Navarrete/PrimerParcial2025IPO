<?php 
class Persona {
    private $nombre;
    private $apellido;
    private $documento;
    private $direccion;
    private $email;
    private $telefono;
    private $neto;
    /** CONSTRUCTOR
     * @param STRING $nombre;
     * @param STRING $apellido;
     * @param FLOAT $documento;
     * @param STRING $direccion;
     * @param STRING $email;
     * @param INT $telefono;
     * @param FLOAT $neto;
    */
    public function __construct($nombre,$apellido,$documento,$direccion,$email,$telefono,$neto){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->documento = $documento;
        $this->direccion = $direccion;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->neto = $neto;
    }

    // GETTERS //
    public function getNombre(){
        return $this-> nombre;
    }
    public function getApellido(){
        return $this-> apellido;
    }
    public function getDocumento(){
        return $this-> documento;
    }
    public function getDireccion(){
        return $this-> direccion;  
    }
    public function getEmail(){
        return $this-> email;
    }
    public function getTelefono(){
        return $this-> telefono;
    }
    public function getNeto(){
        return $this-> neto;
    }
    // SETTERS //
    public function setNombre ($nombre){
        $this-> nombre = $nombre;
    }
    public function setApellido ($apellido){
        $this-> apellido = $apellido;
    }
    public function setDocumento ($documento){
        $this-> documento = $documento;
    }
    public function setDireccion ($direccion){
        $this-> direccion = $direccion;
    }
    public function setEmail ($email){
        $this-> email = $email;
    }
    public function setTelefono ($telefono){
        $this-> telefono = $telefono;
    }
    public function setNeto ($neto){
        $this-> neto = $neto;
    }
    // toSTRING //
    public function __toString(){
        return "Nombre: " . $this->getNombre() . "\n" .
        "Apellido: " . $this->getApellido() . " \n" . 
        "Documento: " . $this->getDocumento() . "\n" .
        "Direccion: " . $this->getDireccion() . "\n" .
        "E-mail: " . $this->getEmail() . "\n" . 
        "Telefono: " . $this->getTelefono() . "\n" .
        "Neto: " . "$" . $this->getNeto() . "\n";
    }
}
?>