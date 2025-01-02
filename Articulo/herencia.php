<?php

class ClaseInexistente extends exception{
    protected $message = "La clase Articulo no existe";
}

try{
    if (!class_exists('Articulo')) throw new ClaseInexistente;
}
catch(ClaseInexistente $e){
    echo "Excepción: ". $e->getMessage(). "<br>";
}

final class ArticuloRebajado extends Articulo{
    private $rebaja;

    public function __construct($pNombre, $pPrecio, $rebaja){
        parent::__construct($pNombre, $pPrecio);
        $this->rebaja = $rebaja;
    }

    private function calculaDescuento(){
        return 100 - (($this->rebaja / $this->pPrecio) * 100);
        // Hay que restar lo que nos de el calculi por 100 para que se calcule 
        // que porcentaje nos resta el descuento y no a que porcentaje nos lo deja
    }

    private function precioRebajado(){
        return $this->pPrecio - $this->rebaja;
    }

    public function __toString(){
        $mensaje = "";
        $mensaje .= "Nombre: ". $this->pNombre. "<br>";
        $mensaje .= "Precio: ". $this->pPrecio. "<br>";
        $mensaje .= "La rebaja es: ". $this->calculaDescuento(). "%<br>";
        $mensaje .= "El descuento es: ". $this->precioRebajado(). "<br>";
        $mensaje .= "El precio del articulo rebajado es: ". $this->rebaja. "<br>";
        return $mensaje;
    }

}

$articulo1 = new ArticuloRebajado("Bicicleta", 352.10, 281.68);
echo $articulo1;
var_dump($articulo1);