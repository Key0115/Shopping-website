<?php
  session_start();
  require_once "../model/cheese.php";
  require_once "../model/dataAccess.php";

  $status = false;

  if(isset($_REQUEST["cheeseName"])){
    $cheeseID = $_REQUEST["cheeseID"];
    $cheeseName = $_REQUEST["cheeseName"];
    $type = $_REQUEST["type"];
    $softness = $_REQUEST["softness"];
    $origin = $_REQUEST["origin"];
    $strength = $_REQUEST["strength"];
    $price = $_REQUEST["price"];
    $pairing = $_REQUEST["pairing"];
    $stocks = $_REQUEST["stocks"];
    $ImageURL=$_REQUEST["image"];

    $cheese = new cheese();
    $cheese->cheeseID = htmlentities($cheeseID);
    $cheese->cheeseName = htmlentities($cheeseName);
    $cheese->type = htmlentities($type);
    $cheese->softness = htmlentities($softness);
    $cheese->origin = htmlentities($origin);
    $cheese->strength = htmlentities($strength);
    $cheese->price = htmlentities($price);
    $cheese->stocks = htmlentities($stocks);
    $cheese->pairing = htmlentities($pairing);
    $cheese->ImageURL = htmlentities($ImageURL);
    updateCheese($cheese);
}

  require_once "../view/updateListView.php";

?>