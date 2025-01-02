<?php 
class Player{
    protected $name;
    protected $birthday;
    protected $country;
    protected $dorsal;
    protected $position;
    protected $goals;
    protected $matches;
    protected $minutes;
    protected $yellowcard;
    protected $redcard;

    public function __construct($name, $birthday, $country, $dorsal, $position, $goals, $matches, $minutes, $yellowcard, $redcard){
        $this->name = $name;
        $this->birthday = $birthday;
        $this->country = $country;
        $this->dorsal = $dorsal;
        $this->position = $position;
        $this->goals = $goals;
        $this->matches = $matches;
        $this->minutes = $minutes;
        $this->yellowcard = $yellowcard;
        $this->redcard = $redcard;
    }



    public function contarDigitos(){ // Cuenta los dígitos que tiene el parámetro birthday pasado
        $digitos = 0;
        $resto = $this->birthday;
        while($resto){
            $digitos += 1;
            $resto = $resto/10;
        }
        return $digitos;
    }

    
    public function age(){ 
        // Se invoca al método anterior y dependiendo del si són 2 o 4 dígitos se tratá al resultado como fecha o edad, si es fecha hay que restarle el año actual
        if ((ctype_digit($this->birthday)) && ($this->contarDigitos() == 4) && (1980 > $this->birthday && $this->birthday < 2024)) return 2024 - $this->birthday;
        elseif ((ctype_digit($this->birthday)) && ($this->contarDigitos() == 2)) return $this->birthday;
    }

    public function score($goals){
        $this->goals += $goals;
    }

    public function addCard($colour){
        if(strtolower($colour) == "yellow")
            $this->yellowcard += 1;
        else if(strtolower($colour) == "red") 
            $this->redcard += 1;
    }

    public function playMinutes($min){
        $this->minutes = $min;
    }

    public function render(){
        $concat_tabla = '<tr>';
        $concat_tabla .= '<td>'. $this->name. '</td>';
        $concat_tabla .= '<td>'. $this->age(). '</td>'; // Se invoca el método edad para averiguar si se nos ha pasado una fecha de nacimiento o la edad
        $concat_tabla .= '<td>'. $this->country. '</td>';
        $concat_tabla .= '<td>'. $this->dorsal. '</td>';
        $concat_tabla .= '<td>'. $this->position. '</td>';
        $concat_tabla .= '<td>'. $this->goals. '</td>';
        $concat_tabla .= '<td>'. $this->matches. '</td>';
        $concat_tabla .= '<td>'. $this->minutes. '</td>';
        $concat_tabla .= '<td>'. $this->yellowcard. '</td>';
        $concat_tabla .= '<td>'. $this->redcard. '</td>';
        $concat_tabla .= '</tr>';
        return $concat_tabla; // Se devuelve todos los datos del jugador
    }
}

class Team{
    protected $name;
    protected $players;
    protected $matches;
    protected $won;
    protected $lost;
    protected $tie;
    protected $scoregoals;
    protected $concededgoals;

    public function __construct($name, $players, $matches, $won, $lost, $tie, $scoregoals, $concededgoals){
        $this->name = $name;
        $this->players = $players;
        $this->matches = $matches;
        $this->won = $won;
        $this->lost = $lost;
        $this->tie = $tie;
        $this->scoregoals = $scoregoals;
        $this->concededgoals = $concededgoals;
    }

    public function signPlayer($Player){
        if(strtolower($Player->colour) == "yellow")
            $this->yellowcard += 1;
        else if(strtolower($Player->$colour) == "red") 
            $this->redcard += 1;
    }

    public function render(){
        $concat_tabla = '<table border="1">';
        $concat_tabla .= '<tr>';
        $concat_tabla .= '<td> Name </td>';
        $concat_tabla .= '<td> Age </td>';
        $concat_tabla .= '<td> Country </td>';
        $concat_tabla .= '<td> Dorsal </td>';
        $concat_tabla .= '<td> Position </td>';
        $concat_tabla .= '<td> Goals </td>';
        $concat_tabla .= '<td> Matches </td>';
        $concat_tabla .= '<td> Minutes </td>';
        $concat_tabla .= '<td> Yellow Cards</td>';
        $concat_tabla .= '<td> Red Cards</td>';
        $concat_tabla .= '</tr>';
        
        foreach($this->players as $player){  // Se recorre el array pasado de jugadores para ver todos los jugadores
            $concat_tabla .= $player->render(); // Se guarda el resultado del método render del array de clases de jugador
        }
        
        $concat_tabla .= '</table>'; // Asegurarse de que la tabla está cerrada
        return $concat_tabla;
    }
    
}
include("player.view.php");