<?php 
class Persona{
    private $DNI;
    private $nombre;
    private $email;

    public function __construct($DNI, $nombre, $email){
        $this->$DNI = $DNI;
        $this->$nombre = $nombre;
        $this->$email = $email;
    }

    public function setDni($DNI){
        $this->$DNI = $DNI;
    }

    public function setNombre($nombre){
        $this->$nombre = $nombre;
    }

    public function setEmail($email){
        $this->$email = $email;
    }

    public function mostrar(){
        echo "El DNI de " + $nombre + " es " + $DNI + " y su email es: " + $email;
    }
}

class Estudiante extends Persona {
    private $numexpediente;

    public function __construct($DNI, $nombre, $email, $numexpediente){
        parent::__construct($DNI, $nombre, $email);
        $this->$numexpediente = $numexpediente;
    }

    public function setNumExpediente($numexpediente){
        $this->$numexpediente = $numexpediente;
    }

    public function mostrar(){
        echo "El DNI de " + $nombre + " es " + $DNI + ", su email es: " + $email + "y su número de expediente es: " + $numexpediente;
    }
}

include("clasesview.php");

