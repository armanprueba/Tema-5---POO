<?php 
class Persona{
    protected $DNI;
    protected $nombre;
    protected $email;

    public function __construct($DNI, $nombre, $email){
        $this->DNI = $DNI;
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function setDni($DNI){
        $this->DNI = $DNI;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function mostrar(){
        echo "El DNI de ". $this->nombre. " es ". $this->DNI. " y su email es: ". $this->email. "<br>";
    }
}

class Estudiante extends Persona {
    protected $numexpediente;

    public function __construct($DNI, $nombre, $email, $numexpediente){
        parent::__construct($DNI, $nombre, $email);
        $this->numexpediente = $numexpediente;
    }

    public function setNumExpediente($numexpediente){
        $this->numexpediente = $numexpediente;
    }

    public function mostrar(){
        echo "El DNI de ". $this->nombre. " es ". $this->DNI. ", su email es: ". $this->email. "y su número de expediente es: ". $this->numexpediente. "<br>";
    }
}

include("clasesview.php");

