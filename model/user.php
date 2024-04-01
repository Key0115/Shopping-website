<?php
class user{
    private $userID;
    private $fName;
    private $lName;
    private $address;
    private $email;
    private $city;
    private $country;
    private $state;
    private $postcode;
    private $phoneNumber;

    function __get($name){
        return $this->$name;
    }

    function __set($name,$value){
        $this->$name = $value;
    }
}

?>