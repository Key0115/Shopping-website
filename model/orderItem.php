<?php
class orderItem{
    private $cheeseID;
    private $userID;

    function __get($name){
        return $this->$name;
    }

    function __set($name,$value){
        $this->$name = $value;
    }
}