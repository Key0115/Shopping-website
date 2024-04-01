<?php
class cheese {
    private $cheeseID;
    private $cheeseName;
    private $type;
    private $softness;
    private $origin;
    private $strength;
    private $price;
    private $pairing;
    private $stocks;
    private $ImageURL;
    
    #Make sure to be $name anything else for __get and $name, $value for __set Magic Method
    function __get($name){
        return $this->$name;
    }

    function __set($name, $value){
        $this->$name = $value;
    }

    function getAllCheeses(){
        return"
        $this->cheeseID,$this->cheeseName, $this->type, $this->softness, $this->origin, $this->strength, $this->price, $this->pairing, $this->stocks, $this->ImageURL";
    }

}
?>