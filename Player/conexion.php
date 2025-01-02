<?php 
$fp = fopen("plantillas.csv", "r"); 
while (!feof($fp)){ // Hacemos la condición de que se haga mientras haya fichero
    $linea[] = explode(",",fgets($fp)); // No olvidarse el array
                                        // Lo almacenamos por el separador coma
    
    }
    
    $header = array_shift($linea); // Guardamos la primera línea como header
    foreach($linea as $players)
        $lista_jugadores[] = array_combine($header, $players);  // Combinamos cada columna del header con el valor respectivo de los jugadores de esa fila
    

    function ordenarAtleti($jug_atleti){ // Devuelve true si el jugador pasado pertenece al Atlético de Madrid
        return $jug_atleti["Equipo"] === 'Atlético de Madrid';
    }

fclose($fp); ///Cerramos el fichero
?>