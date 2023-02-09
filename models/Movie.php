<?php
   class Movie {
    public $title;
    public $mainActor;
    public $year;
    public $genre;

    function __construct($_title, $_mainActor, $_year, Gernes $_genre)
    {
        $this->title = $_title;
        $this->mainActor = $_mainActor;
        $this->year = $_year;
        $this->genre = $_genre;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getMainActor(){
        return $this->mainActor;
    }
    public function getYear(){
        return $this->year;
    }
    public function GetGenre(){
        return $this->genre;
    }



   } 

?>