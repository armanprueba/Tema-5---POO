<?php 
class Persona{
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

    public function age(){
        return 2024 - $this->birthday;
    }

    public function score()($goals){
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

    public function addCard($colour){
        $this->colour = $colour;
    }

    public function render(){
        $concat_tabla = '<tr>';
        $concat_tabla .= '<td>'. $this->name. '</td>';
        $concat_tabla .= '<td>'. $this->age(). '</td>';
        $concat_tabla .= '<td>'. $this->country. '</td>';
        $concat_tabla .= '<td>'. $this->dorsal. '</td>';
        $concat_tabla .= '<td>'. $this->position. '</td>';
        $concat_tabla .= '<td>'. $this->goals. '</td>';
        $concat_tabla .= '<td>'. $this->minutes. '</td>';
        $concat_tabla .= '<td>'. $this->yellowcard. '</td>';
        $concat_tabla .= '<td>'. $this->redcard. '</td>';
    }
}