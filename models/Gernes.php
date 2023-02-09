<?php

class Genres {
    public $action;
    public $drama;
    public $cartoon;
    public $thriller;

    public function __construct($_action, $_drama, $_cartoon, $_thriller)
    {
        $this->action = $_action;
        $this->drama = $_drama;
        $this->cartoon = $_cartoon;
        $this->thriller = $_thriller;
    }

}