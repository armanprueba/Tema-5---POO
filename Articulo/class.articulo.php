<?php

class PrecioNoValido extends exception{
    protected $message = "El precio no está en un formato valido";
}

class Articulo{
    protected $pNombre;
    protected $pPrecio;

    public function __construct($pNombre, $pPrecio){
        $this->pNombre = $pNombre;
        $this->setPrecio($pPrecio);
    }


    public function getPrecio(){
        return $this->pPrecio;
    }
    

    public function setPrecio($pPrecio){
        try{
            // Si el precio que se pasa no es númerico se lanza un error
            if (is_numeric($pPrecio)) $this->pPrecio = $pPrecio;
            else throw new PrecioNoValido; 
        }
        catch(PrecioNoValido $e){
            echo "Excepción: ". $e->getMessage(). "<br>";
        }
    }
}

include("herencia.php");