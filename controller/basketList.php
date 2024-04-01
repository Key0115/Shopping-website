<?php
  require_once "../model/cheese.php";
  require_once "../model/dataAccess.php";
  session_start(); //Start session from here
  if (!isset($_SESSION["basket"]))
  {
    $_SESSION["basket"] = [];
  }
  if (isset($_REQUEST["shortlist"]))
  {
    $customerObject = getCheeseByID($_REQUEST["shortlist"]);
    if($customerObject != null){
      $_SESSION["basket"][] = $customerObject;
    }
    
  }
  #Calculate the total price of the basket
function calculateTotalPrice(){
    $total = 0;
    if(isset($_SESSION["basket"])){
        foreach($_SESSION["basket"] as $cheese){
            $total += $cheese->price;
        }
    }
    return $total;
}
require_once "../view/basketListView.php";
?>