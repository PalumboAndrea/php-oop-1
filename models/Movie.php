<?php
   class Movie {
    public $title;
    public $mainActor;
    public $year;
    public $genre;

    function __construct($_title, $_mainActor, $_year, $_genre)
    {
        $this->title = $_title;
        $this->mainActor = $_mainActor;
        $this->year = $_year;
        $this->genre = $_genre;
    }

    public function getEl($el){
        return $this->$el;
    }

   } 

?>