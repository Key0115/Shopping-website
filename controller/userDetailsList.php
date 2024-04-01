<?php
  session_start();
  require_once "../model/user.php";
  require_once "../model/dataAccess.php";

  $status = false;
  if(isset($_REQUEST["back"])){
    require_once "../controller/userList.php";
    exit();
  }

  if(isset($_REQUEST["fname"])){

    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $address = $_REQUEST["address"];
    $email = $_REQUEST["email"];
    $city = $_REQUEST["city"];
    $country = $_REQUEST["country"];
    $state = $_REQUEST["state"];
    $postcode = $_REQUEST["postcode"];
    $phoneNumber=$_REQUEST["phone"];

    $user = new user();
    $user->firstname = htmlentities($fname);
    $user->lastname = htmlentities($lname);
    $user->address = htmlentities($address);
    $user->email = htmlentities($email);
    $user->city = htmlentities($city);
    $user->country = htmlentities($country);
    $user->state = htmlentities($state);
    $user->postcode = htmlentities($postcode);
    $user->phonenumber = htmlentities($phoneNumber);
    addUser($user);
}


  require_once "../view/addUserDetails.php";

?>