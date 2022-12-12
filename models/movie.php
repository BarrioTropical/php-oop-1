<?php

class Movie{
    public $title;
    public $category;
    public $duration;
    public $minutes;

function __construct(string $_title, $_category =[], Int $_duration,$_minutes){
        $this->title = $_title;
        $this->category = $_category;
        $this->duration = $_duration;
        $this->minutes = $_minutes;

        $this->setDuration();
}

public function setDuration(){
    if($this->minutes < 140){
            $this->duration = "standard";
    } 
    else {
        $this->duration = "long";
    }
}
}



?>