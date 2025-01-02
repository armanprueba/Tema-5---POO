<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("conexion.php");
        $array_jugadores = [];  // Array vacio que creamos para almacenar los jugadores como clases y pasarlos como parametro a la clase Team
        $jugadores_atleti = array_filter($lista_jugadores, 'ordenarAtleti');  // Cogemos los jugadores del atleti 
        $i = 0;  // Creamos $i para crear las posiciones del nuevo array
        foreach($jugadores_atleti as $jugador){ // Recorremos cada jugador del atleti 
            $nombre_jugador = $jugador['Nombre']. ' '. $jugador['Apellidos'];  // Concatenamos nombre y apellido para pasarlo todo como nombre de jugador
            // Creamos una clase por cada jugador del Atleti y la almacenamos en el nuevo array
            $array_jugadores[$i] = new Player ($nombre_jugador, $jugador['Edad'], $jugador['Pais'], $jugador['Dorsal'], $jugador['Posicion'], $jugador['G'], $jugador['PJ'], $jugador['M'], $jugador['TA'], 1);
            $i++; //Incrementamos el valor de i ya que si no se sobrescribiría la misma posición del array
        }

        // Pasamos el array con las clases de jugadores como parámetro 
        $Atleti = new Team ("Atleti", $array_jugadores, 25, 12, 13, 0, 11, 7);
        echo $Atleti->render();


    ?>
</body>
</html>