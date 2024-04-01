<?php
header('Content-Type: application/json');
require_once "../model/cheese.php";
require_once "../model/dataAccess.php";

if (!isset($_REQUEST["cheeseName"]))
{
  echo json_encode([]);
}
else {
  $cheese = getUsersBySurname($_REQUEST["cheeseName"]);
  echo json_encode($cheese);  // <- this works because the cheese class
}                                //    implements JsonSerializable
?>